@extends('layout')

@section('content')
@if(Session::get('status'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<br>
<h3 style="text-align: center">Restaurant Lists</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>
          <a style="margin-left: 15px;" href="/edit/{{$item->id}}"><i class="far fa-edit" title="edit"></i></a>
          <a href="/delete/{{$item->id}}"><i class="far fa-trash-alt" title="delete"> </i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <span>{{$data->links()}}</span>

@endsection