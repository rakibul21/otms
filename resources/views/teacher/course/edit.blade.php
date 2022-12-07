@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Course Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('course.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value=""> --Select Course Category-- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course title</label>
                            <div class="col-sm-9">
                                <input value="{{$course->title}}" type="text" class="form-control" id="horizontal-firstname-input" name="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Objective</label>
                            <div class="col-sm-9">
                                <textarea name="objective" class="form-control" id="horizontal-email-input" >{{$course->objective}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input2" class="col-sm-3 col-form-label">Course Description</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control Summernote" id="horizontal-email-input2" > value="{{$course->description}}"</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input value="{{$course->starting_date}}" type="date" class="form-control" id="horizontal-password-input" name="startingDate"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input value="{{$course->fee}}" type="number" class="form-control" id="horizontal-password-input2" name="fee"/>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input value="{{$course->fee}}" type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Edit Course</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


