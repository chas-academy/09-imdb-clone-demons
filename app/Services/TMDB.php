<?php

namespace App\Services;

use GuzzleHttp\Client;

class TMDB
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.themoviedb.org/3/']);
    }

    public function get($endpoint, $query)
    {
        $API_KEY = env('API_KEY');

        $promise = $this->client->getAsync($endpoint, ['query' => array_merge(['api_key' => $API_KEY], $query)])->then(function ($response) {
            $data = json_decode($response->getBody(), true);
            return $data;
        });
        return $promise->wait();
    }
}
