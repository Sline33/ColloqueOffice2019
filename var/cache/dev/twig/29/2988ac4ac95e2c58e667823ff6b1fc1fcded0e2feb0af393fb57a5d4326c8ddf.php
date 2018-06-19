<?php

/* :ticket:index.html.twig */
class __TwigTemplate_a98f38b857e99d6f0c355175040b3427d98f48ca4b068e039ef3f111ca53bcd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ticket:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ticket:index.html.twig"));

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
        echo "    <h1>Tickets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Society</th>
                <th>Ticketnumber</th>
                <th>Day1transporttrain</th>
                <th>Day1breakfast</th>
                <th>Day1visite</th>
                <th>Day1transportbus</th>
                <th>Day2transportbus</th>
                <th>Day2visite</th>
                <th>Day2breakfast</th>
                <th>Day2transporttrain</th>
                <th>Day2night</th>
                <th>Day2transportbusnight</th>
                <th>Optionvisite</th>
                <th>Optionexpo</th>
                <th>Optionartdeco</th>
                <th>Optiondecouverte</th>
                <th>Optiongrandsite</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "society", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["ticket"], "day1TransportTrain", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Breakfast", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day1Visite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["ticket"], "day1TransportBus", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["ticket"], "day2TransportBus", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Visite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "day2Breakfast", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($context["ticket"], "day2TransportTrain", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["ticket"], "day2Night", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["ticket"], "day2TransportBusNight", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionVisite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionExpo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "optionArtDeco", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["ticket"], "optionDecouverte", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute($context["ticket"], "optionGrandSite", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_new");
        echo "\">Create a new ticket</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":ticket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 74,  227 => 69,  215 => 63,  209 => 60,  202 => 56,  194 => 55,  186 => 54,  182 => 53,  178 => 52,  174 => 51,  166 => 50,  158 => 49,  150 => 48,  146 => 47,  142 => 46,  134 => 45,  126 => 44,  122 => 43,  118 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  88 => 36,  85 => 35,  81 => 34,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tickets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Society</th>
                <th>Ticketnumber</th>
                <th>Day1transporttrain</th>
                <th>Day1breakfast</th>
                <th>Day1visite</th>
                <th>Day1transportbus</th>
                <th>Day2transportbus</th>
                <th>Day2visite</th>
                <th>Day2breakfast</th>
                <th>Day2transporttrain</th>
                <th>Day2night</th>
                <th>Day2transportbusnight</th>
                <th>Optionvisite</th>
                <th>Optionexpo</th>
                <th>Optionartdeco</th>
                <th>Optiondecouverte</th>
                <th>Optiongrandsite</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ticket in tickets %}
            <tr>
                <td><a href=\"{{ path('ticket_show', { 'id': ticket.id }) }}\">{{ ticket.id }}</a></td>
                <td>{{ ticket.lastName }}</td>
                <td>{{ ticket.firstName }}</td>
                <td>{{ ticket.society }}</td>
                <td>{{ ticket.ticketNumber }}</td>
                <td>{% if ticket.day1TransportTrain %}Yes{% else %}No{% endif %}</td>
                <td>{{ ticket.day1Breakfast }}</td>
                <td>{{ ticket.day1Visite }}</td>
                <td>{% if ticket.day1TransportBus %}Yes{% else %}No{% endif %}</td>
                <td>{% if ticket.day2TransportBus %}Yes{% else %}No{% endif %}</td>
                <td>{{ ticket.day2Visite }}</td>
                <td>{{ ticket.day2Breakfast }}</td>
                <td>{% if ticket.day2TransportTrain %}Yes{% else %}No{% endif %}</td>
                <td>{% if ticket.day2Night %}Yes{% else %}No{% endif %}</td>
                <td>{% if ticket.day2TransportBusNight %}Yes{% else %}No{% endif %}</td>
                <td>{{ ticket.optionVisite }}</td>
                <td>{{ ticket.optionExpo }}</td>
                <td>{{ ticket.optionArtDeco }}</td>
                <td>{% if ticket.optionDecouverte %}Yes{% else %}No{% endif %}</td>
                <td>{% if ticket.optionGrandSite %}Yes{% else %}No{% endif %}</td>
                <td>{{ ticket.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ticket_show', { 'id': ticket.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ticket_edit', { 'id': ticket.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ticket_new') }}\">Create a new ticket</a>
        </li>
    </ul>
{% endblock %}
", ":ticket:index.html.twig", "/var/www/html/ColloqueOfficeBen/app/Resources/views/ticket/index.html.twig");
    }
}
