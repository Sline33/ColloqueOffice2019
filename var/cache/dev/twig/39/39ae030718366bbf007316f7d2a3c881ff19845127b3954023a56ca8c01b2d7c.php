<?php

/* admin/adminUtilisateurs.html.twig */
class __TwigTemplate_50b1ef14719febe97154accb68113d52f82cbd1fd351ff0f2e2bf17a73d02416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminUtilisateurs.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminUtilisateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminUtilisateurs.html.twig"));

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
<div style=\"margin-left:40px;margin-right:40px;margin-top:50px;margin-bottom:25px;\">
    <div class=\"container-fluid border-util\">
        <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
          <table id=\"table\" class=\"col-md-12\">
            <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;\">
              <tr>
                <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                <th class=\"user_form\" data-sort=\"string\">Nom</th>
                <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                <th class=\"user_form\" data-sort=\"string\">Societe</th>
                <th class=\"user_form\" data-sort=\"string\">Email</th>
                <th class=\"user_form\" data-sort=\"string\">Adresse</th>
                <th class=\"user_form\" data-sort=\"int\">CP</th>
                <th class=\"user_form\" data-sort=\"string\">Ville</th>
                <th class=\"user_form\" data-sort=\"string\">Telephone</th>
              </tr>
            </thead>
 
            <tbody>
              <tr>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 32
            echo "                <td style=\"padding-top:5px;\">";
            if (($this->getAttribute($context["customer"], "sexe", array()) == 0)) {
                echo "Mme";
            } elseif (($this->getAttribute($context["customer"], "sexe", array()) == 1)) {
                echo "Mr";
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "society", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["customer"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "adress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "cp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "town", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "phonenumber", array()), "html", null, true);
            echo "</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
          </table>
        </div>
    </div>
  </div>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
      <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminUtilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  145 => 52,  141 => 51,  131 => 43,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  85 => 32,  81 => 31,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div style=\"margin-left:40px;margin-right:40px;margin-top:50px;margin-bottom:25px;\">
    <div class=\"container-fluid border-util\">
        <div class=\"row d-flex flex-row\" style=\"margin:0;margin-right:0;margin-left:0;\">
          <table id=\"table\" class=\"col-md-12\">
            <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;\">
              <tr>
                <th class=\"user_form\" data-sort=\"string\">Civilite</th>
                <th class=\"user_form\" data-sort=\"string\">Nom</th>
                <th class=\"user_form\" data-sort=\"string\">Prenom</th>
                <th class=\"user_form\" data-sort=\"string\">Societe</th>
                <th class=\"user_form\" data-sort=\"string\">Email</th>
                <th class=\"user_form\" data-sort=\"string\">Adresse</th>
                <th class=\"user_form\" data-sort=\"int\">CP</th>
                <th class=\"user_form\" data-sort=\"string\">Ville</th>
                <th class=\"user_form\" data-sort=\"string\">Telephone</th>
              </tr>
            </thead>
 
            <tbody>
              <tr>
                {% for customer in customers %}
                <td style=\"padding-top:5px;\">{% if customer.sexe == 0 %}Mme{% elseif customer.sexe == 1 %}Mr{% endif %}</td>
                <td>{{customer.lastname}}</td>
                <td>{{customer.firstname}}</td>
                <td>{{customer.society}}</td>
                <td>{{customer.user.email}}</td>
                <td>{{customer.adress}}</td>
                <td>{{customer.cp}}</td>
                <td>{{customer.town}}</td>
                <td>{{customer.phonenumber}}</td>
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
{% endblock %}
", "admin/adminUtilisateurs.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/admin/adminUtilisateurs.html.twig");
    }
}
