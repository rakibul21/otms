<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function manageCompany()
    {
        return view('admin.setting.manage-company');
    }

    public function about()
    {
        return view('admin.setting.about');
    }

    public function contact()
    {
        return view('admin.setting.contact');
    }
}
