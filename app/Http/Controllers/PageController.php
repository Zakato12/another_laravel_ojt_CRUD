<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function viewdashboard()
    {
        return view('pages.dashboard');
    }
    public function userlist()
    {
        return view('pages.userlist');
    }
}
