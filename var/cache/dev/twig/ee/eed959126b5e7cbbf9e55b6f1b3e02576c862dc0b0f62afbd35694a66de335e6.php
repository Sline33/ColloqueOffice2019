<?php

/* admin/adminColloque.html.twig */
class __TwigTemplate_69e7766aa954eb806ba2b01091c32c3a0f3f9f829b09f274e45b2fe9e90e5d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminColloque.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminColloque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminColloque.html.twig"));

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
        echo "<div class=\"container-fluid\" style=\"margin-top:35px\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"d-flex justify-content-center\">
                <button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button>
            </div>
            <div class=\"row\" style=\"padding:20px;margin-top:15px;\">
                <div class=\"col-md-12\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                    <button value=\"28\" style=\"margin-bottom:15px;\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Visite", "optionValue" => "1")), "html", null, true);
        echo "\">
                          <div class=\"form-check\">
                            <input data-key=\"phrase-1\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-21\" value=\"0\" name='radio'>
                            <label class=\"form-check-label\"
                          for=\"formCheck-21\">&nbsp;Visite 1</label>
                        </div>
                        </a>
                        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Visite", "optionValue" => "2")), "html", null, true);
        echo "\">
                            <div class=\"form-check\"><input data-key=\"phrase-2\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-22\" value=\"1\" name='radio'><label class=\"form-check-label\" for=\"formCheck-22\">&nbsp;Visite 2</label></div>
                            </a>
                            <div class=\"form-check\"><input data-key=\"phrase-3\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-23\" value=\"2\" name='radio'><label class=\"form-check-label\" for=\"formCheck-23\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-24\" value=\"3\" name='radio'><label class=\"form-check-label\" for=\"formCheck-24\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-25\" value=\"4\" name='radio'><label class=\"form-check-label\" for=\"formCheck-25\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-26\" value=\"5\" name='radio'><label class=\"form-check-label\" for=\"formCheck-26\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-27\" value=\"6\" name='radio'><label class=\"form-check-label\" for=\"formCheck-27\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-28\" value=\"7\" name='radio'><label class=\"form-check-label\" for=\"formCheck-28\">&nbsp;Transport Hebergement</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-29\" value=\"8\" name='radio'><label class=\"form-check-label\" for=\"formCheck-29\">&nbsp;Soirée Louvre  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-20\" value=\"9\" name='radio'><label class=\"form-check-label\" style=\"margin-bottom:15px;\" for=\"formCheck-20\">&nbsp;Soirée Transport Hebergement</label></div>
                        </div>
                    </div>
                    <div>
                        <button value=\"29\" style=\"margin-bottom:15px;\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-11\" value=\"10\" name='radio'><label class=\"form-check-label\" for=\"formCheck-11\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-12\" value=\"11\" name='radio'><label class=\"form-check-label\" for=\"formCheck-12\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-13\" value=\"12\" name='radio'><label class=\"form-check-label\" for=\"formCheck-13\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-14\" value=\"13\" name='radio'><label class=\"form-check-label\" for=\"formCheck-14\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-15\" value=\"14\" name='radio'><label class=\"form-check-label\" for=\"formCheck-15\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-16\" value=\"15\" name='radio'><label class=\"form-check-label\" for=\"formCheck-16\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-17\" value=\"16\" name='radio'><label class=\"form-check-label\" for=\"formCheck-17\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-18\" value=\"17\" name='radio'><label class=\"form-check-label\" style=\"margin-bottom:15px;\" for=\"formCheck-18\">&nbsp;Transport Hebergement</label></div>
                        </div>
                    </div>
                    <div>
                        <button value=\"30\" style=\"margin-bottom:15px;\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-1\" value=\"18\" name='radio'><label class=\"form-check-label\" for=\"formCheck-1\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-2\" value=\"19\" name='radio'><label class=\"form-check-label\" for=\"formCheck-2\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-3\" value=\"20\" name='radio'><label class=\"form-check-label\" for=\"formCheck-3\">&nbsp;Visite 3</label></div>
                            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionExpo", "optionValue" => "1")), "html", null, true);
        echo "\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-4\" value=\"21\" name='radio'><label class=\"form-check-label\" for=\"formCheck-4\">&nbsp;Exposition 8 JUIN | PRIX</label></div>
                            </a>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-5\" value=\"22\" name='radio'><label class=\"form-check-label\" for=\"formCheck-5\">&nbsp;Exposition 9 JUIN | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-6\" value=\"23\" name='radio'><label class=\"form-check-label\" for=\"formCheck-6\">&nbsp;Visite Art Déco 8 Juin  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-7\" value=\"24\" name='radio'><label class=\"form-check-label\" for=\"formCheck-7\">&nbsp;Visite Art Déco 9 Juin  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-8\" value=\"25\" name='radio'><label class=\"form-check-label\" for=\"formCheck-8\">&nbsp;Visite Découverte  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-9\" value=\"26\" name='radio'><label class=\"form-check-label\" for=\"formCheck-9\">&nbsp;Visite Notre-Dame, ...  | PRIX</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"col-md-9\" style=\"min-height:auto;\">
            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">Toutes les réservations</p>
                    <p id=\"evenement\" style=\"font-size:22px;font-weight:bold;\"></p>
                    <p id=\"personNumber\" style=\"font-size:22px;font-weight:bold;\">";
        // line 74
        echo twig_escape_filter($this->env, ($context["personNumber"] ?? $this->getContext($context, "personNumber")), "html", null, true);
        echo "</p>
                </div>
            </div>

        <table id=\"table\" class=\"col-md-12\">
          <thead class=\"user_form2\">
            <tr>
              <th class=\"user_form\" data-sort=\"string\">Nom</th>
              <th class=\"user_form\" data-sort=\"string\">Prenom</th>
              <th class=\"user_form\" data-sort=\"string\">Societe</th>
              <th class=\"user_form\" data-sort=\"string\">N° de Ticket</th>
              <th class=\"user_form\" data-sort=\"string\">Prix</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 90
            echo "            <tr>
              <td style=\"padding-top:5px;\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "LastName", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1TransportTrain", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Breakfast", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Visite", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1TransportBus", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportBus", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Visite", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Breakfast", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportTrain", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Night", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportBusNight", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionVisite", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionExpo", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionArtDeco", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionDecouverte", array()), "html", null, true);
            echo "</td>
              <td hidden>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionGrandSite", array()), "html", null, true);
            echo "</td>
            </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "          </tbody>
        </table>
<div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-center totalprix\">
                    <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">TOTAL : ";
        // line 118
        echo twig_escape_filter($this->env, ($context["prixTotal"] ?? $this->getContext($context, "prixTotal")), "html", null, true);
        echo " €</p>
                </div>
            </div>
        </div>
    </div>


    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminColloque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 118,  241 => 114,  231 => 110,  227 => 109,  223 => 108,  219 => 107,  215 => 106,  211 => 105,  207 => 104,  203 => 103,  199 => 102,  195 => 101,  191 => 100,  187 => 99,  183 => 98,  179 => 97,  175 => 96,  171 => 95,  167 => 94,  163 => 93,  159 => 92,  155 => 91,  152 => 90,  148 => 89,  130 => 74,  107 => 54,  72 => 22,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container-fluid\" style=\"margin-top:35px\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"d-flex justify-content-center\">
                <button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button>
            </div>
            <div class=\"row\" style=\"padding:20px;margin-top:15px;\">
                <div class=\"col-md-12\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                    <button value=\"28\" style=\"margin-bottom:15px;\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                        <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Visite','optionValue' : '1' }) }}\">
                          <div class=\"form-check\">
                            <input data-key=\"phrase-1\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-21\" value=\"0\" name='radio'>
                            <label class=\"form-check-label\"
                          for=\"formCheck-21\">&nbsp;Visite 1</label>
                        </div>
                        </a>
                        <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Visite','optionValue' : '2' }) }}\">
                            <div class=\"form-check\"><input data-key=\"phrase-2\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-22\" value=\"1\" name='radio'><label class=\"form-check-label\" for=\"formCheck-22\">&nbsp;Visite 2</label></div>
                            </a>
                            <div class=\"form-check\"><input data-key=\"phrase-3\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-23\" value=\"2\" name='radio'><label class=\"form-check-label\" for=\"formCheck-23\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-24\" value=\"3\" name='radio'><label class=\"form-check-label\" for=\"formCheck-24\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-25\" value=\"4\" name='radio'><label class=\"form-check-label\" for=\"formCheck-25\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-26\" value=\"5\" name='radio'><label class=\"form-check-label\" for=\"formCheck-26\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-27\" value=\"6\" name='radio'><label class=\"form-check-label\" for=\"formCheck-27\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-28\" value=\"7\" name='radio'><label class=\"form-check-label\" for=\"formCheck-28\">&nbsp;Transport Hebergement</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-29\" value=\"8\" name='radio'><label class=\"form-check-label\" for=\"formCheck-29\">&nbsp;Soirée Louvre  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-20\" value=\"9\" name='radio'><label class=\"form-check-label\" style=\"margin-bottom:15px;\" for=\"formCheck-20\">&nbsp;Soirée Transport Hebergement</label></div>
                        </div>
                    </div>
                    <div>
                        <button value=\"29\" style=\"margin-bottom:15px;\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-11\" value=\"10\" name='radio'><label class=\"form-check-label\" for=\"formCheck-11\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-12\" value=\"11\" name='radio'><label class=\"form-check-label\" for=\"formCheck-12\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-13\" value=\"12\" name='radio'><label class=\"form-check-label\" for=\"formCheck-13\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-14\" value=\"13\" name='radio'><label class=\"form-check-label\" for=\"formCheck-14\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-15\" value=\"14\" name='radio'><label class=\"form-check-label\" for=\"formCheck-15\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-16\" value=\"15\" name='radio'><label class=\"form-check-label\" for=\"formCheck-16\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-17\" value=\"16\" name='radio'><label class=\"form-check-label\" for=\"formCheck-17\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-18\" value=\"17\" name='radio'><label class=\"form-check-label\" style=\"margin-bottom:15px;\" for=\"formCheck-18\">&nbsp;Transport Hebergement</label></div>
                        </div>
                    </div>
                    <div>
                        <button value=\"30\" style=\"margin-bottom:15px;\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-1\" value=\"18\" name='radio'><label class=\"form-check-label\" for=\"formCheck-1\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-2\" value=\"19\" name='radio'><label class=\"form-check-label\" for=\"formCheck-2\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-3\" value=\"20\" name='radio'><label class=\"form-check-label\" for=\"formCheck-3\">&nbsp;Visite 3</label></div>
                            <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionExpo','optionValue' : '1' }) }}\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-4\" value=\"21\" name='radio'><label class=\"form-check-label\" for=\"formCheck-4\">&nbsp;Exposition 8 JUIN | PRIX</label></div>
                            </a>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-5\" value=\"22\" name='radio'><label class=\"form-check-label\" for=\"formCheck-5\">&nbsp;Exposition 9 JUIN | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-6\" value=\"23\" name='radio'><label class=\"form-check-label\" for=\"formCheck-6\">&nbsp;Visite Art Déco 8 Juin  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-7\" value=\"24\" name='radio'><label class=\"form-check-label\" for=\"formCheck-7\">&nbsp;Visite Art Déco 9 Juin  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-8\" value=\"25\" name='radio'><label class=\"form-check-label\" for=\"formCheck-8\">&nbsp;Visite Découverte  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-9\" value=\"26\" name='radio'><label class=\"form-check-label\" for=\"formCheck-9\">&nbsp;Visite Notre-Dame, ...  | PRIX</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"col-md-9\" style=\"min-height:auto;\">
            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">Toutes les réservations</p>
                    <p id=\"evenement\" style=\"font-size:22px;font-weight:bold;\"></p>
                    <p id=\"personNumber\" style=\"font-size:22px;font-weight:bold;\">{{personNumber}}</p>
                </div>
            </div>

        <table id=\"table\" class=\"col-md-12\">
          <thead class=\"user_form2\">
            <tr>
              <th class=\"user_form\" data-sort=\"string\">Nom</th>
              <th class=\"user_form\" data-sort=\"string\">Prenom</th>
              <th class=\"user_form\" data-sort=\"string\">Societe</th>
              <th class=\"user_form\" data-sort=\"string\">N° de Ticket</th>
              <th class=\"user_form\" data-sort=\"string\">Prix</th>
            </tr>
          </thead>
          <tbody>
            {% for ticket in tickets %}
            <tr>
              <td style=\"padding-top:5px;\">{{ticket.firstName}}</td>
              <td>{{ticket.LastName}}</td>
              <td>{{ticket.society}}</td>
              <td>{{ticket.ticketNumber}}</td>
              <td>{{ticket.price}}</td>
              <td hidden>{{ ticket.day1TransportTrain}}</td>
              <td hidden>{{ ticket.day1Breakfast }}</td>
              <td hidden>{{ ticket.day1Visite }}</td>
              <td hidden>{{ ticket.day1TransportBus }}</td>
              <td hidden>{{ ticket.day2TransportBus }}</td>
              <td hidden>{{ ticket.day2Visite }}</td>
              <td hidden>{{ ticket.day2Breakfast }}</td>
              <td hidden>{{ ticket.day2TransportTrain }}</td>
              <td hidden>{{ ticket.day2Night }}</td>
              <td hidden>{{ ticket.day2TransportBusNight}}</td>
              <td hidden>{{ ticket.optionVisite }}</td>
              <td hidden>{{ ticket.optionExpo }}</td>
              <td hidden>{{ ticket.optionArtDeco }}</td>
              <td hidden>{{ ticket.optionDecouverte}}</td>
              <td hidden>{{ ticket.optionGrandSite }}</td>
            </td>
            </tr>
            {% endfor %}
          </tbody>
        </table>
<div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-center totalprix\">
                    <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">TOTAL : {{prixTotal}} €</p>
                </div>
            </div>
        </div>
    </div>


    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

{% endblock %}
", "admin/adminColloque.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\admin\\adminColloque.html.twig");
    }
}
