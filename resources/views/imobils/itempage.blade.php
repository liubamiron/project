@extends('layout')
@section('content')

<div class="blog-post">

    <img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}">

    <h2>{{ $imobil->type }}</h2>
        <p class="blog-post-meta">{{ $imobil->published_at }} Owner 
        <a href="#">{{ $imobil->owner->name }}</a>,
        phone - {{ $imobil->owner->phone}},
        email - {{ $imobil->owner->email}}
        </p>
    <p>
    Address : street - {{ $imobil->address->street}}, 
    house Nr - {{ $imobil->address->house_nr }},
    apart Nr - {{ $imobil->address->apart_nr  }},
    floor - {{ $imobil->floor }}
    </p>
    <p>
    City - {{ $imobil->address->city  }},
    Rooms Nr - {{ $imobil->rooms_nr  }},
    Balcony - {{ $imobil->balcony  }}
    </p>
    <p>
        Building type - {{ $imobil->building_type  }},
        Square - {{ $imobil->square_mp }}mp,   
        bath - {{ $imobil->bath }}
    </p>
    <h5>Benefits - {{ $imobil->benefits()->count() }}</h5>
    <ul>
        @foreach($imobil->benefits as $benefit)
        <li>{{$benefit->name}}</li>
        @endforeach
    </ul>

    <h3>Price per month - {{ $imobil->price }} Euro</h3>

</div>


@endsection