<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DepartmentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DepartmentRepository extends EntityRepository
{
    public function findByName($searchDeptTerm) {
        return $this->getEntityManager()
    ->createQuery(
        "SELECT b
        FROM AppBundle:Department b
        WHERE b.name LIKE '%$searchDeptTerm%'
        ORDER BY b.name ASC"
    )
    ->getResult();
    } 
}
