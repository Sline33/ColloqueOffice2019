<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_2a8f6398685752c2b1fc89fc9d6774998ed9c973243fdb2f999f5d430b792e3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<header>
    <div class=\"d-flex justify-content-center\" style=\"margin-top:20px;\">
        <div class=\"d-flex flex-row-reverse justify-content-center align-items-center\"><i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:70px;width:69px;\"></i><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
        echo "\" class=\"reservation-link\" style=\"font-size:24px;\"><br>ACCUEIL<br><br></a></div>
        <div><i class=\"fa fa-circle-o\" style=\"font-size:201px;\"></i></div>
        <div class=\"d-flex align-items-center\"><i class=\"fa fa-long-arrow-right d-flex align-items-center\" style=\"font-size:71px;\"></i><a href=\"inscription.html\" class=\"reservation-link\" style=\"font-size:24px;\">S'ENREGISTRER<br></a></div>
    </div>
</header>

<div class=\"container d-flex flex-column justify-content-center align-items-center align-content-center flex-wrap\" style=\"margin-top:59px;\">
  <form class=\"flex-column\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"width:420px;\">
    ";
        // line 18
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 21
        echo "
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" autocomplete=\"username\" placeholder=\"Pseudo\" style=\"margin-top:0px;\">

    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"Mot De Passe\" style=\"margin-top:10px;\">

    <div class=\"d-flex flex-row justify-content-between align-items-center align-content-center\"style=\"padding-top:10px;\">
      <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a>
      <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
  </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  72 => 27,  64 => 21,  58 => 19,  56 => 18,  52 => 17,  42 => 10,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<header>
    <div class=\"d-flex justify-content-center\" style=\"margin-top:20px;\">
        <div class=\"d-flex flex-row-reverse justify-content-center align-items-center\"><i class=\"fa fa-long-arrow-left d-flex align-items-center\" style=\"font-size:70px;width:69px;\"></i><a href=\"{{ path(\"fos_user_security_homepage\") }}\" class=\"reservation-link\" style=\"font-size:24px;\"><br>ACCUEIL<br><br></a></div>
        <div><i class=\"fa fa-circle-o\" style=\"font-size:201px;\"></i></div>
        <div class=\"d-flex align-items-center\"><i class=\"fa fa-long-arrow-right d-flex align-items-center\" style=\"font-size:71px;\"></i><a href=\"inscription.html\" class=\"reservation-link\" style=\"font-size:24px;\">S'ENREGISTRER<br></a></div>
    </div>
</header>

<div class=\"container d-flex flex-column justify-content-center align-items-center align-content-center flex-wrap\" style=\"margin-top:59px;\">
  <form class=\"flex-column\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" style=\"width:420px;\">
    {% if csrf_token %}
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" autocomplete=\"username\" placeholder=\"Pseudo\" style=\"margin-top:0px;\">

    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"Mot De Passe\" style=\"margin-top:10px;\">

    <div class=\"d-flex flex-row justify-content-between align-items-center align-content-center\"style=\"padding-top:10px;\">
      <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié</a>
      <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Connexion'|trans }}\" />
    </div>
  </form>
</div>
", "@FOSUser/Security/login_content.html.twig", "/var/www/html/ColloqueOffice/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
