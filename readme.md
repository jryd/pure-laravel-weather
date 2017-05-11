# Pure Laravel Weather App

A weather application built with Laravel, hooking in to the DarkSky API for weather.

## Usage

Hitting the homepage will generate a forecast for the lcoation your IP address places you in.

You can specify the location you're after, though, by adding this in the URI; http://weather.app/{location}. The location is parsed by Google Maps to get a latitude and longitude for the DarkSky forecast.

## Installation

1. Clone the repo
2. `composer install --no-scripts`
3. Configure your `.env` file for your application. You can rename the `env.example` file to `.env` if required. Remember to generate an application key; this can be done with `php artisan key:generate`
4. Add your DarkSky API key and Google Maps API key to the `.env` file as `DARKSKY_KEY` and `GOOGLE_MAPS_KEY`
