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
            ->join('t.facture', 'f')
            ->where('t.customer = :customerid')
            ->setParameter('customerid',$customer->getId())
            ->orderBy('f.status' , 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }
    // public function findTicketByCustomer(Customer $customer)
    // {   
    //     $queryBuilder = $this->createQueryBuilder('t')

    //         ->where('t.customer = :customerid')
    //         ->setParameter('customerid',$customer->getId())
    //         ->getQuery();

    //     return $queryBuilder->getResult();
    // }
    public function findByPrice(Customer $customer)
    {
        $queryBuilder = $this->createQueryBuilder('t')
        ->where('t.customer = :customerid')
        ->setParameter('customerid',$customer->getId())
        ->select('SUM(t.price) as prixtotal')
        ->andWhere('t.facture is null')
        ->getQuery();

        return $queryBuilder->getSingleScalarResult();    
    }

    public function findPriceByStatus(Customer $customer)
    {
        $queryBuilder = $this->createQueryBuilder('t')
        ->join('t.facture', 'f')
        ->where('t.customer = :customerid')
        ->setParameter('customerid',$customer->getId())
        ->select('SUM(t.price) as prixtotal')
        ->andWhere('f.status = 0')
        ->getQuery();

        return $queryBuilder->getSingleScalarResult();    
    }
    
    public function findTicketsByStatusCommandeEnCours(Customer $customer)
    {   
        $queryBuilder = $this->createQueryBuilder('t')
            ->join('t.facture', 'f')
            ->where('t.customer = :customerid')
            ->setParameter('customerid',$customer->getId())
            ->andWhere('f.status = 0')
            ->orderBy('f.status' , 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }
//@Placer dans un service
    public function computeSum(Facture $facture) {

        $query = $this->createQueryBuilder('t')
        ->select('SUM(t.price) AS ticket_price')
        ->join('t.facture', 'f')
        ->where('f.id = :factureId')
        ->setParameter('factureId', $facture->getid())
        ->getQuery();

        return $query->getSingleScalarResult();
    }
}