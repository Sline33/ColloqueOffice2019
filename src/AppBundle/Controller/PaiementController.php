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
class PaiementController extends Controller
{
    /**
     *
     * @Route("/paiement", name="paiement_facture")
     */
    public function paiementAction()
    {
        // $vads_action_mode = $form["vads_action_mode"]->getData();
        // dump($vads_action_mode);
        // exit();
        // $vads_amount =$form["vads_amount"]->getData();
        // $vads_capture_delay =$form["vads_capture_delay"]->getData();
        // $vads_ctx_mode =$form["vads_ctx_mode"]->getData();
        // $vads_currency =$form["vads_currency"]->getData();
        // $vads_cust_cell_phone =$form[""]->getData();
        // $vads_cust_city =$form[""]->getData();
        // $vads_cust_email =$form[""]->getData();
        // $vads_cust_first_name =$form[""]->getData();
        // $vads_cust_id =$form[""]->getData();
        // $vads_cust_last_name =$form[""]->getData();
        // $vads_cust_title =$form[""]->getData();
        // $vads_page_action =$form[""]->getData();
        // $vads_payment_config =$form[""]->getData();
        // $vads_site_id =$form[""]->getData();
        // $vads_trans_date =$form[""]->getData();
        // $vads_trans_id =$form[""]->getData();
        // $vads_url_return =$form[""]->getData();
        // $vads_version =$form[""]->getData();

        // $signature = sha1($str);

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $customer =   $em->getRepository('AppBundle:Customer')->findByUser($user)[0];// @hack

        $ticket   =   $em->getRepository('AppBundle:Ticket')->findByCustomer($customer);

        $tickets = new Collections\ArrayCollection($ticket);

        $prixtotal =  $em->getRepository('AppBundle:Ticket')->findByCustomer($customer)[0];
        // $prixtotals = new Collections\ArrayCollection($prixtotal);

        return $this->render('paiement/new.html.twig',array(
            'prixtotal' => $prixtotal,
        ));
    }
}