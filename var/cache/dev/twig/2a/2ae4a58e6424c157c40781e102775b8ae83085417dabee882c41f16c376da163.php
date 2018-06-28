<?php

/* default/index.html.twig */
class __TwigTemplate_d3cb7817b858ce82dc7c7e83617b2ffa1cc87fea6e5bbcfb15db20d4299f06a2 extends Twig_Template
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
        echo "        <div class=\"d-flex justify-content-center\">
            <h1>Un territoire phœnix Du noir au vert</h1>
        </div>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:850PX;\">
            <p class=\"text-center\"><em>Revitaliser un territoire relève de registres variés et échappe à l’habituelou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, maisaussi la dynamique culturelle, sociale, économique, ludique, … C’estaussi une articulation entre le top down et le bottom up, les actions descollectivités locales, la stimulation du privé et l’accueil d’initiativesrelevant de registres différents comme le démontre la labellisationEuralens qui salue tant une médiathèque originale qui relie un grandnombre d’actions, qu’un espace public dessiné par une artiste, ou un lieuimprobable dans une cité jardin qui offre des actions sociales,d’agriculture bio, d’accueil hôtelier spécifiques, … mais aussi unparcours VTT dans les terrils réaménagés ou encore et surtout lamobilisation de lycées techniques en lien avec le monde économique, laformation numérique, etc..</em><br></p>
        </div>
        ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
            echo "\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        ";
        } else {
            // line 43
            echo "        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_popup");
            echo "\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        ";
            // line 46
            $this->displayBlock('modal', $context, $blocks);
            // line 48
            echo "        ";
        }
        // line 49
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
                <div class=\"col-md-12 d-flex justify-content-center align-items-center\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("files/ticket.pdf"), "html", null, true);
        echo "\" target=\"_blank\" style=\"margin-top:0px;font-size:25px;\">VOIR TOUT LE PROGRAMME</a></div>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 47
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
        return array (  261 => 47,  252 => 46,  230 => 101,  176 => 49,  173 => 48,  171 => 46,  166 => 44,  163 => 43,  157 => 40,  154 => 39,  152 => 38,  142 => 30,  138 => 28,  129 => 26,  125 => 25,  122 => 24,  119 => 23,  115 => 21,  106 => 19,  102 => 18,  99 => 17,  96 => 16,  92 => 14,  83 => 12,  79 => 11,  76 => 10,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
        <div class=\"d-flex justify-content-center\">
            <h1>Un territoire phœnix Du noir au vert</h1>
        </div>
    </header>
    <section class=\"d-flex flex-column align-items-center\">
        <div style=\"max-width:850PX;\">
            <p class=\"text-center\"><em>Revitaliser un territoire relève de registres variés et échappe à l’habituelou/ou pour appréhender le et/et : la régénération urbaine, l’espace public,la mobilité, la qualité spatiale, environnementale et architecturale, maisaussi la dynamique culturelle, sociale, économique, ludique, … C’estaussi une articulation entre le top down et le bottom up, les actions descollectivités locales, la stimulation du privé et l’accueil d’initiativesrelevant de registres différents comme le démontre la labellisationEuralens qui salue tant une médiathèque originale qui relie un grandnombre d’actions, qu’un espace public dessiné par une artiste, ou un lieuimprobable dans une cité jardin qui offre des actions sociales,d’agriculture bio, d’accueil hôtelier spécifiques, … mais aussi unparcours VTT dans les terrils réaménagés ou encore et surtout lamobilisation de lycées techniques en lien avec le monde économique, laformation numérique, etc..</em><br></p>
        </div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('ticket_new') }}\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        {% else %}
        <div style=\"margin-top:25px;\">
          <a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('fos_user_security_popup') }}\" style=\"font-size:27px;\">RESERVEZ</a>
        </div>
        {% block modal %}
        {% endblock %}
        {% endif %}
    </section>
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
                <div class=\"col-md-12 d-flex justify-content-center align-items-center\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{ asset('files/ticket.pdf') }}\" target=\"_blank\" style=\"margin-top:0px;font-size:25px;\">VOIR TOUT LE PROGRAMME</a></div>
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
{% endblock %}
", "default/index.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\default\\index.html.twig");
    }
}
