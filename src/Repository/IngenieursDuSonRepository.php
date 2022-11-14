<?php

namespace App\Repository;

use App\Entity\IngenieursDuSon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IngenieursDuSon>
 *
 * @method IngenieursDuSon|null find($id, $lockMode = null, $lockVersion = null)
 * @method IngenieursDuSon|null findOneBy(array $criteria, array $orderBy = null)
 * @method IngenieursDuSon[]    findAll()
 * @method IngenieursDuSon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngenieursDuSonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IngenieursDuSon::class);
    }

    public function add(IngenieursDuSon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(IngenieursDuSon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return IngenieursDuSon[] Returns an array of IngenieursDuSon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IngenieursDuSon
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
