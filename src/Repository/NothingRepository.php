<?php

namespace App\Repository;

use App\Entity\Nothing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nothing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nothing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nothing[]    findAll()
 * @method Nothing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NothingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nothing::class);
    }

    // /**
    //  * @return Nothing[] Returns an array of Nothing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nothing
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
