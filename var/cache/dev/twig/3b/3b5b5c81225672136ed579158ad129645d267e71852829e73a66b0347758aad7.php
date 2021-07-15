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

/* home/hotelshow.html.twig */
class __TwigTemplate_14753b5c8a9e468189c45121f28a011b24d594d471009582c6fd67026f400eb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hotelshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hotelshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/hotelshow.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 4, $this->source); })()), "keywords", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>
    <!-- Subintro
    ================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Hotel Detail </a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
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

                <div class=\"span7\">

                    <!-- Place somewhere in the <body> of your page -->
                    <div id=\"mainslider\" class=\"flexslider\">
                        <ul class=\"slides\">

                            <li data-thumb=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45))), "html", null, true);
        echo "\" style=\"height: 300px; width: 500px\">
                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46))), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47))), "html", null, true);
        echo "\"    alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h4>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
        echo "</h4>


                                </div>
                            </li>

                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 57
            echo "                                <li data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" style=\"height: 300px; width: 500px\">
                                    <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 58))), "html", null, true);
            echo "\">
                                        <img class=\"zoom\" data-pretty=\"prettyPhoto\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 59))), "html", null, true);
            echo "\"    alt=\"\" />
                                    </a>
                                    <div class=\"flex-caption primary\">
                                        <h4>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 62), "html", null, true);
            echo "</h4>

                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

                        </ul>
                    </div>
                </div>

                <div class=\"span5\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 77, $this->source); })()), "title", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>



                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>Star</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 95, $this->source); })()), "star", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, false, 99), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 103, $this->source); })()), "city", [], "any", false, false, false, 103), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 107, $this->source); })()), "phone", [], "any", false, false, false, 107), "html", null, true);
        echo " /";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 107, $this->source); })()), "country", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 115, $this->source); })()), "fax", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
                                    </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
            <div class=\"row\">
                <div class=\"tabbable tabs-top\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i> Rooms &Price</a></li>
                        <li><a href=\"#two\" data-toggle=\"tab\">Appartement Detail </a></li>
                        <li><a href=\"#three\" data-toggle=\"tab\">Commentaires</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"one\">

                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Prix</th>


                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 155, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 156
            echo "                                    <tr>

                                        <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "title", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>

                                        <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                                        <td><img src=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["room"], "image", [], "any", false, false, false, 161))), "html", null, true);
            echo "\" height=\"80\"></td>
                                        <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 162), "html", null, true);
            echo "</td>
                                        <td>
                                            <form  action=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reservation_new", ["hid" => twig_get_attribute($this->env, $this->source, $context["room"], "hotelid", [], "any", false, false, false, 164), "rid" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\" method=\"post\">
                                                Days <input type=\"number\" id=\"days\" name=\"days\" value=\"1\" style=\"width: 30px\" >
                                                Checkin Date :<input type=\"date\" id=\"checkin\" name=\"checkin\"  style=\"width: 140px\" required>
                                                <input type=\"submit\" value=\"Reserve Room\" class=\"btn btn-success\">
                                            </form>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            echo "                                    <tr>
                                        <td colspan=\"9\">no room found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                </tbody>
                            </table>

                        </div>
                        <div class=\"tab-pane\" id=\"two\">
                            <p>
                                ";
        // line 182
        echo twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 182, $this->source); })()), "detail", [], "any", false, false, false, 182);
        echo "
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"three\">

                            ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 188
            echo "                                <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "subject", [], "any", false, false, false, 188), "html", null, true);
            echo "  [Rate :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 188), "html", null, true);
            echo "]</h5>
                                <p>
                                    ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 190), "html", null, true);
            echo "
                                </p>
                                <hr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "
                            ";
        // line 195
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195)) {
            // line 196
            echo "                            <h4>Ecrire votre commentaire  </h4>
                            ";
            // line 197
            echo twig_include($this->env, $context, "messages.html.twig");
            echo "

                            <form name=\"comment\" action=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199)]), "html", null, true);
            echo "\" method=\"post\" role=\"form\" class=\"contactForm\">
                                <div class=\"row\">

                                    <div class=\"span7 form-group\">
                                        <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                        <div class=\"validation\"></div>
                                    </div>

                                    <div class=\"span7 form-group\">
                                        <textarea class=\"input-block-level\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Comment\"></textarea>
                                        <div class=\"validation\"></div>
                                    </div>
                                    <div class=\"span2 form-group\">
                                        <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>s
                                            <option>5</option>
                                        </select>
                                        <div class=\"validation\"></div>
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment"), "html", null, true);
            echo "\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Send Comment</button>
                                    </div>


                                </div>

                            </form>
                            ";
        } else {
            // line 229
            echo "                                <li>
                                    <a href=\"/loginuser\"><i class=\"icon-envelope-alt\"></i>Merci de se connecter pour ajouter un commentaire</a>
                                </li>
                            ";
        }
        // line 233
        echo "

                        </div>
                    </div>
                </div>
                <!-- end tab -->
            </div>

        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/hotelshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 233,  478 => 229,  466 => 220,  442 => 199,  437 => 197,  434 => 196,  432 => 195,  429 => 194,  419 => 190,  411 => 188,  407 => 187,  399 => 182,  391 => 176,  382 => 172,  369 => 164,  364 => 162,  360 => 161,  356 => 160,  351 => 158,  347 => 156,  342 => 155,  299 => 115,  292 => 111,  283 => 107,  276 => 103,  269 => 99,  262 => 95,  254 => 90,  238 => 77,  226 => 67,  215 => 62,  209 => 59,  205 => 58,  200 => 57,  196 => 56,  187 => 50,  181 => 47,  177 => 46,  173 => 45,  145 => 20,  131 => 8,  121 => 7,  101 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ hotel.title  }} {% endblock %}
{% block keywords %}{{ hotel.keywords  }} {% endblock %}
{% block description %}{{ hotel.description  }} {% endblock %}

{% block body %}
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>
    <!-- Subintro
    ================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Hotel Detail </a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">{{ hotel.title  }}</li>
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

                <div class=\"span7\">

                    <!-- Place somewhere in the <body> of your page -->
                    <div id=\"mainslider\" class=\"flexslider\">
                        <ul class=\"slides\">

                            <li data-thumb=\"{{ asset('uploads/images/' ~ hotel.image) }}\" style=\"height: 300px; width: 500px\">
                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ hotel.image) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\"    alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h4>{{hotel.title}}</h4>


                                </div>
                            </li>

                            {% for rs in images %}
                                <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 300px; width: 500px\">
                                    <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ rs.image) }}\">
                                        <img class=\"zoom\" data-pretty=\"prettyPhoto\" src=\"{{ asset('uploads/images/' ~ rs.image) }}\"    alt=\"\" />
                                    </a>
                                    <div class=\"flex-caption primary\">
                                        <h4>{{rs.title}}</h4>

                                    </div>
                                </li>
                            {% endfor %}


                        </ul>
                    </div>
                </div>

                <div class=\"span5\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">{{ hotel.title }}</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>



                                    <tr>
                                        <th>Description</th>
                                        <td>{{ hotel.description }}</td>
                                    </tr>

                                    <tr>
                                        <th>Star</th>
                                        <td>{{ hotel.star }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ hotel.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ hotel.city }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ hotel.phone }} /{{ hotel.country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ hotel.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>{{ hotel.fax }}</td>
                                    </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
            <div class=\"row\">
                <div class=\"tabbable tabs-top\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i> Rooms &Price</a></li>
                        <li><a href=\"#two\" data-toggle=\"tab\">Appartement Detail </a></li>
                        <li><a href=\"#three\" data-toggle=\"tab\">Commentaires</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"one\">

                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Prix</th>


                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for room in rooms %}
                                    <tr>

                                        <td>{{ room.title }}</td>

                                        <td>{{ room.description }}</td>
                                        <td><img src=\"{{ asset('uploads/images/' ~ room.image) }}\" height=\"80\"></td>
                                        <td>{{ room.price }}</td>
                                        <td>
                                            <form  action=\"{{ path('user_reservation_new', {'hid': room.hotelid,'rid': room.id}) }}\" method=\"post\">
                                                Days <input type=\"number\" id=\"days\" name=\"days\" value=\"1\" style=\"width: 30px\" >
                                                Checkin Date :<input type=\"date\" id=\"checkin\" name=\"checkin\"  style=\"width: 140px\" required>
                                                <input type=\"submit\" value=\"Reserve Room\" class=\"btn btn-success\">
                                            </form>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\">no room found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                        <div class=\"tab-pane\" id=\"two\">
                            <p>
                                {{ hotel.detail |raw  }}
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"three\">

                            {% for rs in comments %}
                                <h5>{{ rs.subject }}  [Rate :{{ rs.rate }}]</h5>
                                <p>
                                    {{ rs.comment }}
                                </p>
                                <hr>
                            {% endfor %}

                            {% if app.user %}
                            <h4>Ecrire votre commentaire  </h4>
                            {{ include('messages.html.twig') }}

                            <form name=\"comment\" action=\"{{ path('user_new_comment', {'id': hotel.id}) }}\" method=\"post\" role=\"form\" class=\"contactForm\">
                                <div class=\"row\">

                                    <div class=\"span7 form-group\">
                                        <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                        <div class=\"validation\"></div>
                                    </div>

                                    <div class=\"span7 form-group\">
                                        <textarea class=\"input-block-level\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Comment\"></textarea>
                                        <div class=\"validation\"></div>
                                    </div>
                                    <div class=\"span2 form-group\">
                                        <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>s
                                            <option>5</option>
                                        </select>
                                        <div class=\"validation\"></div>
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('comment') }}\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Send Comment</button>
                                    </div>


                                </div>

                            </form>
                            {% else %}
                                <li>
                                    <a href=\"/loginuser\"><i class=\"icon-envelope-alt\"></i>Merci de se connecter pour ajouter un commentaire</a>
                                </li>
                            {% endif %}


                        </div>
                    </div>
                </div>
                <!-- end tab -->
            </div>

        </div>
    </section>

{% endblock %}


", "home/hotelshow.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/hotelshow.html.twig");
    }
}
