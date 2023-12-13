<?php

namespace App\Entity;

use App\Repository\TenantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TenantRepository::class)]
class Tenant
{
        public const SLUG = 'tenant';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titel = null;

    #[ORM\Column(length: 255)]
    private ?string $streetAndNumber = null;

    #[ORM\Column]
    private ?string  $CountryCode = null;

    #[ORM\Column]
    private ?string  $PLZ = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(string $titel): static
    {
        $this->titel = $titel;

        return $this;
    }

    public function getStreetAndNumber(): ?string
    {
        return $this->streetAndNumber;
    }

    public function setStreetAndNumber(string $streetAndNumber): static
    {
        $this->streetAndNumber = $streetAndNumber;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }

    public function setCountryCode(string  $CountryCode): static
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    public function getPLZ(): ?string
    {
        return $this->PLZ;
    }

    public function setPLZ(string $PLZ): static
    {
        $this->PLZ = $PLZ;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
}
