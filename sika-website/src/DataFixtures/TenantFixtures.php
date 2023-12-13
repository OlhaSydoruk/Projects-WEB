<?php

namespace App\DataFixtures;

use App\Entity\Tenant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class TenantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tenant = new Tenant();
        $tenant
            ->setSlug(Tenant::SLUG)
            ->setTitel("Sika Schweiz AG")
            ->setStreetAndNumber("Tüffenwies 16")
            ->setCountryCode("CH")
            ->setPLZ("8048")
            ->setCity("Zürich")
            ->setPhone("+41(0)584364040")
            ->setEmail("sika@sika.ch")
            ;


        $manager->persist($tenant);
        $manager->flush();
    }
}
