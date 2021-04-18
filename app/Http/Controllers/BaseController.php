<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Location;


class BaseController extends Controller
{

    public function index(){
        return Inertia::render('Dashboard',[
            'locations' => Auth::user()->locations
        ]);
    }

    public function createLocation(Request $request){
        $user =  Auth::user();
        $token = $user->createToken('aspanlane')->accessToken;
        $parameters = [
            'location_latitud' => $request->location_latitud,
            'location_longitude' => $request->location_longitude,
            'user_id' => $user->id,
        ];
        $path = str_replace ("/location/create" , "" , $request->url() );
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ])->post($path. "/api/location",$parameters);
        if($response["status"]){
            return redirect('/')->with('message', 'Location Add Successfully.');
        }else{
            return redirect('/')>with('message', 'Location error');
        }
    }
}