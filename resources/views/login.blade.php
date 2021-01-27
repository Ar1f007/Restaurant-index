@extends('layout')

@section('content')
<br>
<div style="margin-left: 10.5rem;" class="col-sm-6">
    <h4 style="text-align: center; font-weight: 550;
    color: #0069D9">Login Form</h4> 
    <form action="login" method="post">
        @csrf
          <div class="form-group">
            <input type="text" class="form-control"  name= "email" placeholder="Enter email">
          </div>
          <div class="form-group">
             <input type="password" class="form-control"  name= "password" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
    
@endsection