<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;
use AppBundle\Repository\TicketRepository;

/**
 * Ticket controller.
 *
 * @Route("ticket")
 */
class PostPaiementController extends Controller
{
    /**
     *
     * @Route("/paiement/test", name="postpaiement_facture")
     * @Method("POST")
     */
    public function paiementAction(Request $request)
    {
      $user = $this->getUser();
      $em = $this->getDoctrine()->getManager();

      $customer =   $em->getRepository('AppBundle:Customer')->findByUser($user)[0];
      $facture = $em->getRepository('AppBundle:Facture')->findOneByCustomer($customer);
      $prixtotal =  $em->getRepository('AppBundle:Ticket')->computeSum($facture);
      $prixPayzen = $prixtotal * 100;


      return $this->redirectToRoute('fos_user_security_homepage');


    }
}
