<?php

/* paiement/new.html.twig */
class __TwigTemplate_947fea8e94b1b631eddd2443fbecd620e6db79c49f333e87e4f9f2d7aff25517 extends Twig_Template
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
";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "promo"), "method")) {
            // line 6
            echo "  <div class=\"d-flex justify-content-center\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "promo"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 8
                echo "          <p class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  </div>
";
        }
        // line 12
        echo "
<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                <h4>Mon Paiement</h4>
            </div>
        </div>
        <form class=\"\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postpaiement_facture");
        echo "\" method=\"post\" name=\"test\">
            <div class=\"field\">
             <div class=\"field d-flex flex-row\">
              <label style=\"margin-right:10px;\">Carte Bleu</label>
                <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement\" value=\"1\"/>
              </div>
              <div class=\"field\">
                <div class=\"field d-flex flex-row\">
                  <label style=\"margin-right:10px;\">Paiement Chèque</label>
                  <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"paiement\" value=\"2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"/>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class=\"field\">
                <div class=\"field d-flex flex-row\">
                  <label style=\"margin-right:10px;\">Paiement Mandat Administratif</label>
                  <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement\" value=\"3\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"/>
                </div>
                <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
            </div>
              </div>
              <div class=\"d-flex justify-content-end\" style=\"margin-top:25px;\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"paiement\" value=\"Payer\" id=\"suivant\"/>
              </div>
        </form>


        <div class=\"row\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postpaiement_facture");
        echo "\" method=\"post\" action=\"\">
                    <div class=\"field\">
                        <label>Code Promotionel :</label>
                        <input class=\"form\" type=\"text\" id=\"\" name=\"code_promo\" value=\"\"/>
                    </div>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"codepromo\" value=\"Valider Code\"/>
                </form>

            </div>
            <div class=\"col-md-6\">
                <div class=\"border-form-prix\" style=\"margin-top:25px;\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                <span id=\"prixreservation\"></span>";
        // line 68
        echo twig_escape_filter($this->env, ($context["price"] ?? $this->getContext($context, "price")), "html", null, true);
        echo "€</p>
            </div>
            </div>
        </div>
    </div>
          <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
              <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <p>Content</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form method=\"POST\" action=\"https://secure.payzen.eu/vads-payment/\">
            <input type=\"hidden\" name=\"vads_action_mode\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["vads_action_mode"] ?? $this->getContext($context, "vads_action_mode")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_amount\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["prixPayzen"] ?? $this->getContext($context, "prixPayzen")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_capture_delay\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["vads_capture_delay"] ?? $this->getContext($context, "vads_capture_delay")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["vads_ctx_mode"] ?? $this->getContext($context, "vads_ctx_mode")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_currency\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["vads_currency"] ?? $this->getContext($context, "vads_currency")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["vads_cust_cell_phone"] ?? $this->getContext($context, "vads_cust_cell_phone")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_city\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["vads_cust_city"] ?? $this->getContext($context, "vads_cust_city")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_email\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["vads_cust_email"] ?? $this->getContext($context, "vads_cust_email")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["vads_cust_first_name"] ?? $this->getContext($context, "vads_cust_first_name")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_id\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["vads_cust_id"] ?? $this->getContext($context, "vads_cust_id")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["vads_cust_last_name"] ?? $this->getContext($context, "vads_cust_last_name")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_cust_title\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["vads_cust_title"] ?? $this->getContext($context, "vads_cust_title")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_page_action\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["vads_page_action"] ?? $this->getContext($context, "vads_page_action")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_payment_config\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["vads_payment_config"] ?? $this->getContext($context, "vads_payment_config")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_return_mode\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["vads_return_mode"] ?? $this->getContext($context, "vads_return_mode")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_site_id\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["vads_site_id"] ?? $this->getContext($context, "vads_site_id")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_trans_date\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["vads_trans_date"] ?? $this->getContext($context, "vads_trans_date")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_trans_id\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["vads_trans_id"] ?? $this->getContext($context, "vads_trans_id")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_url_return\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["vads_url_return"] ?? $this->getContext($context, "vads_url_return")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"vads_version\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["vads_version"] ?? $this->getContext($context, "vads_version")), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"signature\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["signature"] ?? $this->getContext($context, "signature")), "html", null, true);
        echo "\" />
            <input style=\"display:none;\" type=\"submit\" name=\"payer\" value=\"Payer\" id=\"payer\"/>
        </form>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paiement.js"), "html", null, true);
        echo "\"></script>
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
        return array (  250 => 114,  239 => 106,  235 => 105,  231 => 104,  227 => 103,  223 => 102,  219 => 101,  215 => 100,  211 => 99,  207 => 98,  203 => 97,  199 => 96,  195 => 95,  191 => 94,  187 => 93,  183 => 92,  179 => 91,  175 => 90,  171 => 89,  167 => 88,  163 => 87,  159 => 86,  138 => 68,  123 => 56,  83 => 19,  74 => 12,  70 => 10,  61 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% if app.session.flashBag.has('promo') %}
  <div class=\"d-flex justify-content-center\">
      {% for msg in app.session.flashBag.get('promo') %}
          <p class=\"alert alert-danger\">{{ msg }}</p>
      {% endfor %}
  </div>
{% endif %}

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding-right:0px;padding-left:0px;margin-top:9px;\">
                <h4>Mon Paiement</h4>
            </div>
        </div>
        <form class=\"\" action=\"{{ path('postpaiement_facture') }}\" method=\"post\" name=\"test\">
            <div class=\"field\">
             <div class=\"field d-flex flex-row\">
              <label style=\"margin-right:10px;\">Carte Bleu</label>
                <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement\" value=\"1\"/>
              </div>
              <div class=\"field\">
                <div class=\"field d-flex flex-row\">
                  <label style=\"margin-right:10px;\">Paiement Chèque</label>
                  <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"paiement\" value=\"2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"/>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class=\"field\">
                <div class=\"field d-flex flex-row\">
                  <label style=\"margin-right:10px;\">Paiement Mandat Administratif</label>
                  <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement\" value=\"3\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"/>
                </div>
                <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
            </div>
              </div>
              <div class=\"d-flex justify-content-end\" style=\"margin-top:25px;\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"paiement\" value=\"Payer\" id=\"suivant\"/>
              </div>
        </form>


        <div class=\"row\">
            <div class=\"col-md-6\">
                <form action=\"{{ path('postpaiement_facture') }}\" method=\"post\" action=\"\">
                    <div class=\"field\">
                        <label>Code Promotionel :</label>
                        <input class=\"form\" type=\"text\" id=\"\" name=\"code_promo\" value=\"\"/>
                    </div>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"codepromo\" value=\"Valider Code\"/>
                </form>

            </div>
            <div class=\"col-md-6\">
                <div class=\"border-form-prix\" style=\"margin-top:25px;\">
                <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
                <span id=\"prixreservation\"></span>{{price}}€</p>
            </div>
            </div>
        </div>
    </div>
          <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
              <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <p>Content</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
            <input type=\"hidden\" name=\"vads_return_mode\" value=\"{{ vads_return_mode }}\" />
            <input type=\"hidden\" name=\"vads_site_id\" value=\"{{ vads_site_id }}\" />
            <input type=\"hidden\" name=\"vads_trans_date\" value=\"{{ vads_trans_date }}\" />
            <input type=\"hidden\" name=\"vads_trans_id\" value=\"{{ vads_trans_id}}\" />
            <input type=\"hidden\" name=\"vads_url_return\" value=\"{{ vads_url_return }}\" />
            <input type=\"hidden\" name=\"vads_version\" value=\"{{ vads_version }}\" />
            <input type=\"hidden\" name=\"signature\" value=\"{{ signature }}\" />
            <input style=\"display:none;\" type=\"submit\" name=\"payer\" value=\"Payer\" id=\"payer\"/>
        </form>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

        <script src=\"{{ asset('js/paiement.js') }}\"></script>
{% endblock %}
", "paiement/new.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\paiement\\new.html.twig");
    }
}
