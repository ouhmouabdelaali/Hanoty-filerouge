@extends('component.app')

@section('content')

@include('component.navebare') 

<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Account settings</h1>
    <form action="{{ route('createstore') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="store_name">Store name</label>
                <input type="text" id="store_name" name="store_name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="category">Category</label>
                <select id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="email">Email Address</label>
                <input type="email" id="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="street">Street</label>
                <select id="street" name="street" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                @foreach($addresses  as $addresse)
                        <option value="{{ $addresse->id }}">{{ $addresse->street }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="city">City</label>
                <select id="city" name="city" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" onchange="updateStreets(this)">
                @foreach($addresses as $addresse)
                        <option value="{{ $addresse->id }}">{{ $addresse->city }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="state">State</label>
                <select id="state" name="state" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" onchange="updateCities(this)">
                @foreach($addresses as $addresse)
                        <option value="{{ $addresse->id }}">{{ $addresse->state }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="country">Country</label>
                <select id="country" name="country" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" onchange="updateState(this)">
                @foreach($addresses as $addresse)
                        <option value="{{ $addresse->id }}">{{ $addresse->country }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="description">Description</label>
                <textarea id="description" name="description" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-white">Store image</label>
                <input type="file" id="store_image" name="store_image" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Store logo</label>
                <input type="file" id="store_logo" name="store_logo" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>

<script>


// function updateStreets(select) {
//   var city = select.value;

//   // Make AJAX request to fetch streets for the selected city
//   fetch('/streets/' + city)
//     .then(response => response.json())
//     .then(streets => {
//       var streetSelect = document.getElementById('street');
//       streetSelect.innerHTML = ''; // Clear previous options
//       streets.forEach(street => {
//         var option = document.createElement("option");
//         option.text = street;
//         option.value = street;
//         streetSelect.appendChild(option);
//       });
//     })
//     .catch(error => console.error('Error fetching streets:', error));
// }

// function updateCities(select) {
//   var state = select.value;

//   // Make AJAX request to fetch cities for the selected state
//   fetch('/cities/' + state)
//     .then(response => response.json())
//     .then(cities => {
//       var citySelect = document.getElementById('city');
//       citySelect.innerHTML = ''; // Clear previous options
//       cities.forEach(city => {
//         var option = document.createElement("option");
//         option.text = city;
//         option.value = city;
//         citySelect.appendChild(option);
//       });
//     })
//     .catch(error => console.error('Error fetching cities:', error));
// }

// function updateState(select) {
//   var country = select.value;

//   // Make AJAX request to fetch states for the selected country
//   fetch('/states/' + country)
//     .then(response => response.json())
//     .then(states => {
//       var stateSelect = document.getElementById('state');
//       stateSelect.innerHTML = ''; // Clear previous options
//       states.forEach(state => {
//         var option = document.createElement("option");
//         option.text = state;
//         option.value = state;
//         stateSelect.appendChild(option);
//       });
//     })
//     .catch(error => console.error('Error fetching states:', error));
// }
// </script>
 @endsection 
