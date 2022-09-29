
@if($post->exists)
    <form action="{{route('admin.posts.update', $post)}}"method="POST">
        @method('PUT')
@else
    <form action="{{route('admin.posts.store')}}"method="POST">
@endif


        @csrf
       <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required minlenght="5" value="{{old('title',$post->title)}}" maxlenght="50">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea type="text" class="form-control" id="content" name="content" required  >{{old('content', $post->content)}}</textarea>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                   <img class="img-fluid"src="{{$post->image ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/330px-No-Image-Placeholder.svg.png?20200912122019'}}" alt="Post img preview" id="preview">
                </div>
            </div>
            <div class="col-10">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="url" class="form-control" id="image-field" name="image"  value="{{old('image', $post->image)}}">
                </div>
            </div>
          
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn  btn-secondary" href="{{route('admin.posts.index')}}"><i class="fa-solid fa-arrow-left-long"></i>Torna ai posts</a>

            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> modifica</button>
        </div>
    </form>