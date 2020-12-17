<?php

namespace App\Repository;

use App\Entity\EntityOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EntityOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityOne[]    findAll()
 * @method EntityOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityOneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityOne::class);
    }

    // /**
    //  * @return EntityOne[] Returns an array of EntityOne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntityOne
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
