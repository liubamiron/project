@extends('layout')
@section('content')

<h2 class="title-text text-center text-black"> Apartments for Rent </h2>
<br> 

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
   
    @foreach($apartments as $apartment)
    <div class="col">
    @include('imobils.item', ['imobil'=>$apartment])
    </div>
@endforeach
 </div> 
   
   <br> 
    <h2 class="title-text text-center text-black"> Houses for Rent </h2>
    <br>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($houses as $house)
            <div class="col">
             @include('imobils.item', ['imobil'=>$house])
            </div>
        @endforeach
    </div>
    <br>       

@endsection
