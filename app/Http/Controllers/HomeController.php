<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\indexpage;
use Auth;

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
        return view('home');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function resources()
    {
        return view('resources');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $message = new indexpage();
        $message -> title = $request -> title;
        $message -> description = $request -> description;
        $message -> image = $request -> image;
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        
    }
}
