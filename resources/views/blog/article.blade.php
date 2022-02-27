
          <div class="card shadow-sm">
          <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
            <div class="card-body">
              <p class="card-text">{{ $article->excerpt }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('blogArticle', ['id' => $article->id]) }}"
                  class="btn btn-sm btn-outline-secondary">
                  View
                </a>
                </div>
                <small class="text-muted">{{ $article->published_at }}</small>
              </div>
            </div>
          </div>


          <!-- <div class="row ">
    {{-- {{ $articles->links() }} --}}
</div>   -->

{{-- <div> --}}

{{-- <table>

@foreach ($articles as $article):

<tr>

<td>{{ $article->id }}</td>

<td>{{ $article->title }}</td>

</tr>

@endforeach

</table> --}}
{{-- <h3>Comments {{ $article->comments()->count() }}</h3>
 <ul>
    @foreach($article->comments as $comment)
    <li>{{$comment->message}}</li>
    @endforeach
</ul> --}}

{{-- </div> --}}

          