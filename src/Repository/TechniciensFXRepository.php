<?php

namespace App\Repository;

use App\Entity\TechniciensFX;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TechniciensFX>
 *
 * @method TechniciensFX|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechniciensFX|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechniciensFX[]    findAll()
 * @method TechniciensFX[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechniciensFXRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TechniciensFX::class);
    }

    public function add(TechniciensFX $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TechniciensFX $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TechniciensFX[] Returns an array of TechniciensFX objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TechniciensFX
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
