@extends('master')


@section('title')
    Edit Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center text-success display-6">Edit Employee</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{session('message')}}</h4>
                            <form action="{{route('employee.update',['id'=>$employee->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Employee Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$employee->name}}">
                                        <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Employee Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{$employee->email}}">
                                        <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Employee Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="{{$employee->mobile}}">
                                        <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):''}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Employee Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                                        <span class="text-danger">{{$errors->has('address')?$errors->first('address'):''}}</span>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Employee Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($employee->image)}}" alt="" width="150" height="150">
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image') :''}}</span>

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Employee Info">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
