 
    <div class="card">

           {{-- <img src="{{ asset('/assets/images/studio.jpg/') }}"  alt="{{ $imobil ->type }}">  --}}
           {{-- <img src="{{ asset('/assets/images/image' .id. '.jpg') }}">  --}}

    <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}"> 

          {{-- <h4>  {{$path1}}</h4> --}}
            <div class="card-body">
              <p class="card-text">{{ $imobil->id }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <div class="btn-group"> 
                <a href="{{route('itemById', ['id' => $imobil->id]) }}"
                  class="btn btn-sm btn-outline-secondary">
                  View
                </a>

                </div>
                <small class="text-muted">{{ $imobil->created_at }}</small>
              </div>
            </div>
          </div>

      
    </div>



          