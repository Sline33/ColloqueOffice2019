<?php

/* ::base.html.twig */
class __TwigTemplate_cbe4c48281fec083b73ec8c5bbe5f9145b9a3cc1baa5ab607a945005f2c24c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>Colloque Euralens 2019";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        </title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/Header-Blue.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    </head>
    <body style=\"display:flex;min-height:100vh;flex-direction:column;\">
        <nav class=\"navbar navbar-light navbar-expand-md\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\"></a>
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
            echo "\" style=\"font-size:25px;\">Espace Admin</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" style=\"font-size:25px;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" style=\"font-size:25px;\">Espace Client</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" style=\"font-size:25px;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    ";
        } else {
            // line 51
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" style=\"font-size:25px;\">Se connecter</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" style=\"font-size:25px;\">S'incrire</a>
                            </li>
                        </ul>
                    ";
        }
        // line 65
        echo "                </div>
            </div>
        </nav>
        <div style=\"flex:1;\">
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        </div>
        <footer style=\"margin-top:20px;\">
            <div>
                <p class=\"text-center\" style=\"font-size:60px;\">FOOTER</p>
            </div>
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/adminColloque.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paiement.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 69,  199 => 5,  185 => 85,  181 => 84,  177 => 83,  173 => 82,  169 => 81,  165 => 80,  161 => 79,  150 => 70,  148 => 69,  142 => 65,  135 => 61,  129 => 58,  121 => 53,  117 => 51,  110 => 47,  104 => 44,  96 => 39,  92 => 37,  85 => 33,  79 => 30,  71 => 25,  67 => 23,  65 => 22,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  35 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>Colloque Euralens 2019{% block title %}{% endblock %}
        </title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/Header-Blue.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('fonts/font-awesome.min.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    </head>
    <body style=\"display:flex;min-height:100vh;flex-direction:column;\">
        <nav class=\"navbar navbar-light navbar-expand-md\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\"></a>
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('fos_user_security_homepage') }}\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('admin_page') }}\" style=\"font-size:25px;\">Espace Admin</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\" style=\"font-size:25px;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    {% elseif is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('fos_user_security_homepage') }}\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('fos_user_profile_show') }}\" style=\"font-size:25px;\">Espace Client</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\" style=\"font-size:25px;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    {% else %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('fos_user_security_homepage') }}\" style=\"font-size:25px;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"{{ path('fos_user_security_login') }}\" style=\"font-size:25px;\">Se connecter</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\" style=\"font-size:25px;\">S'incrire</a>
                            </li>
                        </ul>
                    {% endif %}
                </div>
            </div>
        </nav>
        <div style=\"flex:1;\">
            {% block body %}{% endblock %}
        </div>
        <footer style=\"margin-top:20px;\">
            <div>
                <p class=\"text-center\" style=\"font-size:60px;\">FOOTER</p>
            </div>
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/stupidtable.js') }}\"></script>
        <script src=\"{{ asset('js/stupidtable.min.js') }}\"></script>
        <script src=\"{{ asset('js/admin4.js') }}\"></script>
        <script src=\"{{ asset('js/adminColloque.js') }}\"></script>
        <script src=\"{{ asset('js/admin3.js') }}\"></script>
        <script src=\"{{ asset('js/sort.js') }}\"></script>
        <script src=\"{{ asset('js/paiement.js') }}\"></script>
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\ColloqueOffice2019\\app\\Resources\\views\\base.html.twig");
    }
}
