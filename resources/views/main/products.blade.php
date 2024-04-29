@extends('component.app')

@section('content')
<!-- offcanvas -->

@include('component.navebare') 




<!-- <header class="  bg-white shadow-lg  border-b-2 border-gray-400 ">
        <div class="container   h-32 mx-auto">
            <div class="grid grid-cols-3 gap-0.5">
                <div class="col-span-1 space-y-1">
                    <a href="http://tradydaddy.com/" target="_blank"><img src="http://tradydaddy.com/wp-content/uploads/2021/03/cropped-tradydaddy-2048x1222.png" class="h-24 pt-4"></a>
                </div>
                
                <div class="col-span-2 flex ">
                    <div class="ml-10 flex items-baseline space-x-4 py-12">
                        Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white"
                        <a href="http://tradydaddy.com/" target="_blank" class="bg-black text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
                    </div>
                    <div class="ml-10 flex justify-items-end items-baseline space-x-4 py-12">
                        Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white"
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-500 text-3xl px-3 py-2 rounded-md text-sm font-medium"><i class="fa fa-cog" aria-hidden="true"></i></a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 text-3xl   px-3 py-2 rounded-md text-sm font-medium"><i class="fa fa-bell" aria-hidden="true"></i></a>
          
                        <a href="http://tradydaddy.com/" target="_blank" class="text-black-700 text-3xl   px-3 py-2 rounded-md text-sm font-medium"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
          
                        
                    </div>
                </div> 
            </div>
        </div>
    </header> -->



    <div class="w-full">

        <div class="relative ">
            <div class="sliderAx h-4/5">


                <div id="slider-1" class="mx-auto">
                    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                        <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p> 
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="http://tradydaddy.com/" target="_blank" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                        </div>  
                    </div> <!-- container -->
                    <br>
                </div>
          
                <div id="slider-2" class=" mx-auto">
                    <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)"> 
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="http://tradydaddy.com/" target="_blank" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                    </div> <!-- container -->
                    <br>
                </div>

            </div>
            <div  class="flex justify-between w-12 mx-auto pb-2">
                <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
                <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
            </div>
        </div>
        <div class="container mx-auto">
            <h1 class="text-center text-black-800 py-6 text-5xl ">
               Products
            </h1> 
            <div class="text-gray-900">
                <div class="grid grid-cols-6 mb-20">
                    <div class="col-span-1 text-center text-6xl py-4"><i class="fa fa-gift" aria-hidden="true"></i></div>
                    <div class="col-span-5">
                        <h3 class="text-gray-700 ">
                            At duo ipsum amet sit dolor no duo et, tempor takimata takimata eirmod dolor est sed, tempor ut no et.Sed justo no dolores eirmod accusam duo labore sea, tempor dolore labore erat kasd dolor lorem amet. Sed nonumy ut justo ipsum at magna sit dolores. Ea ipsum dolor invidunt amet est ut invidunt invidunt eirmod, accusam eos et lorem accusam sed. Nonumy erat clita nonumy erat et, aliquyam et et sit invidunt aliquyam sed justo. Nonumy labore tempor takimata ipsum sanctus justo eirmod, ut clita sit et ipsum sed amet vero sanctus. Duo diam amet sea stet. Est sit clita sed justo lorem, ut lorem tempor sanctus lorem eirmod, et justo voluptua invidunt tempor no diam diam et, invidunt.
                        </h3>
                    </div>
                </div>
            </div>   
        </div>












<!-- component -->
<!-- component -->
<div>
  <div class="px-10 py-20 bg-white grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
   
@foreach ($products as $product)
  <div class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer">
      <div>
      @if(isset($product->images[0]))
    <img src="{{ asset('images/products/' . $product->images[0]) }}" alt="" />
@endif

      </div>
      <div class="py-4 px-4 bg-white">
        <h3 class="text-md font-semibold text-gray-600">{{$product->name}}</h3>
        <p class="mt-4 text-lg font-thin">${{$product->price}}</p>
        <span class="flex items-center justify-center mt-4 w-full bg-indigo-600  hover:bg-yellow-500 py-1 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <button class="font-semibold text-gray-800">Add to Basket</button>
        </span>
      </div>
    </div>
@endforeach


 
</div>
<div class="pagination justify-content-center">
                    {{ $products->links() }}
            </div>
</div>

















        <div class="container mx-auto">
            <h1 class="text-center text-black-800 py-6 text-5xl ">
                Catigory
            </h1> 
        </div>
        
         
        </div>
        <!-- <div class="grid grid-cols-4 p-8"> -->
            <div class="px-10 py-20 bg-white grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">


  @foreach ($categories as $categorie )
         
  <div class="col-span-1 py-6">
                <div class="relative">
                    <a href="{{ route('profile') }}" target="_blank">
                    
                        <img src="{{ isset($provider->store) ? asset('images/categories/' . $provider->store->logo) : asset('images/logos/register.png') }}" alt="" class="rounded-2xl relative">                     
                        <div class="absolute bottom-0 left-0 text-xl p-4 w-full text-white font-bold"><p>{{$categorie->name}}</p></div>
                        
                    </a>
                </div>
            </div>
     @endforeach 
      
</div> 
<div class="pagination justify-content-center">
                    {{ $categories->links() }}
            </div>



    @include('component.footer') 
  
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <script>
    
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        

        loopSlider();
     
        
    
    
    
    
    });

  
  </script>




 



@endsection 