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

/* home/index.html.twig */
class __TwigTemplate_c30877d3f53765270343aa059289286069ce67170194df8568457be80ee17e4c extends Template
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
            'slider' => [$this, 'block_slider'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        echo " ";
        $this->loadTemplate("home/slider.html.twig", "home/index.html.twig", 7)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section id=\"maincontent\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"call-action\">

                        <div class=\"text\">
                            <h2>Vous devriez aimer cette action d'appel qui se démarque</h2>
                            <p>
                                Survolez cette boîte d'action d'appel et voyez le bouton d'action d'appel jouer une belle animation pour attirer l'attention et réserver vos vols
                            </p>
                        </div>
                        <div class=\"cta\">
                            <a class=\"btn btn-large btn-theme\" href=\"#\">
                                <i class=\"icon-plane icon-white\"></i> Reserver </a>
                        </div>

                    </div>
                    <!-- end tagline -->
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 34
            echo "                <div class=\"span3 features e_pulse\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 36))), "html", null, true);
            echo "\"  style=\"height: 150px; width:400px\" alt=\"\" />
                    <div class=\"box\">
                        <div class=\"divcenter\">
                            <a href=\"#\"><i class=\"icon-circled icon-48 icon-magic active icon\"></i></a>
                            <h4>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

            </div>

            <div class=\"row\">
                <div class=\"span12\">
                    <h4 class=\"rheading\">Nouveau Appartement<span></span></h4>
                    <div class=\"row\">
                        <div class=\"span3\">

                            <p class=\"hidden-phone\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus rhoncus elit egestas luctus. Nullam at lectus augue.
                            </p>

                            <a href=\"#\" class=\"btn btn-theme\">Lire plus</a>
                        </div>

                        <div class=\"span9\">
                            <div id=\"latest-work\" class=\"carousel btleft\">
                                <div class=\"carousel-wrapper\">
                                    <ul class=\"da-thumbs\">

                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newhotels"]) || array_key_exists("newhotels", $context) ? $context["newhotels"] : (function () { throw new RuntimeError('Variable "newhotels" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 69
            echo "                                        <li>

                                            <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 71))), "html", null, true);
            echo "\"  style=\"height: 150px; width:400px\" alt=\"\" />
                                            <article class=\"da-animate da-slideFromRight\">
                                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 73))), "html", null, true);
            echo "\">
                                                    <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                                </a>
                                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">
                                                    <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                                </a>
                                                <div class=\"hidden-tablet\">
                                                    <p>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                                                </div>
                                            </article>
                                        </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "


                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 85,  257 => 80,  250 => 76,  244 => 73,  239 => 71,  235 => 69,  231 => 68,  207 => 46,  195 => 40,  188 => 36,  184 => 35,  181 => 34,  177 => 33,  151 => 9,  141 => 8,  120 => 7,  100 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}} {% endblock %}

{% block slider %} {% include('home/slider.html.twig') %} {% endblock %}
{% block body %}
    <section id=\"maincontent\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"call-action\">

                        <div class=\"text\">
                            <h2>Vous devriez aimer cette action d'appel qui se démarque</h2>
                            <p>
                                Survolez cette boîte d'action d'appel et voyez le bouton d'action d'appel jouer une belle animation pour attirer l'attention et réserver vos vols
                            </p>
                        </div>
                        <div class=\"cta\">
                            <a class=\"btn btn-large btn-theme\" href=\"#\">
                                <i class=\"icon-plane icon-white\"></i> Reserver </a>
                        </div>

                    </div>
                    <!-- end tagline -->
                </div>
            </div>

            <div class=\"row\">
                {% for rs in hotels %}
                <div class=\"span3 features e_pulse\">
                    <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                    <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\"  style=\"height: 150px; width:400px\" alt=\"\" />
                    <div class=\"box\">
                        <div class=\"divcenter\">
                            <a href=\"#\"><i class=\"icon-circled icon-48 icon-magic active icon\"></i></a>
                            <h4>{{rs.title}}</h4>
                        </div>
                    </div>
                    </a>
                </div>
                {% endfor %}


            </div>

            <div class=\"row\">
                <div class=\"span12\">
                    <h4 class=\"rheading\">Nouveau Appartement<span></span></h4>
                    <div class=\"row\">
                        <div class=\"span3\">

                            <p class=\"hidden-phone\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus rhoncus elit egestas luctus. Nullam at lectus augue.
                            </p>

                            <a href=\"#\" class=\"btn btn-theme\">Lire plus</a>
                        </div>

                        <div class=\"span9\">
                            <div id=\"latest-work\" class=\"carousel btleft\">
                                <div class=\"carousel-wrapper\">
                                    <ul class=\"da-thumbs\">

                                        {% for rs in newhotels %}
                                        <li>

                                            <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\"  style=\"height: 150px; width:400px\" alt=\"\" />
                                            <article class=\"da-animate da-slideFromRight\">
                                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ rs.image) }}\">
                                                    <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                                </a>
                                                <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                                                    <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                                </a>
                                                <div class=\"hidden-tablet\">
                                                    <p>{{rs.title}}</p>
                                                </div>
                                            </article>
                                        </li>
                                        {% endfor %}



                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

{% endblock %}
", "home/index.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/index.html.twig");
    }
}
