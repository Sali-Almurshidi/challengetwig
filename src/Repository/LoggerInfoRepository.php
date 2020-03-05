<?php

namespace App\Repository;

use App\Entity\LoggerInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LoggerInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoggerInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoggerInfo[]    findAll()
 * @method LoggerInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoggerInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoggerInfo::class);
    }

    // /**
    //  * @return LoggerInfo[] Returns an array of LoggerInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LoggerInfo
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
