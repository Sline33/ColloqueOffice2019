<?php

/* default/index.html.twig */
class __TwigTemplate_f1792ce0ac0e0ab76edff6c96d6ed7de7c765310006e66d483eff1c31e9ae3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " - Home Page";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <header>
        <div class=\"d-flex justify-content-center\">
            <h1>Un territoire phœnix Du noir au vert</h1>
        </div>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:850PX;\">
            <p class=\"text-center\"><em>Revitaliser un territoire relève de registres variés et échappe à l’habituelou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, maisaussi la dynamique culturelle, sociale, économique, ludique, … C’estaussi une articulation entre le top down et le bottom up, les actions descollectivités locales, la stimulation du privé et l’accueil d’initiativesrelevant de registres différents comme le démontre la labellisationEuralens qui salue tant une médiathèque originale qui relie un grandnombre d’actions, qu’un espace public dessiné par une artiste, ou un lieuimprobable dans une cité jardin qui offre des actions sociales,d’agriculture bio, d’accueil hôtelier spécifiques, … mais aussi unparcours VTT dans les terrils réaménagés ou encore et surtout lamobilisation de lycées techniques en lien avec le monde économique, laformation numérique, etc..</em><br></p>
        </div>
        ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
            echo "\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        ";
        } else {
            // line 22
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_popup");
            echo "\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        ";
            // line 25
            $this->displayBlock('modal', $context, $blocks);
            // line 27
            echo "        ";
        }
        // line 28
        echo "    </section>
    <div style=\"margin-top:100px;margin-bottom:20px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Conférences au&nbsp;<br>Louvre-Lens<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Une soirée d’exception<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Des visites inédites<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Villes invitées<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Tout un programme&nbsp;<br>de fêtes<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
                <div class=\"col-md-4 d-flex justify-content-between\"><img>
                    <div>
                        <h5>Des visites inédites<br></h5>
                        <p class=\"text-center\">eaeaeaaeeaeaeaaeeaeaea<br>eaeaeaaeeaeaeaaeeaea<br>eaeaeaaeeaeaeaaeeaeaea<br>ea<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:100px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center align-items-center\"><a class=\"btn btn-primary\" role=\"button\" href=\"#\" style=\"margin-top:0px;font-size:25px;\">VOIR TOUT LE PROGRAMME</a></div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:100px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-xl-12 d-flex justify-content-center\"><iframe width=\"560\" height=\"315\" allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/djasM0VS8uo\"></iframe></div>
            </div>
        </div>
    </div>
    <footer style=\"margin-top:20px;\">
        <div>
            <p class=\"text-center\" style=\"font-size:60px;\">FOOTER</p>
        </div>
    </footer>
";
    }

    // line 25
    public function block_modal($context, array $blocks = array())
    {
        // line 26
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 26,  148 => 25,  76 => 28,  73 => 27,  71 => 25,  66 => 23,  63 => 22,  57 => 19,  54 => 18,  52 => 17,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/default/index.html.twig");
    }
}
