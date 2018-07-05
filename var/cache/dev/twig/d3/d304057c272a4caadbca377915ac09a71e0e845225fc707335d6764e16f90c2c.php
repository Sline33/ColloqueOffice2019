<?php

/* admin/adminPaiement.html.twig */
class __TwigTemplate_bd12cb09067559979b760555acf31437cc5c6c43191abcecfc462046d4d70f19 extends Twig_Template
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
        echo "<div class=\"container\" style=\"margin-top:25px;\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-3\">
          <a class=\"nav-link btn btn-primary\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
        echo "\" style=\"font-size:25px;color:black;color:white;\">Menu Admin</a>
    </div>
  </div>
</div>
";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "validationfacture"), "method")) {
            // line 12
            echo "<div class=\"d-flex justify-content-center\">
";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "validationfacture"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 14
                echo "  <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
";
        }
        // line 18
        echo "<div style=\"margin-left:40px;margin-right:40px;margin-top:100px;margin-bottom:25px;\">
    <div class=\"container-fluid border-util\">
        <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
            <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;\">
                    <tr>
                        <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                        <th class=\"user_form\" data-sort=\"string\">Nom</th>
                        <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                        <th class=\"user_form\" data-sort=\"string\">N° Facture</th>
                        <th class=\"user_form\" data-sort=\"string\">Prix</th>
                        <th class=\"user_form text-center\" data-sort=\"string\">Status</th>
                        <th class=\"user_form text-center\" data-sort=\"string\">Paiement</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 37
            echo "                      <td style=\"padding-top:5px;\">
                          ";
            // line 38
            if (($this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "sexe", array()) == 0)) {
                echo "Mme";
            } elseif (($this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "sexe", array()) == 1)) {
                echo "Mr";
            }
            // line 39
            echo "                      </td>
                      <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "firstname", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "customer", array()), "lastname", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "number", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "price", array()), "html", null, true);
            echo " €</td>
                      <td class=\"text-center\">
                          ";
            // line 45
            if (($this->getAttribute($context["facture"], "status", array()) == 0)) {
                // line 46
                echo "                              <p>Achat en cours</p>
                          ";
            } elseif (($this->getAttribute(            // line 47
$context["facture"], "status", array()) == 1)) {
                // line 48
                echo "                              <i class=\"fas fa-times text-center\" style=\"color:red;\"></i>
                          ";
            } else {
                // line 50
                echo "                              <i class=\"fas fa-check text-center\" style=\"color:green;\"></i>
                          ";
            }
            // line 52
            echo "                      </td>
                      <td class=\"text-center\">
                          ";
            // line 54
            if (($this->getAttribute($context["facture"], "status", array()) == 1)) {
                // line 55
                echo "                              <form action=\"\" method=\"post\" onsubmit=\"return confirm('Etes-vous sur de vouloir valider cette facture ?')\">
                                  <input type=\"text\" name=\"factureid\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", array()), "html", null, true);
                echo "\" hidden=\"hidden\">
                                  <input type=\"submit\" class=\"btn btn-primary\" name=\"validerfacture\" value=\"Valider Facture\"/>
                              </form>
                          ";
            } else {
                // line 60
                echo "                          ";
            }
            // line 61
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
      <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 75
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
        return array (  200 => 75,  196 => 74,  192 => 73,  188 => 72,  178 => 64,  170 => 61,  167 => 60,  160 => 56,  157 => 55,  155 => 54,  151 => 52,  147 => 50,  143 => 48,  141 => 47,  138 => 46,  136 => 45,  131 => 43,  127 => 42,  123 => 41,  119 => 40,  116 => 39,  110 => 38,  107 => 37,  103 => 36,  83 => 18,  79 => 16,  70 => 14,  66 => 13,  63 => 12,  61 => 11,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container\" style=\"margin-top:25px;\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-3\">
          <a class=\"nav-link btn btn-primary\" href=\"{{ path('admin_page') }}\" style=\"font-size:25px;color:black;color:white;\">Menu Admin</a>
    </div>
  </div>
</div>
{% if app.session.flashBag.has('validationfacture') %}
<div class=\"d-flex justify-content-center\">
{% for msg in app.session.flashBag.get('validationfacture') %}
  <p class=\"alert alert-success\">{{ msg }}</p>
{% endfor %}
</div>
{% endif %}
<div style=\"margin-left:40px;margin-right:40px;margin-top:100px;margin-bottom:25px;\">
    <div class=\"container-fluid border-util\">
        <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
            <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;\">
                    <tr>
                        <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                        <th class=\"user_form\" data-sort=\"string\">Nom</th>
                        <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                        <th class=\"user_form\" data-sort=\"string\">N° Facture</th>
                        <th class=\"user_form\" data-sort=\"string\">Prix</th>
                        <th class=\"user_form text-center\" data-sort=\"string\">Status</th>
                        <th class=\"user_form text-center\" data-sort=\"string\">Paiement</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                      {% for facture in factures %}
                      <td style=\"padding-top:5px;\">
                          {% if facture.customer.sexe == 0 %}Mme{% elseif facture.customer.sexe == 1 %}Mr{% endif %}
                      </td>
                      <td>{{facture.customer.firstname}}</td>
                      <td>{{facture.customer.lastname}}</td>
                      <td>{{facture.number}}</td>
                      <td>{{facture.price}} €</td>
                      <td class=\"text-center\">
                          {% if facture.status == 0 %}
                              <p>Achat en cours</p>
                          {% elseif facture.status == 1 %}
                              <i class=\"fas fa-times text-center\" style=\"color:red;\"></i>
                          {% else %}
                              <i class=\"fas fa-check text-center\" style=\"color:green;\"></i>
                          {% endif %}
                      </td>
                      <td class=\"text-center\">
                          {% if facture.status == 1 %}
                              <form action=\"\" method=\"post\" onsubmit=\"return confirm('Etes-vous sur de vouloir valider cette facture ?')\">
                                  <input type=\"text\" name=\"factureid\" value=\"{{facture.id}}\" hidden=\"hidden\">
                                  <input type=\"submit\" class=\"btn btn-primary\" name=\"validerfacture\" value=\"Valider Facture\"/>
                              </form>
                          {% else %}
                          {% endif %}
                      </td>
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
", "admin/adminPaiement.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/admin/adminPaiement.html.twig");
    }
}
