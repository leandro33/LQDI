<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landpage.lqdi.index');
    }

    public function emails()
    {
        return view('landpage.lqdi.emails');
    }
}
