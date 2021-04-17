<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class HttpHelper
{

    /*public static function get($url)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody();
        return $response;
    }*/


    public static function post($url,$parameters) {
        return Http::post($url,$parameters);
    }
}