@extends('layout')
@section('content')
<div class="container">
    @if (isset($details))

    <h4 style="margin: 10px 0;">Search Results :</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $result)
            <tr>
                <td><a href="/showDetails/{{$result->id}}">{{$result->name}}</a></td>
                {{-- <td><a href="/showDetails/{{$result->id}}">{{$result->address}}</a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h4 style="margin: 80px 0; text-align: center;">Sorry! Nothing found.</h4>
    @endif
</div>
@endsection