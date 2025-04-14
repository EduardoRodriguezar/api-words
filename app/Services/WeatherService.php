<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.weatherapi.key');
    }

    public function getCurrentWeather($city)
{
    $url = "http://api.weatherapi.com/v1/forecast.json?key={$this->apiKey}&q={$city}&days=1&aqi=no";
    
    try {
        $response = $this->client->get($url);
        return json_decode($response->getBody(), true);
    } catch (\Exception $e) {
        return ['error' => 'No se pudo obtener el clima: ' . $e->getMessage()];
    }
}
}