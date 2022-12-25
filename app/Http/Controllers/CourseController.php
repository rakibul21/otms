<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Entroll;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $enroll;

    public function index()
    {
        return view('teacher.course.index',['categories' => Category::where('status',1)->get()]);
    }

    public function create(Request $request)
    {

        Course::newCourse($request);
        return redirect('/course/add')->with('message','Course info create successfully');
    }

    public function manage()
    {
        return view('teacher.course.manage',['courses' => Course::where('teacher_id',Session::get('teacher_id'))->orderBy('id','desc')->get()]);
    }

    public function edit($id)
    {
        return view('teacher.course.manage',['course' => Course::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/course/add')->with('message','Course info update successfully');
    }

//    public function delete($id)
//    {
//        Course::deleteCourse($id);
//        return redirect('/course/manage')->with('message','Courses info delete successfully');
//    }

    public function delete($id)
    {
        $this->enroll = Entroll::where('course_id' , $id)->first();
        if ($this->enroll)
        {
            return redirect()->back()->with('message','Sorry you can not delete this course because someone already enroll this course');
        }
        Course::deleteCourse($id);
        return redirect('/course/manage')->with('message','delete successfully');
    }
}

