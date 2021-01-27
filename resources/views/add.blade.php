@extends('layout')


@section('content')
<br>

<div style="margin-left: 13.5rem;" class="col-sm-6">
    <br>
    <form action="add" method="post">
        @csrf

        <div class="form-group">
            <label>Restaurant Name</label>
            <input type="text" class="form-control"  name= "name" value='{{old("name")}}' placeholder="Enter name">
            @error('name')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control"  name= "email" value='{{old("email")}}' placeholder="Enter email">
              @error('email')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control"  name= "address" value='{{old("address")}}' placeholder="Enter address">
            @error('address')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

    
@endsection