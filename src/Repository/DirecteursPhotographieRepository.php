<?php

namespace App\Repository;

use App\Entity\DirecteursPhotographie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DirecteursPhotographie>
 *
 * @method DirecteursPhotographie|null find($id, $lockMode = null, $lockVersion = null)
 * @method DirecteursPhotographie|null findOneBy(array $criteria, array $orderBy = null)
 * @method DirecteursPhotographie[]    findAll()
 * @method DirecteursPhotographie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DirecteursPhotographieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DirecteursPhotographie::class);
    }

    public function add(DirecteursPhotographie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DirecteursPhotographie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DirecteursPhotographie[] Returns an array of DirecteursPhotographie objects
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

//    public function findOneBySomeField($value): ?DirecteursPhotographie
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
