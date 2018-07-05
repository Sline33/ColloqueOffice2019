<?php

/* base.html.twig */
class __TwigTemplate_d727156fb91db9cfd16ce76926cfa43651f87e39bf67c80e4269a130df2b329c extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.1.0/css/all.css\" integrity=\"sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt\" crossorigin=\"anonymous\">
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
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;color:white;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
            echo "\" style=\"font-size:25px;color:white;\">Espace Admin</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" style=\"font-size:25px;color:white;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;color:white;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" style=\"font-size:25px;color:white;\">Espace Client</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" style=\"font-size:25px;color:white;\">Se Deconnecter</a>
                            </li>
                        </ul>
                    ";
        } else {
            // line 52
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_homepage");
            echo "\" style=\"font-size:25px;color:white;\">Accueil</a>
                            </li>
                        </ul>
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" style=\"font-size:25px;color:white;\">Se connecter</a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" style=\"font-size:25px;color:white;\">S'incrire</a>
                            </li>
                        </ul>
                    ";
        }
        // line 66
        echo "                </div>
            </div>
        </nav>
        <div style=\"flex:1;\">
            ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        </div>
        <footer class=\"container-fluid\" style=\"padding-top:20px;\">
            <div class=\"row footer_row_1\">
                <div class=\"col-md-6\">
                    <a href=\"#\"><p class=\"text-center\" style=\"font-size:20px;\">Qui sommes nous ?</p></a>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#\"><p class=\"text-center\" style=\"font-size:20px;\">Nous contacter ?</p></a>
                </div>
            </div>
            <div class=\"row footer_row_2\">
                <div class=\"col-md-12\">
                    <p class=\"text-center\" style=\"font-size:20px;\"><em>Euralens - Colloque2019</em></p>
                <div>
            </div>
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stupidtable.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 93
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/adminColloque.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paiement.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  195 => 5,  187 => 96,  183 => 95,  179 => 94,  174 => 93,  170 => 91,  166 => 90,  145 => 71,  143 => 70,  137 => 66,  130 => 62,  124 => 59,  116 => 54,  112 => 52,  105 => 48,  99 => 45,  91 => 40,  87 => 38,  80 => 34,  74 => 31,  66 => 26,  62 => 24,  60 => 23,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  29 => 6,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/ColloqueOfficeWorking/app/Resources/views/base.html.twig");
    }
}
