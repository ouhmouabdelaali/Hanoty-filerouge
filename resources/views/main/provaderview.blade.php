@extends('component.app')

@section('content')

@include('component.navebare')

<div class="sm:flex items-center shadow-md">
    <div class="md:px-10 sm:px-5">
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20 mt-32">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="{{ asset('images/logos/' . $user->store->logo) }}">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">{{ $user->store->name }}</h2>
                <p class="mt-2 text-gray-600">{{ $user->store->description }}</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
            </div>
        </div>
    </div>
    <div>
        <img class="bg-cover" src="{{ asset('images/stores/' . $user->store->image) }}" alt="" />
    </div>
</div>



<div class="px-6" style="width: 100%;">
    <div class="flex mt-12 bg-white rounded-md shadow">
        <div class="w-64 bg-white rounded-l-md border-r border-dashed border-red-200">
            <div class="flex justify-center items-center h-32 text-indigo-900 text-center font-semibold text-3xl italic">
                Categories
            </div>
            @foreach ($souscategorys as $souscategory)
            <p class="py-2"><a href="#" class="hover:bg-gray-200 px-4 block">{{ $souscategory->name }}</a></p>
            @endforeach
        </div>
        <div class="flex-grow">
            <div class="px-10 py-20 bg-white grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
                @foreach ($user->store->stocks as $stock)
                @isset($stock)
                <a href="#">
                    <div class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer">
                        <div>
                            <img src="https://www.macworld.com/wp-content/uploads/2022/01/macbook-pro-compare.jpg?quality=50&strip=all&w=1024" alt="" />
                        </div>
                        <div class="py-4 px-4 bg-white">
                            <h3 class="text-md font-semibold text-gray-600">{{ $stock->product->name }}</h3>
                            <p class="mt-4 text-lg font-thin">${{ $stock->product->price }}</p>
                            <span class="flex items-center justify-center mt-4 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <button class="font-semibold text-gray-800">Add to Basket</button>
                            </span>
                        </div>
                    </div>
                </a>
                @endisset
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('component.footer')

@endsection
