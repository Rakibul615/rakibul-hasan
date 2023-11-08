@extends('master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Completed</th>

        </tr>
        </thead>
        <tbody>
        @foreach($details as $detail)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$detail->title}}</td>
                <td>{{$detail->description}}</td>
                <td>{{$detail->completed}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
