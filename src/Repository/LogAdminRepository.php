<?php

namespace App\Repository;

use App\Entity\LogAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LogAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogAdmin[]    findAll()
 * @method LogAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogAdmin::class);
    }

    // /**
    //  * @return LogAdmin[] Returns an array of LogAdmin objects
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
    public function findOneBySomeField($value): ?LogAdmin
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
