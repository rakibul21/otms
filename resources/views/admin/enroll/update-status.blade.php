@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">Enroll Status Update From</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <form action="{{route('admin.update-enroll-status',['id' => $enroll->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-mb-3">Course Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly value="{{$enroll->course->title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-mb-3">Enroll Status</label>
                            <div class="col-md-9">
                                <select name="enroll_status" id="" class="form-control" required>
                                    <option value="" disabled selected>--Enroll Status--</option>
                                    <option value="Pending" {{$enroll->enroll_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="Processing" {{$enroll->enroll_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$enroll->enroll_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                    <option value="Cancel" {{$enroll->enroll_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" value="Update Enroll Status" class="btn btn-outline-primary px-5" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


