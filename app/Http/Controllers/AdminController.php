<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    public function orders()
    {
        return view('admin.orders.index');
    }

    public function services()
    {
        return view('admin.services.index');
    }

    public function estados()
    {
        return view('admin.estados.index');
    }

    
}
