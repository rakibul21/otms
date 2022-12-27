<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Entroll;
use Illuminate\Support\Facades\Mail;
use Session;

class EnrollController extends Controller
{
    private $student , $enrollExist, $emailData=[] ;
    public function index($id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index',['id' => $id, 'student' => $this->student]);
    }

    public function newEnroll(Request $request, $id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else {

            $this->validate($request, [
                'name' => 'required|regex:/^[a-zA-Z- ]+$/',
                'email' => 'required|unique:students,email',
                'mobile' => 'required|unique:students,mobile',
            ], [
                'name.required' => 'name required',
                'name.alpha' => 'do not write numeric here',
                'email.required' => 'email required',
                'email.unique' => 'Sorry this email already exist',
            ]);
            $this->student = Student::newStudent($request);
        }

         $this->enrollExist = Entroll::where(['student_id' => $this->student->id,'course_id' => $id ])->first();
        if ($this->enrollExist)
        {
            return redirect()->back()->with('message','Sorry..you already enroll this course');
        }

        $this->enroll = Entroll::newEnroll($request, $this->student->id, $id);
        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);

        /*------ mail send --------*/

        $this->emailData = [
            'name' => $this->student->name,
            'login_url' => 'http://127.0.0.1:8000/login-registration',
            'email' => $this->student->email,
            'password' => $this->student->mobile,
        ];

        Mail::to($this->student->email)->send(new  EnrollConfirmationMail($this->emailData));

        /*----- mail send ------*/


        return redirect('/training-complete-enroll/'.$this->enroll->id);

    }

    public function completeEnroll($id)
    {
        return view('website.enroll.complete-enroll',['enroll' => Entroll::find($id)]);
    }

    public function getEmail()
    {
        $email = $_GET['email'];
        $this->student = Student::where('email', $email)->first();
        return response()->json($this->student);
    }


}
