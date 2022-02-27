@extends('layout')

@section('content')
<main>

    
        <!-- ============== slide items ============= -->
        <h2 class="title-text text-center text-black"> Items for Rent </h2>
        <br>
        <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" data-dots="true" data-nav="true">
                <div class="carousel-item active">
                    <div class="card" style="width:280px">
                        <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}" class="d-block w-100"
                            style="width:100%">
                        <div class="card-body">item id {{ $imobil->id }}
                             <h5 class="card-title">{{ $imobil->type }}</h5>
                            <p class="card-text">Street: {{ $imobil->address->street }}</p>
                            <p class="card-text">{{ $imobil->rooms_nr }} room apartment</p>
                            <a href="{{route('itemById', ['id' => $imobil->id]) }}"
                              class="btn btn-primary">{{ $imobil->price }} Euro/month</a>
                        </div>
                     </div>
                </div> 
                <div class="carousel-item clearfix">
                    <div class="card" style="width:280px; float:left; margin: 0 10px 0 10px;">
                        <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}" class="d-block w-100"
                            style="width:100%">
                            <div class="card-body">item id {{ $imobil->id }}
                              <h5 class="card-title">{{ $imobil->type }}</h5>
                              <p class="card-text">Street: {{ $imobil->address->street }}</p>
                              <p class="card-text">{{ $imobil->rooms_nr }} room apartment</p>
                              <a href="{{route('itemById', ['id' => $imobil->id]) }}"
                                class="btn btn-primary">{{ $imobil->price }} Euro/month</a>
                          </div>
                    </div>
                    <div class="card" style="width:280px; float:left; margin: 0 20px 0 ;">
                        <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}" class="d-block w-100"
                            style="width:100%">
                            <div class="card-body">item id {{ $imobil->id }}
                              <h5 class="card-title">{{ $imobil->type }}</h5>
                              <p class="card-text">Street: {{ $imobil->address->street }}</p>
                              <p class="card-text">{{ $imobil->rooms_nr }} room apartment</p>
                              <a href="{{route('itemById', ['id' => $imobil->id]) }}"
                                class="btn btn-primary">{{ $imobil->price }} Euro/month</a>
                          </div>
                    </div>
                    <div class="card" style="width:280px; float:left; margin: 0 20px 0 0;">
                        <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}" class="d-block w-100"
                            alt="2 rooms apartment" style="width:100%">
                            <div class="card-body">item id {{ $imobil->id }}
                              <h5 class="card-title">{{ $imobil->type }}</h5>
                              <p class="card-text">Street: {{ $imobil->address->street }}</p>
                              <p class="card-text">{{ $imobil->rooms_nr }} room apartment</p>
                              <a href="{{route('itemById', ['id' => $imobil->id]) }}"
                                class="btn btn-primary">{{ $imobil->price }} Euro/month</a>
                          </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>

        <!-- ==========2==== owl slide items .end // ==-->
</main>
@endsection