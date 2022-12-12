<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entroll extends Model
{
    use HasFactory;
    public static $enroll;

    public static function newEnroll($request, $courseId,$studentId)
    {
        self::$enroll = new Entroll();
        self::$enroll->course_id = $courseId;
        self::$enroll->student_id = $studentId;
        self::$enroll->enroll_date = date('y-m-d');
        self::$enroll->enroll_timestamp = strtotime('y-m-d');
        self::$enroll->payment_type = $request->payment_type;
        self::$enroll->save();
        return self::$enroll;
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
