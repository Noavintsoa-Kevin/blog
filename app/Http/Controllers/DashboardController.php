<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts= auth()->user()->post;
        return view('dashboard', compact('posts') );
    }
}
