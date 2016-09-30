<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Requestss;

use App\Http\Requests;
use GuzzleHttp\Client;
use Geocoder;
use Request;
use App;

class SearchController extends Controller
{
    public function getWeather($location = null, $day = null)
    {
        if($location)
        {
            $adapter = App::make('geocoder.adapter');
            $providers = array(
                new \Geocoder\Provider\GoogleMapsProvider($adapter, 'AIzaSyBj_e6ulytCPHnmHokBLJ7hyA6iPs1wEdY'),
            );
            
            try {
                Geocoder::registerProviders($providers);
                Geocoder::using('GoogleMapsProvider');
                $geocode = Geocoder::geocode($location);
                // The GoogleMapsProvider will return a result
                $client = new Client();
                $weather_response = $client->request('GET', 'https://api.darksky.net/forecast/' . env('DARKSKY_KEY') . '/'. $geocode['latitude'] .',' . $geocode['longitude'] . '?units=si');
                $weather = json_decode($weather_response->getBody());

                return view('pages.home', compact('weather'));
            } catch (\Exception $e) {
                // No exception will be thrown here
                echo $e->getMessage();
            }
        }
        else
        {
            $client = new Client();
            /*$geo_response = $client->request('GET', 'http://geoip.nekudo.com/api/' . Request::getClientIp());*/
            $geo_response = $client->request('GET', 'http://geoip.nekudo.com/api/165.225.98.81');
            $location = json_decode($geo_response->getBody());
            
            $weather_response = $client->request('GET', 'https://api.darksky.net/forecast/' . env('DARKSKY_KEY') . '/'. $location->location->latitude .',' . $location->location->longitude);
            $weather = json_decode($weather_response->getBody());
            dd($weather);
        }
        
    }
}
