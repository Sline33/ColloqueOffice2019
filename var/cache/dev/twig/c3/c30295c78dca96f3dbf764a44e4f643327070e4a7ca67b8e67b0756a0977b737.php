<?php

/* admin/adminPaiement.html.twig */
class __TwigTemplate_9f02373a32b58462c8b84dc76dba017205e2b96e7bc1959cac42af89ce632e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminPaiement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminPaiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminPaiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div style=\"text-align:center;\">
         <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
        echo "\" style=\"font-size:25px;color:black;\">Retour</a>
    </div>
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "validationfacture"), "method")) {
            // line 9
            echo "      <div class=\"d-flex justify-content-center\">
          ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "validationfacture"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 11
                echo "              <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "      </div>
    ";
        }
        // line 15
        echo "    <div style=\"margin-left:40px;margin-right:40px;margin-top:100px;\">
        <div class=\"container-fluid border-util\">
            <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
              <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\">
                  <tr>
                    <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                    <th class=\"user_form\" data-sort=\"string\">Nom</th>
                    <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                    <th class=\"user_form\" data-sort=\"string\">N° Facture</th>
                    <th class=\"user_form text-center\" data-sort=\"string\" >Status</th>
                    <th class=\"user_form text-center\" data-sort=\"string\">Paiement</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 33
            echo "                    <td style=\"padding-top:5px;\">";
            if (($this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "sexe", array()) == 0)) {
                echo "Mme";
            } elseif (($this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "sexe", array()) == 1)) {
                echo "Mr";
            }
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "number", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 37
            if (($this->getAttribute($context["facture"], "status", array()) == 0)) {
                echo "<div class=\"loader loader--style1\" title=\"0\">
  <svg version=\"1.1\" id=\"loader-1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
   width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
  <path opacity=\"0.2\" fill=\"#000\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\"/>
  <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z\">
    <animateTransform attributeType=\"xml\"
      attributeName=\"transform\"
      type=\"rotate\"
      from=\"0 20 20\"
      to=\"360 20 20\"
      dur=\"0.5s\"
      repeatCount=\"indefinite\"/>
    </path>
  </svg>
</div>";
            } elseif (($this->getAttribute(            // line 54
$context["facture"], "status", array()) == 1)) {
                echo "<i class=\"fas fa-times text-center\" style=\"color:red;\"></i>";
            } else {
                echo "<i class=\"fas fa-check text-center\" style=\"color:green;\"></i>";
            }
            echo "</td>
                    <td class=\"text-center\">";
            // line 55
            if (($this->getAttribute($context["facture"], "status", array()) == 1)) {
                // line 56
                echo "                      <form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_paiement");
                echo "\" method=\"post\" action=\"\" onSubmit=\"return confirm('Etes-vous sur de vouloir valider cette facture ?')\">
                        <input type=\"text\" name=\"factureid\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", array()), "html", null, true);
                echo "\" hidden>
                        <input type=\"submit\" class=\"btn btn-primary\"  name=\"validerfacture\" value=\"Valider Facture\"/>
                    </form>";
            } else {
            }
            // line 59
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
              </table>
            </div>
        </div>
      </div>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
      <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/valider.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminPaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 73,  192 => 72,  188 => 71,  184 => 70,  174 => 62,  166 => 59,  159 => 57,  154 => 56,  152 => 55,  144 => 54,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  103 => 33,  99 => 32,  80 => 15,  76 => 13,  67 => 11,  63 => 10,  60 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

    <div style=\"text-align:center;\">
         <a class=\"nav-link\" href=\"{{ path('admin_page') }}\" style=\"font-size:25px;color:black;\">Retour</a>
    </div>
    {% if app.session.flashBag.has('validationfacture') %}
      <div class=\"d-flex justify-content-center\">
          {% for msg in app.session.flashBag.get('validationfacture') %}
              <p class=\"alert alert-success\">{{ msg }}</p>
          {% endfor %}
      </div>
    {% endif %}
    <div style=\"margin-left:40px;margin-right:40px;margin-top:100px;\">
        <div class=\"container-fluid border-util\">
            <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
              <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\">
                  <tr>
                    <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                    <th class=\"user_form\" data-sort=\"string\">Nom</th>
                    <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                    <th class=\"user_form\" data-sort=\"string\">N° Facture</th>
                    <th class=\"user_form text-center\" data-sort=\"string\" >Status</th>
                    <th class=\"user_form text-center\" data-sort=\"string\">Paiement</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    {% for facture in factures %}
                    <td style=\"padding-top:5px;\">{% if facture.customer.sexe == 0 %}Mme{% elseif facture.customer.sexe == 1 %}Mr{% endif %}</td>
                    <td>{{facture.customer.firstname}}</td>
                    <td>{{facture.customer.lastname}}</td>
                    <td>{{facture.number}}</td>
                    <td class=\"text-center\">{% if facture.status == 0 %}<div class=\"loader loader--style1\" title=\"0\">
  <svg version=\"1.1\" id=\"loader-1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
   width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
  <path opacity=\"0.2\" fill=\"#000\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\"/>
  <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z\">
    <animateTransform attributeType=\"xml\"
      attributeName=\"transform\"
      type=\"rotate\"
      from=\"0 20 20\"
      to=\"360 20 20\"
      dur=\"0.5s\"
      repeatCount=\"indefinite\"/>
    </path>
  </svg>
</div>{% elseif facture.status == 1 %}<i class=\"fas fa-times text-center\" style=\"color:red;\"></i>{% else %}<i class=\"fas fa-check text-center\" style=\"color:green;\"></i>{% endif %}</td>
                    <td class=\"text-center\">{% if facture.status == 1 %}
                      <form action=\"{{ path('admin_paiement') }}\" method=\"post\" action=\"\" onSubmit=\"return confirm('Etes-vous sur de vouloir valider cette facture ?')\">
                        <input type=\"text\" name=\"factureid\" value=\"{{facture.id}}\" hidden>
                        <input type=\"submit\" class=\"btn btn-primary\"  name=\"validerfacture\" value=\"Valider Facture\"/>
                    </form>{% else %}{% endif %}</td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
        </div>
      </div>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
      <script src=\"{{ asset('js/stupidtable.js') }}\"></script>
      <script src=\"{{ asset('js/stupidtable.min.js') }}\"></script>
      <script src=\"{{ asset('js/sort.js') }}\"></script>
      <script src=\"{{ asset('js/valider.js') }}\"></script>
{% endblock %}
", "admin/adminPaiement.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\admin\\adminPaiement.html.twig");
    }
}
