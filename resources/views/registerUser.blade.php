@extends('layout')

@section('content')
<br>
<div style="margin-left: 10.5rem;" class="col-sm-6">
    <h4 style="text-align: center; font-weight: 550;
    color: #0069D9">Registration Form</h4> 
    <form action="register" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control"  name= "name" value="{{old('name')}}" placeholder="Enter name">
            @error('name')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name= "email" value="{{old('email')}}" placeholder="Enter email">
            @error('email')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
          </div>
          <div class="form-group">
             <input type="password" class="form-control"  name= "password" value="{{old('password')}}" placeholder="Enter password">
             @error('password')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
        <div class="form-group"> 
            <input type="tel"  class="form-control" name="phone_number" value="{{old('phone_number')}}" placeholder="Enter phone number">
            @error('phone_number')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" >Register</button>
    </form>
</div>
    
@endsection