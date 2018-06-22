<?php


namespace AppBundle\Repository;

use AppBundle\Entity\User;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Facture;
use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{
    public function findByUser(User $user)
    {
      
        return $this->getEntityManager()
            ->queryBuilder
            ->select('*')
            ->from('Customer', 'c')
            ->innerJoin('c', 'User', 'u', 'c.user.id = :userid')
            ->setParameter('userid',$user->getId())
            ->getOneOrNullResult();
    
    }
}


// ->createQuery(
//     'SELECT * FROM Customer c INNER JOIN User u WHERE c.user.id = :userid'
// )     u.id = c.user_id
// getSingleScalarResult