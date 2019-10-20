<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class employeeController extends Controller
{
    public function index() {
        return view('employee');
    }

    public function store(REQUEST $request) {
        $employee =new employee();
        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->post=$request->input('post');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('uploads/employee/',$filename);
            $employee->image=$filename;
        }
        else {
            return $request;
            $employee->image='';
        }

        $employee->save();

        return view('/employee')->with('employee',$employee);
    }

    public function display(){
        $employees =employee::all();
        return view('/employeeform')->with('employees',$employees);
    }

    public function edit($id){
        $employees=employee::find($id);
        return view('/employeeupdateform')->with('employees',$employees);
    }

    public function update(REQUEST $request, $id){
        $employee = employee::find($id);
        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->post=$request->input('post');
         if($request->hasfile('image')){
             $file=$request->file('image');
             $extension= $file->getClientOriginalExtension();
             $filename=time().'.'.$extension;
             $file->move('uploads/employee/',$filename);
             $employee->image=$filename;
         }
        
         $employee->save();
         return redirect('/employeepage')->with('employee',$employee);
    }
}
