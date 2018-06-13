<?php

/* ticket/new.html.twig */
class __TwigTemplate_c527f7daa61bb1ab1312fbfb05413a9373db56a825b5c0075457545e21db9bf6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\" style=\"width:700px;\">
      <div class=\"row\">
        <div class=\"col-md-12\">

            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <ul class=\"errorLog\">
      ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
      <div class=\"field\">
        <label for=\"fos_user_registration_form_nom\">Nom</label>
        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_lastName\" name=\"appbundle_ticket[lastName]\" required=\"required\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_prenom\">Prenom</label>
        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_firstName\" name=\"appbundle_ticket[firstName]\" required=\"required\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_societe\">Societe</label>
        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_society\" name=\"appbundle_ticket[society]\" required=\"required\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_ticket\">Ticket Number</label>
        <input class=\"form-control\" type=\"text\" id=\"appbundle_ticket_ticketNumber\" name=\"appbundle_ticket[ticketNumber]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day1transporttrain\">Day1 transport train</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportTrain\" name=\"appbundle_ticket[day1TransportTrain]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day1Breakfast\">Day1 Breakfast</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Breakfast\" name=\"appbundle_ticket[day1Breakfast]\" value=\"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Breakfast\" name=\"appbundle_ticket[day1Breakfast]\" value=\"2\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Breakfast\" name=\"appbundle_ticket[day1Breakfast]\" value=\"3\" />
      </div>

      <div class=\"field\">
        <label for=\"fos_user_registration_form_day1Visite\">day1Visite</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Visite\" name=\"appbundle_ticket[day1Visite]\" value=\"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Visite\" name=\"appbundle_ticket[day1Visite]\" value=\"2\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day1Visite\" name=\"appbundle_ticket[day1Visite]\" value=\"3\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day1TransportBus\">day1TransportBus</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day1TransportBus\" name=\"appbundle_ticket[day1TransportBus]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2TransportBus\">form_day2TransportBus</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBus\" name=\"appbundle_ticket[day2TransportBus]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2Visite\">day2Visite</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Visite\" name=\"appbundle_ticket[day2Visite]\" value=\"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Visite\" name=\"appbundle_ticket[day2Visite]\" value=\"2\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Visite\" name=\"appbundle_ticket[day2Visite]\" value=\"3\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2Breakfast\">Day2 Breakfast</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Breakfast\" name=\"appbundle_ticket[day2Breakfast]\" value=\"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Breakfast\" name=\"appbundle_ticket[day2Breakfast]\"  value=\"2\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_day2Breakfast\" name=\"appbundle_ticket[day2Breakfast]\" value=\"3\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2TransportTrain\">day2TransportTrain</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportTrain\" name=\"appbundle_ticket[day2TransportTrain]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2Night\">day2Night</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day2Night\" name=\"appbundle_ticket[day2Night]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day2TransportBusNight\">day2TransportBusNight</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_day2TransportBusNight\" name=\"appbundle_ticket[day2TransportBusNight]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_optionVisite\">optionVisite</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionVisite\" name=\"appbundle_ticket[optionVisite]\" value=\"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionVisite\" name=\"appbundle_ticket[optionVisite]\" value=\"2\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionVisite\" name=\"appbundle_ticket[optionVisite]\" value=\"3\" />
      </div>
      <div class=\"field\">
        <label for=\"appbundle_ticket_optionExpo\">optionExpo</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionExpo\" name=\"appbundle_ticket[optionExpo]\" value = \"1\" />
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionExpo2\" name=\"appbundle_ticket[optionExpo]\" value = \"2\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_optionArtDeco\">optionArtDeco</label>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionArtDeco\" name=\"appbundle_ticket[optionArtDeco]\" value =\"1\"/>
        <input class=\"form-control\" type=\"radio\" id=\"appbundle_ticket_optionArtDeco2\" name=\"appbundle_ticket[optionArtDeco]\" value =\"2\"/>
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_optionDecouverte\">optionDecouverte</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_optionDecouverte\" name=\"appbundle_ticket[optionDecouverte]\" value=\"\" />
      </div>
      <div class=\"field\">
        <label for=\"fos_user_registration_form_day1optionGrandSite\">optionGrandSite</label>
        <input class=\"form-control\" type=\"checkbox\" id=\"appbundle_ticket_optionGrandSite\" name=\"appbundle_ticket[optionGrandSite]\" value=\"\" />
      </div>
      <div class=\"col-xl-4 offset-xl-8\" style=\"margin-bottom:0px;margin-top:70px;\">
          <div class=\"border-form-prix\">
              <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX : <span id=\"prixreservation\">300</span>€</p>
          </div>
        </div>
        <input type=\"submit\" class=\"btn btn-primary float-right\" style=\"margin-top:30px;width:180px;\" value=\"Suivant\" />
</form>
  </div>
</div>
</div>
";
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
        return array (  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ticket/new.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/ticket/new.html.twig");
    }
}
