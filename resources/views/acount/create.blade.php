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
</head>
<body>




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


<form action="{{ route('createstore') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Store information</div>
            </div>
            <div class="max-w-lg lg:mx-auto mx-auto text-center">
                <div class="py-16 px-7 rounded-md bg-white shadow-xl">
                    <div class="" action="" method="POST">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                            <div class="inline-block mt-2 pr-1">
                                <label for="store_name" class="float-left font-normal block text-sm text-gray-600 text-lg">Nom</label>
                                <input type="text" id="store_name" name="store_name" placeholder="Nom" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>
                            <div class="inline-block mt-2 pr-1">
                                <label for="phone_number" class="float-left font-normal block text-sm text-gray-600 text-lg">Téléphone</label>
                                <input type="text" id="phone_number" name="phone_number" placeholder="Téléphone" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>
                            <div class="md:col-span-2">
                                <label for="email" class="float-left font-normal block text-sm text-gray-600 text-lg">Email</label>
                                <input type="email" id="email" name="email" placeholder="E-mail" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>
                            <div class="md:col-span-2">
                                <label for="category" class="float-left font-normal block text-sm text-gray-600 text-lg">Category</label>
                                <!-- <select id="category" name="category" class="w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select> -->
                            </div>
                            <div class="md:col-span-2">
                                <label for="store_image" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez une image de store</label>
                                <input type="file" id="store_image" name="store_image" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>
                            <div class="md:col-span-2">
                                <label for="store_logo" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez une logo de store</label>
                                <input type="file" id="store_logo" name="store_logo" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>
                            <div class="md:col-span-2">
                                <label for="user_image" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez votre image</label>
                                <input type="file" id="user_image" name="user_image" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>
                            <div class="md:col-span-2">
                                <label for="description" class="float-left font-normal block text-sm text-gray-600 text-lg">Description</label>
                                <textarea name="description" id="description" rows="5" cols="" placeholder="Votre Description" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Address</div>
            </div>
            <div class="leading-loose">
                <div class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="street">Street</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="street" name="street" type="text" required="" placeholder="Street" aria-label="Street">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="city">City</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="city" name="city" type="text" required="" placeholder="City" aria-label="City">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="state">State</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="state" name="state" type="text" required="" placeholder="State" aria-label="State">
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="block text-sm text-gray-600" for="country">Country</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="country" name="country" type="text" required="" placeholder="Country" aria-label="Country">
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="block text-sm text-gray-600" for="zip">Zip</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="zip" name="zip" type="text" required="" placeholder="Zip" aria-label="Zip">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:col-span-2 mt-2 -mx-1 pl-1 w-1/2">
        <button type="submit" class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Valider</button>
    </div>
</form>



<!-- 

<div class="container">
        <h1>Inventory</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stocks as $stock)
                    <tr>
                        <td>
                            @if(isset($stock->product))
                                {{ $stock->product->name }}
                            @else
                                Product not found
                            @endif
                        </td>
                        <td>{{ $stock->quantity }}</td>
                        <td>{{ $stock->product->price ?? 'N/A' }}</td>
                        <td>
                            @if($stock->product && $stock->product->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $stock->product->images->first()->image_name) }}" alt="{{ $stock->product->name }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">Make Order</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->



<!-- 
<form action="{{ route('createstore') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">

        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">

            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Store information</div>
            </div>

            <div class="max-w-lg lg:mx-auto mx-auto text-center">
                <div class="py-16 px-7 rounded-md bg-white shadow-xl">

                    <div class="" action="" method="POST">

                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">

                            <div class="inline-block mt-2 pr-1">
                                <label for="fname" class="float-left font-normal block text-sm text-gray-600 text-lg">Nom</label>
                                <input type="text" id="fname" name="store_name" placeholder="Nom" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>

                            <div class="inline-block mt-2 pr-1">
                                <label for="phone" class="float-left font-normal block text-sm text-gray-600 text-lg">Téléphone</label>
                                <input type="text" id="phone" name="phone_number" placeholder="Téléphone" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>

                            <div class="md:col-span-2">
                                <label for="email" class="float-left font-normal block text-sm text-gray-600 text-lg">Email</label>
                                <input type="email" id="email" name="email" placeholder="E-mail" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div>
____________________________________________________

                            <div class="md:col-span-2">
                                <label for="file" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez une image de store</label>
                                <input type="file" id="store_image" name="store_image" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>


                            <div class="md:col-span-2">
                                <label for="file" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez une logo de store</label>
                                <input type="file" id="store_logo" name="store_logo" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>

                            <div class="md:col-span-2">
                                <label for="file" class="float-left font-normal block text-sm text-gray-600 text-lg">Ajoutez vous image </label>
                                <input type="file" id="user_image" name="user_image" placeholder="Charger votre fichier" class="placeholder-gray-500 peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" style="color: black;">
                            </div>


                            <div class="md:col-span-2">
                                <label for="message" class="float-left font-normal block text-sm text-gray-600 text-lg">Description</label>
                                <textarea name="description" id="message" rows="5" cols="" placeholder="Votre Description" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;"></textarea>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">

            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Address</div>
            </div>

            <div class="leading-loose">
                <div class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="street">Street</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="street" name="street" type="text" required="" placeholder="Street" aria-label="Street">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="city">City</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="city" name="city" type="text" required="" placeholder="City" aria-label="City">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="street">state</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="state" name="state" type="text" required="" placeholder="state" aria-label="state">
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="block text-sm text-gray-600" for="country">Country</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="country" name="country" type="text" required="" placeholder="Country" aria-label="Country">
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="block text-sm text-gray-600" for="zip">Zip</label>
                        <input class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" id="zip" name="zip" type="text" required="" placeholder="Zip" aria-label="Zip">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="md:col-span-2  mt-2 -mx-1 pl-1 w-1/2">
        <button type="submit" class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Valider</button>
    </div>

</form> -->




</body>
</html>