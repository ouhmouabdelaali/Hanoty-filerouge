
@extends('component.app')

@section('content')


@include('component.navebare') 
<div class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Hello find provaders</h2>
            <!-- <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Tailus prides itself not only on award-winning technology, but also on the talent of its people of some of the brightest minds and most experienced executives in business.</p> -->
        </div>
        <div class="grid gap-12 items-center md:grid-cols-3">



        @foreach ($latestProviders as $latestProvider)

@if ($latestProvider->store) {{-- Check if store exists --}}
    <div class="space-y-4 text-center">

     <a href="{{ route('provaderviewdityel', ['id' => $latestProvider->id]) }}"> <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
             src="{{ asset('images/logos/' . $latestProvider->store->logo) }}"
             alt="woman" loading="lazy" width="640" height="805"></a>  
        <div>
            <h4 class="text-2xl">{{ $latestProvider->store->name }}</h4>
            <span class="block text-sm text-gray-500">{{ $latestProvider->store->Category->name }}</span>
        </div>
    </div>
@else
    <p>This provider does not have a store associated.</p>
@endif

@endforeach


            
        </div>
    </div>
</div>

<form class="relative mt-6 max-w-lg mx-auto">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <!-- <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required> -->
            <input type="search" id="default-search" class="block border-blue-500 p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-solid  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>

            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>




<!-- component -->
<div class="flex flex-wrap -mx-3 mb-5">
  <div class="w-full max-w-full px-3 mb-6  mx-auto">
    <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] border border-dashed border-stone-200 bg-white m-5">
      <!-- card body  -->
      <div class="flex-auto block py-8 px-9">
        <div>
          <div class="mb-9">
            <h1 class="mb-2 text-[1.75rem] font-semibold text-dark">Provaders</h1>
            <!-- <span class="text-[1.15rem] font-medium text-muted"> Meet our talented team, a dynamic group of experts driven by passion and innovation. </span> -->
          </div>
          <div class="flex flex-wrap w-full">

          @foreach ($providers as $provider)
        
            <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
              <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
          <a href="{{ route('provaderviewdityel', ['id' => $provider->id]) }}">   <img class="inline-block shrink-0 rounded-[.95rem] w-[150px] h-[150px]" 
    src="{{ isset($provider->store) ? asset('images/logos/' . $provider->store->logo) : asset('path/to/default/logo.jpg') }}" 
    alt="avatar image"></a> 

               
              </div>
               <div class="text-center">
               @if ($provider->store && $provider->store->name)
    <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">
        {{ $provider->store->name }}
    </a>
@else
    <p>No store name available</p>
@endif

            
              </div> 
            </div>

         @endforeach
 

          </div>

          <div class="pagination justify-content-center">
                    {{ $providers->links() }}
            </div>

        </div>
      </div>
    </div>
  </div>
</div>





@include('component.footer')  

