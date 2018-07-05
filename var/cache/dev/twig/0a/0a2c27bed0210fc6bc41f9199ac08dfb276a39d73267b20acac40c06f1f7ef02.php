<?php

/* recap/new.html.twig */
class __TwigTemplate_d4f6c726f543cd5b69502e2e0665480a435e42b9bddd911e308cd99752ee6028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "recap/new.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recap/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recap/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"recap\">
    <div class=\"container\" style=\"height:100%;background-color:rgba(255, 255, 255,0.5);padding:20px 30px 0 30px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                <h4>Mon Récapitulatif</h4>
            </div>
        </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 13
            echo "        <div class=\"row\">
            <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;margin-bottom:10px;\">
                <div class=\"collapseclient\">
                    <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "facture", array()), "number", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-2\">
                            Nom: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
            echo "€
                            </div>
                        </div>
                        </a>
                    <div class=\"collapse\" id=\"collapse-";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"d-flex\">
                            <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Jour 1</h5>
                                ";
            // line 42
            if (($this->getAttribute($context["ticket"], "day1TransportTrain", array()) == true)) {
                // line 43
                echo "                                    <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                                ";
            } else {
                // line 45
                echo "                                    <p> </p>
                                ";
            }
            // line 47
            echo "                                <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                <p>Midi Pique Nique :
                                ";
            // line 49
            if (($this->getAttribute($context["ticket"], "day1Breakfast", array()) == 1)) {
                // line 50
                echo "                                    <strong>choix 1</strong>
                                ";
            } elseif (($this->getAttribute(            // line 51
$context["ticket"], "day1Breakfast", array()) == 2)) {
                // line 52
                echo "                                    <strong>choix 2</strong>
                                ";
            } else {
                // line 54
                echo "                                    <strong>choix 3</strong>
                                ";
            }
            // line 55
            echo "<br></p>
                                <p>Apres-Midi :
                                ";
            // line 57
            if (($this->getAttribute($context["ticket"], "day1Visite", array()) == 1)) {
                // line 58
                echo "                                    <strong>Visite 1</strong>
                                ";
            } elseif (($this->getAttribute(            // line 59
$context["ticket"], "day1Visite", array()) == 2)) {
                // line 60
                echo "                                    <strong>Visite 2</strong>
                                ";
            } else {
                // line 62
                echo "                                    <strong>Visite 3</strong>
                                ";
            }
            // line 64
            echo "                                <br></p>
                                ";
            // line 65
            if (($this->getAttribute($context["ticket"], "day1TransportBus", array()) == true)) {
                // line 66
                echo "                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                        ";
            } else {
                // line 68
                echo "                                    <p> </p>
                                ";
            }
            // line 70
            echo "                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Jour 2</h5>
                                ";
            // line 73
            if (($this->getAttribute($context["ticket"], "day2TransportBus", array()) == true)) {
                // line 74
                echo "                                <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                            ";
            } else {
                // line 76
                echo "                                    <p> </p>
                                ";
            }
            // line 78
            echo "                                <p>Matin 9h-12h:  ";
            if (($this->getAttribute($context["ticket"], "day2Visite", array()) == 1)) {
                // line 79
                echo "                                    <strong>Visite 1</strong>
                                ";
            } elseif (($this->getAttribute(            // line 80
$context["ticket"], "day2Visite", array()) == 2)) {
                // line 81
                echo "                                    <strong>Visite 2</strong>
                                ";
            } else {
                // line 83
                echo "                                    <strong>Visite 3</strong>
                                ";
            }
            // line 85
            echo "                                <br></p>
                                <p>Midi Pique Nique :
                                ";
            // line 87
            if (($this->getAttribute($context["ticket"], "day2Breakfast", array()) == 1)) {
                // line 88
                echo "                                    <strong>choix 1</strong>
                                ";
            } elseif (($this->getAttribute(            // line 89
$context["ticket"], "day2Breakfast", array()) == 2)) {
                // line 90
                echo "                                    <strong>choix 2</strong>
                                ";
            } else {
                // line 92
                echo "                                    <strong>choix 3</strong>
                                ";
            }
            // line 93
            echo "<br></p>
                                <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                            ";
            // line 95
            if (($this->getAttribute($context["ticket"], "day2TransportTrain", array()) == true)) {
                // line 96
                echo "                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                ";
            } else {
                // line 98
                echo "                                    <p> </p>
                                ";
            }
            // line 100
            echo "                                ";
            if (($this->getAttribute($context["ticket"], "day2Night", array()) == true)) {
                // line 101
                echo "                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                ";
            } else {
                // line 103
                echo "                                    <p> </p>
                                ";
            }
            // line 105
            echo "                            ";
            if (($this->getAttribute($context["ticket"], "day2TransportBusNight", array()) == true)) {
                // line 106
                echo "                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                ";
            } else {
                // line 108
                echo "                                    <p> </p>
                                ";
            }
            // line 110
            echo "                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Options</h5>
                                <p>Vous avez choisi de participer a la ";
            // line 113
            if (($this->getAttribute($context["ticket"], "optionVisite", array()) == 1)) {
                // line 114
                echo "                                    <strong>Visite 1</strong>
                                ";
            } elseif (($this->getAttribute(            // line 115
$context["ticket"], "optionVisite", array()) == 2)) {
                // line 116
                echo "                                    <strong>Visite 2</strong>
                                ";
            } else {
                // line 118
                echo "                                <strong>Visite 3</strong>
                                ";
            }
            // line 119
            echo " du samedi matin.<br></p>

                                ";
            // line 121
            if (($this->getAttribute($context["ticket"], "optionArtDeco", array()) == false)) {
                // line 122
                echo "                                <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                                ";
            } else {
                // line 124
                echo "                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                                ";
            }
            // line 126
            echo "                                </p>
                            ";
            // line 127
            if (($this->getAttribute($context["ticket"], "optionExpo", array()) == true)) {
                // line 128
                echo "                            <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                    <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                    ";
            } else {
                // line 131
                echo "                                    <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                    de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                                ";
            }
            // line 134
            echo "                                    ";
            if (($this->getAttribute($context["ticket"], "optionDecouverte", array()) == true)) {
                // line 135
                echo "                                <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                    <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                    : Prix 9 €<br></p>
                                    ";
            } else {
                // line 139
                echo "                                    <p> </p>
                                ";
            }
            // line 141
            echo "                                    ";
            if (($this->getAttribute($context["ticket"], "optionGrandSite", array()) == true)) {
                // line 142
                echo "                                    <p>Vous avez choisi de participer a la Visite guidée
                                    <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                    <br>2019 a 15H : Prix 6 €<br></p>
                                    ";
            } else {
                // line 146
                echo "                                    <p> </p>
                                ";
            }
            // line 148
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        <div class=\"col-xl-5 offset-xl-7\" style=\"margin-bottom:0px;margin-top:70px;\">
            <div class=\"prix\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;padding-left:5px;padding-right:5px;\">PRIX :
                <span id=\"prixreservation\">";
        // line 159
        echo twig_escape_filter($this->env, ($context["prixtotal"] ?? $this->getContext($context, "prixtotal")), "html", null, true);
        echo "</span> € TTC</p>
            </div>
        </div>
        <div class=\"row justify-content-around\" style=\"margin-bottom:30px;\">
            <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
        echo "\">Retour</a>
            <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_facture");
        echo "\">Passer au paiement</a>
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
        return "recap/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 164,  364 => 163,  357 => 159,  351 => 155,  339 => 148,  335 => 146,  329 => 142,  326 => 141,  322 => 139,  316 => 135,  313 => 134,  308 => 131,  303 => 128,  301 => 127,  298 => 126,  294 => 124,  290 => 122,  288 => 121,  284 => 119,  280 => 118,  276 => 116,  274 => 115,  271 => 114,  269 => 113,  264 => 110,  260 => 108,  256 => 106,  253 => 105,  249 => 103,  245 => 101,  242 => 100,  238 => 98,  234 => 96,  232 => 95,  228 => 93,  224 => 92,  220 => 90,  218 => 89,  215 => 88,  213 => 87,  209 => 85,  205 => 83,  201 => 81,  199 => 80,  196 => 79,  193 => 78,  189 => 76,  185 => 74,  183 => 73,  178 => 70,  174 => 68,  170 => 66,  168 => 65,  165 => 64,  161 => 62,  157 => 60,  155 => 59,  152 => 58,  150 => 57,  146 => 55,  142 => 54,  138 => 52,  136 => 51,  133 => 50,  131 => 49,  127 => 47,  123 => 45,  119 => 43,  117 => 42,  110 => 38,  103 => 34,  97 => 31,  91 => 28,  85 => 25,  79 => 22,  73 => 19,  67 => 16,  62 => 13,  58 => 12,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends '::base.html.twig' %}

{% block body %}
<div class=\"recap\">
    <div class=\"container\" style=\"height:100%;background-color:rgba(255, 255, 255,0.5);padding:20px 30px 0 30px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                <h4>Mon Récapitulatif</h4>
            </div>
        </div>
        {% for ticket in tickets %}
        <div class=\"row\">
            <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;margin-bottom:10px;\">
                <div class=\"collapseclient\">
                    <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-{{ ticket.id }}\">
                    <div class=\"row\">
                            <div class=\"col-md-2\">
                            Facture : {{ ticket.facture.number }}
                            </div>
                            <div class=\"col-md-2\">
                            Réservation : N°{{ ticket.ticketNumber }}
                            </div>
                            <div class=\"col-md-2\">
                            Nom: {{ ticket.lastName }}
                            </div>
                            <div class=\"col-md-2\">
                            Prénom: {{ ticket.firstName }}
                            </div>
                            <div class=\"col-md-2\">
                            ST/ADM: {{ ticket.society }}
                            </div>
                            <div class=\"col-md-2\">
                            Montant TTC : {{ ticket.price }}€
                            </div>
                        </div>
                        </a>
                    <div class=\"collapse\" id=\"collapse-{{ ticket.id }}\">
                        <div class=\"d-flex\">
                            <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Jour 1</h5>
                                {% if ticket.day1TransportTrain == true %}
                                    <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                                {% else %}
                                    <p> </p>
                                {% endif %}
                                <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                <p>Midi Pique Nique :
                                {% if ticket.day1Breakfast == 1 %}
                                    <strong>choix 1</strong>
                                {% elseif ticket.day1Breakfast == 2  %}
                                    <strong>choix 2</strong>
                                {% else %}
                                    <strong>choix 3</strong>
                                {% endif %}<br></p>
                                <p>Apres-Midi :
                                {% if ticket.day1Visite == 1 %}
                                    <strong>Visite 1</strong>
                                {% elseif ticket.day1Visite == 2  %}
                                    <strong>Visite 2</strong>
                                {% else %}
                                    <strong>Visite 3</strong>
                                {% endif %}
                                <br></p>
                                {% if ticket.day1TransportBus == true %}
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                        {% else %}
                                    <p> </p>
                                {% endif %}
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Jour 2</h5>
                                {% if ticket.day2TransportBus == true %}
                                <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                            {% else %}
                                    <p> </p>
                                {% endif %}
                                <p>Matin 9h-12h:  {% if ticket.day2Visite == 1 %}
                                    <strong>Visite 1</strong>
                                {% elseif ticket.day2Visite == 2  %}
                                    <strong>Visite 2</strong>
                                {% else %}
                                    <strong>Visite 3</strong>
                                {% endif %}
                                <br></p>
                                <p>Midi Pique Nique :
                                {% if ticket.day2Breakfast == 1 %}
                                    <strong>choix 1</strong>
                                {% elseif ticket.day2Breakfast == 2  %}
                                    <strong>choix 2</strong>
                                {% else %}
                                    <strong>choix 3</strong>
                                {% endif %}<br></p>
                                <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                            {% if ticket.day2TransportTrain == true %}
                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                {% else %}
                                    <p> </p>
                                {% endif %}
                                {% if ticket.day2Night == true %}
                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                {% else %}
                                    <p> </p>
                                {% endif %}
                            {% if ticket.day2TransportBusNight == true %}
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                {% else %}
                                    <p> </p>
                                {% endif %}
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                <h5 style=\"margin-top:5px;text-transform:uppercase;\">Options</h5>
                                <p>Vous avez choisi de participer a la {% if ticket.optionVisite == 1 %}
                                    <strong>Visite 1</strong>
                                {% elseif ticket.optionVisite == 2  %}
                                    <strong>Visite 2</strong>
                                {% else %}
                                <strong>Visite 3</strong>
                                {% endif %} du samedi matin.<br></p>

                                {% if ticket.optionArtDeco == false %}
                                <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                                {% else %}
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                                {% endif %}
                                </p>
                            {% if ticket.optionExpo == true %}
                            <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                    <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                    {% else %}
                                    <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                    de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                                {% endif %}
                                    {% if ticket.optionDecouverte == true %}
                                <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                    <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                    : Prix 9 €<br></p>
                                    {% else %}
                                    <p> </p>
                                {% endif %}
                                    {% if ticket.optionGrandSite == true %}
                                    <p>Vous avez choisi de participer a la Visite guidée
                                    <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                    <br>2019 a 15H : Prix 6 €<br></p>
                                    {% else %}
                                    <p> </p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

        <div class=\"col-xl-5 offset-xl-7\" style=\"margin-bottom:0px;margin-top:70px;\">
            <div class=\"prix\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;padding-left:5px;padding-right:5px;\">PRIX :
                <span id=\"prixreservation\">{{ prixtotal }}</span> € TTC</p>
            </div>
        </div>
        <div class=\"row justify-content-around\" style=\"margin-bottom:30px;\">
            <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"{{ path('ticket_new') }}\">Retour</a>
            <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"{{ path('paiement_facture') }}\">Passer au paiement</a>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
{% endblock %}", "recap/new.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/recap/new.html.twig");
    }
}
