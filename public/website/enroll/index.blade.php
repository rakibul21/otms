@extends('website.master')

@section('title')

@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Course Enroll From</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-location-dot fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Address</h4>
                            <address>
                                House No - 420, Road No - 520
                                Dhanmondi, Dhaka - 1215
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-phone fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Phone</h4>
                            <p>01521426919</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa-solid fa-envelope fa-2x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Email</h4>
                            <p>sarkermajid21.bd@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="card-header">Send Message</div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="name" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Write something</label>
                                    <div class="col-md-9">
                                        <textarea name="" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success btn-sm w-100" value="Send"/>
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
