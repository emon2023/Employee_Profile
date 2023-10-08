@extends('master')


@section('title')
    Manage Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center text-success display-6">Manage Employee</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                            <table class="table table-bordered table-hover text-center">

                                <thead>
                                <tr>
                                    <th>SO NO</th>
                                    <th>Employee Name</th>
                                    <th>Employee Email</th>
                                    <th>Employee Mobile</th>
                                    <th>Employee Address</th>
                                    <th>Employee Image</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->mobile}}</td>
                                        <td>{{$employee->address}}</td>

                                        <td>
                                            <img src="{{asset($employee->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('employee.edit',['id' => $employee->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('employee.delete',['id'=> $employee->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this... ')">Delete</a>
                                        </td>
                                        <td>
                                            <a href="{{route('view.detail',['id'=> $employee->id])}}" class="btn btn-info btn-sm">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>


                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

