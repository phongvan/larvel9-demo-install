@extends('master')
@section('content')
    <h1>Noi dung here</h1>

    <form action="{{route('posts.update',$post->id)}}" method="POST"> @method('PUT')
        @csrf
        <input type="text" name="title" value="{{$post->title}}" class="form-control mb-2" placeholder="Title">
        <input type="text" name="description" value="{{$post->description}}" class="form-control mb-2" placeholder="description">
        <button class="btn btn-success" type="submit">Update</button>
    </form>
@endsection
