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

/* home/components.html.twig */
class __TwigTemplate_cf578056414e7977f84459aff0a306a32468bba17f4407560b0fcb38c6f229cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/components.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/components.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/components.html.twig", 1);
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

        echo "About Us|";
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Subintro
================================================== -->
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Lumia - Multipurpose responsive bootstrap website template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- styles -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/flexslider.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

    <!-- fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-57-precomposed.png\">

    <!-- =======================================================
      Theme Name: Lumia
      Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>


<body>
<div id=\"wrapper\">

    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Politiques</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Politiques</li>
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
    <section id=\"maincontent\" class=\"demo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Conditions d'annulation<span></span></h4>
                            <!-- start: Accordion -->
                            <div class=\"accordion\" id=\"accordion2\">
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle active\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                                            <i class=\"icon-minus\"></i> Remboursement à hauteur de 100% </a>
                                    </div>
                                    <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                                        <div class=\"accordion-inner\">
                                            si vous annulez au moins 60 jours avant l’arrivée.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                                            <i class=\"icon-plus\"></i> Remboursement à hauteur de 50 %
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                            (frais de service exclus) si vous annulez au moins 30 jours avant l’arrivée
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
                                            <i class=\"icon-plus\"></i> Aucun remboursement
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                            si vous annulez moins de 30 jours avant l’arrivée.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Accordion -->
                        </div>
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Poltiques et Reglement<span></span></h4>
                            <div class=\"tabbable tabs-top\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i> Réglement interieur</a></li>
                                    <li><a href=\"#two\" data-toggle=\"tab\">Remarques</a></li>
                                    <li><a href=\"#three\" data-toggle=\"tab\">Adapatation</a></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"one\">
                                        <p>
                                            <strong>Arrivée après :</strong> 17h
                                        </p>
                                        <p>
                                            <strong>Départ avant :</strong>  12h
                                        </p>
                                    </div>
                                    <div class=\"tab-pane\" id=\"two\">
                                        <p>
                                            2 chèques de caution. 1 de 500€ pour l'appartement et 1 de 50€ pour le ménage. Je vous les restitue à votre départ après l'état des lieux.
                                        </p>
                                    </div>
                                    <div class=\"tab-pane\" id=\"three\">
                                        <li>Adaptée aux enfants</li>
                                        <li>Animaux de compagnie acceptés</li>
                                        <li>Événements autorisés</li>
                                        <li>Location fumeurs</li>
                                        <li>Occupants maximums: 5 pour la villa du haut et 3 pour la villa du bas</li>

                                    </div>
                                </div>
                            </div>
                            <!-- end tab -->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4 class=\"rheading\">A savoir <span></span></h4>
                            <blockquote>
                                <p>
                                    <i class=\"icon-quote-left\"></i> Si vous avez des séjours à venir, vous pouvez gérer ou annuler vos réservations en accédant à votre compte vacancier.
                                </p>
                            </blockquote>
                        </div>
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Dommages et Frais <span></span></h4>
                            <div class=\"alert alert-error\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                <strong>A tenir compte:</strong> Vous pourrez être tenu responsable en cas de dommages causés à la location de vacances durant votre séjour.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer
 ================================================== -->


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/components.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 35,  188 => 34,  184 => 33,  180 => 32,  176 => 31,  169 => 27,  165 => 26,  161 => 25,  157 => 24,  153 => 23,  149 => 22,  145 => 21,  130 => 8,  120 => 7,  100 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}About Us|{{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}} {% endblock %}

{% block body %}

    <!-- Subintro
================================================== -->
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Lumia - Multipurpose responsive bootstrap website template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- styles -->
    <link href=\"{{asset('assets')}}/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/css/flexslider.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/css/style.css\" rel=\"stylesheet\">
    <link href=\"{{asset('assets')}}/color/default.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

    <!-- fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"{{asset('assets')}}/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{asset('assets')}}/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{asset('assets')}}/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{asset('assets')}}/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('assets')}}/ico/apple-touch-icon-57-precomposed.png\">

    <!-- =======================================================
      Theme Name: Lumia
      Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>


<body>
<div id=\"wrapper\">

    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"#\">Politiques</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Politiques</li>
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
    <section id=\"maincontent\" class=\"demo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Conditions d'annulation<span></span></h4>
                            <!-- start: Accordion -->
                            <div class=\"accordion\" id=\"accordion2\">
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle active\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                                            <i class=\"icon-minus\"></i> Remboursement à hauteur de 100% </a>
                                    </div>
                                    <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                                        <div class=\"accordion-inner\">
                                            si vous annulez au moins 60 jours avant l’arrivée.
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                                            <i class=\"icon-plus\"></i> Remboursement à hauteur de 50 %
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                            (frais de service exclus) si vous annulez au moins 30 jours avant l’arrivée
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
                                            <i class=\"icon-plus\"></i> Aucun remboursement
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"accordion-body collapse\">
                                        <div class=\"accordion-inner\">
                                            si vous annulez moins de 30 jours avant l’arrivée.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Accordion -->
                        </div>
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Poltiques et Reglement<span></span></h4>
                            <div class=\"tabbable tabs-top\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i> Réglement interieur</a></li>
                                    <li><a href=\"#two\" data-toggle=\"tab\">Remarques</a></li>
                                    <li><a href=\"#three\" data-toggle=\"tab\">Adapatation</a></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"one\">
                                        <p>
                                            <strong>Arrivée après :</strong> 17h
                                        </p>
                                        <p>
                                            <strong>Départ avant :</strong>  12h
                                        </p>
                                    </div>
                                    <div class=\"tab-pane\" id=\"two\">
                                        <p>
                                            2 chèques de caution. 1 de 500€ pour l'appartement et 1 de 50€ pour le ménage. Je vous les restitue à votre départ après l'état des lieux.
                                        </p>
                                    </div>
                                    <div class=\"tab-pane\" id=\"three\">
                                        <li>Adaptée aux enfants</li>
                                        <li>Animaux de compagnie acceptés</li>
                                        <li>Événements autorisés</li>
                                        <li>Location fumeurs</li>
                                        <li>Occupants maximums: 5 pour la villa du haut et 3 pour la villa du bas</li>

                                    </div>
                                </div>
                            </div>
                            <!-- end tab -->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4 class=\"rheading\">A savoir <span></span></h4>
                            <blockquote>
                                <p>
                                    <i class=\"icon-quote-left\"></i> Si vous avez des séjours à venir, vous pouvez gérer ou annuler vos réservations en accédant à votre compte vacancier.
                                </p>
                            </blockquote>
                        </div>
                        <div class=\"span6\">
                            <h4 class=\"rheading\">Dommages et Frais <span></span></h4>
                            <div class=\"alert alert-error\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                <strong>A tenir compte:</strong> Vous pourrez être tenu responsable en cas de dommages causés à la location de vacances durant votre séjour.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer
 ================================================== -->


</div>


{% endblock %}


", "home/components.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/components.html.twig");
    }
}
