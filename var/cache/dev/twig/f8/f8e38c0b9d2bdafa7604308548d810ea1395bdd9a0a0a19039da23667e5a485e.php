<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_30e02951b20eeb7af504e22b19d45fd783aef7b1df133ddc83897ec620337054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/show_content.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        echo "    <header>
        <div class=\"d-flex justify-content-center\" style=\"margin-top:0px;\">
            <div class=\"d-flex flex-row-reverse justify-content-center align-items-center\">
                <i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:83px;width:69px;\"></i>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
        echo "\" class=\"reservation-link\" style=\"font-size:25px;\">ACCUEUIL</a>
            </div>
            <div>
                <i class=\"fa fa-circle-o\" style=\"font-size:200px;height:71px;\"></i>
            </div>
            <div class=\"d-flex align-items-center\"></div>
        </div>
    </header>
    <div class=\"container\" style=\"padding-left:0px;\">
        <h4 style=\"font-size:25px;margin-top:4px;height:23px;\">Mes coordonnées</h4>
    </div>
    <div>
        <div class=\"container borderclient\" style=\"padding-left:15px;\">
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"padding-top:7px;padding-bottom:30px;padding-right:50px;padding-left:100px;height:280px;margin-bottom:0px;width:487px;\">
                    <div class=\"d-flex\" style=\"margin-top:8px;\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\" ";
        // line 26
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "sexe", array()) == 1)) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\" ";
        // line 30
        if (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "sexe", array()) == 0)) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                        </div>
                    </div>
                    <div style=\"width:352px;\">
                        <input type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "lastname", array()), "html", null, true);
        echo "\" style=\"width:329px;\">
                        <input type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", array()), "html", null, true);
        echo "\" style=\"width:330px;margin:0px;margin-top:7px;\">
                        <input type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "society", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:6px;\">
                        </div>
                    <div class=\"d-flex\">
                        <input type=\"text\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "adress", array()), "html", null, true);
        echo "\" style=\"width:328px;margin-top:6px;height:30px;\">
                        </div>
                    <div class=\"d-flex flex-row\">
                        <input type=\"text\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "cp", array()), "html", null, true);
        echo "\" style=\"width:77px;margin-top:6px;margin-right:10px;\">
                        <input type=\"text\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "town", array()), "html", null, true);
        echo "\" style=\"width:246px;margin-top:6px;\">
                    </div>
                        <input type=\"text\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phonenumber", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:6px;\">
                    </div>
                <div class=\"col-md-6 d-flex justify-content-around flex-column\" style=\"height:270px;\">
                    <div class=\"\">
                        <input type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:38px;margin-left:22px;\">
                        <input type=\"text\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" style=\"width:329px;margin-top:7px;margin-left:22px;\">
                    </div>
                    <div class=\"d-flex justify-content-between\" style=\"width:329px;margin-left:22px;\">
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><input type=\"submit\" value=\"Modifier Password\" class=\"btn btn-success\"></a>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><input type=\"submit\" value=\"Modifier Email\" class=\"btn btn-success\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                    <h4>Mes récapitulatifs</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                    <div class=\"collapseclient\">
                        <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">
                        Recapitulatif de réservation : N°";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "ticketNumber", array()), "html", null, true);
        echo " &nbsp; &nbsp; &nbsp; &nbsp;Nom: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "lastName", array()), "html", null, true);
        echo " &nbsp; &nbsp; &nbsp;Prénom: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "firstName", array()), "html", null, true);
        echo " &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "society", array()), "html", null, true);
        echo " &nbsp; &nbsp;Montant TTC : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "price", array()), "html", null, true);
        echo "€<br>
                        </a>
                        <div class=\"collapse\" id=\"collapse-1\">
                            <div class=\"d-flex\">
                                <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                    ";
        // line 78
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1TransportTrain", array()) == true)) {
            // line 79
            echo "                                        <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.</p>
                                    ";
        } else {
            // line 81
            echo "                                        <p> </p>
                                    ";
        }
        // line 83
        echo "                                    <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                    <p>Midi Pique Nique :
                                     ";
        // line 85
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Breakfast", array()) == 1)) {
            // line 86
            echo "                                        <strong>choix 1</strong>
                                    ";
        } elseif (($this->getAttribute(        // line 87
($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Breakfast", array()) == 2)) {
            // line 88
            echo "                                        <strong>choix 2</strong>
                                     ";
        } else {
            // line 90
            echo "                                        <strong>choix 3</strong>
                                    ";
        }
        // line 91
        echo "<br></p>
                                    <p>Apres-Midi : 
                                     ";
        // line 93
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Visite", array()) == 1)) {
            // line 94
            echo "                                        <strong>Visite 1</strong>
                                    ";
        } elseif (($this->getAttribute(        // line 95
($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Visite", array()) == 2)) {
            // line 96
            echo "                                        <strong>Visite 2</strong>
                                     ";
        } else {
            // line 98
            echo "                                        <strong>Visite 3</strong>
                                    ";
        }
        // line 100
        echo "                                    <br></p>
                                     ";
        // line 101
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1TransportBus", array()) == true)) {
            echo "    
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                               ";
        } else {
            // line 104
            echo "                                        <p> </p>
                                    ";
        }
        // line 106
        echo "                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                     ";
        // line 109
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportBus", array()) == true)) {
            echo "                            
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                   ";
        } else {
            // line 112
            echo "                                        <p> </p>
                                    ";
        }
        // line 114
        echo "                                    <p>Matin 9h-12h:  ";
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Visite", array()) == 1)) {
            // line 115
            echo "                                        <strong>Visite 1</strong>
                                    ";
        } elseif (($this->getAttribute(        // line 116
($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Visite", array()) == 2)) {
            // line 117
            echo "                                        <strong>Visite 2</strong>
                                     ";
        } else {
            // line 119
            echo "                                        <strong>Visite 3</strong>
                                    ";
        }
        // line 121
        echo "                                    <br></p>
                                    <p>Midi Pique Nique : 
                                    ";
        // line 123
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Breakfast", array()) == 1)) {
            // line 124
            echo "                                         <strong>choix 1</strong>
                                    ";
        } elseif (($this->getAttribute(        // line 125
($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Breakfast", array()) == 2)) {
            // line 126
            echo "                                         <strong>choix 2</strong>
                                    ";
        } else {
            // line 128
            echo "                                         <strong>choix 3</strong>
                                    ";
        }
        // line 129
        echo "<br></p>
                                    <p><strong> Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                                   ";
        // line 131
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportTrain", array()) == true)) {
            echo "    
                                         <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    ";
        } else {
            // line 134
            echo "                                        <p> </p>
                                    ";
        }
        // line 136
        echo "                                    ";
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Night", array()) == true)) {
            echo "  
                                          <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                     ";
        } else {
            // line 139
            echo "                                        <p> </p>
                                    ";
        }
        // line 141
        echo "                                   ";
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportBusNight", array()) == true)) {
            echo "  
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                     ";
        } else {
            // line 144
            echo "                                        <p> </p>
                                    ";
        }
        // line 146
        echo "                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la ";
        // line 149
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionVisite", array()) == 1)) {
            // line 150
            echo "                                        <strong>Visite 1</strong>
                                    ";
        } elseif (($this->getAttribute(        // line 151
($context["ticket"] ?? $this->getContext($context, "ticket")), "optionVisite", array()) == 2)) {
            // line 152
            echo "                                        <strong>Visite 2</strong>
                                     ";
        } else {
            // line 154
            echo "                                       <strong>Visite 3</strong>
                                    ";
        }
        // line 155
        echo " du samedi matin.<br></p>
                                  
                                    ";
        // line 157
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionArtDeco", array()) == false)) {
            // line 158
            echo "                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8 : Prix 9€.
                                     ";
        } else {
            // line 160
            echo "                                        <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Dimanche 9 Juin 2019 : Prix 9€ </p>
                                    ";
        }
        // line 162
        echo "                                    </p>
                                  ";
        // line 163
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionExpo", array()) == true)) {
            // line 164
            echo "                                 <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        <br>de lens du Samedi 8 a 14h30 : Prix 6€.<br></p>
                                         ";
        } else {
            // line 167
            echo "                                        <p> Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        de lens du Dimanche 9 Juin 2019 a 14h30 : Prix 6€</p>
                                    ";
        }
        // line 170
        echo "                                        ";
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionDecouverte", array()) == true)) {
            // line 171
            echo "                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                        <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                        : Prix 9 €<br></p>
                                          ";
        } else {
            // line 175
            echo "                                        <p> </p>
                                    ";
        }
        // line 177
        echo "                                         ";
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionGrandSite", array()) == true)) {
            echo "  
                                         <p>Vous avez choisi de participer a la Visite guidée
                                        <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                        <br>2019 a 15H : Prix 6 €<br></p>
                                         ";
        } else {
            // line 182
            echo "                                        <p> </p>
                                    ";
        }
        // line 184
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding:0px;margin-top:5px;\">
                <h4>Mes Factures</h4>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col d-flex\" style=\"padding:0px;\">
                <p style=\"margin-bottom:0px;\">Facture : XXXXX &nbsp;&nbsp;</p>
                <a href=\"#\">Télécharger votre facture</a>
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
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 184,  399 => 182,  390 => 177,  386 => 175,  380 => 171,  377 => 170,  372 => 167,  367 => 164,  365 => 163,  362 => 162,  358 => 160,  354 => 158,  352 => 157,  348 => 155,  344 => 154,  340 => 152,  338 => 151,  335 => 150,  333 => 149,  328 => 146,  324 => 144,  317 => 141,  313 => 139,  306 => 136,  302 => 134,  296 => 131,  292 => 129,  288 => 128,  284 => 126,  282 => 125,  279 => 124,  277 => 123,  273 => 121,  269 => 119,  265 => 117,  263 => 116,  260 => 115,  257 => 114,  253 => 112,  247 => 109,  242 => 106,  238 => 104,  232 => 101,  229 => 100,  225 => 98,  221 => 96,  219 => 95,  216 => 94,  214 => 93,  210 => 91,  206 => 90,  202 => 88,  200 => 87,  197 => 86,  195 => 85,  191 => 83,  187 => 81,  183 => 79,  181 => 78,  164 => 72,  144 => 55,  140 => 54,  134 => 51,  130 => 50,  123 => 46,  118 => 44,  114 => 43,  108 => 40,  102 => 37,  98 => 36,  94 => 35,  84 => 30,  75 => 26,  55 => 9,  49 => 5,  40 => 4,  11 => 2,);
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
    <header>
        <div class=\"d-flex justify-content-center\" style=\"margin-top:0px;\">
            <div class=\"d-flex flex-row-reverse justify-content-center align-items-center\">
                <i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:83px;width:69px;\"></i>
                <a href=\"{{ path(\"fos_user_security_homepage\") }}\" class=\"reservation-link\" style=\"font-size:25px;\">ACCUEUIL</a>
            </div>
            <div>
                <i class=\"fa fa-circle-o\" style=\"font-size:200px;height:71px;\"></i>
            </div>
            <div class=\"d-flex align-items-center\"></div>
        </div>
    </header>
    <div class=\"container\" style=\"padding-left:0px;\">
        <h4 style=\"font-size:25px;margin-top:4px;height:23px;\">Mes coordonnées</h4>
    </div>
    <div>
        <div class=\"container borderclient\" style=\"padding-left:15px;\">
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"padding-top:7px;padding-bottom:30px;padding-right:50px;padding-left:100px;height:280px;margin-bottom:0px;width:487px;\">
                    <div class=\"d-flex\" style=\"margin-top:8px;\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\" {% if customer.sexe == 1 %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\" {% if customer.sexe == 0 %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                        </div>
                    </div>
                    <div style=\"width:352px;\">
                        <input type=\"text\" value=\"{{ customer.lastname }}\" style=\"width:329px;\">
                        <input type=\"text\" value=\"{{ customer.firstname }}\" style=\"width:330px;margin:0px;margin-top:7px;\">
                        <input type=\"text\" value=\"{{ customer.society }}\" style=\"width:329px;margin-top:6px;\">
                        </div>
                    <div class=\"d-flex\">
                        <input type=\"text\" value=\"{{ customer.adress }}\" style=\"width:328px;margin-top:6px;height:30px;\">
                        </div>
                    <div class=\"d-flex flex-row\">
                        <input type=\"text\" value=\"{{ customer.cp }}\" style=\"width:77px;margin-top:6px;margin-right:10px;\">
                        <input type=\"text\" value=\"{{ customer.town }}\" style=\"width:246px;margin-top:6px;\">
                    </div>
                        <input type=\"text\" value=\"{{ customer.phonenumber }}\" style=\"width:329px;margin-top:6px;\">
                    </div>
                <div class=\"col-md-6 d-flex justify-content-around flex-column\" style=\"height:270px;\">
                    <div class=\"\">
                        <input type=\"text\" value=\"{{ user.username }}\" style=\"width:329px;margin-top:38px;margin-left:22px;\">
                        <input type=\"text\" value=\"{{ user.email }}\" style=\"width:329px;margin-top:7px;margin-left:22px;\">
                    </div>
                    <div class=\"d-flex justify-content-between\" style=\"width:329px;margin-left:22px;\">
                        <a href=\"{{ path('fos_user_change_password') }}\"><input type=\"submit\" value=\"Modifier Password\" class=\"btn btn-success\"></a>
                        <a href=\"{{ path('fos_user_profile_edit') }}\"><input type=\"submit\" value=\"Modifier Email\" class=\"btn btn-success\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                    <h4>Mes récapitulatifs</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                    <div class=\"collapseclient\">
                        <a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">
                        Recapitulatif de réservation : N°{{ ticket.ticketNumber }} &nbsp; &nbsp; &nbsp; &nbsp;Nom: {{ ticket.lastName }} &nbsp; &nbsp; &nbsp;Prénom: {{ ticket.firstName }} &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: {{ ticket.society }} &nbsp; &nbsp;Montant TTC : {{ ticket.price }}€<br>
                        </a>
                        <div class=\"collapse\" id=\"collapse-1\">
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
        </div>
    </div>
</div>
<div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding:0px;margin-top:5px;\">
                <h4>Mes Factures</h4>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col d-flex\" style=\"padding:0px;\">
                <p style=\"margin-bottom:0px;\">Facture : XXXXX &nbsp;&nbsp;</p>
                <a href=\"#\">Télécharger votre facture</a>
            </div>
        </div>
    </div>
</div>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

{% endblock %}
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
