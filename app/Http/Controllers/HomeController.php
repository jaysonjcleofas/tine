<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $attends = Response::where('response', 'yes')->count();
        $notattends = Response::where('response', 'no')->count();
        return view('home', compact('attends', 'notattends'));
        
    }
}
