@extends('component.app')

@section('content')

@include('component.navebare') 












<div class="block md:flex md:space-x-2 px-2 lg:p-0">
        <a 
          class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block" 
          style="height: 24em;"
          href="#"
        >
          <div class="absolute left-0 bottom-0 w-full h-full z-10"
            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
          <img src="{{asset('images/stores/'.Auth::user()->store->image)}}" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
          <div class="p-4 absolute bottom-0 left-0 z-20">
            <span class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Nutrition</span>
            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
              Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.
            </h2>
            <div class="flex mt-3">
              <img src="https://randomuser.me/api/portraits/men/97.jpg"
                class="h-10 w-10 rounded-full mr-2 object-cover" />
              <div>
                <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
              </div>
            </div>
          </div>
        </a>

        <a class="w-full md:w-1/3 relative rounded" 
          style="height: 24em;"
          href="#" >

          <div class="absolute left-0 top-0 w-full z-10"
            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));">
        
        
        </div>
    
</div>

<!--  -->









         @endsection 
