<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Facture;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\User;
use AppBundle\Entity\Customer;
use Doctrine\ORM\EntityRepository;

class FactureRepository extends EntityRepository
{
    public function findOneByCustomer(Customer $customer)
    {
        
        $queryBuilder = $this->createQueryBuilder('f')
                ->where('f.customer = :customerid')
                ->andWhere('f.status = 0')
                ->setParameter('customerid',$customer->getId())
                ->getQuery();

        
        return $queryBuilder->getOneOrNullResult();

    }
    public function findByTickets(Customer $customer)
    {
        
        $queryBuilder = $this->createQueryBuilder('f')
                ->where('f.customer = :customerid')
                ->setParameter('customerid',$customer->getId())
                ->getQuery();
        
        return $queryBuilder->getResult();

    }

}