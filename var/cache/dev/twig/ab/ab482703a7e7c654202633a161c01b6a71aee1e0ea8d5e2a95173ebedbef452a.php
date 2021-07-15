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

/* home/head.html.twig */
class __TwigTemplate_70b94275b5e828d3c24434e3d10179107ef145025b182e3f8d53ada4bf561d70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        // line 1
        echo "<!-- styles -->
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap-responsive.css\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/prettyPhoto.css\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/flexslider.css\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

<!-- fav and touch icons -->
<link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/favicon.ico\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-144-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-114-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-72-precomposed.png\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/ico/apple-touch-icon-57-precomposed.png\">

<!-- =======================================================
  Theme Name: Lumia
  Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- styles -->
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
======================================================= -->", "home/head.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/project_test2/templates/home/head.html.twig");
    }
}
