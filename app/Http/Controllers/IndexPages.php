<?php

namespace App\Http\Controllers;

use App\indexpage;
use App\resources;
use App\consultants;

use Illuminate\Http\Request;


class indexPages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function latestNews()
    {
        $messages = indexpage::limit(3)->get();
        return view('index', [
            'news'=>$messages
        ]);
    }

    public function news()
    {
        $messages = indexpage::paginate(5);
        return view('company/news', [
            'news'=>$messages
        ]);
    }

    public function consultants(Request $request){
        $consultants = consultants::where('country',$request->country)->paginate(5);
        return view('consultants',[
            'consultants'=>$consultants
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
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return indexpage::create([
            'image' => $data['image'],
            'description' => $data['description'],
            'title' => $data['title'],
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
