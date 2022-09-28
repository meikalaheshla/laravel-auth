@extends('layouts.app')
@section('content')
<header>
    <h1 class="text-center">{{$post->title}}</h1>
</header>
<div class="clearfix">
    @if($post->image)
    <img class="float-left mr-2"src="{{$post->image}}" alt="{{$post->slug}}">
    @endif
    <p>{{$post->content}}</p>
    <time class="mr-3 font-weight-bold">Creato il:{{$post->created_at}}</time>
<time class="font-weight-bold">Ultima modifica il:{{$post->updated_at}}</time>
    </div>
<hr>
<footer class=" d-flex justify-content-between align-item-center">
    <div>
    
        <a class="btn btn-sm btn-secondary" href="{{route('admin.posts.index')}}"><i class="fa-solid fa-arrow-left-long"></i>Torna ai posts</a>
    </div>
    <div class="d-flex justify-content-end align-item-center">
    <a class="btn btn-success btn-sm"href="{{route('admin.posts.store')}}"><i class="fa-2x fa-regular fa-floppy-disk"></i></a>
    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="fa-2x fa-solid fa-trash-can"></i></button>
    </form>

    </div>

</footer>
@endsection