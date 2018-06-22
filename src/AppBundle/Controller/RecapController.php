<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;
use AppBundle\Repository\TicketRepository;


class RecapController extends Controller
{
    /**
     * @Route("/recap", name="recap_new")
     */
    public function recapitulatifAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $customer  =  $em->getRepository('AppBundle:Customer')->findByUser($user)[0];

        $tickets   =  $em->getRepository('AppBundle:Ticket')->findTicketsByStatusCommandeEnCours($customer);

        $facture   =  $em->getRepository('AppBundle:Facture')->findOneByCustomer($customer);
        $prixtotal =  $em->getRepository('AppBundle:Ticket')->computeSum($facture);
       
        $facture->setPrice($prixtotal);


        return $this->render('recap/new.html.twig', array(
            'prixtotal' => $prixtotal,
            'customer' => $customer,
            'tickets' => $tickets,
            'user' => $user,
        ));
    }
}