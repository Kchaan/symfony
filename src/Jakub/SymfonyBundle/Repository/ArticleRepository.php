<?php

namespace Jakub\SymfonyBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository
{
    public function vypis($nazov) {
        return $this->getEntityManager()
            ->createQuery( '
            SELECT a
            FROM JakubSymfonyBundle:Article a
            WHERE a.type = :id
            ORDER BY a.name ASC
            ')->setParameter('id',$nazov)
            ->getResult();
    }
}
