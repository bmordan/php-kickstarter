<?php

namespace App\Repository;

use App\Entity\Pledge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Pledge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pledge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pledge[]    findAll()
 * @method Pledge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PledgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pledge::class);
    }

    // /**
    //  * @return Pledge[] Returns an array of Pledge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pledge
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
