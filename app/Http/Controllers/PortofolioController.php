<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('layouts.portofolio.home');
    }
    public function about()
    {
        return view('layouts.portofolio.about');
    }
    public function projects()
    {
        return view('layouts.portofolio.projects');
    }
    public function contact()
    {
        return view('layouts.portofolio.contact');
    }
}