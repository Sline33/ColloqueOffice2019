<?php

/* :customer:new.html.twig */
class __TwigTemplate_d578171a9f83fbd45f89d42d7aaddaf11de458e13f8fb22bf075618032219bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:new.html.twig"));

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
<div class=\"container\" style=\"width:700px;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            <div id=\"appbundle_customer\">
                <div class=\"d-flex\" style=\"margin-bottom:8px;\">
                  <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"appbundle_customer_sexe1\" name=\"appbundle_customer[sexe]\" value=\"1\">
                      <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                  </div>
                  <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"appbundle_customer_sexe2\" name=\"appbundle_customer[sexe]\" value=\"0\">
                      <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                  </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_firstname\" class=\"form-control-label required\">Firstname</label>
                    <input type=\"text\" id=\"appbundle_customer_firstname\" name=\"appbundle_customer[firstname]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_lastname\" class=\"form-control-label required\">Lastname</label>
                    <input type=\"text\" id=\"appbundle_customer_lastname\" name=\"appbundle_customer[lastname]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_society\" class=\"form-control-label required\">Society</label>
                    <input type=\"text\" id=\"appbundle_customer_society\" name=\"appbundle_customer[society]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_adress\" class=\"form-control-label required\">Adress</label>
                    <input type=\"text\" id=\"appbundle_customer_adress\" name=\"appbundle_customer[adress]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_cp\" class=\"form-control-label required\">Cp</label>
                    <input type=\"text\" id=\"appbundle_customer_cp\" name=\"appbundle_customer[cp]\" required=\"required\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_town\" class=\"form-control-label required\">Town</label>
                    <input type=\"text\" id=\"appbundle_customer_town\" name=\"appbundle_customer[town]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_phonenumber\" class=\"form-control-label required\">Phonenumber</label>
                    <input type=\"text\" id=\"appbundle_customer_phonenumber\" name=\"appbundle_customer[phonenumber]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
            <input class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" type=\"submit\" value=\"Create\"/>
        </form>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":customer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"container\" style=\"width:700px;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ form_start(form) }}
            {{ form_widget(form._token) }}
            <div id=\"appbundle_customer\">
                <div class=\"d-flex\" style=\"margin-bottom:8px;\">
                  <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"appbundle_customer_sexe1\" name=\"appbundle_customer[sexe]\" value=\"1\">
                      <label class=\"form-check-label\" for=\"formCheck-1\" style=\"padding-right:11px;\">Mr</label>
                  </div>
                  <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"appbundle_customer_sexe2\" name=\"appbundle_customer[sexe]\" value=\"0\">
                      <label class=\"form-check-label\" for=\"formCheck-2\">Mme</label>
                  </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_firstname\" class=\"form-control-label required\">Firstname</label>
                    <input type=\"text\" id=\"appbundle_customer_firstname\" name=\"appbundle_customer[firstname]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_lastname\" class=\"form-control-label required\">Lastname</label>
                    <input type=\"text\" id=\"appbundle_customer_lastname\" name=\"appbundle_customer[lastname]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_society\" class=\"form-control-label required\">Society</label>
                    <input type=\"text\" id=\"appbundle_customer_society\" name=\"appbundle_customer[society]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_adress\" class=\"form-control-label required\">Adress</label>
                    <input type=\"text\" id=\"appbundle_customer_adress\" name=\"appbundle_customer[adress]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_cp\" class=\"form-control-label required\">Cp</label>
                    <input type=\"text\" id=\"appbundle_customer_cp\" name=\"appbundle_customer[cp]\" required=\"required\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_town\" class=\"form-control-label required\">Town</label>
                    <input type=\"text\" id=\"appbundle_customer_town\" name=\"appbundle_customer[town]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"appbundle_customer_phonenumber\" class=\"form-control-label required\">Phonenumber</label>
                    <input type=\"text\" id=\"appbundle_customer_phonenumber\" name=\"appbundle_customer[phonenumber]\" required=\"required\" maxlength=\"255\" class=\"form-control\"/>
                </div>
            <input class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" type=\"submit\" value=\"Create\"/>
        </form>
    </div>
</div>

{% endblock %}
", ":customer:new.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app/Resources\\views/customer/new.html.twig");
    }
}
