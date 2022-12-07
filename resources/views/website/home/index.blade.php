@extends('website.master')

@section('title')
    Best Online Triniang System in Bangladesh
@endsection


@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}website/img/s1.png" alt="" class="w-100" height="550"/>
                <div class="carousel-caption">
                    <h3>PHP With Laravel Framework</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio, dolorem doloremque eaque eligendi ex facilis inventore laudantium maxime non officiis quae quam quidem quo quod repellendus similique sunt temporibus?</p>
                    <a href="" class="btn btn-dark px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/s2.png" alt="" class="w-100" height="550"/>
                <div class="carousel-caption">
                    <h3>Responsive Web Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio, dolorem doloremque eaque eligendi ex facilis inventore laudantium maxime non officiis quae quam quidem quo quod repellendus similique sunt temporibus?</p>
                    <a href="" class="btn btn-dark px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/s3.jpg" alt="" class="w-100" height="550"/>
                <div class="carousel-caption">
                    <h3>Profession Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio, dolorem doloremque eaque eligendi ex facilis inventore laudantium maxime non officiis quae quam quidem quo quod repellendus similique sunt temporibus?</p>
                    <a href="" class="btn btn-dark px-5">Read More</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3 class="">Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-1.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="{{route('training.detail')}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-1.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-1.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3 class="">Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-2.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-2.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-2.jpg" alt="" class=""/>
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p class="">Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
