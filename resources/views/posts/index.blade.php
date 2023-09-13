@extends('master')
@section('content')
    <h1>Noi dung here</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" name="title" class="form-control mb-2" placeholder="Title">
        <input type="text" name="description" class="form-control mb-2" placeholder="description">

        <button class="btn btn-success" type="submit">Add</button>
    </form>

    <table class="table table-bold">
        <thead>
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Des</th>
            <th>State</th>
            <th>IMG</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->state}}</td>
                <td>{{$post->url_image}}</td>
                <td>{{$post->created_at}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
