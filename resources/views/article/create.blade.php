
@extends('layout')
@section('content')

    <section>
    <div class="m-3">
    <h1> Create an article</h1>

    <form id="createArticleForm" name="form" action="" onsubmit="return validate()">
        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="titleInput" placeholder="Article title">
            <span style='color:red' id='titlef'></span>
          </div>

          <div class="mb-3">
            <label for="descriptionInput" class="form-label">Description</label>
            <textarea class="form-control" id="descriptionInput" rows="3"></textarea>
          </div> 
          
          <div class="mb-3">
            <label for="categoryInput" class="form-label">Category</label>
            <select class="form-select" name="category" id="categoryInput">
                <option selected disabled>Select any categories from list</option>
                @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
             </select>
            
          </div> 

          <div class="mb-3">
            <label for="userInput" class="form-label">Author</label>
            <select class="form-select" name="user" id="userInput">
                <option selected disabled>Select authors from list</option>
                @foreach($users as $user)
                     <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
             </select>
            
          </div> 

          <div class="mb-3">
              <div class="row">
                  <div class="col-9">
                    <label for="imageInput" class="form-label">Upload image for your article</label>
                    <input class="form-control" accept="image/*"  type="file" id="imageInput">
                  </div>
                  <div class="col-3">
                      <img  class="w-100" src="" alt="preview upload image" id="imagePreview">
                  </div>
              </div>
            
          </div>

          <div class="mb-3">
              <div class="d-flex justify-content-center">
           <button type="submit" style="btn btn-primary btn-lg">Submit</button>
              </div>
          </div>

    </form>
    </div>
</section>
@endsection



{{-- <section style="background: rgba(255, 255, 255, 0.5);"> --}}