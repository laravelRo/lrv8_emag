<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function showStaff()
    {
        return view('admin.personal.staff-view');
    }

    public function newStaff()
    {
        return view('admin.personal.staff-new');
    }
}
