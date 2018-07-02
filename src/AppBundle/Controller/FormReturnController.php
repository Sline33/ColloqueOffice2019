<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;



class FormReturnController extends Controller
{

  /**
   *
   * @Route("/return", name="formreturn")
   * @Method({"GET", "POST"})
   */
  public function paiementReturnAction(Request $request)
  {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $customer =   $em->getRepository('AppBundle:Customer')->findByUser($user)[0];
        $facture = $em->getRepository('AppBundle:Facture')->findOneByCustomer($customer);

        $vads_trans_status = $_POST['vads_trans_status'];

        if($vads_trans_status == 'REFUSED'){

        $facture->setStatus(0);
        $em->persist($facture);
        $em->flush();

        return $this->redirectToRoute('paiement_facture');
      }else if ($vads_trans_status == 'AUTHORISED'){

        $facture->setStatus(2);
        $em->persist($facture);
        $em->flush();

        return $this->redirectToRoute('customer_show');

      }
 }

 /**
  *
  * @Route("/returnipn", name="formipnreturn")
  * @Method({"POST"})
  */
 public function paiementIpnReturnAction(Request $request)
 {

    $post = $request->$request->all();

    $em = $this->getDoctrine()->getManager();

    $vads_trans_status = $post['vads_trans_status'];
    $vads_trans_id = $post['vads_trans_id'];
    $signature = $post['signature'];

    $facture = $em->getRepository('AppBundle:Facture')->find($vads_trans_id);





    if($signature == $facture->getSignature()){
      if($vads_trans_status == 'REFUSED'){

        $facture->setStatus(0);
        $em->persist($facture);
        $em->flush();

       return $this->redirectToRoute('paiement_facture');
      } else if ($vads_trans_status == 'AUTHORISED') {

        $facture->setStatus(2);
        $em->persist($facture);
        $em->flush();

        return new Response('ok');

      }
    }
  }
}
