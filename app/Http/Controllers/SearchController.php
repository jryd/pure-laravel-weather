<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use Geocoder;

class SearchController extends Controller
{
    public function getWeather($location = null, $day = null)
    {
        try {
            $geocode = Geocoder::geocode('10 rue Gambetta, Paris, France');
            // The GoogleMapsProvider will return a result
            var_dump($geocode);
        } catch (\Exception $e) {
            // No exception will be thrown here
            echo $e->getMessage();
        }

        if($location)
        {
            
        }
        else
        {
            $client = new Client();
            $response = $client->request('GET', 'http://geoip.nekudo.com/api/' . Request::getClientIp());
            $location = json_decode($response->getBody());
        }
        
    }
}
