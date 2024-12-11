<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    public function services()
    {
        return view('admin.services.index');
    }

    public function estados()
    {
        return view('admin.estados.index');
    }

    public function payments()
    {
        return view('admin.payments.index');
    }

    
}
