<section id="popular-articles">
    <h2>Most popular articles</h2>

    <ul style="list-style:none; margin:0; padding:0;" articles-list>
        
            <template popular-article-template>
                <li>
                <div class="card mb-3 g-0 position-relative" style="max-width: 540px;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" data-views-counter>    
                        </span>
                    <div class="row g-0">
                                <div class="col-md-4" data-image>
                                </div>
                             {{-- <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" class="img-fluid rounded-start" alt="{{ $article->title }}"> --}}
                                <div class="col-md-8">
                            <div class="card-body">
                              <a class="card-title" data-title></a>                              
                                <p class="card-text" data-excerpt></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                                </div>
                    </div>
                </div>
                </li>
            </template>
    
    </ul>
</section>