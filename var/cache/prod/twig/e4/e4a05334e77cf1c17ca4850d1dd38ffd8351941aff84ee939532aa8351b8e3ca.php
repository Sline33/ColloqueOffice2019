<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_526ac50fc8ce46a08e9a6a6e997619720d135596beace360fcfb054ca29f2161 extends Twig_Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            <label for=\"fos_user_registration_form_username\">Login</label>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <div class=\"field\" style=\"margin-top:12px;\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), 'widget', array("label_attr" => array("class" => "form-control")));
        echo "
          </div>
          <span>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "</span>
          <input type=\"submit\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" value=\"Suivant\" />
        </form>
      </div>
    </div>
  </div>
";
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
        return array (  51 => 20,  46 => 18,  40 => 15,  33 => 11,  26 => 7,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register_content.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
