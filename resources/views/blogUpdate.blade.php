@extends('layouts.app')

@section('content')
    <div class="container">
        <form action={{ route('updateblog', ['id' => $blog->id]) }} method="post">
            @csrf
            <input type="text" name="user_id" value="{{$blog->user_id}}" hidden>
            <div class="mb-3">
            <input type="text" class="form-control" name="title" id="" value="{{$blog->title}}">
        </div>
        <div class="mb-3">

       
        <textarea class="form-control" name="content" id="" cols="30" rows="10" value="{{$blog->content}}"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
        </form>
    </div>
@endsection