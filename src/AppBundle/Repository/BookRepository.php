<?php

namespace AppBundle\Repository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends \Doctrine\ORM\EntityRepository {

    public function fetch($limit = 5, $offset = 0) {
        $query_select = "SELECT p FROM AppBundle:Book p";

        $query = $this->getEntityManager()
                ->createQuery($query_select)
                ->setFirstResult($offset)
                ->setMaxResults($limit);
        
        return $query->getResult();
    }

}
