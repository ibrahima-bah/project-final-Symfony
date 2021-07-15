<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/reservations.html.twig */
class __TwigTemplate_93e0932c1ae19989c6e41120708330fe3fb89c28b5e5be2bba89b293579b410d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservations.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "user/reservations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Blog</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Blog with left sidebar</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                ";
        // line 33
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">User Reservations List</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Hotel</th>
                                        <th>Room</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Checkin</th>
                                        <th>Checkout</th>
                                        <th>Days</th>
                                        <th>Total</th>
                                        <th>Message</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 65
            echo "                                        <tr>
                                            <td>
                                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "hotelid", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">
                                                    ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "hname", [], "any", false, false, false, 68), "html", null, true);
            echo "
                                                </a>
                                            </td>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "rname", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "surname", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 74), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "days", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "total", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "message", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "note", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "created_at", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">show</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                                        <tr>
                                            <td colspan=\"19\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 91,  225 => 87,  216 => 83,  211 => 81,  207 => 80,  203 => 79,  199 => 78,  195 => 77,  191 => 76,  187 => 75,  183 => 74,  179 => 73,  175 => 72,  171 => 71,  165 => 68,  161 => 67,  157 => 65,  152 => 64,  118 => 33,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name  }} Profile{% endblock %}

{% block body %}
    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Blog</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Blog with left sidebar</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                {{ include('user/usermenu.html.twig') }}

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">User Reservations List</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Hotel</th>
                                        <th>Room</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Checkin</th>
                                        <th>Checkout</th>
                                        <th>Days</th>
                                        <th>Total</th>
                                        <th>Message</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for reservation in reservations %}
                                        <tr>
                                            <td>
                                                <a href=\"{{ path(\"hotel_show\",{\"id\":reservation.hotelid}) }}\">
                                                    {{ reservation.hname }}
                                                </a>
                                            </td>
                                            <td>{{ reservation.rname }}</td>
                                            <td>{{ reservation.name }}</td>
                                            <td>{{ reservation.surname }}</td>
                                            <td>{{ reservation.checkin|date('d-m-Y')}}</td>
                                            <td>{{ reservation.checkout|date('d-m-Y')}}</td>
                                            <td>{{ reservation.days }}</td>
                                            <td>{{ reservation.total }}</td>
                                            <td>{{ reservation.message }}</td>
                                            <td>{{ reservation.note }}</td>
                                            <td>{{ reservation.status }}</td>
                                            <td>{{ reservation.created_at }}</td>
                                            <td>
                                                <a href=\"{{ path('user_reservation_show', {'id': reservation.id}) }}\">show</a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"19\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "user/reservations.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/project_test2/templates/user/reservations.html.twig");
    }
}
