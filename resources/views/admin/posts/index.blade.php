@extends('layouts.app')

@section('content')
@if(session('message'))
<div class="alert alert-{{session('type') ?? 'info'}}">
    {{session('message')}}
</div>
@endif
<header class="d-flex justify-content-between align-items-center">
    <h1>Posts</h1>
    <a class="btn btn-dark d-flex align-items-center" href="{{route('admin.posts.create')}}"><i class="mr-2 fa fa-2x fa-solid fa-plus"></i>Crea post</a>

</header>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Creato il </th>
      <th scope="col">Modificato il </th>
      <th scope="col">Actions </th>
    </tr>
  </thead>
  <tbody>
    @forelse($posts as $post)
    <tr>
    
         <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->slug}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td class="d-flex">
        <a class="btn btn-sm btn-primary mr-1 d-flex align-items-center"href="{{route('admin.posts.show', $post)}}"><i class="fa-2x fa-solid fa-eye mr-1"></i> Apri</a>
        <a class="btn btn-warning mr-2" href="{{route('admin.posts.edit', $post)}}"><i class=" fa-solid fa-file-pen mr-1"></i>Modifica</a>
        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="delete-form">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="fa-2x fa-solid fa-trash-can"></i></button>
    </form>
      </td>
      
    </tr>
    @empty
    <tr><td colspan="6" class="text-center"><h2>Non ci sono Post</h2></td></tr>
    @endforelse
   
  </tbody>
</table>
@endsection