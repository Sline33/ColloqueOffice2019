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
<div class=\"paiement\">
    <div class=\"container\" style=\"padding-top:20px;font-size:20px;height:100%;background-color:rgba(255, 255, 255,0.5);\">
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "promo"), "method")) {
            // line 8
            echo "          <div class=\"d-flex justify-content-center\">
              ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "promo"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 10
                echo "                  <p class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "          </div>
        ";
        }
        // line 14
        echo "      <div class=\"row  justify-content-center\">
          <div class=\"col-md-12\">
              <h1>Mon Paiement</h1>
          </div>
      </div>
      <form class=\"\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postpaiement_facture");
        echo "\" method=\"post\" name=\"test\">
          <div class=\"field\">
            <div class=\"field d-flex flex-row\">
            <label style=\"margin-right:10px;\"><strong>Carte Bleu</strong></label>
              <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement\" value=\"1\"/>
            </div>
            <div class=\"field\">
              <div class=\"field d-flex flex-row\">
                <label style=\"margin-right:10px;\"><strong>Paiement Chèque</strong></label>
                <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"paiement\" value=\"2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"/>
              </div>
              <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <p>Envoyer votre chèque à l'adresse suivante :</p>
                  <ul class=\"adresse_cheque\">
                    <li>Colloque 2019</li>
                    <li>58 Rue de la gare</li>
                    <li>62300 LENS</li>
                    <br/>
                    <li>A l'ordre de : Office du toursime de Lens</li>
                  </ul>
                  <p><em>Une fois la réception de votre chèque l'organisateur validera votre paiement et vous recevrez par la suite votre facture et vos billets sur votre adresse mail.</em></p>
                </div>
              </div>
            </div>
            <div class=\"field\">
              <div class=\"field d-flex flex-row\">
                <label style=\"margin-right:10px;\"><strong>Paiement Mandat Administratif</strong></label>
                <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement\" value=\"3\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"/>
              </div>
              <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/rib.png"), "html", null, true);
        echo "\" alt=\"RIB Office du tourisme\">
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
        // line 64
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
              <div class=\"prix\" style=\"margin-top:25px;\">
              <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
              <span id=\"prixreservation prix\"></span>";
        // line 76
        echo twig_escape_filter($this->env, ($context["price"] ?? $this->getContext($context, "price")), "html", null, true);
        echo " € TTC</p>
          </div>
          </div>
      </div>
      <div class=\"row justify-content-around\" style=\"margin-bottom:30px;\">
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recap_new");
        echo "\">Recapitulatif</a>
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
        // line 97
        echo twig_escape_filter($this->env, ($context["vads_action_mode"] ?? $this->getContext($context, "vads_action_mode")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_amount\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["prixPayzen"] ?? $this->getContext($context, "prixPayzen")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_capture_delay\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["vads_capture_delay"] ?? $this->getContext($context, "vads_capture_delay")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["vads_ctx_mode"] ?? $this->getContext($context, "vads_ctx_mode")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_currency\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["vads_currency"] ?? $this->getContext($context, "vads_currency")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_cell_phone\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["vads_cust_cell_phone"] ?? $this->getContext($context, "vads_cust_cell_phone")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_city\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["vads_cust_city"] ?? $this->getContext($context, "vads_cust_city")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_email\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["vads_cust_email"] ?? $this->getContext($context, "vads_cust_email")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_first_name\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["vads_cust_first_name"] ?? $this->getContext($context, "vads_cust_first_name")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_id\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["vads_cust_id"] ?? $this->getContext($context, "vads_cust_id")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_last_name\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["vads_cust_last_name"] ?? $this->getContext($context, "vads_cust_last_name")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_cust_title\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["vads_cust_title"] ?? $this->getContext($context, "vads_cust_title")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_page_action\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["vads_page_action"] ?? $this->getContext($context, "vads_page_action")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_payment_config\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["vads_payment_config"] ?? $this->getContext($context, "vads_payment_config")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_return_mode\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["vads_return_mode"] ?? $this->getContext($context, "vads_return_mode")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_site_id\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["vads_site_id"] ?? $this->getContext($context, "vads_site_id")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_trans_date\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["vads_trans_date"] ?? $this->getContext($context, "vads_trans_date")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_trans_id\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["vads_trans_id"] ?? $this->getContext($context, "vads_trans_id")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_url_return\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["vads_url_return"] ?? $this->getContext($context, "vads_url_return")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"vads_version\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["vads_version"] ?? $this->getContext($context, "vads_version")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"signature\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["signature"] ?? $this->getContext($context, "signature")), "html", null, true);
        echo "\" />
    <input class=\"paiementPayZen btn btn-primary\" style=\"display:none;\" type=\"submit\" name=\"payer\" value=\"Payer\" id=\"payer\"/>
  </form>
  
</div>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

    <script src=\"";
        // line 126
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
        return array (  268 => 126,  256 => 117,  252 => 116,  248 => 115,  244 => 114,  240 => 113,  236 => 112,  232 => 111,  228 => 110,  224 => 109,  220 => 108,  216 => 107,  212 => 106,  208 => 105,  204 => 104,  200 => 103,  196 => 102,  192 => 101,  188 => 100,  184 => 99,  180 => 98,  176 => 97,  157 => 81,  149 => 76,  134 => 64,  118 => 51,  83 => 19,  76 => 14,  72 => 12,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"paiement\">
    <div class=\"container\" style=\"padding-top:20px;font-size:20px;height:100%;background-color:rgba(255, 255, 255,0.5);\">
        {% if app.session.flashBag.has('promo') %}
          <div class=\"d-flex justify-content-center\">
              {% for msg in app.session.flashBag.get('promo') %}
                  <p class=\"alert alert-danger\">{{ msg }}</p>
              {% endfor %}
          </div>
        {% endif %}
      <div class=\"row  justify-content-center\">
          <div class=\"col-md-12\">
              <h1>Mon Paiement</h1>
          </div>
      </div>
      <form class=\"\" action=\"{{ path('postpaiement_facture') }}\" method=\"post\" name=\"test\">
          <div class=\"field\">
            <div class=\"field d-flex flex-row\">
            <label style=\"margin-right:10px;\"><strong>Carte Bleu</strong></label>
              <input class=\"form\" type=\"radio\" id=\"paiement_carte\" name=\"paiement\" value=\"1\"/>
            </div>
            <div class=\"field\">
              <div class=\"field d-flex flex-row\">
                <label style=\"margin-right:10px;\"><strong>Paiement Chèque</strong></label>
                <input class=\"form\" type=\"radio\" id=\"paiement_cheque\" name=\"paiement\" value=\"2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"/>
              </div>
              <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <p>Envoyer votre chèque à l'adresse suivante :</p>
                  <ul class=\"adresse_cheque\">
                    <li>Colloque 2019</li>
                    <li>58 Rue de la gare</li>
                    <li>62300 LENS</li>
                    <br/>
                    <li>A l'ordre de : Office du toursime de Lens</li>
                  </ul>
                  <p><em>Une fois la réception de votre chèque l'organisateur validera votre paiement et vous recevrez par la suite votre facture et vos billets sur votre adresse mail.</em></p>
                </div>
              </div>
            </div>
            <div class=\"field\">
              <div class=\"field d-flex flex-row\">
                <label style=\"margin-right:10px;\"><strong>Paiement Mandat Administratif</strong></label>
                <input class=\"form\" type=\"radio\" id=\"paiement_mandat\" name=\"paiement\" value=\"3\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"/>
              </div>
              <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <img src=\"{{ asset('img/rib.png') }}\" alt=\"RIB Office du tourisme\">
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
              <div class=\"prix\" style=\"margin-top:25px;\">
              <p class=\"text-center\" style=\"font-size:35px;margin-bottom:10px;\">PRIX :
              <span id=\"prixreservation prix\"></span>{{price}} € TTC</p>
          </div>
          </div>
      </div>
      <div class=\"row justify-content-around\" style=\"margin-bottom:30px;\">
        <a class=\"btn btn-primary\" style=\"margin-top:30px;\" href=\"{{ path('recap_new') }}\">Recapitulatif</a>
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
    <input class=\"paiementPayZen btn btn-primary\" style=\"display:none;\" type=\"submit\" name=\"payer\" value=\"Payer\" id=\"payer\"/>
  </form>
  
</div>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>

    <script src=\"{{ asset('js/paiement.js') }}\"></script>
{% endblock %}
", "paiement/new.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/paiement/new.html.twig");
    }
}
