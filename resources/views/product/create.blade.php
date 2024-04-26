
@extends('component.app')

@section('content')

@include('component.navebare') 



<div class="font-mono bg-gray-400 mt-24">
    <!-- Container -->
    <div class="container mx-auto">

        <div class="flex justify-center px-6 my-12">

            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex" >

                <img src="https://picsum.photos/id/208/400/400" alt="" class="rounded-2xl relative">                     

				<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none ">

                <div class="flex-auto p-5 lg:p-10 bg-indigo-900" > 

                  <h4 class="text-2xl font-semibold">New product?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                    entire data of the new product
                  </p>
                  <div class="relative w-full mb-3 mt-8 ">
                    <label name="name"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="full-name"> Name</label>
                 
                  <input type="text" id="product" name="product" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                 
                 
                    <!-- <input type="text" name="name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Name"> -->
                  </div>
                  
                  <div class="gap-6 " style="display: flex; ">
                  <div class="relative  mb-3" style="width: 48%;">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="price">Price</label>
                    <input type="number" name="price" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="price">
                  </div>
                 

                  <div class="relative mb-3" style="width: 48%;">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="qentity">Qentity</label>
                    <input type="number" name="qentity" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="qentity">
                  </div>
                </div>

                  <div>
             
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="qentity">sous_category</label>

                    <select id="category" name="sous_category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @foreach($categories as $category)
                            <option value="{{ $sous_category->id }}">{{ $sous_category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2">
                    <div class="mt-2">
                        <div class="md:col-span-2">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="images">Add Images</label>
                            <input type="file" id="images" name="images[]" style="display: none;" multiple onchange="displaySelectedImages()">

                            <button type="button" onclick="document.getElementById('images').click()" class="peer block w-full appearance-none border-none bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">Select Images</button>
                        </div>
                    </div>
                    
                    <div id="selectedImages"></div>


                   
                    <div class="relative w-full mb-3">
                      <label name="Description" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="message">Description</label>
                      <textarea rows="4" cols="80" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Type a message..."></textarea>
                    </div>
  
  
                    <div class="text-center mt-6">
                      <button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                  create
                      </button>
                    </div>
                </div>
   
    </div>

</div>

</div>
</div>
</div>
<script>
    function displaySelectedImages() {
        // Get the file input element
        var input = document.getElementById('images');

        // Get the selected files
        var files = input.files;

        // Get the empty <div> element to display the selected image names
        var selectedImagesDiv = document.getElementById('selectedImages');

        // Clear previous content
        selectedImagesDiv.innerHTML = '';

        // Loop through the selected files and display their names
        for (var i = 0; i < files.length; i++) {
            var fileName = files[i].name;
            selectedImagesDiv.innerHTML += fileName + '<br>';
        }
    }
</script>


        @endsection 



