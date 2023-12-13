<?php


namespace App\Twig;

use App\Entity\Tenant;
use App\Repository\TenantRepository;
use Twig\TwigFunction;

class InfoTwigExtension extends \Twig\Extension\AbstractExtension
{
public function __construct(
    private TenantRepository $tenantRepository //  конструктор   (Symfony8)  самостійно шукає TenantRepository
)
{

}

    public function  getFunctions()
    {
        return [
            new TwigFunction('getTenant', [$this, 'showTenantFunction']),
            ];


    }

    public function showTenantFunction():Tenant
    {

    return  $this->tenantRepository->findOneBy(['slug'=>Tenant::SLUG]);
    }



}
