<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>




    <style>
        /* Customize radio button appearance */
input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    border-radius: 50%;
    border: 2px solid #4C51BF; /* Blue color */
    width: 1.2rem;
    height: 1.2rem;
    margin-right: 0.5rem;
}

/* Add custom style for checked state */
input[type="radio"]:checked {
    background-color: #4C51BF; /* Blue color */
}

/* Style label text */
label {
    color: #4C51BF; /* Blue color */
    cursor: pointer;
}

    </style>
</head>
<body>





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
          <a href="#" class="text-sm text-gray-700">Logout</a>
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
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Home</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Something</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Forums</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">About</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Contact</a>
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




<!-- 
<nav class="w-full h-16 bg-white drop-shadow-lg">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
        Logo Here
        <a class="text-indigo-600 text-xl font-bold italic" href="#">Han<span
                class="text-indigo-900">ty</span></a>

        Menu links here
        <ul id="menu" class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50
            md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

            <li class="md:hidden z-90 fixed top-4 right-6">
                <a href="javascript:void(0)" class="text-right text-white text-4xl"
                    onclick="toggleMenu()">☰</a>
            </li>

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

            Profile Button
            <li class="relative">
                <button id="profileButton" class="text-indigo-600 p-1 rounded-full hover:bg-indigo-100 focus:outline-none">
                    <img src="profile.jpg" alt="Profile" class="h-8 w-8 rounded-full">
                </button>
                Dropdown Content
                <ul id="profileDropdown" class="hidden absolute right-0 top-10 bg-gray-800 p-2 rounded-md text-white">
                    <li><a href="#" class="block py-1">Profile</a></li>
                    <li><a href="#" class="block py-1">Home</a></li>
                    <li><a href="#" class="block py-1">Logout</a></li>
                </ul>
            </li>
        </ul>

        Dropdown Burger Menu
        <div class="md:hidden">
            <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
            Dropdown Content
            <div id="dropdownMenu" class="hidden fixed top-16 right-0 mt-2 w-full bg-gray-800 z-50 p-4">
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Home</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Something</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Forums</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">About</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById("profileButton").addEventListener("click", function() {
        document.getElementById("profileDropdown").classList.toggle("hidden");
    });
</script> -->



<!-------not delete this---- <nav class="w-full h-16 bg-white drop-shadow-lg">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
        Logo Here
        <a class="text-indigo-600 text-xl font-bold italic" href="#">Han<span
                class="text-indigo-900">oty</span></a>

        Menu links here
        <ul id="menu" class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50
            md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

            <li class="md:hidden z-90 fixed top-4 right-6">
                <a href="javascript:void(0)" class="text-right text-white text-4xl"
                    onclick="toggleMenu()">☰</a>
            </li>

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
        </ul>

        Dropdown Burger Menu
        <div class="md:hidden">
            <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
            Dropdown Content
            <div id="dropdownMenu" class="hidden fixed top-16 right-0 mt-2 w-full bg-gray-800 z-50 p-4">
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Home</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Something</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Forums</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">About</a>
                <a class="block text-white opacity-70 hover:opacity-100 mb-2" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>
 -->



<!-- :::::::::::::::::::::::::::::::::::::::: -->










<div class="font-mono bg-gray-400">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    					<!-- Col -->
                                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                                        style="background-image: url({{asset('images/register.png') }})">
                                    </div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{ route('register') }}" method="POST">
                           @csrf
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										First Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="first_name"
                                        name="first_name"
										type="text"
										placeholder="First Name"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
										Last Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="last_name"
                                        name="last_name"
										type="text"
										placeholder="Last Name"
									/>
								</div>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
                                    name="email"
									type="email"
									placeholder="Email"
								/>
							</div>
							<div class="mb-4 md:flex md:justify-between">

                                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password_confirmation"
                                        name="password_confirmation"
										type="password"
										placeholder="******************"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="c_password"
                                        name="password"
										type="password"
										placeholder="******************"
									/>
								</div>

							</div>


        <div class="mb-4">
        <label for="role" class="block text-gray-700">Role</label>
        <div class="flex items-center space-x-4">
                           
                           <div>
                               <input id="role-commercial" type="radio" name="role" value="commercial" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-300">
                               <label for="role-commercial" class="text-sm font-medium text-gray-900">Commercial</label>
                           </div>
                       
                           <div>
                               <input id="role-provider" type="radio" name="role" value="provider" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-300">
                               <label for="role-provider" class="text-sm font-medium text-gray-900">Provider</label>
                           </div>
                       </div>

        </div>                    










                            <div class="mb-4">
                                
                            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">
                                Register
                            </button>
                            </div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="#"
								>
									Forgot Password?
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="{{ route('loginform') }}"
								>
									Already have an account? Login!
								</a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
</div>




</body>
</html>