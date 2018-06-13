<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AdminController extends Controller
{
    /**
     * @Route("/admin/colloque", name="admin_colloque")
     */
    public function colloqueAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/adminColloque.html.twig');
    }

    /**
     * @Route("/admin/utilisateurs", name="admin_utilisateurs")
     */
    public function utilisateursAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/adminUtilisateurs.html.twig');
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
