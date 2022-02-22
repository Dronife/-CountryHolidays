<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Entity\Country;
use App\Interfaces\CountryInterface;


class CountryProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function __construct(CountryInterface $country)
    {
        $this->country = $country;
    }

    public function getCollection(string $resourceClass, string $operationName = null, array $context = []): iterable
    {
        return array_map(function($object){
            return $object['fullName'];
        }, $this->country->getCountries());
//        return $this->country->getCountries();

    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Country::class === $resourceClass;
    }

}