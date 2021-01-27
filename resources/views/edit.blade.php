@extends('layout')


@section('content')
<br>
<div class="col-sm-6">
    <h4>Edit Restaurant Info</h4>
    <form action="edit" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <input type="hidden" class="form-control"  name= "id" value="{{$data->id}}">
            <label>Restaurant Name</label>
            <input type="text" class="form-control"  name= "name" value="{{$data->name}}" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control"  name= "email" value="{{$data->email}}" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control"  name= "address" value="{{$data->address}}" placeholder="Enter address">
         </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

    
@endsection