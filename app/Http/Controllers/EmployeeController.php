<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::all();
        // dd($employees);
        return view('employee.index',compact('employees'));
    }

    public function add(Request $request)
    {   
       
       
        if ($request->isMethod('post')) {
        
            $validated = $request->validate([
                'name'=>'required',
                'code'=>'required',
                'email'=>'required',
                'joining_date'=>'required',
                'mobile'=>'required',
            ]);

            $date = new DateTime($request->joining_date);
            $date = $date->format('Y-m-d');

            $employee = new employee();
            $employee->name = $request->name;
            $employee->code =$request->code;
            $employee->email = $request->email;
            $employee->joining_date = $date;
            $employee->mobile = $request->mobile;
            
            $employee->save();

            return back()->with('success','ok');
            
       } else{
            return view('employee.add');
       }
       
    }

    // public function insert(Request $request){

    //     // $this->validate($request,[

    //     //     'name'=>"required",
    //     //     'code'=>"required",
    //     //     'email'=>"required",
    //     //     'joining_date'=>"required",
    //     //     'mobile'=>"required",
    //     // ]);

    //     $method=$request->method();

    //     if($request->isMethod('post')) {

    //         $this->validate($request,[

    //             'name'=>"required",
    //             'code'=>"required",
    //             'email'=>"required",
    //             'joining_date'=>"required",
    //             'mobile'=>"required",
    //         ]);
    
            
    //         employee::insert([
    //             'name' => $request->name,
    //             'code' => $request->code,
    //             'email' => $request->email,
    //             'joining_date' => $request->joining_date,
    //             'mobile' => $request->mobile,
    //             'created_at' => Carbon::now(),
    //         ]);
    //    }
        
    //     return back();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       employee::create($request->all());
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }


  
}



