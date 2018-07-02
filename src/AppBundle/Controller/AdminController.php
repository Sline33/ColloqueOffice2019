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
    // /**
    //  * Route("/admin/colloque", name="admin_colloque")
    //  */
    // public function colloqueAction()
    // {
    //
    //
    //   $em = $this->getDoctrine()->getManager();
    //
    //
    //   $user = $this->getUser();
    //   $customer  =  $em->getRepository('AppBundle:Customer')->findAll();
    //
    //   $tickets   =  $em->getRepository('AppBundle:Ticket')->findTicketsByStatus2();
    //
    //   $prixTotal   =  $em->getRepository('AppBundle:Ticket')->computeSumStatus2();
    //
    //   $personNumber = $em->getRepository('AppBundle:Ticket')->computeCountPersonNumber();
    //
    //
    //
    //   return $this->render('admin/adminColloque.html.twig', array(
    //       'tickets' => $tickets,
    //       'prixTotal' => $prixTotal,
    //       'personNumber' => $personNumber,
    //       'optionName' => $optionName,
    //       'optionValue' => $optionValue,
    //   ));
    // }

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
    public function paiementAction(Request $request)
    {
      $user = $this->getUser();
      $em = $this->getDoctrine()->getManager();
      $customers = $em->getRepository('AppBundle:Customer')->findAll();
      $factures  =  $em->getRepository('AppBundle:Facture')->findAll();

      if ($request->request->has('validerfacture')) {

        $id = $_POST['factureid'];
        $facture = $em->getRepository('AppBundle:Facture')->findOneById($id);
        $facture->setStatus(2);
        $em->persist($facture);
        $em->flush();

        $request->getSession()
        ->getFlashBag()
        ->add('validationfacture', 'La Facture n° '.$facture->getNumber().' est valider');

        return $this->render('admin/adminPaiement.html.twig', array(
            'customers' => $customers,
            'factures' => $factures,

        ));

      }


      return $this->render('admin/adminPaiement.html.twig', array(
          'customers' => $customers,
          'factures' => $factures,

      ));

    }

    /**
     * @Route("/admin/colloque", name="admin_colloque")
     * @Method("GET")
     */
    public function colloqueAction(Request $request)
    {

      $optionName = $request->query->get('optionName', null);
      $optionValue = $request->query->get('optionValue', null);

      $em = $this->getDoctrine()->getManager();

      if ($optionName && $optionValue){
        $prixTotal = null;
        $tickets = $em->getRepository('AppBundle:Ticket')->findPaidTicketsByOption($optionName,$optionValue);
        $personNumber = null;

      } else {

        $tickets   =  $em->getRepository('AppBundle:Ticket')->findTicketsByStatus2();
        $prixTotal   =  $em->getRepository('AppBundle:Ticket')->computeSumStatus2();
        $personNumber = $em->getRepository('AppBundle:Ticket')->computeCountPersonNumber();

      }



      return $this->render('admin/adminColloque.html.twig', array(
          'tickets' => $tickets,
          'prixTotal' => $prixTotal,
          'personNumber' => $personNumber,
          'optionName' => $optionName,
          'optionValue' => $optionValue,

      ));
    }
}
