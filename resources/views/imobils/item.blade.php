 
    <div class="card" >

{{-- <img src="{{ asset('/assets/images/studio.jpg/') }}"  alt="{{ $imobil ->type }}">  --}}
{{-- <img src="{{ asset('/assets/images/image' .id. '.jpg') }}">  --}}

<img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}" alt="{{ $imobil->type }}" class="d-block w-100" style="width:100%"> 

 <div class="card-body">
   
   <div class="d-flex justify-content-between align-items-center">
     <div class="btn-group">
       <div class="btn-group">
     <a href="{{route('itemById', ['id' => $imobil->id]) }}"
       class="btn btn-sm btn-outline-primary">
       {{ $imobil->price }}/month
     </a>
     

     </div>
     <br>
     {{-- <small class="text-muted">{{ $imobil->created_at }}</small> --}}
   </div>
 </div>
</div>


</div>



