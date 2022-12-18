<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Entroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    public function allcourse()
    {
        return view('student.course.index',[
            'enrolls' => Entroll::where('student_id', Session::get('student_id'))->orderBy('id' , 'desc')->get(),
        ]);
    }

    public function profile()
    {
        return view('student.profile.detail',['student' => Student::find(Session::get('student_id'))]);
    }


}
