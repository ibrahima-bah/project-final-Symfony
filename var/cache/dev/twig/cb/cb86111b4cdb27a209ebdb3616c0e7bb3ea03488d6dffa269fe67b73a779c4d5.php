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

/* home/slider.html.twig */
class __TwigTemplate_b492a97316c6e3e727cbf9858d2de1ba5ba31bd24d9fa74f370c7f9f34c54dc1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        echo "<section id=\"intro\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <!-- Place somewhere in the <body> of your page -->
                <div id=\"mainslider\" class=\"flexslider\">
                    <ul class=\"slides\">

                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 11
            echo "                            <li data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 11))), "html", null, true);
            echo "\" style=\"height: 400px\">
                                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 13))), "html", null, true);
            echo "\"   style=\"height: 400px; width:940px \"  alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h2>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  77 => 17,  73 => 16,  67 => 13,  63 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"intro\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <!-- Place somewhere in the <body> of your page -->
                <div id=\"mainslider\" class=\"flexslider\">
                    <ul class=\"slides\">

                        {% for rs in slider %}
                            <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 400px\">
                                <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\"   style=\"height: 400px; width:940px \"  alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h2>{{rs.title}}</h2>
                                    <p>{{rs.description}}</p>
                                </div>
                            </li>
                        {% endfor %}


                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>", "home/slider.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/project_test2/templates/home/slider.html.twig");
    }
}
