@extends('layouts.app')
@section('content')
<header>
    <h1>Crea Post</h1>
    @include('includes.admin.posts.form')

    {{--delete after completed transfer of form into include file--}}
    <!-- <form action="{{route('admin.posts.store')}}"method="POST">
        @csrf
       <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required minlenght="5" value="{{old('title')}}" maxlenght="50">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea type="text" class="form-control" id="content" name="content" required  >{{old('content')}}</textarea>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                   <img class="img-fluid"src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/330px-No-Image-Placeholder.svg.png?20200912122019" alt="Post img preview" id="preview">
                </div>
            </div>
            <div class="col-10">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="url" class="form-control" id="image-field" name="image"  value="{{old('image')}}">
                </div>
            </div>
          
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn  btn-secondary" href="{{route('admin.posts.index')}}"><i class="fa-solid fa-arrow-left-long"></i>Torna ai posts</a>

            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Crea</button>
        </div>
    </form> -->
</header>
@endsection