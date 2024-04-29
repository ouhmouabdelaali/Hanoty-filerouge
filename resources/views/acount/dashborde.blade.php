@extends('component.app')

@section('content')

@include('component.navebare') 
<!-- component -->
<div class="flex w-screen h-screen text-gray-700 mt-16">
 
	<!-- Component Start -->
       
    @include('component.asaide') 

            <div class="flex flex-col flex-grow">

    <div class="flex-grow p-6 overflow-auto bg-gray-200">
    <div class="grid grid-cols-3 gap-6">
<!-- content -->
<div class="h-24 col-span-3 bg-white border border-gray-300">
@include('component.stocktab')
@foreach ($stocks as $stock)

@include('component.ordermodal')

@endforeach
</div>
      </div>
         </div>


            </div>
            
</div>


@endsection 
