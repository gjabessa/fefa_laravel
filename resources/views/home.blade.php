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
                    <h6>Index page contents</h6>
                    <div>
                    <form enctype="multipart/form-data" action="/addindex" method="post">
                        <b>Title</b>: <br>
                        <input type="text" required="true" name="title" placeholder="Title">
                        <input type="text" required="true" name="image" placeholder="Image">
                        <input type="text" required="true" name="link_to" placeholder="Link">
                        <textarea type="text" required="true" name="description" placeholder="Desc">
                        </textarea>
                        
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
