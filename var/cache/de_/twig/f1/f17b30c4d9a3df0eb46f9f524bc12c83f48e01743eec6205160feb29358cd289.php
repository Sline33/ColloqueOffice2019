<?php

/* recap/new.html.twig */
class __TwigTemplate_41763fdf5629b922c165ba84d10d7e63d23fbe88e5de8b359c704ff86ace42f9 extends Twig_Template
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
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
            <h4>Mon Récapitulatif</h4>
        </div>
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 14
            echo "    <div class=\"row\">
        <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;margin-bottom:10px;\">
            <div class=\"collapseclient\">
                <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
                Recapitulatif de réservation : N°";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp;Nom: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp;Prénom: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo " &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
            echo " &nbsp; &nbsp;Montant TTC : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
            echo "€<br>
                </a>
                <div class=\"collapse\" id=\"collapse-";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"d-flex\">
                        <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                            <h5 style=\"margin-top:5px;\">Jour 1</h5>
                            ";
            // line 24
            if (($this->getAttribute($context["ticket"], "day1TransportTrain", array()) == true)) {
                // line 25
                echo "                                <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                            ";
            } else {
                // line 27
                echo "                                <p> </p>
                            ";
            }
            // line 29
            echo "                            <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                            <p>Midi Pique Nique :
                            ";
            // line 31
            if (($this->getAttribute($context["ticket"], "day1Breakfast", array()) == 1)) {
                // line 32
                echo "                                <strong>choix 1</strong>
                            ";
            } elseif (($this->getAttribute(            // line 33
$context["ticket"], "day1Breakfast", array()) == 2)) {
                // line 34
                echo "                                <strong>choix 2</strong>
                            ";
            } else {
                // line 36
                echo "                                <strong>choix 3</strong>
                            ";
            }
            // line 37
            echo "<br></p>
                            <p>Apres-Midi :
                            ";
            // line 39
            if (($this->getAttribute($context["ticket"], "day1Visite", array()) == 1)) {
                // line 40
                echo "                                <strong>Visite 1</strong>
                            ";
            } elseif (($this->getAttribute(            // line 41
$context["ticket"], "day1Visite", array()) == 2)) {
                // line 42
                echo "                                <strong>Visite 2</strong>
                            ";
            } else {
                // line 44
                echo "                                <strong>Visite 3</strong>
                            ";
            }
            // line 46
            echo "                            <br></p>
                            ";
            // line 47
            if (($this->getAttribute($context["ticket"], "day1TransportBus", array()) == true)) {
                // line 48
                echo "                            <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                    ";
            } else {
                // line 50
                echo "                                <p> </p>
                            ";
            }
            // line 52
            echo "                        </div>
                        <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                            <h5 style=\"margin-top:5px;\">Jour 2</h5>
                            ";
            // line 55
            if (($this->getAttribute($context["ticket"], "day2TransportBus", array()) == true)) {
                // line 56
                echo "                            <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                        ";
            } else {
                // line 58
                echo "                                <p> </p>
                            ";
            }
            // line 60
            echo "                            <p>Matin 9h-12h:  ";
            if (($this->getAttribute($context["ticket"], "day2Visite", array()) == 1)) {
                // line 61
                echo "                                <strong>Visite 1</strong>
                            ";
            } elseif (($this->getAttribute(            // line 62
$context["ticket"], "day2Visite", array()) == 2)) {
                // line 63
                echo "                                <strong>Visite 2</strong>
                            ";
            } else {
                // line 65
                echo "                                <strong>Visite 3</strong>
                            ";
            }
            // line 67
            echo "                            <br></p>
                            <p>Midi Pique Nique :
                            ";
            // line 69
            if (($this->getAttribute($context["ticket"], "day2Breakfast", array()) == 1)) {
                // line 70
                echo "                                <strong>choix 1</strong>
                            ";
            } elseif (($this->getAttribute(            // line 71
$context["ticket"], "day2Breakfast", array()) == 2)) {
                // line 72
                echo "                                <strong>choix 2</strong>
                            ";
            } else {
                // line 74
                echo "                                <strong>choix 3</strong>
                            ";
            }
            // line 75
            echo "<br></p>
                            <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                        ";
            // line 77
            if (($this->getAttribute($context["ticket"], "day2TransportTrain", array()) == true)) {
                // line 78
                echo "                                <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                            ";
            } else {
                // line 80
                echo "                                <p> </p>
                            ";
            }
            // line 82
            echo "                            ";
            if (($this->getAttribute($context["ticket"], "day2Night", array()) == true)) {
                // line 83
                echo "                                <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                            ";
            } else {
                // line 85
                echo "                                <p> </p>
                            ";
            }
            // line 87
            echo "                        ";
            if (($this->getAttribute($context["ticket"], "day2TransportBusNight", array()) == true)) {
                // line 88
                echo "                            <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                            ";
            } else {
                // line 90
                echo "                                <p> </p>
                            ";
            }
            // line 92
            echo "                        </div>
                        <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                            <h5 style=\"margin-top:5px;\">Options</h5>
                            <p>Vous avez choisi de participer a la ";
            // line 95
            if (($this->getAttribute($context["ticket"], "optionVisite", array()) == 1)) {
                // line 96
                echo "                                <strong>Visite 1</strong>
                            ";
            } elseif (($this->getAttribute(            // line 97
$context["ticket"], "optionVisite", array()) == 2)) {
                // line 98
                echo "                                <strong>Visite 2</strong>
                            ";
            } else {
                // line 100
                echo "                            <strong>Visite 3</strong>
                            ";
            }
            // line 101
            echo " du samedi matin.<br></p>

                            ";
            // line 103
            if (($this->getAttribute($context["ticket"], "optionArtDeco", array()) == false)) {
                // line 104
                echo "                            <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                            ";
            } else {
                // line 106
                echo "                                <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                            ";
            }
            // line 108
            echo "                            </p>
                        ";
            // line 109
            if (($this->getAttribute($context["ticket"], "optionExpo", array()) == true)) {
                // line 110
                echo "                        <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                ";
            } else {
                // line 113
                echo "                                <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                            ";
            }
            // line 116
            echo "                                ";
            if (($this->getAttribute($context["ticket"], "optionDecouverte", array()) == true)) {
                // line 117
                echo "                            <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                : Prix 9 €<br></p>
                                ";
            } else {
                // line 121
                echo "                                <p> </p>
                            ";
            }
            // line 123
            echo "                                ";
            if (($this->getAttribute($context["ticket"], "optionGrandSite", array()) == true)) {
                // line 124
                echo "                                <p>Vous avez choisi de participer a la Visite guidée
                                <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                <br>2019 a 15H : Prix 6 €<br></p>
                                ";
            } else {
                // line 128
                echo "                                <p> </p>
                            ";
            }
            // line 130
            echo "                        </div>
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
        // line 137
        echo "
    <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
        <div class=\"border-form-prix\">
            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
            <span id=\"prixreservation\">";
        // line 141
        echo twig_escape_filter($this->env, ($context["prixtotal"] ?? $this->getContext($context, "prixtotal")), "html", null, true);
        echo "</span>€</p>
        </div>
    </div>
    <div class=\"row justify-content-around\">
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
        echo "\">Retour</a>
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_facture");
        echo "\">Suivant</a>
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
        return array (  343 => 146,  339 => 145,  332 => 141,  326 => 137,  314 => 130,  310 => 128,  304 => 124,  301 => 123,  297 => 121,  291 => 117,  288 => 116,  283 => 113,  278 => 110,  276 => 109,  273 => 108,  269 => 106,  265 => 104,  263 => 103,  259 => 101,  255 => 100,  251 => 98,  249 => 97,  246 => 96,  244 => 95,  239 => 92,  235 => 90,  231 => 88,  228 => 87,  224 => 85,  220 => 83,  217 => 82,  213 => 80,  209 => 78,  207 => 77,  203 => 75,  199 => 74,  195 => 72,  193 => 71,  190 => 70,  188 => 69,  184 => 67,  180 => 65,  176 => 63,  174 => 62,  171 => 61,  168 => 60,  164 => 58,  160 => 56,  158 => 55,  153 => 52,  149 => 50,  145 => 48,  143 => 47,  140 => 46,  136 => 44,  132 => 42,  130 => 41,  127 => 40,  125 => 39,  121 => 37,  117 => 36,  113 => 34,  111 => 33,  108 => 32,  106 => 31,  102 => 29,  98 => 27,  94 => 25,  92 => 24,  85 => 20,  72 => 18,  68 => 17,  63 => 14,  59 => 13,  49 => 5,  40 => 4,  11 => 2,);
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


<div class=\"container\">
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
                Recapitulatif de réservation : N°{{ ticket.ticketNumber }} &nbsp; &nbsp; &nbsp; &nbsp;Nom: {{ ticket.lastName }} &nbsp; &nbsp; &nbsp;Prénom: {{ ticket.firstName }} &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: {{ ticket.society }} &nbsp; &nbsp;Montant TTC : {{ ticket.price }}€<br>
                </a>
                <div class=\"collapse\" id=\"collapse-{{ ticket.id }}\">
                    <div class=\"d-flex\">
                        <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                            <h5 style=\"margin-top:5px;\">Jour 1</h5>
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
                            <h5 style=\"margin-top:5px;\">Jour 2</h5>
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
                            <h5 style=\"margin-top:5px;\">Options</h5>
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

    <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
        <div class=\"border-form-prix\">
            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
            <span id=\"prixreservation\">{{ prixtotal }}</span>€</p>
        </div>
    </div>
    <div class=\"row justify-content-around\">
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"{{ path('ticket_new') }}\">Retour</a>
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"{{ path('paiement_facture') }}\">Suivant</a>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
{% endblock %}", "recap/new.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\recap\\new.html.twig");
    }
}
