<?php

/* default/recapitulatif.html.twig */
class __TwigTemplate_eb856d8c1fe2ed684dc9e3693b8e5fd8dac2a749a62e3134dd6894ce9c486c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/recapitulatif.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/recapitulatif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/recapitulatif.html.twig"));

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
        echo "<div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5 col-xl-4 offset-sm-2 offset-md-2 offset-lg-3 offset-xl-3 d-flex\"><a class=\"d-flex align-items-center align-content-center reservation-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
        echo "\" style=\"font-size:24px;\">Accueil</a><i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:70px;width:70px;line-height:70px;\"></i>
                    <i
                        class=\"fa fa-circle-o\" style=\"font-size:216px;\"></i>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-xl-2 offset-xl-3 d-flex justify-content-center align-items-center\" style=\"margin-left:285px;\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_reservation");
        echo "\" class=\"reservation-link\">Reservation</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">1</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-center align-items-center\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_recapitulatif");
        echo "\" class=\"reservation-link\">Recapitulatif</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">2</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;width:40px;height:40px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-start align-items-center\">
                    <div class=\"d-flex flex-column\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"paiement.html\" class=\"reservation-link\" style=\"padding-left:0px;margin-left:10px;\">Paiement</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container d-flex flex-column align-items-center container-form\" style=\"margin-top:40px;margin-bottom:40px;\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                    <h4>Mes récapitulatifs</h4>
                </div>
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                    <div class=\"collapseclient\"><a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Nom: XXXXXX &nbsp; &nbsp; &nbsp;Prénom: XXXXXX &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: XXXXXXXXXX &nbsp; &nbsp;Montant TTC : XXX€<br></a>
                        <div
                            class=\"collapse\" id=\"collapse-1\">
                            <div class=\"d-flex\">
                                <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                    <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.<br></p>
                                    <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p>Apres-Midi : Visites XXXX<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                    <p>Matin 9h-12h: Visites XXXX<br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens </strong><br></p>
                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                    <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br> : Prix 9 €<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin <br>2019 a 15H : Prix 6 €<br></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                <div class=\"collapseclient\"><a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\" style=\"margin-top:5px;\">Nom: XXXXXX &nbsp; &nbsp; &nbsp;Prénom: XXXXXX &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: XXXXXXXXXX &nbsp; &nbsp; Montant TTC : XXX€<br></a>
                    <div
                        class=\"collapse\" id=\"collapse-2\">
                        <div class=\"d-flex\">
                            <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;\">
                                <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.<br></p>
                                <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                <p>Midi Pique Nique : XXXX<br></p>
                                <p>Apres-Midi : Visites XXXX<br></p>
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px;\">
                                <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                <p>Matin 9h-12h: Visites XXXX<br></p>
                                <p>Midi Pique Nique : XXXX<br></p>
                                <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens </strong><br></p>
                                <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px 0px;\">
                                <h5 style=\"margin-top:5px;\">Options</h5>
                                <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br> : Prix 9 €<br></p>
                                <p>Vous avez choisi de participer a la Visite guidée <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin <br>2019 a 15H : Prix 6 €<br></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
            <div class=\"border-form-prix\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX : XXX€</p>
            </div>
        </div>
        <div class=\"col-xl-2 offset-10 offset-xl-10 d-flex justify-content-between\" style=\"margin-top:70px;padding:0px;padding-right:5px;padding-left:5px;margin-bottom:10px;\"><button class=\"btn btn-primary\" type=\"button\" style=\"line-height:24px;font-size:26px;\">Valider</button></div>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  87 => 20,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5 col-xl-4 offset-sm-2 offset-md-2 offset-lg-3 offset-xl-3 d-flex\"><a class=\"d-flex align-items-center align-content-center reservation-link\" href=\"{{ path(\"fos_user_security_homepage\") }}\" style=\"font-size:24px;\">Accueil</a><i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:70px;width:70px;line-height:70px;\"></i>
                    <i
                        class=\"fa fa-circle-o\" style=\"font-size:216px;\"></i>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-xl-2 offset-xl-3 d-flex justify-content-center align-items-center\" style=\"margin-left:285px;\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"{{ path('fos_user_security_reservation') }}\" class=\"reservation-link\">Reservation</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">1</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-center align-items-center\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"{{ path('fos_user_security_recapitulatif') }}\" class=\"reservation-link\">Recapitulatif</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">2</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;width:40px;height:40px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-start align-items-center\">
                    <div class=\"d-flex flex-column\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"paiement.html\" class=\"reservation-link\" style=\"padding-left:0px;margin-left:10px;\">Paiement</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container d-flex flex-column align-items-center container-form\" style=\"margin-top:40px;margin-bottom:40px;\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                    <h4>Mes récapitulatifs</h4>
                </div>
                <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                    <div class=\"collapseclient\"><a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Nom: XXXXXX &nbsp; &nbsp; &nbsp;Prénom: XXXXXX &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: XXXXXXXXXX &nbsp; &nbsp;Montant TTC : XXX€<br></a>
                        <div
                            class=\"collapse\" id=\"collapse-1\">
                            <div class=\"d-flex\">
                                <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                    <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.<br></p>
                                    <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p>Apres-Midi : Visites XXXX<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px;\">
                                    <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                    <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                    <p>Matin 9h-12h: Visites XXXX<br></p>
                                    <p>Midi Pique Nique : XXXX<br></p>
                                    <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens </strong><br></p>
                                    <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                    <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                    <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                                </div>
                                <div class=\"col-xl-4\" style=\"padding:0px 0px;\">
                                    <h5 style=\"margin-top:5px;\">Options</h5>
                                    <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                    <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                    <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br> : Prix 9 €<br></p>
                                    <p>Vous avez choisi de participer a la Visite guidée <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin <br>2019 a 15H : Prix 6 €<br></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12\" style=\"padding-left:0px;padding-right:0px;\">
                <div class=\"collapseclient\"><a class=\"btn btn-primary collapseclient\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\" style=\"margin-top:5px;\">Nom: XXXXXX &nbsp; &nbsp; &nbsp;Prénom: XXXXXX &nbsp; &nbsp; &nbsp; &nbsp; ST/ADM: XXXXXXXXXX &nbsp; &nbsp; Montant TTC : XXX€<br></a>
                    <div
                        class=\"collapse\" id=\"collapse-2\">
                        <div class=\"d-flex\">
                            <div class=\"col-xl-4\" style=\"padding:0px;margin-left:3px;\">
                                <h5 style=\"margin-top:5px;\">Jour 1</h5>
                                <p>Vous avez souhaiter beneficier du transport de la gare SNCF a la scene du louvre lens.<br></p>
                                <p><strong>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens.</strong><br></p>
                                <p>Midi Pique Nique : XXXX<br></p>
                                <p>Apres-Midi : Visites XXXX<br></p>
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements<br></p>
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px;\">
                                <h5 style=\"margin-top:5px;\">Jour 2</h5>
                                <p>Vous avez souhaiter beneficier du transport aller-retour vers votre hebergements.<br></p>
                                <p>Matin 9h-12h: Visites XXXX<br></p>
                                <p>Midi Pique Nique : XXXX<br></p>
                                <p><strong>Après-midi : allocutions en salle à La Scène du Louvre-Lens </strong><br></p>
                                <p>Vous avez souhaitez beneficier du transport de la gare SNCF a la scene du louvre lens<br></p>
                                <p>Vous avez choisi de participer a la Soirée au louvre-lens de 19h30 a 00:30 : Prix 40€<br></p>
                                <p>Vous avez souhaitez beneficier du transport aller-retour vers votre hebergements.<br></p>
                            </div>
                            <div class=\"col-xl-4\" style=\"padding:0px 0px;\">
                                <h5 style=\"margin-top:5px;\">Options</h5>
                                <p>Vous avez choisi de participer a la visite (Choix X) du samedi matin.<br></p>
                                <p>Vous avez choisi de participer a l'exposition temporaire du Louvre-Lens du Samedi 8/Dimanche 9 Juin 2019 : Prix 9€.<br></p>
                                <p>Vous avez choisi de participer a la visite guidée de la mine d'art deco <br>de lens du Samedi 8/Dimanche 9 Juin 2019 a 14h30 : Prix 6€.<br></p>
                                <p>Vous avez choisi de participer a la Visite guidée \"A la découverte des <br>Terrils, trésors du Patrimoine mondial\"&nbsp; du Dimanche 9 Juin 2019 a 14h30<br> : Prix 9 €<br></p>
                                <p>Vous avez choisi de participer a la Visite guidée <br>\"Notre-Dame-de-Lorette, grand site de la Mémoire\"&nbsp; du Dimanche 9 Juin <br>2019 a 15H : Prix 6 €<br></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
            <div class=\"border-form-prix\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX : XXX€</p>
            </div>
        </div>
        <div class=\"col-xl-2 offset-10 offset-xl-10 d-flex justify-content-between\" style=\"margin-top:70px;padding:0px;padding-right:5px;padding-left:5px;margin-bottom:10px;\"><button class=\"btn btn-primary\" type=\"button\" style=\"line-height:24px;font-size:26px;\">Valider</button></div>
    </div>
    </div>
    </div>
{% endblock %}
", "default/recapitulatif.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\default\\recapitulatif.html.twig");
    }
}
