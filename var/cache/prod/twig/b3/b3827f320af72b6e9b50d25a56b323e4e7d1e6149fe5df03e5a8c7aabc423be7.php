<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_8256e5e3a2d582e1168c74512a066f92c02684f6cc64fc50cc3f035404a6bc82 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 19
            echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        return array (  70 => 28,  66 => 27,  58 => 21,  52 => 19,  50 => 18,  46 => 17,  36 => 10,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
