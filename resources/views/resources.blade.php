@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resources</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                    <form enctype="multipart/form-data" action="/addResource" method="post">
                        <b>Description</b> <br>
                        <input type="text" required="true" name="title" placeholder="Title" style="min-width:250px">
                        <br><br>
                        <input type="file" required="true" name="file" placeholder="File">
                        <br> <br>
                        <b>Category</b>: <br>
                        <select name="category">
                            <option value="ups">UPS</option>
                            <option value="solar">Solar Panels</option>
                            <option value="datacenter">Data Center</option>
                            <option value="special">Special Solutions</option>
                            <option value="battery">Battery</option>
                        </select>
                        <br>
                        {{ csrf_field() }}
                        <br> <button type="submit" class="btn btn-success" >Add</button>
                    </form>
                    </div>
                    <br>
                    @foreach($res as $message)
                    <div style="list-style-type:none;margin-bottom:5px;">
                        <li><b>{{$message->title}}</b></li>
                        <div style="padding:5px;">
                        <li>{{$message->category}}</li>
                        <li style="color:silver">{{$message->posted_by}}</li>
                        <li><a href="storage/{{$message ->file}}">File</a></li>
                        <br>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('resource/' . $message->id . '/delete') }}">Delete</a>
                        </div>
                    </div>
                    @endforeach
                    {{$res->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
