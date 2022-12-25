<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Entroll;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $enroll;

    public function index()
    {
        return view('admin.course.index',['courses' => Course::orderBy('id','desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.course.detail',['course' => Course::find($id)]);
    }

    public function updateStatus($id)
    {
        return redirect('/admin/manage-course')->with('message', Course::updateCourseStatus($id));
    }


    public function updateOfferStatus($id)
    {
        return view('admin.course.offer-update',['course' => Course::find($id)]);
    }

    public function updateCourseOffer(Request $request, $id)
    {
        Course::updateCourseOffer($request, $id);
        return redirect('/admin/manage-course')->with('message','Course offer info updated');
    }

    public function delete($id)
    {
        $this->enroll = Entroll::where('course_id' , $id)->first();
        if ($this->enroll)
        {
            return redirect()->back()->with('message','Sorry you can not delete this course because someone already enroll this course');
        }
        Course::deleteCourse($id);
    }


}
