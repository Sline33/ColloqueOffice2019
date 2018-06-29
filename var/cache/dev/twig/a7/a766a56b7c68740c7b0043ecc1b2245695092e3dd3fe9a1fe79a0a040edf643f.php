<?php

/* ticket/new.html.twig */
class __TwigTemplate_acfe4e3ae63f2c44e06fdc71e1b3304d805528f247436e2b2c08e9369565cf6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ticket/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticket/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticket/new.html.twig"));

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
    <div class=\"container\" style=\"width:750px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <ul class=\"errorLog\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <div class=\"text-center\">
                      <p><strong>Les champs avec une (*) sont obligatoires !</strong></p>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_nom\">Nom(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_lastName\" name=\"appbundle_ticket[lastName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_prenom\">Prenom(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_firstName\" name=\"appbundle_ticket[firstName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_societe\">Societe(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_society\" name=\"appbundle_ticket[society]\" required=\"required\" value=\"\"/>
                    </div>

                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">Jour 1 :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportTrain\">Vous souhaitez bénéficier du transport de la gare SNCF de Lens à la Scène</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportTrain\" name=\"appbundle_ticket[day1TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <p>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens</p>
                    <br/>
                    <p>Pique-nique :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast1\" name=\"appbundle_ticket[day1Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast2\" name=\"appbundle_ticket[day1Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast3\" name=\"appbundle_ticket[day1Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Visite après-midi :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite1\" name=\"appbundle_ticket[day1Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite2\" name=\"appbundle_ticket[day1Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite3\" name=\"appbundle_ticket[day1Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportBus\">Vous souhaitez bénéficier des transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportBus\" name=\"appbundle_ticket[day1TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">Jour 2 :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBus\">Vous souhaitez bénéficier des transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBus\" name=\"appbundle_ticket[day2TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p>Matin 9h-12h visite :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite1\" name=\"appbundle_ticket[day2Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite2\" name=\"appbundle_ticket[day2Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite3\" name=\"appbundle_ticket[day2Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Pique-nique :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast1\" name=\"appbundle_ticket[day2Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast2\" name=\"appbundle_ticket[day2Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast3\" name=\"appbundle_ticket[day2Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Après-midi : allocutions en salle à La Scène du Louvre-Lens</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportTrain\">Vous souhaitez bénéficier du transport de la Scène à la gare SNCF de Lens</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportTrain\" name=\"appbundle_ticket[day2TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Night\">Soirée au Louvre-Lens (19h30-00 :30) : 40 €</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Night\" name=\"appbundle_ticket[day2Night]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBusNight\">Vous souhaitez bénéficier les transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBusNight\" name=\"appbundle_ticket[day2TransportBusNight]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">En option :</p>
                    <br/>
                    <p>VISITES SUPPLEMENTAIRES</p>
                    <br/>
                    <p>Matin visite :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionVisite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite1\" name=\"appbundle_ticket[optionVisite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite2\" name=\"appbundle_ticket[optionVisite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite3\" name=\"appbundle_ticket[optionVisite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Entrée à l’exposition temporaire du Louvre-Lens (9 €)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionExpo1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo1\" name=\"appbundle_ticket[optionExpo]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionExpo2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo2\" name=\"appbundle_ticket[optionExpo]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p>Visite guidée Lens, mine d’Art déco à 14h30 (6 €)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionArtDeco1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco1\" name=\"appbundle_ticket[optionArtDeco]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionArtDeco2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco2\" name=\"appbundle_ticket[optionArtDeco]\" value=\"2\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionDecouverte\">Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial :<br/>
                            Dimanche 9 juin à 14h30 (9 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionDecouverte\" name=\"appbundle_ticket[optionDecouverte]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionGrandSite\">Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire :<br/>
                            dimanche 9 juin à 15h (6 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionGrandSite\" name=\"appbundle_ticket[optionGrandSite]\" value=\"\"/>
                    </div>
                    <div class=\"col-sm-12\" style=\"margin-bottom:0px;margin-top:70px;\">
                        <div class=\"border-form-prix\">
                            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                                <span id=\"prixreservation\">300</span>€</p>
                        </div>
                    </div>
                    <input type=\"submit\" name=\"add\" class=\"btn btn-primary float-left\" style=\"margin-top:30px;\" value=\"Ajouter une réservation\"/>
                    <input type=\"submit\" name=\"next\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;\" value=\"Suivant\"/>
                </form>
            </div>
        </div>
    </div>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ticket.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 156,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"container\" style=\"width:750px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {{ form_start(form) }}
                <ul class=\"errorLog\">
                    {{ form_widget(form._token) }}
                    <div class=\"text-center\">
                      <p><strong>Les champs avec une (*) sont obligatoires !</strong></p>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_nom\">Nom(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_lastName\" name=\"appbundle_ticket[lastName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_prenom\">Prenom(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_firstName\" name=\"appbundle_ticket[firstName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_societe\">Societe(*)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_society\" name=\"appbundle_ticket[society]\" required=\"required\" value=\"\"/>
                    </div>

                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">Jour 1 :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportTrain\">Vous souhaitez bénéficier du transport de la gare SNCF de Lens à la Scène</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportTrain\" name=\"appbundle_ticket[day1TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <p>Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens</p>
                    <br/>
                    <p>Pique-nique :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast1\" name=\"appbundle_ticket[day1Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast2\" name=\"appbundle_ticket[day1Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast3\" name=\"appbundle_ticket[day1Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Visite après-midi :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite1\" name=\"appbundle_ticket[day1Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite2\" name=\"appbundle_ticket[day1Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Visite3\" name=\"appbundle_ticket[day1Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportBus\">Vous souhaitez bénéficier des transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportBus\" name=\"appbundle_ticket[day1TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">Jour 2 :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBus\">Vous souhaitez bénéficier des transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBus\" name=\"appbundle_ticket[day2TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p>Matin 9h-12h visite :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite1\" name=\"appbundle_ticket[day2Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite2\" name=\"appbundle_ticket[day2Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite3\" name=\"appbundle_ticket[day2Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Pique-nique :(*)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast1\" name=\"appbundle_ticket[day2Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast2\" name=\"appbundle_ticket[day2Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast3\" name=\"appbundle_ticket[day2Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Après-midi : allocutions en salle à La Scène du Louvre-Lens</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportTrain\">Vous souhaitez bénéficier du transport de la Scène à la gare SNCF de Lens</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportTrain\" name=\"appbundle_ticket[day2TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Night\">Soirée au Louvre-Lens (19h30-00 :30) : 40 €</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Night\" name=\"appbundle_ticket[day2Night]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBusNight\">Vous souhaitez bénéficier les transports aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBusNight\" name=\"appbundle_ticket[day2TransportBusNight]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center\" style=\"font-size:20px;font-weight:600;\">En option :</p>
                    <br/>
                    <p>VISITES SUPPLEMENTAIRES</p>
                    <br/>
                    <p>Matin visite :</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionVisite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite1\" name=\"appbundle_ticket[optionVisite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite2\" name=\"appbundle_ticket[optionVisite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite3\" name=\"appbundle_ticket[optionVisite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p>Entrée à l’exposition temporaire du Louvre-Lens (9 €)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionExpo1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo1\" name=\"appbundle_ticket[optionExpo]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionExpo2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo2\" name=\"appbundle_ticket[optionExpo]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p>Visite guidée Lens, mine d’Art déco à 14h30 (6 €)</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionArtDeco1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco1\" name=\"appbundle_ticket[optionArtDeco]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionArtDeco2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco2\" name=\"appbundle_ticket[optionArtDeco]\" value=\"2\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionDecouverte\">Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial :<br/>
                            Dimanche 9 juin à 14h30 (9 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionDecouverte\" name=\"appbundle_ticket[optionDecouverte]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionGrandSite\">Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire :<br/>
                            dimanche 9 juin à 15h (6 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionGrandSite\" name=\"appbundle_ticket[optionGrandSite]\" value=\"\"/>
                    </div>
                    <div class=\"col-sm-12\" style=\"margin-bottom:0px;margin-top:70px;\">
                        <div class=\"border-form-prix\">
                            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                                <span id=\"prixreservation\">300</span>€</p>
                        </div>
                    </div>
                    <input type=\"submit\" name=\"add\" class=\"btn btn-primary float-left\" style=\"margin-top:30px;\" value=\"Ajouter une réservation\"/>
                    <input type=\"submit\" name=\"next\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;\" value=\"Suivant\"/>
                </form>
            </div>
        </div>
    </div>
<script src=\"{{ asset('js/ticket.js') }}\"></script>
{% endblock %}
", "ticket/new.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/ticket/new.html.twig");
    }
}
