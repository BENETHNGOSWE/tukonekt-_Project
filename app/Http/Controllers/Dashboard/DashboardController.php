<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Register;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DashboardController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['register'] = Register::all();
        $this->data['female_count'] = Register::where('gender', 'female')->count();
        $this->data['male_count'] = Register::where('gender', 'male')->count();
        $this->data['total_number'] = Register::all()->count();
        if ($this->data['total_number'] > 0) {
            $this->data['female_percentage'] = ($this->data['female_count'] / $this->data['total_number']) * 100;
            $this->data['male_percentage'] = ($this->data['male_count'] / $this->data['total_number']) * 100;
        } else {
            $this->data['female_percentage'] = 0;
            $this->data['male_percentage'] = 0;
        }
        $this->data["registers"] = Register::all();
    }


    public function index_list()
    {
        $this->data['register'] = Register::paginate(2);
        return view("backendlayouts.pages.registerlist", $this->data);
    }

    public function indexdashboard()
    {
        $this->data['register'] = Register::paginate(2);
        $this->data['female_count'] = Register::where('gender', 'female')->count();
        $this->data['male_count'] = Register::where('gender', 'male')->count();
        $this->data['total_number'] = Register::all()->count();
        $this->data['total_number_attendance'] = Attendance::all()->count();
        if ($this->data['total_number'] > 0) {
            $this->data['female_percentage'] = ($this->data['female_count'] / $this->data['total_number']) * 100;
            $this->data['male_percentage'] = ($this->data['male_count'] / $this->data['total_number']) * 100;
        } else {
            
            $this->data['female_percentage'] = 0;
            $this->data['male_percentage'] = 0;
        }
        $ageGroups = [
            '0-18' => Register::whereBetween('age_group', [0, 18])->count(),
            '19-35' => Register::whereBetween('age_group', [19, 35])->count(),
            '35-above' => Register::where('age_group', '>', 35)->count(),
        ];
    
        $this->data['age_groups'] = $ageGroups;

        $genderDistribution = [
            'Male' => $this->data['male_count'],
            'Female' => $this->data['female_count'],
            'Other' => $this->data['total_number'] - ($this->data['male_count'] + $this->data['female_count']),
        ];
    
        $this->data['gender_distribution'] = $genderDistribution;

        $user_attendance_ratio_json = [
            'register' => $this->data['total_number'],
            'attenders' => $this->data['total_number_attendance'],
        ];
    
        $this->data['user_attendance_ratio'] = $user_attendance_ratio_json;

        return view("backendlayouts.pages.dashboard", $this->data);
    }

    public function show(Request $request, Register $register)
    {
        $register = Register::find($register);
        return view('backendlayouts.pages.show', compact('register'));
    }
    
    public function delete(Request $request, Register $register)
    {
        $register->delete();
        return redirect()->route('dashboard')->with('success', 'Deleted Successfully');
    }

    public function filterdata(Request $request){
        $start_date = Carbon::parse($request->start_date)->format('Y-m-d');
        $end_date = Carbon::parse($request->end_date)->format('Y-m-d');
    
        $this->data['registers'] = Register::whereDate('created_at', '>=', $start_date)
                                            ->whereDate('created_at', '<=', $end_date)
                                            ->get();
    
        return view("backendlayouts.pages.registerlist",$this->data);
    }


    public function chartdata()
    {
        $this->data["registers"] = Register::selectRaw("MONTH(created_at) as month, COUNT(*)as count")
                                            ->whereYear('created_at', date('Y'))
                                            ->groupBy('month')
                                            ->orderBy('month')
                                            ->get();
    
        $labels = [];
        $data = [];
        $colors = ['#1f78b4', '#33a02c', '#e31a1c', '#ff7f00', '#6a3d9a', '#b15928', '#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f', '#cab2d6', '#ffff99'];
    
        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $count = 0;
    
            foreach ($this->data['registers'] as $register) {
                if ($register->month == $i) {
                    $count = $register->count; // Fix the assignment operator
                    break;
                }
            }
    
            array_push($labels, $month);
            array_push($data, $count);
        }
    
        $datasets = [
            [
                'labels' => $this->data,
                'data' => $data,
                'backgroundColor' => $colors,
            ]
        ];
    
        return view("backendlayouts.pages.dashboard", $this->data);
    }
    
}
