@extends('layouts.app')

@section('content')
<div class="container">
<style>
        #news{
            color:black;
            
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                    <form enctype="multipart/form-data" action="/addindex" method="post">
                        <b>Title</b>
                        <input type="text" required="true" name="title" placeholder="Title">
                        <br><br><b>Image</b>
                        <input type="file" required="true" name="image" placeholder="Image">
                        <br><br><b>Description</b>: <br>
                        <textarea style="width:80%;height:100px" type="text" required="true" name="description" placeholder="Desc">
                        </textarea>
                        
                        {{ csrf_field() }}
                        <br><br> <button type="submit" class="btn btn-success" style="position:relative;left:70%">Submit</button>
                    </form>
                    </div>
                    @foreach($news as $message)
                    <div style="list-style-type:none;margin-bottom:5px;">
                        <li><b>{{$message->title}}</b></li>
                        <div style="padding:5px;">
                        <li>{{$message->description}}</li>
                        <li style="color:silver">{{$message->posted_by}}</li>
                        <li><img style="max-width:100%" src="storage/{{$message ->image}}"></li>
                        <br>
                         <a class="btn btn-small btn-info" href="{{ URL::to('post/' . $message->id . '/edit') }}">Edit</a>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('post/' . $message->id . '/delete') }}">Delete</a>
                        </div>
                    </div>
                    @endforeach
                    {{$news->render()}}
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
