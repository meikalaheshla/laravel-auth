@extends('layouts.app')

@section('content')

<header>
    <h1>Posts</h1>

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
      <th scope="row">1</th>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
    </tr>
    @empty
    <tr><td colspan="6" class="text-center"><h2>Non ci sono Post</h2></td></tr>
    @endforelse
   
  </tbody>
</table>
@endsection