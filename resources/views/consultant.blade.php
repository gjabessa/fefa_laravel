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
                    <form enctype="multipart/form-data" action="/addConsultant" method="post" class="consultants_form">
                        <b>Name</b> 
                        <input required="true" name="name" placeholder="name">
                        <b>Address</b> 
                        <input type="text" required="true" name="address" placeholder="address" style="min-width:250px"><br>
                        <b>Phone</b>
                        <input required="true" name="phone" placeholder="phone">
                        
                        <b>Fax</b> 
                        <input required="true" name="fax" placeholder="fax">
                        <br>
                        <b>Email</b> 
                        <input required="true" type="email" name="email" placeholder="email">
                        
                        <b>Country</b>: 
                        <select name="country">
                            <option value="ups">Country</option>
                            <option value="solar panel">Solar Panels</option>
                            <option value="battery">Battery</option>
                            <option value="special">Special Solutions</option>
                        </select>
                        <br>
                        {{ csrf_field() }}
                        <br> <button type="submit" class="btn btn-success" >Submit</button>
                    </form>
                    </div>
                    <br>
                    @foreach($res as $message)
                    <div style="list-style-type:none;margin-bottom:5px;">
                        <li><b>{{$message->name}}</b></li>
                        <li  style="color:silver"><b>{{$message->posted_by}}</b></li>
                       
                        <div style="padding:5px;">
                        <li>{{$message->address}}</li>

                        <li>{{$message->email}}</li>
                        <li>{{$message->phone_nophp}}</li>
                        <li>{{$message->fax}}</li>
                        <li>{{$message->country}}</li>
                        <br>
                        <a class="btn btn-small btn-info" href="{{ URL::to('consultant/' . $message->id . '/edit') }}">Edit</a>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('consultant/' . $message->id . '/delete') }}">Delete</a>
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
