<?php

namespace App\Repository;

use App\Entity\DirecteursDeCasting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DirecteursDeCasting>
 *
 * @method DirecteursDeCasting|null find($id, $lockMode = null, $lockVersion = null)
 * @method DirecteursDeCasting|null findOneBy(array $criteria, array $orderBy = null)
 * @method DirecteursDeCasting[]    findAll()
 * @method DirecteursDeCasting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DirecteursDeCastingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DirecteursDeCasting::class);
    }

    public function add(DirecteursDeCasting $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DirecteursDeCasting $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DirecteursDeCasting[] Returns an array of DirecteursDeCasting objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DirecteursDeCasting
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
