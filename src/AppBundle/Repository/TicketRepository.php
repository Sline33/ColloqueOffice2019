<?php


namespace AppBundle\Repository;

use AppBundle\Entity\User;
use AppBundle\Entity\Customer;
use Doctrine\ORM\EntityRepository;

class TicketRepository extends EntityRepository
{
    public function findByCustomer(Customer $customer)
    {
      
        return $this->getEntityManager()
            ->queryBuilder
            ->select('*')
            ->from('Ticket', 't')
            ->innerJoin('t', 'Customer', 'c', 't.customer_id = :customerid')
            ->setParameter('customerid',$customer->getId())
            ->getSingleScalarResult();
    
    } 
}

// ->createQuery(
//     'SELECT * FROM Customer c INNER JOIN User u WHERE c.user.id = :userid'
// )     u.id = c.user_id