<?php

namespace App\Http\Controllers\Register;

use App\Exports\RegisterExport;
use App\Exports\RegisterExportView;
use App\Http\Controllers\Controller;
use App\Mail\QRCodeMail;
use App\Models\Register;
use App\Models\Attendance;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Throwable;
use Illuminate\Support\Facades\Log;




class RegisterController extends Controller
{
    protected $data = [];

    public function __construct(){
        $this->data['registers']= Register::all();
        $this->data['attendances']=Attendance::all();
    }

    public function pdf_generate(){
        $this->data['register']=Register::all();
        $pdf = Pdf::loadView('frontendlayouts.registers.pdf', $this->data);
        return $pdf->download('evalution.pdf');
        
    }

    public function pdf_generate_attendance(){
        $pdf = Pdf::loadView('frontendlayouts.registers.attendancepdf', $this->data);
        return $pdf->download('attendance.pdf');
    }

    public function index(){
        $this->data['register'] = Register::all();
        $this->data['female_count'] = Register::where('gender', 'female')->count();
        return view("frontendlayouts.registers.index", $this->data);
    }

    public function create(){
        return view("frontendlayouts.registers.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'max:255', 'string'],
            'middlename' => ['nullable','string','max:255'],
            'last_name' => ['nullable','string','max:255'],
            'age_group' => ['nullable','string','max:255'],
            'address_line_2' => ['nullable','string','max:255'],
            'city' => ['nullable','string','max:255'],
            'email' => 'required|email|unique:registers',
            'phone_number' => ['nullable','string','max:255'],
            'gender' => ['required','string','max:255'],
        ]);

       
        $user = Register::create([
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'first_name'=> $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
            'middlename'=> $request->input('middlename'),
            'age_group'=> $request->input('age_group'),
            'address_line_2'=> $request->input('address_line_2'),
            'city'=> $request->input('city'),
        ]);

        // $this->sendVerificationEmail($user);

        $this->sendQRCodeEmail($user);

        return redirect()->route('create.registers')->with('success','Thank You for Registration check Your Qrcode to Email');
    }


    
    // protected function sendVerificationEmail($user)
    // {
    //     Mail::to($user->email)->send(new \App\Mail\VerificationMail($user));
    // }

    protected function sendQRCodeEmail($user)
    {
        $qrCode = qrcode('png', $user->id);
    
        $pdf = \PDF::loadView('pdf.qrcode', ['qrCode' => $qrCode]);
    
        $email = new QRCodeMail($pdf);
        
        // Attach the PDF containing the QR code to the email
        $email->attachData($pdf->output(), 'qrcode.pdf', [
            'mime' => 'application/pdf',
        ]);
    
        Mail::to($user->email)->send($email);
    }
   
    
    public function show(Request $request, Register $register){
        $register = Register::find($register);
        return view('frontendlayouts.registers.show', compact('register'));
    }

    public function edit(Request $request, Register $register){
        $register = Register::find($register);
        return view('frontendlayouts.registers.edit', compact('register'));
    }

    public function update(Request $request, Register $register){

        $validated = $this->validate_register($request);
        try{
            DB::beginTransaction();
            $register->getFillable();
            $register->fill($validated);
            $register->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('create.registers')->with('error','Something Went wrong');
        }
    }

    

    public function export(){
        return Excel::download(new RegisterExport(), fileName:'attendances.xlsx');
    }

    public function export_view(){
        return Excel::download(new RegisterExportView(), fileName:'register.xlsx');
    }




    public function userProfile(Request $request, $id)
    {
        $user = Register::find($id);

        if (!$user) {
            abort(404); // or handle accordingly (e.g., redirect)
        }

        Attendance::create(['user_id' => $user->id]);
        $user->modified_id = "PR-" . $user->id;

        return view('frontendlayouts.registers.user_profile', compact('user'));
    }

    public function attendanceTable()
    {
        $attendance = Attendance::with('user')->get(); // Assuming you have a relationship defined in the Attendance model

        return view('frontendlayouts.registers.attendance_table', compact('attendance'));
    }



  

    








































    // public function storeddssa(Request $request){
    //     $request->validate([
    //         'first_name' => "required",
    //         'middlename' => "required",
    //         'last_name' =>"required",
    //         'country_of_nationality' => "required",
    //         'address_line_1' => "required",
    //         'address_line_2' => "required",
    //         'city' => "required",
    //         'date_of_entry' => "required",
    //         'phone_number' => "required",
    //     ]);
    //     $register = new Register();
    //     $register->first_name = $request -> first_name;
    //     $register->middlename = $request -> middlename;
    //     $register->last_name = $request -> last_name;
    //     $register->country_of_nationality = $request ->country_of_nationality;
    //     $register->phone_number = $request ->phone_number;
    //     $register->address_line_1 = $request ->address_line_1;
    //     $register->address_line_2 = $request ->address_line_2;
    //     $register->city = $request ->city;
    //     $register->date_of_entry = $request ->date_of_entry;
        

    //     $register->save();
    //     return redirect()->route('home')->with('success','Registration went well');
    // }
    
    // public function storedddd(Request $request){
    //     $request->validate([
    //         'first_name' => ['required', 'max:255', 'string'],
    //         'middlename' => ['nullable','string','max:255'],
    //         'last_name' => ['nullable','string','max:255'],
    //         'country_of_nationality' => ['nullable','string','max:255'],
    //         'address_line_1' => ['nullable','string','max:255'],
    //         'address_line_2' => ['nullable','string','max:255'],
    //         'city' => ['nullable','string','max:255'],
    //         'date_of_entry' => ['nullable','string','max:255'],
    //         'phone_number' => ['nullable','string','max:255'],
    //     ]);

    //     try{
    //         DB::beginTransaction();
    //         $register = Register::create([
    //             'first_name' => $request->first_name,
    //             'middlename' => $request->middlename,
    //             'last_name' => $request->last_name,
    //             'country_of_nationality' => $request->country_of_nationality,
    //             'address_line_1' => $request->address_line_1,
    //             'address_line_2' => $request->address_line_2,
    //             'city' => $request->city,
    //             'date_of_entry' => $request->date_of_entry,
    //             'phone_number' => $request->phone_number,
    //         ]);
            
    //         $register->save();
    //         DB::commit();
    //         return redirect()->route('home')->with('success','Registration Went Successfully');
    //     }catch(\Exception $e){
    //         DB::rollBack();
    //         return redirect()->route('home')->with('error','Something went wrong');
    //     }
    // }
}
