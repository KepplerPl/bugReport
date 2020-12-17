<?php

namespace App\Repository;

use App\Entity\EntityTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EntityTwo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityTwo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityTwo[]    findAll()
 * @method EntityTwo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityTwoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityTwo::class);
    }

    // /**
    //  * @return EntityTwo[] Returns an array of EntityTwo objects
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
    public function findOneBySomeField($value): ?EntityTwo
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
