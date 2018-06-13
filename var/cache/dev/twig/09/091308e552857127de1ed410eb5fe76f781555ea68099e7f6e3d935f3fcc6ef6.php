<?php

/* ticket/show.html.twig */
class __TwigTemplate_08416482df2f6f9908a87f25c170164256570f4eeef95ddfc82cb583db4f9c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ticket/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticket/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ticket/show.html.twig"));

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
        echo "    <h1>Ticket</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Society</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "society", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ticketnumber</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "ticketNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Day1transporttrain</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1TransportTrain", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Day1breakfast</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Breakfast", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Day1visite</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1Visite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Day1transportbus</th>
                <td>";
        // line 42
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day1TransportBus", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Day2transportbus</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportBus", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Day2visite</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Visite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Day2breakfast</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Breakfast", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Day2transporttrain</th>
                <td>";
        // line 58
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportTrain", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Day2night</th>
                <td>";
        // line 62
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2Night", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Day2transportbusnight</th>
                <td>";
        // line 66
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "day2TransportBusNight", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Optionvisite</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionVisite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Optionexpo</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionExpo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Optionartdeco</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionArtDeco", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Optiondecouverte</th>
                <td>";
        // line 82
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionDecouverte", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Optiongrandsite</th>
                <td>";
        // line 86
        if ($this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "optionGrandSite", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_edit", array("id" => $this->getAttribute(($context["ticket"] ?? $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 105,  251 => 103,  245 => 100,  239 => 97,  229 => 90,  218 => 86,  207 => 82,  200 => 78,  193 => 74,  186 => 70,  175 => 66,  164 => 62,  153 => 58,  146 => 54,  139 => 50,  128 => 46,  117 => 42,  110 => 38,  103 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ticket</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ticket.id }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ ticket.lastName }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ ticket.firstName }}</td>
            </tr>
            <tr>
                <th>Society</th>
                <td>{{ ticket.society }}</td>
            </tr>
            <tr>
                <th>Ticketnumber</th>
                <td>{{ ticket.ticketNumber }}</td>
            </tr>
            <tr>
                <th>Day1transporttrain</th>
                <td>{% if ticket.day1TransportTrain %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Day1breakfast</th>
                <td>{{ ticket.day1Breakfast }}</td>
            </tr>
            <tr>
                <th>Day1visite</th>
                <td>{{ ticket.day1Visite }}</td>
            </tr>
            <tr>
                <th>Day1transportbus</th>
                <td>{% if ticket.day1TransportBus %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Day2transportbus</th>
                <td>{% if ticket.day2TransportBus %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Day2visite</th>
                <td>{{ ticket.day2Visite }}</td>
            </tr>
            <tr>
                <th>Day2breakfast</th>
                <td>{{ ticket.day2Breakfast }}</td>
            </tr>
            <tr>
                <th>Day2transporttrain</th>
                <td>{% if ticket.day2TransportTrain %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Day2night</th>
                <td>{% if ticket.day2Night %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Day2transportbusnight</th>
                <td>{% if ticket.day2TransportBusNight %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Optionvisite</th>
                <td>{{ ticket.optionVisite }}</td>
            </tr>
            <tr>
                <th>Optionexpo</th>
                <td>{{ ticket.optionExpo }}</td>
            </tr>
            <tr>
                <th>Optionartdeco</th>
                <td>{{ ticket.optionArtDeco }}</td>
            </tr>
            <tr>
                <th>Optiondecouverte</th>
                <td>{% if ticket.optionDecouverte %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Optiongrandsite</th>
                <td>{% if ticket.optionGrandSite %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ ticket.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ticket_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ticket_edit', { 'id': ticket.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ticket/show.html.twig", "/var/www/html/ColloqueOffice/app/Resources/views/ticket/show.html.twig");
    }
}
