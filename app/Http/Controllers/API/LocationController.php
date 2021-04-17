<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResource;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LocationController extends Controller
{


    public function index(){
        return LocationResource::collection(Location::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'location_latitud' => ['required', 'string', 'max:255'],
            'location_longitude' => ['required', 'string', 'max:255'],
        ])->validate();
 
        $location = New Location();
        $location->location_latitud = $request->location_latitud;
        $location->location_longitude = $request->location_longitude;
        $location->user()->associate(User::findOrFail($request->user_id));
        $location->save();

        return response([
            'status' => true,
            'message' => "Location created"
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::where("id",$id)->get()->first();
        if(!is_null($location)){
            return  new LocationResource(Location::find($id));
        }

        return response([
            'status' => false,
            'message' => "Location does not exist"
        ]);
    }

}
