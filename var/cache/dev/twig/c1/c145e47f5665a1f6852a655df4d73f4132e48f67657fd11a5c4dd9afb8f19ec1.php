<?php

/* :paiement:new.html.twig */
class __TwigTemplate_2c2a24f25788e576cf3243492710db05489b7aa8ce773837213c07cfc085be34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":paiement:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
            <h4>Mon Paiement</h4>
        </div>
    </div>  
    <form>
        <div class=\"field\">
            <label>Carte Bleu</label>
            <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement_carte\" value=\"1\"/>
            <label>Paiement Chèque</label>
            
            <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"cheque\" value=\"2\"/>
            <label>Paiement Mandat Administratif</label>
            <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement_mandat\" value=\"3\"/>
        </div>
    </form>
    <form method=\"POST\" action=\"https://secure.payzen.eu/vads-payment/\">
        <input type=\"hidden\" name=\"vads_action_mode\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["vads_action_mode"] ?? $this->getContext($context, "vads_action_mode")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_amount\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["prixPayzen"] ?? $this->getContext($context, "prixPayzen")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_capture_delay\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["vads_capture_delay"] ?? $this->getContext($context, "vads_capture_delay")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["vads_ctx_mode"] ?? $this->getContext($context, "vads_ctx_mode")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_currency\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["vads_currency"] ?? $this->getContext($context, "vads_currency")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["vads_cust_cell_phone"] ?? $this->getContext($context, "vads_cust_cell_phone")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_city\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["vads_cust_city"] ?? $this->getContext($context, "vads_cust_city")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["vads_cust_email"] ?? $this->getContext($context, "vads_cust_email")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["vads_cust_first_name"] ?? $this->getContext($context, "vads_cust_first_name")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["vads_cust_id"] ?? $this->getContext($context, "vads_cust_id")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["vads_cust_last_name"] ?? $this->getContext($context, "vads_cust_last_name")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_cust_title\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["vads_cust_title"] ?? $this->getContext($context, "vads_cust_title")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_page_action\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["vads_page_action"] ?? $this->getContext($context, "vads_page_action")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_payment_config\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["vads_payment_config"] ?? $this->getContext($context, "vads_payment_config")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_site_id\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["vads_site_id"] ?? $this->getContext($context, "vads_site_id")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_trans_date\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["vads_trans_date"] ?? $this->getContext($context, "vads_trans_date")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_trans_id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["vads_trans_id"] ?? $this->getContext($context, "vads_trans_id")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_url_return\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["vads_url_return"] ?? $this->getContext($context, "vads_url_return")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_version\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["vads_version"] ?? $this->getContext($context, "vads_version")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"signature\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["signature"] ?? $this->getContext($context, "signature")), "html", null, true);
        echo "\" />
        <input type=\"submit\" name=\"payer\" value=\"Payer\"/>
    </form>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <form>
                <div class=\"field\">
                    <label>Code Promotionel :</label>
                    <input class=\"form\" type=\"text\" id=\"\" name=\"code_promo\" value=\"\"/>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider Code\"/>
            </form>
        </div>
        <div class=\"col-md-6\">
            <div class=\"border-form-prix\">
            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
            <span id=\"prixreservation\"></span>";
        // line 58
        echo twig_escape_filter($this->env, ($context["prixtotal"] ?? $this->getContext($context, "prixtotal")), "html", null, true);
        echo "€</p>
        </div>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
            <h4>Mon Paiement</h4>
        </div>
    </div>  
    <form>
        <div class=\"field\">
            <label>Carte Bleu</label>
            <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement_carte\" value=\"1\"/>
            <label>Paiement Chèque</label>
            
            <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"cheque\" value=\"2\"/>
            <label>Paiement Mandat Administratif</label>
            <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement_mandat\" value=\"3\"/>
        </div>
    </form>
    <form method=\"POST\" action=\"https://secure.payzen.eu/vads-payment/\">
        <input type=\"hidden\" name=\"vads_action_mode\" value=\"{{ vads_action_mode }}\" />
        <input type=\"hidden\" name=\"vads_amount\" value=\"{{ prixPayzen }}\" />
        <input type=\"hidden\" name=\"vads_capture_delay\" value=\"{{ vads_capture_delay }}\" />
        <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"{{ vads_ctx_mode }}\" />
        <input type=\"hidden\" name=\"vads_currency\" value=\"{{ vads_currency }}\" />
        <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"{{ vads_cust_cell_phone }}\" />
        <input type=\"hidden\" name=\"vads_cust_city\" value=\"{{ vads_cust_city }}\" />
        <input type=\"hidden\" name=\"vads_cust_email\" value=\"{{ vads_cust_email }}\" />
        <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"{{ vads_cust_first_name }}\" />
        <input type=\"hidden\" name=\"vads_cust_id\" value=\"{{ vads_cust_id }}\" />
        <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"{{ vads_cust_last_name }}\" />
        <input type=\"hidden\" name=\"vads_cust_title\" value=\"{{ vads_cust_title }}\" />
        <input type=\"hidden\" name=\"vads_page_action\" value=\"{{ vads_page_action }}\" />
        <input type=\"hidden\" name=\"vads_payment_config\" value=\"{{ vads_payment_config }}\" />
        <input type=\"hidden\" name=\"vads_site_id\" value=\"{{ vads_site_id }}\" />
        <input type=\"hidden\" name=\"vads_trans_date\" value=\"{{ vads_trans_date }}\" />
        <input type=\"hidden\" name=\"vads_trans_id\" value=\"{{ vads_trans_id}}\" />
        <input type=\"hidden\" name=\"vads_url_return\" value=\"{{ vads_url_return }}\" />
        <input type=\"hidden\" name=\"vads_version\" value=\"{{ vads_version }}\" />
        <input type=\"hidden\" name=\"signature\" value=\"{{ signature }}\" />
        <input type=\"submit\" name=\"payer\" value=\"Payer\"/>
    </form>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <form>
                <div class=\"field\">
                    <label>Code Promotionel :</label>
                    <input class=\"form\" type=\"text\" id=\"\" name=\"code_promo\" value=\"\"/>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider Code\"/>
            </form>
        </div>
        <div class=\"col-md-6\">
            <div class=\"border-form-prix\">
            <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
            <span id=\"prixreservation\"></span>{{prixtotal}}€</p>
        </div>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
{% endblock %}", ":paiement:new.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/paiement/new.html.twig");
    }
}
