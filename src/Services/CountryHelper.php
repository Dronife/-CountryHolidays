<?php

namespace App\Services;

use App\Interfaces\CountryInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CountryHelper implements CountryInterface
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getCountries() : iterable
    {
        $response = $this->client->request(
            'GET',
            'https://kayaposoft.com/enrico/json/v2.0/?action=getSupportedCountries'
        );
        return $response->toArray();

    }
}