
<!-- product-list.blade.php -->
<!-- product-list.blade.php -->

<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Product</th>
                            <th class="py-3 px-6 text-left">Provider</th>
                            <th class="py-3 px-6 text-center">Price</th>
                            <th class="py-3 px-6 text-center">Quantity</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($stocks as $stock)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                     @if ($stock->product->image === null)
                                        <img src="#"/>
                                     @else
                                        <img class="w-6 h-6 rounded-full" src="{{asset('images/product/'.$stock->product->image )}}" alt="{{$stock->product->name}}"/>
                                     @endif   
                                    </div>
                                    <span class="font-medium">{{ $stock->product->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                    @if ($stock->product->provider->store->image === null)
                                       <p>hh</p>
                                     @else
                                        <img class="w-6 h-6 rounded-full" src="{{asset('images/stores/'.$stock->product->provider->store->image)}}" alt="{{$stock->product->provider->name}}"/>
                                     @endif
                                    </div>
                                    @if ($stock->product->provider->store->name  === null)
                                        <span>name</span>
                                     @else
                                    <span>{{ $stock->product->provider->store->name  }}</span>
                                    @endif
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">{{$stock->product->price}}</td>
                            <td class="py-3 px-6 text-center">{{$stock->quantity}}</td>

                            <td class="py-4 px-6 text-center">
                                    <div class="flex item-center justify-center">

                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>

                                        <div  data-modal-target="myModal{{$stock->product->id}}"  class="showModalButton  w-4 h-6 bg-white text-blue rounded-full  mr-2 transform hover:text-purple-500 hover:scale-110">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
  </svg>
</div>

                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div >

                          </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



