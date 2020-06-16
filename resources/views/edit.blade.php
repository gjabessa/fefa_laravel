@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div>
                    <form enctype="multipart/form-data" action="/updateindex/{{$news -> id}}" method="post">
                        <b>Title</b>
                        <input type="text" required="true" name="title" value="{{$news -> title}}">
                        <br><br><b>Image</b>
                        <input type="file" name="image" placeholder="Image">
                        <br><br><b>Description</b>: <br>
                        <textarea style="width:80%;height:100px" type="text" required="true" name="description" placeholder="Desc">{{$news -> description}}</textarea>
                        {{ csrf_field() }}
                        <br><br> <button type="submit" class="btn btn-success" style="position:relative;left:70%">Submit</button>
                    </form>
                    </div>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
