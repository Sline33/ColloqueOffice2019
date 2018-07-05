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
        echo "<div class=\"ticket\">
    <div class=\"container\" style=\"width:750px;padding-top:30px;background-color:rgba(255, 255, 255,0.5);\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"margin-bottom:30px;\">
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <ul class=\"errorLog\" style=\"padding-left: 15px;\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    <div class=\"text-center\">
                      <p><strong>Les champs avec une (<span style=\"color:red;\">*</span>) sont obligatoires !</strong></p>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_nom\">Nom(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_lastName\" name=\"appbundle_ticket[lastName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_prenom\">Prenom(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_firstName\" name=\"appbundle_ticket[firstName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_societe\">Société(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_society\" name=\"appbundle_ticket[society]\" required=\"required\" value=\"\"/>
                    </div>

                    <br/>
                    <p class=\"text-center titre\">Jour 1</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportTrain\">Vous souhaitez bénéficier du <strong>transport</strong> de la gare SNCF de Lens à la Scène :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportTrain\" name=\"appbundle_ticket[day1TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Matin 9h-12h :</strong>Allocutions en salle à la Scène du Louvre-Lens</p>
                    <br/>
                    <p><strong>Pique-nique :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast1\" name=\"appbundle_ticket[day1Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast2\" name=\"appbundle_ticket[day1Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast3\" name=\"appbundle_ticket[day1Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Visite après-midi :(<span style=\"color:red;\">*</span>)</strong></p>
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
                        <label for=\"appbundle_ticket_day1TransportBus\">Vous souhaitez bénéficier des <strong>transports</strong> aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportBus\" name=\"appbundle_ticket[day1TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center titre\">Jour 2</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBus\">Vous souhaitez bénéficier des <strong>transports aller-retour</strong> vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBus\" name=\"appbundle_ticket[day2TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Matin 9h-12h visite :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite1\" name=\"appbundle_ticket[day2Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite2\" name=\"appbundle_ticket[day2Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite3\" name=\"appbundle_ticket[day2Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Pique-nique :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast1\" name=\"appbundle_ticket[day2Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast2\" name=\"appbundle_ticket[day2Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast3\" name=\"appbundle_ticket[day2Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Après-midi :</strong> Allocutions en salle à La Scène du Louvre-Lens</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportTrain\">Vous souhaitez bénéficier du <strong>transport</strong> de la Scène à la gare SNCF de Lens</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportTrain\" name=\"appbundle_ticket[day2TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Night\"><strong>Soirée au Louvre-Lens</strong> (19h30-00 :30) : 40 €</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Night\" name=\"appbundle_ticket[day2Night]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBusNight\">Vous souhaitez bénéficier les <strong>transports aller-retour</strong> vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBusNight\" name=\"appbundle_ticket[day2TransportBusNight]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center titre\">En option <span style=\"text-transform:lowercase;\"><em>(visites supplémentaires)</em></span></p>
                    <br/>
                    <p><strong>Matin visite :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionVisite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite1\" name=\"appbundle_ticket[optionVisite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite2\" name=\"appbundle_ticket[optionVisite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite3\" name=\"appbundle_ticket[optionVisite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Entrée à l’exposition temporaire du Louvre-Lens (9 €)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionExpo1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo1\" name=\"appbundle_ticket[optionExpo]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionExpo2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo2\" name=\"appbundle_ticket[optionExpo]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée Lens, mine d’Art déco à 14h30 (6 €)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionArtDeco1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco1\" name=\"appbundle_ticket[optionArtDeco]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionArtDeco2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco2\" name=\"appbundle_ticket[optionArtDeco]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionDecouverte\">Dimanche 9 juin à 14h30 (9 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionDecouverte\" name=\"appbundle_ticket[optionDecouverte]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionGrandSite\">dimanche 9 juin à 15h (6 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionGrandSite\" name=\"appbundle_ticket[optionGrandSite]\" value=\"\"/>
                    </div>
                    <div class=\"col-sm-12\" style=\"margin-bottom:0px;margin-top:70px;\">
                            <p class=\"text-center prix\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                            <span id=\"prixreservation\">300</span> € TTC</p>
                    </div>
                    <input type=\"submit\" name=\"add\" class=\"btn btn-primary float-left\" style=\"margin-top:30px;\" value=\"Ajouter une réservation\"/>
                    <input type=\"submit\" name=\"next\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;\" value=\"Suivant\"/>
                </form>
            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 153
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
        return array (  206 => 153,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"ticket\">
    <div class=\"container\" style=\"width:750px;padding-top:30px;background-color:rgba(255, 255, 255,0.5);\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"margin-bottom:30px;\">
                {{ form_start(form) }}
                <ul class=\"errorLog\" style=\"padding-left: 15px;\">
                    {{ form_widget(form._token) }}
                    <div class=\"text-center\">
                      <p><strong>Les champs avec une (<span style=\"color:red;\">*</span>) sont obligatoires !</strong></p>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_nom\">Nom(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_lastName\" name=\"appbundle_ticket[lastName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_prenom\">Prenom(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_firstName\" name=\"appbundle_ticket[firstName]\" required=\"required\" value=\"\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"fos_user_registration_form_societe\">Société(<span style=\"color:red;\">*</span>)</label>
                        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_society\" name=\"appbundle_ticket[society]\" required=\"required\" value=\"\"/>
                    </div>

                    <br/>
                    <p class=\"text-center titre\">Jour 1</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1TransportTrain\">Vous souhaitez bénéficier du <strong>transport</strong> de la gare SNCF de Lens à la Scène :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportTrain\" name=\"appbundle_ticket[day1TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Matin 9h-12h :</strong>Allocutions en salle à la Scène du Louvre-Lens</p>
                    <br/>
                    <p><strong>Pique-nique :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day1Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast1\" name=\"appbundle_ticket[day1Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast2\" name=\"appbundle_ticket[day1Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day1Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1Breakfast3\" name=\"appbundle_ticket[day1Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Visite après-midi :(<span style=\"color:red;\">*</span>)</strong></p>
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
                        <label for=\"appbundle_ticket_day1TransportBus\">Vous souhaitez bénéficier des <strong>transports</strong> aller-retour vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportBus\" name=\"appbundle_ticket[day1TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center titre\">Jour 2</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBus\">Vous souhaitez bénéficier des <strong>transports aller-retour</strong> vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBus\" name=\"appbundle_ticket[day2TransportBus]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Matin 9h-12h visite :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Visite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite1\" name=\"appbundle_ticket[day2Visite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite2\" name=\"appbundle_ticket[day2Visite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Visite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Visite3\" name=\"appbundle_ticket[day2Visite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Pique-nique :(<span style=\"color:red;\">*</span>)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Breakfast1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast1\" name=\"appbundle_ticket[day2Breakfast]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast2\" name=\"appbundle_ticket[day2Breakfast]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_day2Breakfast3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Breakfast3\" name=\"appbundle_ticket[day2Breakfast]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Après-midi :</strong> Allocutions en salle à La Scène du Louvre-Lens</p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportTrain\">Vous souhaitez bénéficier du <strong>transport</strong> de la Scène à la gare SNCF de Lens</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportTrain\" name=\"appbundle_ticket[day2TransportTrain]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2Night\"><strong>Soirée au Louvre-Lens</strong> (19h30-00 :30) : 40 €</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2Night\" name=\"appbundle_ticket[day2Night]\" value=\"\"/>
                    </div>
                    <br/>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_day2TransportBusNight\">Vous souhaitez bénéficier les <strong>transports aller-retour</strong> vers les hébergements</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBusNight\" name=\"appbundle_ticket[day2TransportBusNight]\" value=\"\"/>
                    </div>
                    <br/>
                    <p class=\"text-center titre\">En option <span style=\"text-transform:lowercase;\"><em>(visites supplémentaires)</em></span></p>
                    <br/>
                    <p><strong>Matin visite :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionVisite1\">Choix 1</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite1\" name=\"appbundle_ticket[optionVisite]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite2\">Choix 2</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite2\" name=\"appbundle_ticket[optionVisite]\" value=\"2\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionVisite3\">Choix 3</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionVisite3\" name=\"appbundle_ticket[optionVisite]\" value=\"3\"/>
                    </div>
                    <br/>
                    <p><strong>Entrée à l’exposition temporaire du Louvre-Lens (9 €)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionExpo1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo1\" name=\"appbundle_ticket[optionExpo]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionExpo2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionExpo2\" name=\"appbundle_ticket[optionExpo]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée Lens, mine d’Art déco à 14h30 (6 €)</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionArtDeco1\">Samedi 8 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco1\" name=\"appbundle_ticket[optionArtDeco]\" value=\"1\"/>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=\"appbundle_ticket_optionArtDeco2\">Dimanche 9 juin 2019</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionArtDeco2\" name=\"appbundle_ticket[optionArtDeco]\" value=\"2\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionDecouverte\">Dimanche 9 juin à 14h30 (9 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionDecouverte\" name=\"appbundle_ticket[optionDecouverte]\" value=\"\"/>
                    </div>
                    <br/>
                    <p><strong>Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire :</strong></p>
                    <div class=\"field\">
                        <label for=\"appbundle_ticket_optionGrandSite\">dimanche 9 juin à 15h (6 €)</label>
                        <input class=\"form\" type=\"checkbox\" id=\"appbundle_ticket_optionGrandSite\" name=\"appbundle_ticket[optionGrandSite]\" value=\"\"/>
                    </div>
                    <div class=\"col-sm-12\" style=\"margin-bottom:0px;margin-top:70px;\">
                            <p class=\"text-center prix\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                            <span id=\"prixreservation\">300</span> € TTC</p>
                    </div>
                    <input type=\"submit\" name=\"add\" class=\"btn btn-primary float-left\" style=\"margin-top:30px;\" value=\"Ajouter une réservation\"/>
                    <input type=\"submit\" name=\"next\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;\" value=\"Suivant\"/>
                </form>
            </div>
        </div>
    </div>
</div>
<script src=\"{{ asset('js/ticket.js') }}\"></script>
{% endblock %}
", "ticket/new.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/ticket/new.html.twig");
    }
}
