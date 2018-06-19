<?php

/* :default:reservation.html.twig */
class __TwigTemplate_092f173c7e4c9e3415b7b6ded73fea72b032cade5963950ee0d083bae1eb2151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:reservation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:reservation.html.twig"));

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
                <div class=\"col-md-3 col-xl-2 offset-xl-3 d-flex justify-content-center align-items-center\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_reservation");
        echo "\" class=\"reservation-link reservation-link-color\">Reservation</a>
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
                    <div class=\"d-flex flex-column\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"paiement.html\" class=\"reservation-link \" style=\"padding-left:0px;margin-left:10px;\">Paiement</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container container-form\" style=\"margin-top:70px;\">
            <div class=\"row\">
                <div class=\"col-xl-3\">
                    <div class=\"d-flex\">
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-5\"><label class=\"form-check-label\" for=\"formCheck-5\">Mr</label></div>
                        <div class=\"form-check\" style=\"margin-left:12px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-6\"><label class=\"form-check-label\" for=\"formCheck-6\">Mme</label></div>
                    </div>
                    <div class=\"d-flex flex-column\" style=\"margin-top:20px;\"><input class=\"float-left\" type=\"text\" placeholder=\"Nom\"><input type=\"text\" placeholder=\"Prenom\" style=\"margin-top:10px;\"><input type=\"text\" placeholder=\"Societe\" style=\"margin-top:10px;\"></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Jour 1</h1>
                    <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport de la gare SNCF de Lens a la Scene</label></div>
                    <p style=\"margin-bottom:0px;margin-top:10px;\">Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens<br></p>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Pique Nique :<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Apres-Midi : Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"form-check\" style=\"margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\" style=\"margin-top:40px;\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Jour 2</h1>
                    <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Matin 9h-12h: Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Pique Nique :<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <p style=\"margin-bottom:0px;margin-top:10px;\">Après-midi : allocutions en salle à La Scène du Louvre-Lens<br></p>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Vous souhaitez beneficier du transport de la gare SNCF de Lens a la Scene</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"gala\"><label class=\"form-check-label\" for=\"gala\">Soirée au louvre-lens (19h30-00:30) : 40€</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\" style=\"margin-top:40px;\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Visites Supplementaires optionnelles&nbsp;<br></h1>
                    <div class=\"d-flex\">
                        <p style=\"margin-bottom:0px;\">Matin 9h-12h: Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Entrée à l’exposition temporaire du Louvre-Lens (9 €)&nbsp;<br></label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"expotemporaire\"><label class=\"form-check-label\" for=\"expotemporaire\">Samedi 8 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"expotemporaire2\"><label class=\"form-check-label\" for=\"expotemporaire2\">Dimanche 9 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Visite guidée Lens, mine d’Art déco à 14h30 (6 €)<br></label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"artdeco\"><label class=\"form-check-label\" for=\"artdeco\">Samedi 8 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"artdeco2\"><label class=\"form-check-label\" for=\"artdeco2\">Dimanche 9 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"decouverte\"><label class=\"form-check-label\" for=\"decouverte\">Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial : Dimanche 9 juin à 14h30 (9 €)<br></label></div>
                    <div
                        class=\"form-check\" style=\"margin-left:0px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"grandsite\"><label class=\"form-check-label\" for=\"grandsite\">Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire : dimanche 9 juin à 15h (6 €)<br></label></div>
            </div>
            <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
                <div class=\"border-form-prix\">
                    <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX : <span id=\"prixreservation\">300</span>€</p>
                </div>
            </div>
            <div class=\"col d-flex justify-content-between\" style=\"margin-top:70px;padding:0px;padding-right:5px;padding-left:5px;margin-bottom:10px;\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_reservation");
        echo "\" style=\"margin-right:90px;font-size:25px;\">Ajouter Une Reservation</a><a class=\"btn btn-primary\" role=\"button\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_recapitulatif");
        echo "\"    style=\"font-size:25px;\">Validation</a></div>
        </div>
    </div>
    </div>
  <footer style=\"margin-top:118px;\">
      <div>
          <p class=\"text-center\" style=\"font-size:49px;\">FOOTER</p>
      </div>
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 106,  94 => 24,  87 => 20,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <div class=\"col-sm-9 col-md-7 col-lg-5 col-xl-4 offset-sm-2 offset-md-2 offset-lg-3 offset-xl-3 d-flex\"><a class=\"d-flex align-items-center align-content-center reservation-link\" href=\"{{ path('fos_user_security_homepage') }}\" style=\"font-size:24px;\">Accueil</a><i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:70px;width:70px;line-height:70px;\"></i>
                    <i
                        class=\"fa fa-circle-o\" style=\"font-size:216px;\"></i>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-xl-2 offset-xl-3 d-flex justify-content-center align-items-center\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"{{ path('fos_user_security_reservation') }}\" class=\"reservation-link reservation-link-color\">Reservation</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">1</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-center align-items-center\">
                    <div class=\"d-flex flex-column\" style=\"padding-top:0px;\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"{{ path('fos_user_security_recapitulatif') }}\" class=\"reservation-link\">Recapitulatif</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">2</p>
                    </div><i class=\"fa fa-long-arrow-right\" style=\"font-size:40px;margin-left:30px;padding-left:0px;width:40px;height:40px;\"></i></div>
                <div class=\"col-md-3 col-xl-2 d-flex justify-content-start align-items-center\">
                    <div class=\"d-flex flex-column\"><i class=\"fa fa-circle-o\" style=\"font-size:97px;margin-top:0px;padding-top:70px;\"></i><a href=\"paiement.html\" class=\"reservation-link \" style=\"padding-left:0px;margin-left:10px;\">Paiement</a>
                        <p class=\"Formulaire-number\" style=\"font-size:22px;\">3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=\"container container-form\" style=\"margin-top:70px;\">
            <div class=\"row\">
                <div class=\"col-xl-3\">
                    <div class=\"d-flex\">
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-5\"><label class=\"form-check-label\" for=\"formCheck-5\">Mr</label></div>
                        <div class=\"form-check\" style=\"margin-left:12px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-6\"><label class=\"form-check-label\" for=\"formCheck-6\">Mme</label></div>
                    </div>
                    <div class=\"d-flex flex-column\" style=\"margin-top:20px;\"><input class=\"float-left\" type=\"text\" placeholder=\"Nom\"><input type=\"text\" placeholder=\"Prenom\" style=\"margin-top:10px;\"><input type=\"text\" placeholder=\"Societe\" style=\"margin-top:10px;\"></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Jour 1</h1>
                    <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport de la gare SNCF de Lens a la Scene</label></div>
                    <p style=\"margin-bottom:0px;margin-top:10px;\">Matin 9h-12h : allocutions en salle à la Scène du Louvre-Lens<br></p>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Pique Nique :<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Apres-Midi : Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"form-check\" style=\"margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\" style=\"margin-top:40px;\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Jour 2</h1>
                    <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-1\"><label class=\"form-check-label\" for=\"formCheck-1\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Matin 9h-12h: Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"d-flex\" style=\"margin-top:10px;\">
                        <p style=\"margin-bottom:0px;\">Pique Nique :<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <p style=\"margin-bottom:0px;margin-top:10px;\">Après-midi : allocutions en salle à La Scène du Louvre-Lens<br></p>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Vous souhaitez beneficier du transport de la gare SNCF de Lens a la Scene</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"gala\"><label class=\"form-check-label\" for=\"gala\">Soirée au louvre-lens (19h30-00:30) : 40€</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Vous souhaitez beneficier du transport aller-retour vers les hebergements</label></div>
                </div>
                <div class=\"col-md-12 d-flex flex-column\" style=\"margin-top:40px;\">
                    <h1 class=\"text-center\" style=\"margin-bottom:40px;\">Visites Supplementaires optionnelles&nbsp;<br></h1>
                    <div class=\"d-flex\">
                        <p style=\"margin-bottom:0px;\">Matin 9h-12h: Visites<br></p>
                        <div class=\"form-check\" style=\"margin-left:20px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-2\"><label class=\"form-check-label\" for=\"formCheck-2\">Choix 1&nbsp;</label></div>
                        <div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-3\"><label class=\"form-check-label\" for=\"formCheck-3\">Choix 2</label></div>
                        <div class=\"form-check\" style=\"margin-left:5px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Choix 3</label></div>
                    </div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Entrée à l’exposition temporaire du Louvre-Lens (9 €)&nbsp;<br></label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"expotemporaire\"><label class=\"form-check-label\" for=\"expotemporaire\">Samedi 8 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"expotemporaire2\"><label class=\"form-check-label\" for=\"expotemporaire2\">Dimanche 9 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"formCheck-4\"><label class=\"form-check-label\" for=\"formCheck-4\">Visite guidée Lens, mine d’Art déco à 14h30 (6 €)<br></label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"artdeco\"><label class=\"form-check-label\" for=\"artdeco\">Samedi 8 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:122px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"artdeco2\"><label class=\"form-check-label\" for=\"artdeco2\">Dimanche 9 juin 2019</label></div>
                    <div class=\"form-check\" style=\"margin-left:0px;margin-top:10px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"decouverte\"><label class=\"form-check-label\" for=\"decouverte\">Visite guidée A la découverte des Terrils, trésors du Patrimoine mondial : Dimanche 9 juin à 14h30 (9 €)<br></label></div>
                    <div
                        class=\"form-check\" style=\"margin-left:0px;\"><input class=\"form-check-input\" type=\"checkbox\" id=\"grandsite\"><label class=\"form-check-label\" for=\"grandsite\">Visite guidée Notre-Dame-de-Lorette, grand site de la Mémoire : dimanche 9 juin à 15h (6 €)<br></label></div>
            </div>
            <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
                <div class=\"border-form-prix\">
                    <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX : <span id=\"prixreservation\">300</span>€</p>
                </div>
            </div>
            <div class=\"col d-flex justify-content-between\" style=\"margin-top:70px;padding:0px;padding-right:5px;padding-left:5px;margin-bottom:10px;\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('fos_user_security_reservation') }}\" style=\"margin-right:90px;font-size:25px;\">Ajouter Une Reservation</a><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('fos_user_security_recapitulatif') }}\"    style=\"font-size:25px;\">Validation</a></div>
        </div>
    </div>
    </div>
  <footer style=\"margin-top:118px;\">
      <div>
          <p class=\"text-center\" style=\"font-size:49px;\">FOOTER</p>
      </div>
  </footer>
{% endblock %}
", ":default:reservation.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/default/reservation.html.twig");
    }
}
