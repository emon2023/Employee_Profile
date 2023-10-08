@extends('master')


@section('title')
    Detail Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset($employee->image)}}" alt="" height="100%" width="100%">
                            </div>
                            <div class="col-md-8">
                                <p><b>Name : </b>{{$employee->name}}</p>
                                <hr/>
                                <p><b>Email : </b>{{$employee->email}}</p>
                                <hr/>
                                <p><b>Mobile : </b>{{$employee->mobile}}</p>
                                <hr/>
                                <p><b>Address : </b>{{$employee->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

