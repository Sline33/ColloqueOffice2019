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
                                    <p>Midi Pique Nique : ";
        // line 84
        if (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Breakfast", array()) == 1)) {
            echo "Repas null";
        } elseif (($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Breakfast", array()) == 2)) {
            echo "Repas moyen ";
        } else {
            echo "Repas légendaire";
        }
        echo "<br></p>
                                    <p>Apres-Midi : Visites XXXX<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                    <p>Matin 9h-12h: Visites XXXX<br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                    <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                        <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                        : Prix 9 €<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée
                                        <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                        <br>2019 a 15H : Prix 6 €<br></p>
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
<footer>
    <p class=\"text-center\" style=\"font-size:45px;margin-top:100PX;\">FOOTER</p>
</footer>

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
        return array (  194 => 84,  191 => 83,  187 => 81,  183 => 79,  181 => 78,  164 => 72,  144 => 55,  140 => 54,  134 => 51,  130 => 50,  123 => 46,  118 => 44,  114 => 43,  108 => 40,  102 => 37,  98 => 36,  94 => 35,  84 => 30,  75 => 26,  55 => 9,  49 => 5,  40 => 4,  11 => 2,);
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
                                    <p>Midi Pique Nique : {% if ticket.day1Breakfast == 1 %}Repas null{% elseif ticket.day1Breakfast == 2  %}Repas moyen {% else %}Repas légendaire{% endif %}<br></p>
                                    <p>Apres-Midi : Visites XXXX<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                    <p>Matin 9h-12h: Visites XXXX<br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens</strong><br></p>
                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;padding:5px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                    <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco
                                        <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des
                                        <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br>
                                        : Prix 9 €<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée
                                        <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin
                                        <br>2019 a 15H : Prix 6 €<br></p>
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
<footer>
    <p class=\"text-center\" style=\"font-size:45px;margin-top:100PX;\">FOOTER</p>
</footer>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

{% endblock %}
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/ColloqueOffice/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
