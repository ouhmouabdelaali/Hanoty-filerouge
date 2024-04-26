
<!-- nave bare -->
@auth
<nav class="w-full h-16 bg-white drop-shadow-lg fixed top-0 z-50">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
    
        <a class="text-indigo-600 text-xl font-bold italic" href="{{ route('/') }}">Han<span
                class="text-indigo-900">ty</span></a>

      
        <ul id="menu" class="hidden md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('/') }}">Home</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('prodacts') }}">Products</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('Providers') }}">Providers</a>
            </li>

    
    
<li class="relative">


<button id="profileButton" class="text-indigo-600 p-1 rounded-full hover:bg-indigo-100 focus:outline-none">
  @if (Auth::user() && Auth::user()->store)
    <img src="{{ asset('images/logos/' . Auth::user()->store->logo) }}" alt="Profile" class="h-8 w-8 rounded-full">
  @else
    <img src="#" alt="Profile (default)" class="h-8 w-8 rounded-full">
  @endif
</button>





<div id="profileDropdown" class="absolute w-48 mt-2 rounded-lg shadow-md bg-white hidden origin-top-right right-0 z-10">
      <ul class="py-1">
        <li class="block px-4 py-2 hover:bg-gray-100">
          <a href="{{ route('profile') }}" class="text-sm text-gray-700">Profile</a>
        </li>
        
        <li class="block px-4 py-2 hover:bg-gray-100">
          <a href="{{route('dashborde')}}" class="text-sm text-gray-700">Dashboard</a>
        </li>
        <li class="block px-4 py-2 hover:bg-gray-100">
       
          <a href="{{ route('logout') }}" class="text-sm text-gray-700">Logout</a>

        </li>
      </ul>
    </div>

</li>    
 
</ul>

       
        <div class="md:hidden">
            <!-- pour responsive -->
            <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
            <!-- Dropdown Content -->
            <div id="dropdownMenu" class="hidden fixed top-16 right-0 mt-2 w-full bg-gray-800 z-50 p-4">
                <a class="block text-white opacity-70 hover:opacity-100 mb-2 hover:bg-gray-700 hover:text-white block" href="#">Home</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2 hover:bg-gray-700 hover:text-white block" href="#">Something</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2 hover:bg-gray-700 hover:text-white block" href="#">Forums</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2 hover:bg-gray-700 hover:text-white block" href="#">About</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2 hover:bg-gray-700 hover:text-white block" href="#">Contact</a>




            </div>
        </div>
    </div>
</nav>
<script>
    document.getElementById("profileButton").addEventListener("click", function() {
        document.getElementById("profileDropdown").classList.toggle("hidden");
    });


    var menu = document.getElementById('menu');
        function toggleMenu() {
            menu.classList.toggle('hidden');
            menu.classList.toggle('w-full');
            menu.classList.toggle('h-screen');
        }
</script>  




@else

<nav class="w-full h-16 bg-white drop-shadow-lg fixed top-0 z-50">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
    
        <a class="text-indigo-600 text-xl font-bold italic" href="{{ route('/') }}">Han<span
                class="text-indigo-900">ty</span></a>

      
        <ul id="menu" class="hidden md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('/') }}">Home</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('prodacts') }}">Products</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('Providers') }}">Providers</a>
            </li>


 
         @if (Auth::check() == false ) 
             <li>
           <a href="{{route('loginform')}}" class="px-"> <button class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300" >Login</button></a> 
             </li>
             <li>
          <a href="{{route('registerform')}}">   <button class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">Sing up</button></a> 
             </li>
          
          @endif
</ul>

       
        <div class="md:hidden">
            <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
            <!-- Dropdown Content -->
            <div id="dropdownMenu" class="hidden fixed top-16 right-0 mt-2 w-full bg-gray-800 z-50 p-4">

            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('/') }}">Home</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('prodacts') }}">Products</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="{{ route('Providers') }}">Providers</a>
            </li>

         
            </div>
        </div>
    </div>
</nav>
<script>
    document.getElementById("profileButton").addEventListener("click", function() {
        document.getElementById("profileDropdown").classList.toggle("hidden");
    });


    var menu  = document.getElementById('menu');
        function toggleMenu() {
            menu.classList.toggle('hidden');
            menu.classList.toggle('w-full');
            menu.classList.toggle('h-screen');
        }
</script>  

<!-- component -->
<!-- <div class="bg-white px-8 pt-2 shadow-md mt-20">
     <div class="-mb-px flex justify-center">
         <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Home
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Products
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Discounts
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="#">
             Customers
         </a>
     </div>
</div> -->
@endauth