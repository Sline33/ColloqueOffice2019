<?php

/* default/index.html.twig */
class __TwigTemplate_27153992e2224efaf1fa3012d5d6df1177990fa9830c6e03345ae0db70866b2c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " - Home Page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <header>
      ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "welcome"), "method")) {
            // line 10
            echo "        <div class=\"d-flex justify-content-center\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "paiement"), "method")) {
            // line 17
            echo "      <div class=\"d-flex justify-content-center\">
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "paiement"), "method"));
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "promovalide"), "method")) {
            // line 24
            echo "    <div class=\"d-flex justify-content-center\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "promovalide"), "method"));
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
        echo "        <a href=\"http://google.fr\">
            <div class=\"d-flex justify-content-center banner-title\">
                <h1>Un territoire phœnix Du noir au vert</h1>
            </div>
        </a>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:1000PX;font-size:20px;\">
            <p>Revitaliser un territoire relève de registres variés et échappe à l’habituel ou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, mais aussi la dynamique culturelle, sociale, économique, ludique, …</p>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 50
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  263 => 50,  254 => 49,  239 => 95,  226 => 85,  214 => 76,  201 => 66,  193 => 61,  185 => 56,  179 => 52,  176 => 51,  174 => 49,  169 => 47,  166 => 46,  160 => 43,  157 => 42,  155 => 41,  142 => 30,  138 => 28,  129 => 26,  125 => 25,  122 => 24,  119 => 23,  115 => 21,  106 => 19,  102 => 18,  99 => 17,  96 => 16,  92 => 14,  83 => 12,  79 => 11,  76 => 10,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} - Home Page{% endblock %}

{% block body %}


    <header>
      {% if app.session.flashBag.has('welcome') %}
        <div class=\"d-flex justify-content-center\">
            {% for msg in app.session.flashBag.get('welcome') %}
                <p class=\"alert alert-success\">{{ msg }}</p>
            {% endfor %}
        </div>
    {% endif %}
    {% if app.session.flashBag.has('paiement') %}
      <div class=\"d-flex justify-content-center\">
          {% for msg in app.session.flashBag.get('paiement') %}
              <p class=\"alert alert-success\">{{ msg }}</p>
          {% endfor %}
      </div>
  {% endif %}
  {% if app.session.flashBag.has('promovalide') %}
    <div class=\"d-flex justify-content-center\">
        {% for msg in app.session.flashBag.get('promovalide') %}
            <p class=\"alert alert-success\">{{ msg }}</p>
        {% endfor %}
    </div>
{% endif %}
        <a href=\"http://google.fr\">
            <div class=\"d-flex justify-content-center banner-title\">
                <h1>Un territoire phœnix Du noir au vert</h1>
            </div>
        </a>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:1000PX;font-size:20px;\">
            <p>Revitaliser un territoire relève de registres variés et échappe à l’habituel ou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, mais aussi la dynamique culturelle, sociale, économique, ludique, …</p>
            <p> C’est aussi une articulation entre le top down et le bottom up, les actions des collectivités locales, la stimulation du privé et l’accueil d’initiativesrelevant de registres différents comme le démontre la labellisation Euralens qui salue tant une médiathèque originale qui relie un grand nombre d’actions, qu’un espace public dessiné par une artiste, ou un lieu improbable dans une cité jardin qui offre des actions sociales,d’agriculture bio, d’accueil hôtelier spécifiques, … mais aussi un parcours VTT dans les terrils réaménagés ou encore et surtout la mobilisation de lycées techniques en lien avec le monde économique, la formation numérique, etc..</p>
        </div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-secondary\" role=\"button\" href=\"{{ path('ticket_new') }}\" style=\"font-size:27px;\">RESERVER MAINTENANT</a>
        </div>
        {% else %}
        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-secondary\" role=\"button\" href=\"{{ path('fos_user_security_popup') }}\" style=\"font-size:27px;\">RESERVER MAINTENANT</a>
        </div>
        {% block modal %}
        {% endblock %}
        {% endif %}
    </section>
    <div class=\"container-fluid\" style=\"margin-top:20px;\">
        <div class=\"row  ligne1\">
            <div class=\"col-md-4 text-center\">
                <img src=\"{{ asset('img/louvreLens.jpg') }}\" alt=\"Louvre Lens\">
                <h5>Conférences au Louvre-Lens</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
            <div class=\"col-md-4 text-center\">
                <img src=\"{{ asset('img/soiree.jpg') }}\" alt=\"soirée Lens\">
                <h5>Une soirée d’exception</h5>
                <p class=\"\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
            <div class=\"col-md-4 text-center\">
            <img src=\"{{ asset('img/visites.jpg') }}\" alt=\"visites Arkéos\">
                <h5>Des visites inédites</h5>
                <p class=\"\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container-fluid\">
            <div class=\"row ligne1\">
                <div class=\"col-md-4 text-center\">
                    <img src=\"{{ asset('img/ville.jpg') }}\" alt=\"soirée Lens\">
                    <h5>Villes invitées</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p></p>
                </div>
                <div class=\"col-md-4 text-center\">
                    <iframe width=\"550\" height=\"300\" allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/djasM0VS8uo\"></iframe>
                    <h5>Euralens chaine des parcs (Video)</h5>
                </div>
                <div class=\"col-md-4  text-center\">
                    <img src=\"{{ asset('img/fete.jpg') }}\" alt=\"soirée Lens\">
                    <h5>Tout un programme de fêtes</h5>
                    <p class=\"text-center\"> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium temporibus earum ipsam at. Iure fugiat dicta, ad amet, nesciunt modi, autem incidunt veritatis officia fugit sint quisquam illo eum animi?</p></p>
                </div>
            </div>
        </div>
    </div>
    <div style=\"margin-top:50px;margin-bottom:50px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 d-flex justify-content-center align-items-center\"><a class=\"btn btn-secondary\" role=\"button\" href=\"{{ asset('files/Livret_A5_Odyssée.pdf') }}\" target=\"_blank\" style=\"margin-top:0px;font-size:25px;\">VOIR TOUT LE PROGRAMME</a></div>
            </div>
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/default/index.html.twig");
    }
}
