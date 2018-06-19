<?php

/* :admin:adminColloque.html.twig */
class __TwigTemplate_4a66898768e8c94d9b27acdfc9b0ee85adf5ca597072611b16972962eb92d8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:adminColloque.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:adminColloque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:adminColloque.html.twig"));

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
        echo "<div class=\"float-left\" style=\"margin-top:100px;margin-right:0px;\">
        <div class=\"container\" style=\"padding:0px;margin-left:15px;\">
            <div class=\"row\" style=\"margin-right:0;margin-left:0;\">
                <div class=\"col-md-4 col-lg-11 col-xl-12 offset-lg-0 offset-xl-0\" style=\"padding:0;\">
                    <div class=\"d-flex justify-content-center\"><button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button></div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                      <button value=\"28\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                            <div class=\"form-check\"><input data-key=\"phrase-1\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-21\" value=\"0\" name='radio'><label class=\"form-check-label\" for=\"formCheck-21\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input data-key=\"phrase-2\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-22\" value=\"1\" name='radio'><label class=\"form-check-label\" for=\"formCheck-22\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input data-key=\"phrase-3\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-23\" value=\"2\" name='radio'><label class=\"form-check-label\" for=\"formCheck-23\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-24\" value=\"3\" name='radio'><label class=\"form-check-label\" for=\"formCheck-24\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-25\" value=\"4\" name='radio'><label class=\"form-check-label\" for=\"formCheck-25\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-26\" value=\"5\" name='radio'><label class=\"form-check-label\" for=\"formCheck-26\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-27\" value=\"6\" name='radio'><label class=\"form-check-label\" for=\"formCheck-27\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-28\" value=\"7\" name='radio'><label class=\"form-check-label\" for=\"formCheck-28\">&nbsp;Transport Hebergement</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-29\" value=\"8\" name='radio'><label class=\"form-check-label\" for=\"formCheck-29\">&nbsp;Soirée Louvre  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-20\" value=\"9\" name='radio'><label class=\"form-check-label\" for=\"formCheck-20\">&nbsp;Soirée Transport Hebergement</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div><button value=\"29\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-11\" value=\"10\" name='radio'><label class=\"form-check-label\" for=\"formCheck-11\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-12\" value=\"11\" name='radio'><label class=\"form-check-label\" for=\"formCheck-12\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-13\" value=\"12\" name='radio'><label class=\"form-check-label\" for=\"formCheck-13\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-14\" value=\"13\" name='radio'><label class=\"form-check-label\" for=\"formCheck-14\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-15\" value=\"14\" name='radio'><label class=\"form-check-label\" for=\"formCheck-15\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-16\" value=\"15\" name='radio'><label class=\"form-check-label\" for=\"formCheck-16\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-17\" value=\"16\" name='radio'><label class=\"form-check-label\" for=\"formCheck-17\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-18\" value=\"17\" name='radio'><label class=\"form-check-label\" for=\"formCheck-18\">&nbsp;Transport Hebergement</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div><button value=\"30\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-1\" value=\"18\" name='radio'><label class=\"form-check-label\" for=\"formCheck-1\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-2\" value=\"19\" name='radio'><label class=\"form-check-label\" for=\"formCheck-2\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-3\" value=\"20\" name='radio'><label class=\"form-check-label\" for=\"formCheck-3\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-4\" value=\"21\" name='radio'><label class=\"form-check-label\" for=\"formCheck-4\">&nbsp;Exposition 8 JUIN | PRIX</label></div>
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
    </div>
    <div class=\"d-flex ml-auto\" style=\"margin-top:100px;max-width:900px;margin-right:15px;margin-left:0px;\">
        <div class=\"container d-flex flex-column bordercontainer\" style=\"margin-right:0px;margin-left:0px;min-height:auto;\">
            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">Toutes les réservations</p>
                    <p id=\"evenement\" style=\"font-size:22px;font-weight:bold;\"></p>
                    <p style=\"font-size:22px;font-weight:bold;\">TOTAL : XXX Personnes</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <a href=\"admincolloque.php?nom=<?= \$sortInverse['nom']?>\" class=\"text-center\">Nom</a>
                </div>
                <div class=\"col\">
                    <a href=\"admincolloque.php?prenom=<?= \$sortInverse['prenom']?>\" class=\"text-center\">Prenom</a>
                </div>
                <div class=\"col\">
                    <a href=\"admincolloque.php?id=<?= \$sortInverse['id']?>\" class=\"text-center\">Societe</a>
                </div>
                <div class=\"col\">
                    <p class=\"text-center\">N° de Reservation</p>
                </div>
                <div class=\"col border-left-admin\">
                    <p class=\"text-center\">Paiement</p>
                </div>
            </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <p><?php echo \$items['nom']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p><?php echo \$items['prenom']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p class=\"text-center\"><?php echo \$items['id']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p class=\"text-center\">XXX</p>
                    </div>
                    <div class=\"col border-left-admin\">
                        <p class=\"text-center\">XXX</p>
                    </div>
                </div>

            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-center totalprix\">
                    <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">TOTAL : XXX €</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":admin:adminColloque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"float-left\" style=\"margin-top:100px;margin-right:0px;\">
        <div class=\"container\" style=\"padding:0px;margin-left:15px;\">
            <div class=\"row\" style=\"margin-right:0;margin-left:0;\">
                <div class=\"col-md-4 col-lg-11 col-xl-12 offset-lg-0 offset-xl-0\" style=\"padding:0;\">
                    <div class=\"d-flex justify-content-center\"><button value=\"27\" id=\"buttonall\" class=\"btn btn-primary\" type=\"button\">Toutes les réservations  | PRIX</button></div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div class=\"justify-content-center\">
                      <button value=\"28\" id=\"buttonallday1\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-1\" role=\"button\" href=\"#collapse-1\">Jour 1</button>
                        <div class=\"collapse\" id=\"collapse-1\">
                            <div class=\"form-check\"><input data-key=\"phrase-1\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-21\" value=\"0\" name='radio'><label class=\"form-check-label\" for=\"formCheck-21\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input data-key=\"phrase-2\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-22\" value=\"1\" name='radio'><label class=\"form-check-label\" for=\"formCheck-22\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input data-key=\"phrase-3\" class=\"form-check-input\" type=\"radio\" id=\"formCheck-23\" value=\"2\" name='radio'><label class=\"form-check-label\" for=\"formCheck-23\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-24\" value=\"3\" name='radio'><label class=\"form-check-label\" for=\"formCheck-24\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-25\" value=\"4\" name='radio'><label class=\"form-check-label\" for=\"formCheck-25\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-26\" value=\"5\" name='radio'><label class=\"form-check-label\" for=\"formCheck-26\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-27\" value=\"6\" name='radio'><label class=\"form-check-label\" for=\"formCheck-27\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-28\" value=\"7\" name='radio'><label class=\"form-check-label\" for=\"formCheck-28\">&nbsp;Transport Hebergement</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-29\" value=\"8\" name='radio'><label class=\"form-check-label\" for=\"formCheck-29\">&nbsp;Soirée Louvre  | PRIX</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-20\" value=\"9\" name='radio'><label class=\"form-check-label\" for=\"formCheck-20\">&nbsp;Soirée Transport Hebergement</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div><button value=\"29\" id=\"buttonallday2\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-2\" role=\"button\" href=\"#collapse-2\">Jour 2</button>
                        <div class=\"collapse\" id=\"collapse-2\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-11\" value=\"10\" name='radio'><label class=\"form-check-label\" for=\"formCheck-11\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-12\" value=\"11\" name='radio'><label class=\"form-check-label\" for=\"formCheck-12\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-13\" value=\"12\" name='radio'><label class=\"form-check-label\" for=\"formCheck-13\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-14\" value=\"13\" name='radio'><label class=\"form-check-label\" for=\"formCheck-14\">&nbsp;Repas 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-15\" value=\"14\" name='radio'><label class=\"form-check-label\" for=\"formCheck-15\">&nbsp;Repas 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-16\" value=\"15\" name='radio'><label class=\"form-check-label\" for=\"formCheck-16\">&nbsp;Repas 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-17\" value=\"16\" name='radio'><label class=\"form-check-label\" for=\"formCheck-17\">&nbsp;Transport SNCF</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-18\" value=\"17\" name='radio'><label class=\"form-check-label\" for=\"formCheck-18\">&nbsp;Transport Hebergement</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-left:0;margin-right:0;margin-top:15px;\">
                <div class=\"col-md-4\" style=\"padding:0;width:auto;max-width:100%;min-width:100%;\">
                    <div><button value=\"30\" id=\"buttonalloption\" class=\"btn btn-primary\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-3\" role=\"button\" href=\"#collapse-3\">Options</button>
                        <div class=\"collapse\" id=\"collapse-3\">
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-1\" value=\"18\" name='radio'><label class=\"form-check-label\" for=\"formCheck-1\">&nbsp;Visite 1</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-2\" value=\"19\" name='radio'><label class=\"form-check-label\" for=\"formCheck-2\">&nbsp;Visite 2</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-3\" value=\"20\" name='radio'><label class=\"form-check-label\" for=\"formCheck-3\">&nbsp;Visite 3</label></div>
                            <div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" id=\"formCheck-4\" value=\"21\" name='radio'><label class=\"form-check-label\" for=\"formCheck-4\">&nbsp;Exposition 8 JUIN | PRIX</label></div>
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
    </div>
    <div class=\"d-flex ml-auto\" style=\"margin-top:100px;max-width:900px;margin-right:15px;margin-left:0px;\">
        <div class=\"container d-flex flex-column bordercontainer\" style=\"margin-right:0px;margin-left:0px;min-height:auto;\">
            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-between\">
                    <p id=\"jour\" style=\"font-weight:bold;font-size:22px;\">Toutes les réservations</p>
                    <p id=\"evenement\" style=\"font-size:22px;font-weight:bold;\"></p>
                    <p style=\"font-size:22px;font-weight:bold;\">TOTAL : XXX Personnes</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <a href=\"admincolloque.php?nom=<?= \$sortInverse['nom']?>\" class=\"text-center\">Nom</a>
                </div>
                <div class=\"col\">
                    <a href=\"admincolloque.php?prenom=<?= \$sortInverse['prenom']?>\" class=\"text-center\">Prenom</a>
                </div>
                <div class=\"col\">
                    <a href=\"admincolloque.php?id=<?= \$sortInverse['id']?>\" class=\"text-center\">Societe</a>
                </div>
                <div class=\"col\">
                    <p class=\"text-center\">N° de Reservation</p>
                </div>
                <div class=\"col border-left-admin\">
                    <p class=\"text-center\">Paiement</p>
                </div>
            </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <p><?php echo \$items['nom']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p><?php echo \$items['prenom']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p class=\"text-center\"><?php echo \$items['id']; ?></p>
                    </div>
                    <div class=\"col\">
                        <p class=\"text-center\">XXX</p>
                    </div>
                    <div class=\"col border-left-admin\">
                        <p class=\"text-center\">XXX</p>
                    </div>
                </div>

            <div class=\"row d-flex bordertitleadmin\">
                <div class=\"col-xl-12 d-flex justify-content-center totalprix\">
                    <p style=\"margin-bottom:0px;font-size:25px;font-weight:bold;\">TOTAL : XXX €</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", ":admin:adminColloque.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/admin/adminColloque.html.twig");
    }
}
