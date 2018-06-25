<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;
use AppBundle\Repository\TicketRepository;

class AdminController extends Controller
{
    /**
     * @Route("/admin/colloque", name="admin_colloque")
     */
    public function colloqueAction()
    {


      $em = $this->getDoctrine()->getManager();


      $user = $this->getUser();
      $customer  =  $em->getRepository('AppBundle:Customer')->findAll($user)[0];

      $tickets   =  $em->getRepository('AppBundle:Ticket')->findTicketsByStatus2($customer);

      $prixTotal   =  $em->getRepository('AppBundle:Ticket')->computeSumStatus2($customer);

      $personNumber = $em->getRepository('AppBundle:Ticket')->computeCountPersonNumber($customer);

      return $this->render('admin/adminColloque.html.twig', array(
          'tickets' => $tickets,
          'prixTotal' => $prixTotal,
          'personNumber' => $personNumber,

      ));
    }

    /**
     * @Route("/admin/utilisateurs", name="admin_utilisateurs")
     */
    public function utilisateursAction()
    {


      $em = $this->getDoctrine()->getManager();
      $customers = $em->getRepository('AppBundle:Customer')->findAll();

      return $this->render('admin/adminUtilisateurs.html.twig', array(
          'customers' => $customers,

      ));
    }

    /**
     * @Route("/admin/paiement", name="admin_paiement")
     */
    public function paiementAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/adminPaiement.html.twig');
    }
}
