@extends('layout')
@section('content')
<div class="container">
    @if (isset($details))
    {{-- <p>
        The search result for your query <b>{{$details}}</b> are:
    </p> --}}

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
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
    

    
@endsection