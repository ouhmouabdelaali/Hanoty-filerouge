<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{    public function getStreets($city)
    {
        // Retrieve streets for the given city
        $streets = Address::where('city', $city)->pluck('street')->toArray();
        
        return response()->json($streets);
    }

    public function getCities($state)
    {
        // Retrieve cities for the given state
        $cities = Address::where('state', $state)->pluck('city')->toArray();
        
        return response()->json($cities);
    }

    public function getStates($country)
    {
        // Retrieve states for the given country
        $states = Address::where('country', $country)->pluck('state')->toArray();
        
        return response()->json($states);
    }
}
