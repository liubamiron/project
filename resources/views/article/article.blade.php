@extends('layout')
@section('content')
<article class="blog-post">

<img src="{{ $article->image_url }}">
<h2 class="blog-post-title">{{ $article->title }}</h2>

<p class="blog-post-meta">{{ $article->published_at }} by 
    <a href="#">{{ $article->author->name }}</a>
</p>
<p>{{ $article->description }}</p>

</article>


<div>
    @include('article.comments', ['comments' => $article->comments])

</div>

<div class="row">
    <div class="col">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Edit article title
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            
          <h5 class="modal-title" id="exampleModalLabel">Edit Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="createArticleForm" name="form" action="" onsubmit="">
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Current Title</label>
                    <input type="text" class="form-control" name="title" id="titleInput" placeholder="{{ $article->title }}">
                  </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

@endsection
