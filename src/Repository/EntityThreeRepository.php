<?php

namespace App\Repository;

use App\Entity\EntityThree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EntityThree|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityThree|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityThree[]    findAll()
 * @method EntityThree[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityThreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityThree::class);
    }

    // /**
    //  * @return EntityThree[] Returns an array of EntityThree objects
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
    public function findOneBySomeField($value): ?EntityThree
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
