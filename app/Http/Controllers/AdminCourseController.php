<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index',['courses' => Course::orderBy('id','desc')->get()]);
    }
}
