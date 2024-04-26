
<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Account settings</h1>
    <form action="{{ route('createstore') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="store_name">Store name</label>
                <input type="text" id="store_name" name="store_name"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="category">category</label>
                <select  id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
             
               @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="email">Email Address</label>
                <input type="email" id="email" name="email"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="Téléphone">Téléphone</label>
                <input type="text" id="phone_number" name="phone_number" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

         @foreach($address as $addres)
            <div>
                <label class="text-white dark:text-gray-200" for="category">category</label>
                <select  id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
             
              
                                        <option value="{{ $addres->id }}">{{ $addres->country }}</option>
                                    @endforeach
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="category">category</label>
                <select  id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
             
               
                                        <option value="{{ $addres->id }}">{{ $addres->state }}</option>
                                   
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="category">category</label>
                <select  id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
             
             
                                        <option value="{{ $addres->id }}">{{ $addres->city }}</option>
                                  
            </div>



            <div>
                <label class="text-white dark:text-gray-200" for="category">category</label>
                <select  id="category" name="category" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
             
             
                                        <option value="{{ $addres->id }}">{{ $addres->street }}</option>
                                  
            </div>

  @endforeach
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Description </label>
                <textarea type="textarea" name="description" id="description" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>



            <div>
                <label class="block text-sm font-medium text-white">
                store image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              
              
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="store_image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input type="file" id="store_image" name="store_image"  class="sr-only">
                    </label>
                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>

              </div>
            </div>


            <div>
                <label class="block text-sm font-medium text-white">
                store logo
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            
              
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="store_logo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input type="file" id="store_logo" name="store_logo"  class="sr-only">
                    </label>
                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>

              </div>
            </div>

        </div>


        <div>
                <label class="block text-sm font-medium text-white">
                user image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              
              
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input type="file" id="user_image" name="user_image"  class="sr-only">
                    </label>
                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>

              </div>
            </div>


        
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>










<!-- <form class="mt-16" action="" method="POST" enctype="multipart/form-data">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Store information</div>
            </div>
            <div class="max-w-lg lg:mx-auto mx-auto text-center">
                <div class="py-16 px-7 rounded-md bg-white shadow-xl">
                    <div class="" action="" method="POST">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6"> -->
                          
                        <!-- <div class="inline-block mt-2 pr-1">
                                <label for="store_name" class="float-left font-normal block text-sm text-gray-600 text-lg">Nom</label>
                                <input type="text" id="store_name" name="store_name" placeholder="Nom" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div> -->
                            <!-- <div class="inline-block mt-2 pr-1">
                                <label for="phone_number" class="float-left font-normal block text-sm text-gray-600 text-lg">Téléphone</label>
                                <input type="text" id="phone_number" name="phone_number" placeholder="Téléphone" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div> -->

                            <!-- <div class="md:col-span-2">
                                <label for="email" class="float-left font-normal block text-sm text-gray-600 text-lg">Email</label>
                                <input type="email" id="email" name="email" placeholder="E-mail" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                            </div> -->
                            <!-- <div class="md:col-span-2">
                                <label for="category" class="float-left font-normal block text-sm text-gray-600 text-lg">Category</label>
                                <select id="category" name="category" class="w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <!-- <div class="md:col-span-2">
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
                            </div> -->
                            
                            <!-- <div class="md:col-span-2">
                                <label for="description" class="float-left font-normal block text-sm text-gray-600 text-lg">Description</label>
                                <textarea name="description" id="description" rows="5" cols="" placeholder="Votre Description" class="placeholder-gray-500 w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;"></textarea>
                            </div> -->
                        <!-- </div>
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
</form> -->
