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

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/ticket/new", name="ticket_new")
     */
    public function resAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('ticket/new.html.twig');
    }

    /**
     * @Route("/recapitulatif", name="recapitulatif")
     */
    public function recapAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/recapitulatif.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/erreurlogin", name="popup")
     */
    public function popupAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/modal.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("../customer/new", name="new")
     * @Method({"GET", "POST"})
     */
    public function customerNewAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $this->render('customer/new.html.twig', array(
            'user' => $user,
            'targetUrl' => $this->getTargetUrlFromSession($request->getSession()),
        ));
    }
    /**
     * @Route("/admin/", name="admin_page")
     * 
     */
    public function adminPageAction(Request $request)
    {   

        
        return $this->render('admin/admin.html.twig');
    }
}
    
