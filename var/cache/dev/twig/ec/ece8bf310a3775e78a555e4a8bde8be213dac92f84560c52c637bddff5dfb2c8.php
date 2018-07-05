<?php

/* admin/adminColloque.html.twig */
class __TwigTemplate_4a66898768e8c94d9b27acdfc9b0ee85adf5ca597072611b16972962eb92d8b3 extends Twig_Template
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
<div class=\"container-fluid\" style=\"margin-top:35px;margin-bottom:25px;\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"d-flex justify-content-center\">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque");
        echo "\">
                    <button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button>
                </a>
            </div>
            <div style=\"padding:20px;margin-top:15px;\">
                <div class=\"col-md-12\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                    <button value=\"28\" style=\"margin-bottom:15px;\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                            <div>
                                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1TransportTrain", "optionValue" => "1")), "html", null, true);
        echo "\">Transport SNCF</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Visite", "optionValue" => "1")), "html", null, true);
        echo "\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Visite", "optionValue" => "2")), "html", null, true);
        echo "\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Visite", "optionValue" => "3")), "html", null, true);
        echo "\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Breakfast", "optionValue" => "1")), "html", null, true);
        echo "\">Repas 1</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Breakfast", "optionValue" => "2")), "html", null, true);
        echo "\">Repas 2</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1Breakfast", "optionValue" => "3")), "html", null, true);
        echo "\">Repas 3</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day1TransportBus", "optionValue" => "1")), "html", null, true);
        echo "\">Transport Hebergement</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button value=\"29\" style=\"margin-bottom:15px;\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div>
                                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2TransportBus", "optionValue" => "1")), "html", null, true);
        echo "\">Transport Hebergement</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Visite", "optionValue" => "1")), "html", null, true);
        echo "\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Visite", "optionValue" => "2")), "html", null, true);
        echo "\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Visite", "optionValue" => "3")), "html", null, true);
        echo "\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Breakfast", "optionValue" => "1")), "html", null, true);
        echo "\">Repas 1</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Breakfast", "optionValue" => "2")), "html", null, true);
        echo "\">Repas 2</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Breakfast", "optionValue" => "3")), "html", null, true);
        echo "\">Repas 3</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2TransportTrain", "optionValue" => "1")), "html", null, true);
        echo "\">Transport SNCF</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2Night", "optionValue" => "1")), "html", null, true);
        echo "\">Soirée Louvre</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "day2TransportBusNight", "optionValue" => "1")), "html", null, true);
        echo "\">Soirée Transport Hebergement</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button value=\"30\" style=\"margin-bottom:15px;\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            
                            <div>
                                <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionVisite", "optionValue" => "1")), "html", null, true);
        echo "\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionVisite", "optionValue" => "2")), "html", null, true);
        echo "\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionVisite", "optionValue" => "3")), "html", null, true);
        echo "\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionExpo", "optionValue" => "1")), "html", null, true);
        echo "\">Exposition 8 JUIN</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionExpo", "optionValue" => "2")), "html", null, true);
        echo "\">Exposition 9 JUIN</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionArtDeco", "optionValue" => "1")), "html", null, true);
        echo "\">Visite Art Déco 8 Juin</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionArtDeco", "optionValue" => "2")), "html", null, true);
        echo "\">Visite Art Déco 9 Juin</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionDecouverte", "optionValue" => "1")), "html", null, true);
        echo "\">Visite Découverte</a>
                            </div>
                            <div>
                                <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque", array("optionName" => "optionGrandSite", "optionValue" => "1")), "html", null, true);
        echo "\">Visite Notre-Dame, ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\" style=\"min-height:auto;\">
            <div class=\"row d-flex\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">";
        // line 124
        if ((null === ($context["optionName"] ?? $this->getContext($context, "optionName")))) {
            echo "Toutes les réservations";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, ($context["optionName"] ?? $this->getContext($context, "optionName")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["optionValue"] ?? $this->getContext($context, "optionValue")), "html", null, true);
            echo " ";
        }
        echo "<p>
                    <p id=\"personNumber\" style=\"font-size:22px;font-weight:bold;\">";
        // line 125
        echo twig_escape_filter($this->env, ($context["personNumber"] ?? $this->getContext($context, "personNumber")), "html", null, true);
        echo " Personne(s)</p>
                </div>
            </div>
            <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;border-top:1px solid #007bff;\">
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
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 140
            echo "                    <tr>
                    <td style=\"padding-top:5px;\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "LastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1TransportTrain", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Breakfast", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Visite", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1TransportBus", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportBus", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Visite", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Breakfast", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportTrain", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Night", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2TransportBusNight", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionVisite", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionExpo", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionArtDeco", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionDecouverte", array()), "html", null, true);
            echo "</td>
                    <td hidden>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionGrandSite", array()), "html", null, true);
            echo "</td>
                    </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"d-flex justify-content-center totalprix bordertitleadmin\">
                        <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">";
        // line 169
        if ((null === ($context["optionName"] ?? $this->getContext($context, "optionName")))) {
            echo "TOTAL : ";
            echo twig_escape_filter($this->env, ($context["prixTotal"] ?? $this->getContext($context, "prixTotal")), "html", null, true);
            echo " €";
        } else {
            echo " ";
        }
        echo "</p>
                    </div>
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
        return array (  387 => 169,  380 => 164,  370 => 160,  366 => 159,  362 => 158,  358 => 157,  354 => 156,  350 => 155,  346 => 154,  342 => 153,  338 => 152,  334 => 151,  330 => 150,  326 => 149,  322 => 148,  318 => 147,  314 => 146,  310 => 145,  306 => 144,  302 => 143,  298 => 142,  294 => 141,  291 => 140,  287 => 139,  270 => 125,  258 => 124,  245 => 114,  239 => 111,  233 => 108,  227 => 105,  221 => 102,  215 => 99,  209 => 96,  203 => 93,  197 => 90,  185 => 81,  179 => 78,  173 => 75,  167 => 72,  161 => 69,  155 => 66,  149 => 63,  143 => 60,  137 => 57,  131 => 54,  120 => 46,  114 => 43,  108 => 40,  102 => 37,  96 => 34,  90 => 31,  84 => 28,  78 => 25,  65 => 15,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container-fluid\" style=\"margin-top:35px;margin-bottom:25px;\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"d-flex justify-content-center\">
                <a href=\"{{ path('admin_colloque') }}\">
                    <button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button>
                </a>
            </div>
            <div style=\"padding:20px;margin-top:15px;\">
                <div class=\"col-md-12\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                    <button value=\"28\" style=\"margin-bottom:15px;\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1TransportTrain', 'optionValue' : '1' }) }}\">Transport SNCF</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Visite','optionValue' : '1' }) }}\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Visite','optionValue' : '2' }) }}\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Visite','optionValue' : '3' }) }}\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Breakfast','optionValue' : '1' }) }}\">Repas 1</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Breakfast','optionValue' : '2' }) }}\">Repas 2</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1Breakfast','optionValue' : '3' }) }}\">Repas 3</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day1TransportBus', 'optionValue' : '1'  }) }}\">Transport Hebergement</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button value=\"29\" style=\"margin-bottom:15px;\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2TransportBus', 'optionValue' : '1'  }) }}\">Transport Hebergement</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Visite','optionValue' : '1' }) }}\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Visite','optionValue' : '2' }) }}\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Visite','optionValue' : '3' }) }}\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Breakfast','optionValue' : '1' }) }}\">Repas 1</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Breakfast','optionValue' : '2' }) }}\">Repas 2</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Breakfast','optionValue' : '3' }) }}\">Repas 3</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2TransportTrain', 'optionValue' : '1' }) }}\">Transport SNCF</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2Night', 'optionValue' : '1' }) }}\">Soirée Louvre</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'day2TransportBusNight', 'optionValue' : '1'  }) }}\">Soirée Transport Hebergement</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button value=\"30\" style=\"margin-bottom:15px;\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionVisite','optionValue' : '1' }) }}\">Visite 1</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionVisite','optionValue' : '2' }) }}\">Visite 2</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionVisite','optionValue' : '3' }) }}\">Visite 3</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionExpo','optionValue' : '1' }) }}\">Exposition 8 JUIN</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionExpo','optionValue' : '2' }) }}\">Exposition 9 JUIN</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionArtDeco','optionValue' : '1' }) }}\">Visite Art Déco 8 Juin</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionArtDeco', 'optionValue' : '2' }) }}\">Visite Art Déco 9 Juin</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionDecouverte', 'optionValue' : '1' }) }}\">Visite Découverte</a>
                            </div>
                            <div>
                                <a href=\"{{ path('admin_colloque' , {'optionName' : 'optionGrandSite', 'optionValue' : '1'  }) }}\">Visite Notre-Dame, ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\" style=\"min-height:auto;\">
            <div class=\"row d-flex\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">{% if optionName is null %}Toutes les réservations{% else %} {{ optionName }} {{ optionValue }} {% endif %}<p>
                    <p id=\"personNumber\" style=\"font-size:22px;font-weight:bold;\">{{personNumber}} Personne(s)</p>
                </div>
            </div>
            <table id=\"table\" class=\"col-md-12\">
                <thead class=\"user_form2\" style=\"color:#007bff;border-bottom:1px solid #007bff;border-top:1px solid #007bff;\">
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
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"d-flex justify-content-center totalprix bordertitleadmin\">
                        <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">{% if optionName is null %}TOTAL : {{prixTotal}} €{% else %} {% endif %}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

{% endblock %}
", "admin/adminColloque.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/admin/adminColloque.html.twig");
    }
}
