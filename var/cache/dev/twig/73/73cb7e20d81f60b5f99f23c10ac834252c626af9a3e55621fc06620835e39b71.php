<?php

/* admin/admin.html.twig */
class __TwigTemplate_d1e203bc873bacedbfc66b0aa28cc356d9a1ed06539194b8efa4afb5df68c881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        echo "<div>
    <div class=\"container\" style=\"margin-top:100px;\">
        <div class=\"row justify-content-between\" style=\"height:250px;min-height:250px;\">
            <div class=\"col-md-4 col-xl-3 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_colloque");
        echo "\">Colloque</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des réservations<br>concernant le colloque Euralens 2019&nbsp;<br></p>
            </div>
            <div class=\"col-md-4 col-xl-3 offset-xl-0 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_utilisateurs");
        echo "\">Utilisateurs</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des utilisateurs<br>concernant le colloque Euralens 2019&nbsp;<br></p>
            </div>
            <div class=\"col-md-4 col-xl-3 offset-xl-0 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_paiement");
        echo "\">Paiement et Verification</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des paiements<br>concernant les réservations du colloque Euralens 2019<br></p>
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
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div>
    <div class=\"container\" style=\"margin-top:100px;\">
        <div class=\"row justify-content-between\" style=\"height:250px;min-height:250px;\">
            <div class=\"col-md-4 col-xl-3 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('admin_colloque') }}\">Colloque</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des réservations<br>concernant le colloque Euralens 2019&nbsp;<br></p>
            </div>
            <div class=\"col-md-4 col-xl-3 offset-xl-0 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('admin_utilisateurs') }}\">Utilisateurs</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des utilisateurs<br>concernant le colloque Euralens 2019&nbsp;<br></p>
            </div>
            <div class=\"col-md-4 col-xl-3 offset-xl-0 d-flex flex-column justify-content-around align-items-center border-column-admin\"><a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('admin_paiement') }}\">Paiement et Verification</a>
                <p class=\"text-center\" style=\"margin:0px;\">Toutes les informations des paiements<br>concernant les réservations du colloque Euralens 2019<br></p>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/admin.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/admin/admin.html.twig");
    }
}
