<?php

/* paiement/new.html.twig */
class __TwigTemplate_2c2a24f25788e576cf3243492710db05489b7aa8ce773837213c07cfc085be34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "paiement/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/new.html.twig"));

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
        <input type=\"hidden\" name=\"vads_action_mode\" value=\"INTERACTIVE\" />
        <input type=\"hidden\" name=\"vads_amount\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prixtotal"] ?? $this->getContext($context, "prixtotal")), "price", array()), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"vads_capture_delay\" value=\"0\" />
        <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"TEST\" />
        <input type=\"hidden\" name=\"vads_currency\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_city\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_email\" value=\"salb_du62@outlook.fr\" />
        <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_id\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_title\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_page_action\" value=\"PAYMENT\" />
        <input type=\"hidden\" name=\"vads_payment_config\" value=\"SINGLE\" />
        <input type=\"hidden\" name=\"vads_site_id\" value=\"34880966\" />
        <input type=\"hidden\" name=\"vads_trans_date\" value=\"20180618104225\" />
        <input type=\"hidden\" name=\"vads_trans_id\" value=\"123450\" />
        <input type=\"hidden\" name=\"vads_url_return\" value=\"http://127.0.0.1/ColloqueOfficeBen/web/app_dev.php/\" />
        <input type=\"hidden\" name=\"vads_version\" value=\"V2\" />
        <input type=\"hidden\" name=\"signature\" value=\"ee2da5158df6b7492e69b401f7c24a74cc6df339\" />
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prixtotal"] ?? $this->getContext($context, "prixtotal")), "price", array()), "html", null, true);
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
        return "paiement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
        <input type=\"hidden\" name=\"vads_action_mode\" value=\"INTERACTIVE\" />
        <input type=\"hidden\" name=\"vads_amount\" value=\"{{prixtotal.price}}\" />
        <input type=\"hidden\" name=\"vads_capture_delay\" value=\"0\" />
        <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"TEST\" />
        <input type=\"hidden\" name=\"vads_currency\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_city\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_email\" value=\"salb_du62@outlook.fr\" />
        <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_id\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_cust_title\" value=\"978\" />
        <input type=\"hidden\" name=\"vads_page_action\" value=\"PAYMENT\" />
        <input type=\"hidden\" name=\"vads_payment_config\" value=\"SINGLE\" />
        <input type=\"hidden\" name=\"vads_site_id\" value=\"34880966\" />
        <input type=\"hidden\" name=\"vads_trans_date\" value=\"20180618104225\" />
        <input type=\"hidden\" name=\"vads_trans_id\" value=\"123450\" />
        <input type=\"hidden\" name=\"vads_url_return\" value=\"http://127.0.0.1/ColloqueOfficeBen/web/app_dev.php/\" />
        <input type=\"hidden\" name=\"vads_version\" value=\"V2\" />
        <input type=\"hidden\" name=\"signature\" value=\"ee2da5158df6b7492e69b401f7c24a74cc6df339\" />
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
            <span id=\"prixreservation\"></span>{{prixtotal.price}}€</p>
        </div>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
{% endblock %}", "paiement/new.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/paiement/new.html.twig");
    }
}
