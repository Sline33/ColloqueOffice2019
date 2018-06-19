<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\Facture;
use AppBundle\Entity\Customer;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections;

/**
 * Ticket controller.
 *
 * @Route("ticket")
 */
class TicketController extends Controller
{
    /**
     * Lists all ticket entities.
     *
     * @Route("/", name="ticket_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tickets = $em->getRepository('AppBundle:Ticket')->findAll();

        return $this->render('ticket/index.html.twig', array(
            'tickets' => $tickets,
        ));
    }

    /**
     * Creates a new ticket entity.
     *
     * @Route("/new", name="ticket_new")
     * @Method({"GET", "POST"})
     */
    public function newActionAction(Request $request)
    {

        $prixExpotemporaire = 9;
        $prixBase = 300;
        $prixArtdeco = 6;
        $prixDecouverte = 9;
        $prixGrandsite = 6;
        $prixGala = 40;
        $prixTotal = $prixBase;

        $ticket = new Ticket();
        $form = $this->createForm('AppBundle\Form\TicketType', $ticket);
        $form->handleRequest($request);

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('AppBundle:Customer')->findByUser($user)[0];// @hack

        $ticket->setCustomer($customer);

        $result = false;

        if ($form->isSubmitted() && $form->isValid()) {
            $result = true;
            $data = $form->getData();
            if($data->getoptionDecouverte() === true) {
                $prixTotal += $prixDecouverte ;
            }
            if($data->getoptionGrandSite() === true) {
                $prixTotal += $prixGrandsite ;
            }
            if($data->getoptionArtDeco() == 1 || $data->getoptionArtDeco() == 2) {
                $prixTotal += $prixArtdeco ;
            }
            if($data->getoptionExpo() == 1 || $data->getoptionExpo() == 2) {
                $prixTotal += $prixExpotemporaire ;
            }
            if($data->getday2Night() === true) {
                $prixTotal += $prixGala ;
            }

            $random = random_int(1,999999);
            $ticket->setTicketNumber($random);
            $ticket->setPrice($prixTotal);

            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            
            if ($request->request->has('add')) {

                $watchFacture = $em->getRepository('AppBundle:Facture')->findOneByCustomer($customer);
                
                if(!$watchFacture) {

                    $facture = new Facture();
                    $facture->setCustomer($customer);
                    $ticket->setFacture($facture);
                    $prixtotal =  $em->getRepository('AppBundle:Ticket')->findByPrice($customer);
                    $facture->setPrice($prixtotal);
                    $facture->setStatus(0);
                    $facture->setNumber($random);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($facture);
                    $em->flush();

                }else{
                    $prixtotal =  $em->getRepository('AppBundle:Ticket')->findByPrice($customer);
                    $ticket->setFacture($watchFacture);
                    $watchFacture->setPrice($prixtotal);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($watchFacture);
                    $em->flush();

                }

                return $this->redirectToRoute('ticket_new');
            }

            if ($request->request->has('next')) {

                $watchFacture = $em->getRepository('AppBundle:Facture')->findOneByCustomer($customer);
                
                if(!$watchFacture) {

                    $facture = new Facture();
                    $facture->setCustomer($customer);
                    $ticket->setFacture($facture);
                    $prixtotal =  $em->getRepository('AppBundle:Ticket')->findByPrice($customer);
                    $facture->setPrice($prixtotal);
                    $facture->setStatus(0);
                    $facture->setNumber($random);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($facture);
                    $em->flush();

                }else{
                    $prixtotal =  $em->getRepository('AppBundle:Ticket')->findByPrice($customer);
                    $ticket->setFacture($watchFacture);
                    $watchFacture->setPrice($prixtotal);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($watchFacture);
                    $em->flush();

                }
                
                return $this->redirectToRoute('recap_new');
            }
        
        }
 
        return $this->render('ticket/new.html.twig', array(
            'ticket' => $ticket,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a ticket entity.
     *
     * @Route("/{id}", name="ticket_show")
     * @Method("GET")
     */
    public function showAction(Ticket $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);

        return $this->render('ticket/show.html.twig', array(
            'ticket' => $ticket,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ticket entity.
     *
     * @Route("/{id}/edit", name="ticket_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ticket $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $editForm = $this->createForm('AppBundle\Form\TicketType', $ticket);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ticket_edit', array('id' => $ticket->getId()));
        }

        return $this->render('ticket/edit.html.twig', array(
            'ticket' => $ticket,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ticket entity.
     *
     * @Route("/{id}", name="ticket_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ticket $ticket)
    {
        $form = $this->createDeleteForm($ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ticket);
            $em->flush();
        }

        return $this->redirectToRoute('ticket_index');
    }

    /**
     * Creates a form to delete a ticket entity.
     *
     * @param Ticket $ticket The ticket entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ticket $ticket)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticket_delete', array('id' => $ticket->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
