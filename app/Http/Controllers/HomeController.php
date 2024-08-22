<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function services()
    {
        $services = Service::orderBy('name', 'asc')->paginate();
        return view('services', compact('services'));
    }

    public function about()
    {
        return view('about');
    }

    public function cart()
    {
        return view('cart');
    }

    public function contact()
    {
        return view('contact');
    }
}
