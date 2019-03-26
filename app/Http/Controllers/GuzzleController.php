<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function get($endpoint, $query = '') {
        $api_key = env('API_KEY');

        $client = new Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', "https://api.themoviedb.org/3/movie/{$endpoint}?api_key={$api_key}&language=en-US&{$query}");
        $promise = $client->sendAsync($request)->then(function ($response) {
            $data = json_decode($response->getBody(), true);
            return $data;
        });
        return $promise->wait();
    }
}
