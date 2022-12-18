    @extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center"> Student Detail Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Student ID</th>
                            <td>{{$student->id}}</td>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <td>{{$student->name}}</td>
                        </tr>
                        <tr>
                            <th>student Email</th>
                            <td>{{$student->email}}</td>
                        </tr>
                        <tr>
                            <th>student Mobile</th>
                            <td>{{$student->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Student Status</th>
                            <td>{{$student->status == 1 ? 'Active' : 'Inactive'}}</td>
                        </tr>
                        <tr>
                            <th>Student Image</th>
                            <td><img src="{{asset($student->image)}}" alt="{{$student->name}}"></td>
                        </tr>
                        <tr>
                            <th>Student Address</th>
                            <td>{{$student->address}}</td>
                        </tr>
                        <tr>
                            <th>Student NID</th>
                            <td>{{$student->nid}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center text-pink">{{$student->name}} Basic Information</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>Course fee</th>
                            <th>Teacher Info</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student->enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$enroll->course->title}}</td>
                                <td>{{$enroll->course->fee}}</td>
                                <td>{{$enroll->course->teacher->name.'('.$enroll->course->teacher->mobile.')'}}</td>
                                <td>{{$student->payment_status}}</td>
                                <td>
                                    <a href="{{route('admin.student-detail', ['id' => $student->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.student-status', ['id' => $student->id])}}" class="btn btn-outline-info" >
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection



