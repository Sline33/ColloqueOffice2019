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
      ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "welcome"), "method")) {
            // line 10
            echo "        <div class=\"d-flex justify-content-center\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "paiement"), "method")) {
            // line 17
            echo "      <div class=\"d-flex justify-content-center\">
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "paiement"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 19
                echo "              <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </div>
  ";
        }
        // line 23
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "promovalide"), "method")) {
            // line 24
            echo "    <div class=\"d-flex justify-content-center\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "promovalide"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 26
                echo "            <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </div>
";
        }
        // line 30
        echo "        <a href=\"google.fr\">
            <div class=\"d-flex justify-content-center banner-title\">
                <h1>Un territoire phœnix Du noir au vert</h1>
            </div>
        </a>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:1000PX;font-size:20px;\">
            <p>Revitaliser un territoire relève de registres variés et échappe à l’habituelou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, mais aussi la dynamique culturelle, sociale, économique, ludique, …</p>
            <p> C’est aussi une articulation entre le top down et le bottom up, les actions des collectivités locales, la stimulation du privé et l’accueil d’initiativesrelevant de registres différents comme le démontre la labellisation Euralens qui salue tant une médiathèque originale qui relie un grand nombre d’actions, qu’un espace public dessiné par une artiste, ou un lieu improbable dans une cité jardin qui offre des actions sociales,d’agriculture bio, d’accueil hôtelier spécifiques, … mais aussi un parcours VTT dans les terrils réaménagés ou encore et surtout la mobilisation de lycées techniques en lien avec le monde économique, la formation numérique, etc..</p>
        </div>
        ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-secondary\" role=\"button\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
            echo "\" style=\"font-size:27px;\">RESERVER MAINTENANT</a>
        </div>
        ";
        } else {
            // line 46
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-secondary\" role=\"button\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_popup");
            echo "\" style=\"font-size:27px;\">RESERVER MAINTENANT</a>
        </div>
        ";
            // line 49
            $this->displayBlock('modal', $context, $blocks);
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </section>
    <div class=\"container-fluid\" style=\"margin-top:20px;\">
        <div class=\"row  ligne1\">
            <div class=\"col-md-4 text-center\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/louvreLens.jpg"), "html", null, true);
        echo "\" alt=\"Louvre Lens\">
                <h5>Conférences au Louvre-Lens</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
            <div class=\"col-md-4 text-center\">
                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/soiree.jpg"), "html", null, true);
        echo "\" alt=\"soirée Lens\">
                <h5>Une soirée d’exception</h5>
                <p class=\"\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
            <div class=\"col-md-4 text-center\">
            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/visites.jpg"), "html", null, true);
        echo "\" alt=\"visites Arkéos\">
                <h5>Des visites inédites</h5>
                <p class=\"\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container-fluid\">
            <div class=\"row ligne1\">
                <div class=\"col-md-4 text-center\">
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ville.jpg"), "html", null, true);
        echo "\" alt=\"soirée Lens\">
                    <h5>Villes invitées</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p></p>
                </div>
                <div class=\"col-md-4 text-center\">
                    <iframe width=\"550\" height=\"300\" allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/djasM0VS8uo\"></iframe>
                    <h5>Euralens chaine des parcs (Video)</h5>
                </div>
                <div class=\"col-md-4  text-center\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fete.jpg"), "html", null, true);
        echo "\" alt=\"soirée Lens\">
                    <h5>Tout un programme de fêtes</h5>
                    <p class=\"text-center\"> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p></p>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:50px;margin-bottom:50px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center align-items-center\"><a class=\"btn btn-secondary\" role=\"button\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/Livret_A5_Odyssée.pdf"), "html", null, true);
        echo "\" target=\"_blank\" style=\"margin-top:0px;font-size:25px;\">VOIR TOUT LE PROGRAMME</a></div>
            </div>
        </div>
    </div>
";
    }

    // line 49
    public function block_modal($context, array $blocks = array())
    {
        // line 50
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
        return array (  221 => 50,  218 => 49,  209 => 95,  196 => 85,  184 => 76,  171 => 66,  163 => 61,  155 => 56,  149 => 52,  146 => 51,  144 => 49,  139 => 47,  136 => 46,  130 => 43,  127 => 42,  125 => 41,  112 => 30,  108 => 28,  99 => 26,  95 => 25,  92 => 24,  89 => 23,  85 => 21,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  62 => 14,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/default/index.html.twig");
    }
}
