<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_a36ecf48c3d8dfb7523f236a54c0a7857f157c206a5b5edc5d2a899768ff8722 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "welcome"), "method")) {
            // line 7
            echo "  <div class=\"d-flex justify-content-center\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 9
                echo "          <p class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "firstname", array()), "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  </div>
";
        }
        // line 13
        echo "
<div class=\"container d-flex flex-column justify-content-center align-items-center align-content-center flex-wrap\" style=\"margin-top:59px;\">
  <form class=\"flex-column\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"width:420px;\">
    ";
        // line 16
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 17
            echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 19
        echo "
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" autocomplete=\"username\" placeholder=\"Pseudo\" style=\"margin-top:0px;\">

    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"Mot De Passe\" style=\"margin-top:10px;\">

    <div class=\"d-flex flex-row justify-content-between align-items-center align-content-center\"style=\"padding-top:10px;\">
      <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a>
      <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
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
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  84 => 25,  76 => 19,  70 => 17,  68 => 16,  64 => 15,  60 => 13,  56 => 11,  45 => 9,  41 => 8,  38 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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
{% if app.session.flashBag.has('welcome') %}
  <div class=\"d-flex justify-content-center\">
      {% for msg in app.session.flashBag.get('welcome') %}
          <p class=\"alert alert-success\">{{ msg }} {{customer.firstname}}</p>
      {% endfor %}
  </div>
{% endif %}

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
", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
