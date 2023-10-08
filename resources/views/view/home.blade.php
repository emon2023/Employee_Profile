@extends('master')


@section('title')
    Home Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <h2 class=" text-center mb-4"><span class="text-danger ">Innovative Station Limited</span> <span class="text-dark"> -- Employee Profile</span></h2>
            <div class="row">
                @foreach($employees as $employee)
                    <div class="col-md-3 mb-3 py-4 ">
                        <div class="card h-100">
                            <img src="{{asset($employee->image)}}" alt="" height="250">
                            <div class="card-body">
                                <h4>{{$employee->name}}</h4>
                                <hr/>
                                <a href="{{route('view.detail',['id'=>$employee->id])}}" class="btn btn-success">Detail Information</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
