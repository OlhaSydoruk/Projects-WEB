<?php
declare(strict_types=1);

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use SplDoublyLinkedList;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $userPasswordHasher,
    ) { }

    public function load(ObjectManager $manager): void
    {

        $user = new User();
       $user
           ->setName("Linda")
           ->setSurname("Lavazza")
           ->setEmail("user@ongoing.ch")
           ->setPassword($this->userPasswordHasher->hashPassword($user, "123456"))
           ->setRoles([User::ROLE_USER])
       ;


        $user2 = new User();
        $user2
            ->setName("Admin")
            ->setSurname("Istrator")
            ->setEmail("admin@ongoing.ch")
            ->setPassword($this->userPasswordHasher->hashPassword($user, "admin"))
            ->setRoles(['ROLE_ADMIN'])
            ;



        $manager->persist($user);

        $manager->persist($user2);

        // ??
       $manager->flush();
    }
}
