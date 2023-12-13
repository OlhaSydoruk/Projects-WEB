<?php

namespace App\Repository;

use App\Entity\FooterInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FooterInfo>
 *
 * @method FooterInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method FooterInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method FooterInfo[]    findAll()
 * @method FooterInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FooterInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FooterInfo::class);
    }

//    /**
//     * @return FooterInfo[] Returns an array of FooterInfo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FooterInfo
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
