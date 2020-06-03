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
                    <form enctype="multipart/form-data" action="/addindex" method="post">
                        <b>Description</b> <br>
                        <input type="text" required="true" name="title" placeholder="Title" style="min-width:250px">
                        <br><br>
                        <input type="file" required="true" name="file" placeholder="File">
                        <br> <br>
                        <b>Category</b>: <br>
                        <select name="category">
                            <option value="ups">UPS</option>
                            <option value="solar panel">Solar Panels</option>
                            <option value="battery">Battery</option>
                            <option value="special">Special Solutions</option>
                        </select>
                        <br>
                        {{ csrf_field() }}
                        <br> <button type="submit" class="btn btn-success" >Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
