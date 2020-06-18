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
                    <form enctype="multipart/form-data" action="/updateConsultant/{{$message -> id}}" method="post" class="consultants_form">
                        <b>Name</b> 
                        <input required="true" name="name" value="{{$message->name}}" placeholder="name">
                        <b>Address</b> 
                        <input type="text" required="true" value="{{$message->address}}" name="address" placeholder="address" style="min-width:250px"><br>
                        <b>Phone</b>
                        <input required="true" name="phone" value="{{$message->phone_no}}" placeholder="phone">
                        
                        <b>Fax</b> 
                        <input required="true" name="fax" value="{{$message->fax}}" placeholder="fax">
                        <br>
                        <b>Email</b> 
                        <input required="true" type="email" value="{{$message->email}}" name="email" placeholder="email">
                        
                        <b>Country</b>: 
                        <select name="country" value="{{$message->country}}">
                            <option value="country">Country</option>
                            <option value="solar panel">Solar Panels</option>
                            <option value="battery">Battery</option>
                            <option value="special">Special Solutions</option>
                        </select>
                        <br>
                        {{ csrf_field() }}
                        <br> <button type="submit" class="btn btn-success" >Submit</button>
                    </form>
                    </div>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
