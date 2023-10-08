<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public $employee, $employees;


    public function index()
    {
        return view('employee.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'image'=>'required|image',
        ]);
        Employee::newEmployee($request);
        return back()->with('message','Employee Info Save successfully');
    }

    public function manage()
    {
        $this->employees =  Employee::all();
        return view('employee.manage',['employees' => $this->employees]);
    }

    public function edit($id)
    {
        $this->employee = Employee::find($id);
        return view('employee.edit',['employee'=>$this->employee]);
    }


    public function update(Request $request, $id)
    {

        if($request->file('image'))
        {
            $this->validate($request,[
                'image'=> 'required',
            ]);
        }
        Employee::updateEmployee($request,$id);
        return redirect('/employee/manage')->with('message','Employee Info Update Successfully');
    }

    public function delete($id)
    {
        Employee::deleteEmployee($id);
        return back()->with('message','Employee Info Delete Successfully');
    }
}
