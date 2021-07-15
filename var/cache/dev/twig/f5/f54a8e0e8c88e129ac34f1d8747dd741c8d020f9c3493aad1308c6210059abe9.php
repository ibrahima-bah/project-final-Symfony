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

/* home/header.html.twig */
class __TwigTemplate_c2e3fdb3c1502ccbf81a90864acc053d74f49ad317e1b88ae877a2290c97fb8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\">
                        <a href=\"/\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logo.png\" alt=\"\" /></a>
                    </div>
                    <!-- end logo -->

                    <!-- top menu -->
                    <div class=\"navigation\">
                        <nav>
                            <ul class=\"nav topnav\">
                                <li class=\"active\">
                                    <a href=\"/home\"><i class=\"icon-home\"></i> Home </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/portfolio\"><i class=\"icon-cog\"></i> Appartement <i class=\"icon-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">

                                    </ul>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/about\"><i class=\"icon-info-sign\"></i> A Propos de nous <i class=\"icon-angle-down\"></i></a>

                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/components\"><i class=\"icon-briefcase\"></i> Politique <i class=\"icon-question-sign\"></i></a>
                                    <ul class=\"dropdown-menu\">

                                    </ul>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\"><i class=\"icon-book\"></i> Blog <i class=\"icon-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"blog-left-sidebar.html\">A venir</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href=\"/contact\"><i class=\"icon-envelope-alt\"></i> Contact</a>
                                </li>

                                ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "                                    <li>
                                    <a href=\"/user\"><img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "image", [], "any", false, false, false, 50))), "html", null, true);
            echo "\" style=\"height: 30px\" >
                                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "surname", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>

                                    </li>

                                    <li><a href=\"/logout\">Logout</a></li>
                                ";
        } else {
            // line 57
            echo "                                    <li>
                                        <a href=\"/loginuser\"><i class=\"icon-envelope-alt\"></i> Login</a>
                                    </li>
                                ";
        }
        // line 61
        echo "


                            </ul>
                        </nav>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 61,  115 => 57,  104 => 51,  100 => 50,  97 => 49,  95 => 48,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\">
                        <a href=\"/\"><img src=\"{{asset('assets')}}/img/logo.png\" alt=\"\" /></a>
                    </div>
                    <!-- end logo -->

                    <!-- top menu -->
                    <div class=\"navigation\">
                        <nav>
                            <ul class=\"nav topnav\">
                                <li class=\"active\">
                                    <a href=\"/home\"><i class=\"icon-home\"></i> Home </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/portfolio\"><i class=\"icon-cog\"></i> Appartement <i class=\"icon-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">

                                    </ul>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/about\"><i class=\"icon-info-sign\"></i> A Propos de nous <i class=\"icon-angle-down\"></i></a>

                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"/components\"><i class=\"icon-briefcase\"></i> Politique <i class=\"icon-question-sign\"></i></a>
                                    <ul class=\"dropdown-menu\">

                                    </ul>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\"><i class=\"icon-book\"></i> Blog <i class=\"icon-angle-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"blog-left-sidebar.html\">A venir</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href=\"/contact\"><i class=\"icon-envelope-alt\"></i> Contact</a>
                                </li>

                                {% if app.user %}
                                    <li>
                                    <a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" style=\"height: 30px\" >
                                        {{ app.user.name }}  {{ app.user.surname }}</a>

                                    </li>

                                    <li><a href=\"/logout\">Logout</a></li>
                                {% else %}
                                    <li>
                                        <a href=\"/loginuser\"><i class=\"icon-envelope-alt\"></i> Login</a>
                                    </li>
                                {% endif %}



                            </ul>
                        </nav>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>", "home/header.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/header.html.twig");
    }
}
