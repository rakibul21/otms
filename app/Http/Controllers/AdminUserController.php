<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create(Request $request)
    {
        User::newUser($request);
        return redirect('/admin/user-add')->with('message','User info save Successfully');
    }

    public function manage()
    {
        return view('admin.user.manage', [
            'users' => User::orderBy('id', 'desc')->get(),
        ]);
    }

    public function edit($id)
    {
        return view('admin.user.edit', ['user' => User::find($id)]);
    }

    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/admin/user-manage')->with('message', 'User info update successfully.');
    }

    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('/admin/user-manage')->with('message', 'User info delete successfully' );
    }


}
