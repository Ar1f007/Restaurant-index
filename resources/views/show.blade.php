@extends('layout')
@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->address}}</td>
            </tr>
          
        </tbody>
    </table>

</div>
    
@endsection