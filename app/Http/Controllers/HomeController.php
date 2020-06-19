<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\indexpage;
use App\resources;
use App\consultants;
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
    public function resourceIndex()
    {
        $messages = resources::paginate(5);
        return view('resources', [
            'res'=>$messages
        ]);
    }

    public function news()
    {
        $messages = indexpage::paginate(5);
        return view('company/news', [
            'news'=>$messages
        ]);
    }

    public function latestNews()
    {
        $messages = indexpage::limit(3)->get();
        return view('index', [
            'news'=>$messages
        ]);
    }

    public function resourcelist($category)
    {
        $messages = resources::where('category', $category)->paginate(10);
        return view('resource_list', [
            'res'=>$messages
        ]);
    }

    public function newsdetail($id)
    {
        $message = indexpage::find($id);
        return view('company/singlepost', [
            'news'=>$message
        ]);
    }
    public function consultantIndex()
    {
        $messages = consultants::paginate(5);
        return view('consultant', [
            'res'=>$messages
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

    public function createResource(Request $request)
    {
        $path = $request->file('file')->store('resources');

        $message = new resources();
        $message -> title = $request -> title;
        $message -> category = $request -> category;
        $message -> file = $path;
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        
        return redirect('/resources');
    }

    public function createConsultant(Request $request)
    {

        $message = new consultants();
        $message -> name = $request -> name;
        $message -> country = $request -> country;
        $message -> phone_no = $request -> phone;
        $message -> fax = $request -> fax;
        $message -> email = $request -> email;
        $message -> address = $request -> address;
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        
        return redirect('/consultants');
    }

    public function edit($id){
        $news = indexpage::find($id);
        return view('edit',
        [
            'news'=>$news
            ]);
    }
  
    public function editConsultant($id){
        $message = consultants::find($id);
        return view('editcons',
        [
            'message'=>$message
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

    public function updateConsultant($id, Request $request)
    {
        
        
        $message = consultants::find($id);
        $message -> name = $request -> name;
        $message -> country = $request -> country;
        $message -> phone_no = $request -> phone;
        $message -> fax = $request -> fax;
        $message -> email = $request -> email;
        $message -> address = $request -> address;
        $message -> posted_by = Auth::user()->name ;
        $message -> save();
        return redirect('/consultants');
    }

    public function delete($id)
    {
        $news = indexpage::find($id);
        $filename = $news -> image;
        File::delete('storage/'.$filename);
        $news->delete();

        return redirect('/home');
    }

    public function deleteRes($id)
    {
        $res = resources::find($id);
        $filename = $res -> file;
        File::delete('storage/'.$filename);
        $res->delete();

        return redirect('/resources');
    }

    public function deleteCons($id)
    {
        $res = consultants::find($id);
        $res->delete();

        return redirect('/consultants');
    }
}
