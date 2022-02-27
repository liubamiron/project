@extends('layout')
@section('content')

<div class="row">
    <form method="GET" action="/apartment" class="row row-cols-3 mb-4">
         <div class="col">
               <select class="form-select" name="rooms">
               @foreach($rooms  as $room) 
                    <option value = {{$room->rooms_nr}}
                        @if((int)$roomsnr === (int)$room->rooms_nr) selected @endif>         
                        {{(int)$room->rooms_nr}}</option>                 
               @endforeach
            </select>
       </div> 
           <div class="col">
               <button class="btn btn-primary">Filter</button>
           </div>
   </form>         
</div>

<div class="row">
    <form method="GET" action="/apartment" class="row row-cols-3 mb-4">
            <div class="col">
               <select class="form-select" name="city">
                    @foreach($cities  as $city) 
                        <option value={{$city->city}}
                          @if($filter['city'] === $city->city) selected @endif>                      
                        {{$city->city}}
                        </option>
                    @endforeach
                </select>
            </div> 
            <div class="col">
                <button class="btn btn-primary">Filter</button>
            </div>
    </form>
</div>  


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach($imobils as $imobil)

            <div class="col">
             @include('imobils.item', ['imobil'=>$imobil])
            </div>
        @endforeach
    </div>
    <br>
      <div class="row">
        {{$imobils->links()}}
        </div> 

@endsection