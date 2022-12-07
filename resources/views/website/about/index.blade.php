@extends('website.master')

@section('title')
    ABOUT US
@endsection


@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body border-0 shadow">
                    <h3>Our Mission</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, magni molestias quibusdam rem repellat sunt suscipit, veniam, vitae. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet autem blanditiis commodi enim, expedita fugiat impedit itaque molestiae nulla. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body border-0 shadow">
                    <h3>Our Vision</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, magni molestias quibusdam rem repellat sunt suscipit, veniam, vitae. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet autem blanditiis commodi enim, expedita fugiat impedit itaque molestiae nulla. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row bg-danger">
            <div class="col">
                <div class="card card-body border-0 text-center">
                    <h1>Our Instructor</h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
