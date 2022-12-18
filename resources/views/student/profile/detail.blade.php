
@extends('website.master')
@section('title')
    Training Detail Page
@endsection
@section('body')
    {{--section-1 start--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">

                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{route('student.profile')}}" >My Profile</a></li>
                            <li class="list-group-item"><a href="{{route('student.all-course')}}" >My Course</a></li>
                            <li class="list-group-item"><a href="" >Change Password</a></li>
                            <li class="list-group-item"><a href="" >My Dashboard</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class="text-center">Student Profile</h1>

                        <div class="col-md-8 mx-auto">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Student ID : </h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$student->id}}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Student Name : </h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$student->name}}</h6>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Student Email : </h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$student->email}}</h6>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Student Mobile : </h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$student->id}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    {{--section-1 end--}}
@endsection

