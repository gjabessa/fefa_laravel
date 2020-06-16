<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\indexpage;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 

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
        $messages = indexpage::paginate(5);
        return view('home', [
            'news'=>$messages
        ]);
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
        $path = $request->file('image')->store('images');

        $message = new indexpage();
        $message -> title = $request -> title;
        $message -> description = $request -> description;
        $message -> image = $path;
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        
        return redirect('/home');
    }

    public function edit($id){
        $news = indexpage::find($id);
        return view('edit',
        [
            'news'=>$news
            ]);
    }
  
    public function update($id, Request $request)
    {
        
        
        $message = indexpage::find($id);
        $message -> title = $request -> title;
        $message -> description = $request -> description;
        if($request -> hasFile('image')){
            $path = $request->file('image')->store('images');
            $message -> image = $path;
        }
        
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        return redirect('/home');
    }

    public function delete($id)
    {
        $news = indexpage::find($id);
        $filename = $news -> image;
        File::delete('storage/'.$filename);
        $news->delete();

        return redirect('/home');
    }
}
