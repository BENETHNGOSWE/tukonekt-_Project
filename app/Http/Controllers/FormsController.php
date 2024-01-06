<?php

namespace App\Http\Controllers;

use App\Models\FormBuilder;
use App\Models\Forms;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class FormsController extends Controller
{

    protected $data = [];

    public function __construct(){
        $this->data['forms']= Forms::all();
    }

    public function read(Request $request)
    {
        if (FormBuilder::where('id', $request->id)->exists()) {
            $item = FormBuilder::findOrFail($request->id);
            return $item;
        } else {
            return view("frontendlayouts.registers.index");
        }
    }

    // public function create(Request $request)
    // {
    //     $request->request->remove('_token');
    //     $item = new Forms();
    //     $item->form_id = $request->form_id;
    //     $request->request->remove('form_id');
    //     $item->form = $request->all();
    //     $item->save();
    //     return redirect('form-builder')->with('success', 'Form deleted successfully');
    // }

    public function create(Request $request)
    {
        // Validate the request if needed

        $request->request->remove('_token');

        // Create a new Forms instance
        $item = new Forms();
        $item->form_id = $request->form_id;
        $request->request->remove('form_id');
        $item->form = json_encode($request->all()); // Store the form data as JSON
        $item->save();

        // Redirect to the form builder or wherever you want
        return redirect()->route("home")->with("success","Successfully Registered");
    }

    

    public function displayFormData()
    {
        $formData = Forms::all(); // Retrieve all form data from the database

        return view('FormBuilder.formData', compact('formData'));
    }

     public function pdf_form(){
        $this->data['form']=Forms::all();
        $pdf = Pdf::loadView('FormBuilder.pdf', $this->data);
        return $pdf->download('evalution.pdf');
        
    }
}
