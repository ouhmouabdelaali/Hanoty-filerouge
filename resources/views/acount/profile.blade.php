
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body  class="grid gap-6 grid-cols-1  mt-6" >
   



<!-- nave bare -->
  <nav class="w-full h-16 bg-white drop-shadow-lg fixed top-0 z-50">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
    
        <a class="text-indigo-600 text-xl font-bold italic" href="#">Han<span
                class="text-indigo-900">ty</span></a>

      
        <ul id="menu" class="hidden md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="#">Home</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="#">Something</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="#">Forums</a>
            </li>

            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="#">About</a>
            </li>
            <li>
                <a class="text-indigo-600 opacity-70 hover:opacity-100 duration-300" href="#">Contact</a>
            </li>
        <!-- </ul>




        <ul> -->
<li class="relative">

<button id="profileButton" class="text-indigo-600 p-1 rounded-full hover:bg-indigo-100 focus:outline-none">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile" class="h-8 w-8 rounded-full">

                </button>

<div id="profileDropdown" class="absolute w-48 mt-2 rounded-lg shadow-md bg-white hidden origin-top-right right-0 z-10">
      <ul class="py-1">
        <li class="block px-4 py-2 hover:bg-gray-100">
          <a href="#" class="text-sm text-gray-700">Profile</a>
        </li>

        <li class="block px-4 py-2 hover:bg-gray-100">
          <a href="#" class="text-sm text-gray-700">Dashboard</a>
        </li>
        <li class="block px-4 py-2 hover:bg-gray-100">
       
          <a href="{{ route('logout') }}" class="text-sm text-gray-700">Logout</a>

        </li>
      </ul>
    </div>

</li>    
 
</ul>

       
        <div class="md:hidden">
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

              <!-- 
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a> -->


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


<!-- heder profil -->

<!-- component -->
<div>
  <div>
    <img class="h-32 w-full object-cover lg:h-48" src="https://resources.thomascook.in/images/holidays/sightSeeing/8-big-ben-min.jpg" alt="">
  </div>
  <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
      <div class="flex">
        <img class="h-24 w-24 rounded-full ring-4 ring-blue-300 sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile" class="h-8 w-8 rounded-full"  alt="">
      </div>
      <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
        <div class="mt-6 min-w-0 flex-1 sm:hidden md:block">
          <h1 class="truncate text-2xl font-bold text-indigo-900">Shehab coding</h1>
        </div>
        <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
          <button type="button" class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
              <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
            </svg>
            <span>Message</span>
          </button>
          <button type="button" class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
            </svg>
            <span>Call</span>
          </button>
        </div>
      </div>
    </div>
    <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
      <h1 class="truncate text-2xl font-bold text-blue-300">Shehab coding</h1>
    </div>
  </div>
</div>


<!-- for stor discription -->
<div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
  <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 ">
      <!-- <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
          <img
          src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
          alt="image"
          class="object-cover w-full h-full"
          />
          Black Friday Mega Offer
          <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-75 rounded-xl">
          <h2 class="text-4xl font-bold text-center"> Black Friday <br /> 
          <span class="text-red-500"> 50% Off</span>
          </h2>
          
          </div>
          End Black Friday Mega Offer
      </div> -->
      <div class="p-6">
          <h6 class="block mb-4 font-sans text-2xl  antialiased font-semibold leading-relaxed tracking-normal text-indigo-600 uppercase">
          Startups
          </h6>
          <!-- <h4 class="block mb-2 font-sans text-base antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
          Lyft launching cross-platform service this week
          </h4> -->
          <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
          Like so many organizations these days, Autodesk is a company in
          transition. It was until recently a traditional boxed software company
          selling licenses. Yet its own business model disruption is only part of
          the story
          </p>
          <!-- <a class="inline-block" href="#">
          <button
              class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-red-500 uppercase align-middle transition-all rounded-lg select-none hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
          >
              Buy Now
              <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              aria-hidden="true"
              class="w-4 h-4"
              >
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
              ></path>
              </svg>
          </button>
          </a> -->
      </div>
  </div>
</div>







<div class="flex">
      <!-- Sidebar -->
      <aside class="w-64 flex-shrink-0 border-r border-blue-500">
        <div class="flex items-center border-b">
            <!-- <span class="text-lg font-semibold">Groups</span> -->
        </div>
        <nav class="py-4">
            <ul>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Dashboard</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Reports</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Settings</a>
                </li>
            </ul>
        </nav>
    </aside>
    
  

      <!-- Main Content -->
      <div class="flex-1 px-8 py-6">
  
     <div class="my-8">



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

  
        <div class="container mx-auto px-6">
          <!-- Main Content -->
          <div class="container mx-auto mt-16">
            <!-- <div class="mt-16"></div> -->
            <h3 class="text-gray-600 text-2xl font-medium">Fashions</h3>
            <!-- <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6"> -->
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

                  <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">Chanel</h3>
                        <span class="text-gray-500 mt-2">$12</span>
                    </div>
                </div>
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">Man Mix</h3>
                        <span class="text-gray-500 mt-2">$12</span>
                    </div>
                </div>
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">Classic watch</h3>
                        <span class="text-gray-500 mt-2">$12</span>
                    </div>
                </div>
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">woman mix</h3>
                        <span class="text-gray-500 mt-2">$12</span>
                    </div>
                </div>

                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">woman mix</h3>
                        <span class="text-gray-500 mt-2">$12</span>
                    </div>
                </div>

              </div>




              
          </div>
      </div>
    </div> 
    </div>
</div>

<!-- hhhhh
@auth
    <p>Your user ID is: {{ Auth::id() }}</p>

    <p>Your email is: {{ Auth::user()->email }}</p>
@endauth

@guest
    @endguest -->


<!--  -footer->



<!-- component -->

<div class="flex items-end w-full min-h-screen bg-white">

  <footer class="w-full text-gray-700 bg-gray-100 body-font">
      <div
          class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
          <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
              <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                  <svg class="w-auto h-5 text-gray-900 fill-current" viewBox="0 0 202 69"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M57.44.672s6.656 1.872 6.656 5.72c0 0-1.56 2.6-3.744 6.552 8.424 1.248 16.744 1.248 23.816-1.976-1.352 7.904-12.688 8.008-26.208 6.136-7.696 13.624-19.656 36.192-19.656 42.848 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C56.608 53.088 42.152 69 36.432 69c-4.472 0-8.216-5.928-8.216-10.4 0-6.552 11.752-28.08 20.28-42.952-9.984-1.664-20.176-3.64-27.976-3.848-13.936 0-16.64 3.536-17.576 6.032-.104.312-.52.52-.832.312-3.744-7.072-1.456-14.56 14.144-14.56 9.36 0 22.048 4.576 34.944 7.592C54.736 5.04 57.44.672 57.44.672zm46.124 41.08c1.144-1.456 4.264.728 3.016 2.392C100.236 53.088 85.78 69 80.06 69c-4.576 0-8.32-5.928-8.32-10.4v-.208C67.58 64.32 63.524 69 61.34 69c-4.472 0-8.944-4.992-8.944-11.856 0-10.608 15.704-33.072 24.96-33.072 4.992 0 7.384 2.392 8.528 4.576l2.6-4.576s6.656 1.976 6.656 5.824c0 0-13.312 24.336-13.312 30.056 0 .208 0 .624.52.624 4.472 0 17.888-14.352 21.216-18.824zm-40.56 18.72c2.184 0 11.752-13.312 17.368-22.048l4.16-7.488c-8.008-7.904-27.248 29.536-21.528 29.536zm57.564-38.168c-2.184 0-4.992-2.808-4.992-4.784 0-2.912 5.824-14.872 7.28-14.872 2.6 0 6.136 2.808 6.136 6.344 0 2.08-7.176 12.064-8.424 13.312zm-17.68 46.592c-4.472 0-8.216-5.928-8.216-10.4 0-6.656 16.744-34.528 16.744-34.528s6.552 1.976 6.552 5.824c0 0-13.312 24.336-13.312 30.056 0 .208.104.624.624.624 4.472 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392-6.448 8.944-20.904 24.856-26.624 24.856zM147.244.672s6.656 1.872 6.656 5.72c0 0-25.792 43.784-25.792 53.56 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C146.412 53.088 131.956 69 126.236 69c-4.472 0-8.216-5.928-8.216-10.4 0-10.4 29.224-57.928 29.224-57.928zM169.7 60.16c3.848-2.392 7.904-6.864 10.816-10.92 6.656-9.464 11.544-20.696 10.504-27.352-.312-3.432-.104-4.056 3.12-2.704 5.2 2.392 11.336 8.632 2.184 22.88-5.2 8.008-12.48 15.288-19.344 19.76-2.704 1.768-6.344 3.328-9.984 4.16-.52.416-1.04.728-1.456.936-1.872 1.352-4.264 2.08-7.592 2.08-14.664 0-16.848-12.272-16.848-16.016 0-2.392 3.224-4.68 4.784-3.744.208.104.312.416.312.624 0 2.808 1.872 13.104 9.984 13.104 7.904 0 3.432-18.304 2.288-27.144-1.456 2.288-3.432 4.992-5.616 8.32-2.6 3.744-5.72 1.456-4.784 0 5.824-8.424 9.152-13.832 11.856-18.616 1.248-2.08 3.328-3.328 6.448-3.328 2.704 0 5.824 3.016 6.864 4.784.312.52 0 1.04-.52 1.144a5.44 5.44 0 00-4.368 5.408c0 6.968 2.6 17.16 1.664 24.856l-.312 1.768z"
                          fill-rule="nonzero" /></svg>
              </a>
              <p class="mt-2 text-sm text-gray-500">Design, Code and Ship!</p>
              <div class="mt-4">
                  <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                      <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              class="w-5 h-5" viewBox="0 0 24 24">
                              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              class="w-5 h-5" viewBox="0 0 24 24">
                              <path
                                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                              </path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                              <path stroke="none"
                                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                              </path>
                              <circle cx="4" cy="4" r="2" stroke="none"></circle>
                          </svg>
                      </a>
                  </span>
              </div>
          </div>
          <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Company</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Careers</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Support</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact Support</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Help Resources</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Release Updates</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Platform
                  </h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Send a Message</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Request a Quote</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">+123-456-7890</a>
                      </li>
                  </nav>
              </div>
          </div>
      </div>
      <div class="bg-gray-300">
          <div class="container px-5 py-4 mx-auto">
              <p class="text-sm text-gray-700 capitalize xl:text-center">© 2020 All rights reserved </p>
          </div>
      </div>
  </footer>

</div>

</body>


</html>