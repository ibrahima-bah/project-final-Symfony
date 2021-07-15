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

/* home/portfolio.html.twig */
class __TwigTemplate_2d87609cab65ae92aa5c8c74e7ca1a237709bee9f034a4ec9e06034d6c9fbcc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portfolio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/portfolio.html.twig", 1);
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
    <meta name=\"author\" content=\"BAH-IBRAHIMA\">
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
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

    <!-- fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 36
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

        <!-- Subintro
        ================================================== -->
        <section id=\"subintro\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span8\">
                        <ul class=\"breadcrumb\">
                            <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                            <li><a href=\"#\">Appartement</a><i class=\"icon-angle-right\"></i></li>
                            <li class=\"active\">Appartement</li>
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
                    <div class=\"span12\">
                        <ul class=\"filter\">
                            <li class=\"all active\"><a href=\"#\" class=\"btn\">Photo des Appartements</a></li>
                            <li class=\"web\"><a href=\"#\" class=\"btn\">Villa du Bas</a></li>
                            <li class=\"brand\"><a href=\"#\" class=\"btn\">Villa du Haut</a></li>

                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <ul class=\"portfolio-area da-thumbs\">
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut1.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut1.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut1.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut2.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut2.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut2.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut3.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut3.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut3.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas1.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas1.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas1.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas2.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas2.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas2.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas3.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas3.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas3.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas5.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas5.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas5.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas6.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas6.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas6.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas7.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas7.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas7.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas8.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas8.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas8.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut5.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut5.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut5.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut6.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut6.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut6.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut7.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut7.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut7.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut8.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut8.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut8.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut9.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut9.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut9.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut10.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut10.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/haut10.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                         <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas9.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas9.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/bas9.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/portailbas.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/portailbas.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/dummies/portailbas.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"pagination\">
                            <ul>
                                <li><a href=\"#\">Prev</a></li>

                                <li class=\"active\"><a href=\"#\">1</a></li>

                                <li><a href=\"#\">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer
        ================================================== -->

    </div>
    <!-- end wrapper -->
    <a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>
    <script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.js\"></script>
    <script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/raphael-min.js\"></script>
    <script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.easing.1.3.js\"></script>
    <script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/bootstrap.js\"></script>
    <script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.js\"></script>
    <script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.elastislide.js\"></script>
    <script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.prettyPhoto.js\"></script>
    <script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.flexslider.js\"></script>
    <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery-hover-effect.js\"></script>
    <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/portfolio/jquery.quicksand.js\"></script>
    <script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/portfolio/setting.js\"></script>
    <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/animate.js\"></script>

    <!-- Template Custom JavaScript File -->
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/custom.js\"></script>

</body>

</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1009 => 615,  1003 => 612,  999 => 611,  995 => 610,  991 => 609,  987 => 608,  983 => 607,  979 => 606,  975 => 605,  971 => 604,  967 => 603,  963 => 602,  959 => 601,  920 => 565,  914 => 562,  909 => 560,  889 => 543,  883 => 540,  878 => 538,  857 => 520,  851 => 517,  846 => 515,  826 => 498,  820 => 495,  815 => 493,  795 => 476,  789 => 473,  784 => 471,  764 => 454,  758 => 451,  753 => 449,  733 => 432,  727 => 429,  722 => 427,  702 => 410,  696 => 407,  691 => 405,  670 => 387,  664 => 384,  659 => 382,  638 => 364,  632 => 361,  627 => 359,  606 => 341,  600 => 338,  595 => 336,  574 => 318,  568 => 315,  563 => 313,  542 => 295,  536 => 292,  531 => 290,  510 => 272,  504 => 269,  499 => 267,  479 => 250,  473 => 247,  468 => 245,  448 => 228,  442 => 225,  437 => 223,  417 => 206,  411 => 203,  406 => 201,  386 => 184,  380 => 181,  375 => 179,  355 => 162,  349 => 159,  344 => 157,  324 => 140,  318 => 137,  313 => 135,  293 => 118,  287 => 115,  282 => 113,  262 => 96,  256 => 93,  251 => 91,  193 => 36,  189 => 35,  185 => 34,  181 => 33,  177 => 32,  170 => 28,  166 => 27,  161 => 25,  157 => 24,  153 => 23,  149 => 22,  145 => 21,  130 => 8,  120 => 7,  100 => 5,  81 => 4,  61 => 3,  38 => 1,);
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
    <meta name=\"author\" content=\"BAH-IBRAHIMA\">
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

        <!-- Subintro
        ================================================== -->
        <section id=\"subintro\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span8\">
                        <ul class=\"breadcrumb\">
                            <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                            <li><a href=\"#\">Appartement</a><i class=\"icon-angle-right\"></i></li>
                            <li class=\"active\">Appartement</li>
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
                    <div class=\"span12\">
                        <ul class=\"filter\">
                            <li class=\"all active\"><a href=\"#\" class=\"btn\">Photo des Appartements</a></li>
                            <li class=\"web\"><a href=\"#\" class=\"btn\">Villa du Bas</a></li>
                            <li class=\"brand\"><a href=\"#\" class=\"btn\">Villa du Haut</a></li>

                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <ul class=\"portfolio-area da-thumbs\">
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut1.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut1.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut1.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut2.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut2.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut2.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut3.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut3.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut3.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas1.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas1.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas1.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas2.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas2.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas2.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas3.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas3.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas3.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas5.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas5.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas5.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas6.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas6.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas6.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas7.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas7.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas7.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas8.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas8.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas8.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"web\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas4.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas4.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut5.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut5.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut5.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut6.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut6.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut6.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut7.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut7.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut7.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut8.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut8.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut8.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut9.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut9.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut9.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/haut10.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/haut10.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/haut10.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du Haut
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>

                         <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/bas9.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/bas9.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/bas9.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <li class=\"portfolio-item\" data-id=\"id-0\" data-type=\"brand\">
                            <div class=\"span4\">
                                <div class=\"thumbnail\">
                                    <div class=\"image-wrapp\">
                                        <img src=\"{{asset('assets')}}/img/dummies/portailbas.jpg\" alt=\"Portfolio name\" title=\"\" />
                                        <article class=\"da-animate da-slideFromRight\">
                                            <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{asset('assets')}}/img/dummies/portailbas.jpg\">
                                                <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                            </a>
                                            <a href=\"{{asset('assets')}}/img/dummies/portailbas.jpg\">
                                                <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                            </a>
                                            <div class=\"hidden-tablet\">
                                                <p>
                                                    Villa du bas
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"row\">
                    <div class=\"span12\">
                        <div class=\"pagination\">
                            <ul>
                                <li><a href=\"#\">Prev</a></li>

                                <li class=\"active\"><a href=\"#\">1</a></li>

                                <li><a href=\"#\">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer
        ================================================== -->

    </div>
    <!-- end wrapper -->
    <a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>
    <script src=\"{{asset('assets')}}/js/jquery.js\"></script>
    <script src=\"{{asset('assets')}}/js/raphael-min.js\"></script>
    <script src=\"{{asset('assets')}}/js/jquery.easing.1.3.js\"></script>
    <script src=\"{{asset('assets')}}/js/bootstrap.js\"></script>
    <script src=\"{{asset('assets')}}/js/google-code-prettify/prettify.js\"></script>
    <script src=\"{{asset('assets')}}/js/jquery.elastislide.js\"></script>
    <script src=\"{{asset('assets')}}/js/jquery.prettyPhoto.js\"></script>
    <script src=\"{{asset('assets')}}/js/jquery.flexslider.js\"></script>
    <script src=\"{{asset('assets')}}/js/jquery-hover-effect.js\"></script>
    <script src=\"{{asset('assets')}}/js/portfolio/jquery.quicksand.js\"></script>
    <script src=\"{{asset('assets')}}/js/portfolio/setting.js\"></script>
    <script src=\"{{asset('assets')}}/js/animate.js\"></script>

    <!-- Template Custom JavaScript File -->
    <script src=\"{{asset('assets')}}/js/custom.js\"></script>

</body>

</html>


{% endblock %}", "home/portfolio.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/portfolio.html.twig");
    }
}
