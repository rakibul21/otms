<?php

namespace App\Http\Controllers;

use App\Models\Entroll;
use Illuminate\Http\Request;

class AdminEnrollController extends Controller
{
   public function index()
   {
       return view('admin.enroll.index',['enrolls' => Entroll::orderBy('id','desc')->get()]);
   }

   public function detail($id)
   {
       return view('admin.enroll.detail',['enroll' => Entroll::find($id)]);
   }

   public function editStatus($id)
   {
       return view('admin.enroll.update-status',['enroll' => Entroll::find($id)]);
   }

   public function updateStatus(Request $request, $id)
   {
        Entroll::updateEnrollStatus($request, $id);
        return redirect('/admin/manage-enroll')->with('message','Enroll Status info update Successfully');
   }

   public function delete($id)
   {
        return $id;
   }
}
