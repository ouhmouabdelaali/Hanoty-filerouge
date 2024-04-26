<form class="mt-16" action="{{ route('updatestore', ['storeId' => $user->store->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                                <select id="category" name="category" class="w-full border border-black rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" style="color: black;">
                                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
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
        <button type="submit" class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Update</button>
    </div>
</form>