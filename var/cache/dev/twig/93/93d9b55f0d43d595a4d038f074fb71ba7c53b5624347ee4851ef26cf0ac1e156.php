<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_02b0699e5d6274c2b1b4e70943a39dcf0641fada6967739c71d8de3e729b201c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "

<div class=\"container\" style=\"width:700px;\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\" class=\"fos_user_registration_register m-signup--form flex-column\" style=\"margin-top:30px;\">
        <ul class=\"errorLog\">
          <div class=\"field\">
            <label for=\"fos_user_registration_form_email\">Email</label>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            <label for=\"fos_user_registration_form_username\">Login</label>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <span>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "</span>
          <input type=\"submit\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" value=\"Suivant\" />
        </form>
      </div>
    </div>
  </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  52 => 18,  46 => 15,  39 => 11,  32 => 7,  25 => 2,);
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


<div class=\"container\" style=\"width:700px;\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\" class=\"fos_user_registration_register m-signup--form flex-column\" style=\"margin-top:30px;\">
        <ul class=\"errorLog\">
          <div class=\"field\">
            <label for=\"fos_user_registration_form_email\">Email</label>
            {{ form_widget(form.email, {label_attr: {class: 'form-control'} }) }}
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            <label for=\"fos_user_registration_form_username\">Login</label>
            {{ form_widget(form.username, {label_attr: {class: 'form-control'} }) }}
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            {{ form_widget(form.plainPassword, {label_attr: {class: 'form-control'} }) }}
          </div>
          <span>{{ form_widget(form) }}</span>
          <input type=\"submit\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" value=\"Suivant\" />
        </form>
      </div>
    </div>
  </div>
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
