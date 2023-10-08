<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{

    public $employee, $employees;

    public  function index()
    {
        $this->employees = Employee::all();
        return view('view.home',['employees'=> $this->employees]);
    }

    public function detail($id)
    {
        $this->employee = Employee::find($id);
        return view('view.detail',['employee'=>$this->employee]);
    }
}
