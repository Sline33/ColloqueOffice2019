<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Facture;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\User;
use AppBundle\Entity\Customer;
use Doctrine\ORM\EntityRepository;

class TicketRepository extends EntityRepository
{
    public function findByCustomer(Customer $customer)
    {   
        $queryBuilder = $this->createQueryBuilder('t')
            ->where('t.customer = :customerid')
            ->setParameter('customerid',$customer->getId())
            ->getQuery();

        return $queryBuilder->getResult();
    }

    public function findByPrice(Customer $customer)
    {
        $queryBuilder = $this->createQueryBuilder('t')
        ->where('t.customer = :customerid')
        ->setParameter('customerid',$customer->getId())
        ->select('SUM(t.price) as prixtotal')
        ->getQuery();

        return $queryBuilder->getSingleScalarResult();

        // return $this->getEntityManager()
        //     ->queryBuilder
        //     ->innerJoin('t', 'Customer', 'c', 't.customer_id = :customerid')
        //     ->setParameter('customerid',$customer->getId())
        //     ->getResult();
    
    }
}