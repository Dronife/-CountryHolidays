<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CountryRepository;
use Doctrine\ORM\Mapping as ORM;

//#[ORM\Entity(repositoryClass: CountryRepository::class)]
#[ApiResource(
    itemOperations: [],
    collectionOperations: ['get'],
)]
class Country
{
//    #[ORM\Id]
//    #[ORM\GeneratedValue]
//    #[ORM\Column(type: 'integer')]
    private $id;

    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

}
