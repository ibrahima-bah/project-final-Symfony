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

/* home/contact.html.twig */
class __TwigTemplate_a3288408521936280684781932d33584f775d659d858e4da32cdce9ab8f6334a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/contact.html.twig", 1);
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

        echo "Contact | ";
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
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Home</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Contactez-nous</li>
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


                <div class=\"span5\">
                    <aside>


                        <h3>Contact Form </h3>
                        ";
        // line 42
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

                        <form name=\"messages\"  method=\"post\" role=\"form\" class=\"contactForm\">
                            <div class=\"row\">
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"input-block-level\"  placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                    <div class=\"validation\"></div>
                                </div>

                                <div class=\"span4 form-group\">
                                    <input type=\"email\" class=\"input-block-level\" id=\"messages_email\" name=\"messages[email]\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" class=\"input-block-level\" id=\"messages_subject\" name=\"messages[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <textarea class=\"input-block-level\" id=\"messages_message\" name=\"messages[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                    <div class=\"validation\"></div>
                                    <div class=\"text-center\">

                                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-messeage"), "html", null, true);
        echo "\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>
                </div>



                <div class=\"span7\">

                    <div class=\"widget\">
                        <div class=\"widget\">

                            <ul class=\"social-links\">
                                <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 82, $this->source); })()), 0, [], "array", false, false, false, 82), "twitter", [], "any", false, false, false, 82), "html", null, true);
        echo "\" title=\"Twitter\"><i class=\"icon-square icon-32 icon-twitter\"></i></a></li>
                                <li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 83, $this->source); })()), 0, [], "array", false, false, false, 83), "facebook", [], "any", false, false, false, 83), "html", null, true);
        echo "\" title=\"Facebook\"><i class=\"icon-square icon-32 icon-facebook\"></i></a></li>
                                <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 84, $this->source); })()), 0, [], "array", false, false, false, 84), "instagram", [], "any", false, false, false, 84), "html", null, true);
        echo "\" title=\"Instagram\"><i class=\"icon-square icon-32 icon-pinterest\"></i></a></li>
                                <li><a href=\"#\" title=\"Linkedin\"><i class=\"icon-square icon-32 icon-linkedin\"></i></a></li>
                                <li><a href=\"#\" title=\"Pinterest\"><i class=\"icon-square icon-32 icon-pinterest\"></i></a></li>
                            </ul>
                        </div>

                        <h3 class=\"rheading\">Contact Information<span></span></h3>
                        ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 91, $this->source); })()), 0, [], "array", false, false, false, 91), "contact", [], "any", false, false, false, 91);
        echo "
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
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 91,  220 => 84,  216 => 83,  212 => 82,  191 => 64,  166 => 42,  130 => 8,  120 => 7,  100 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Contact | {{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}} {% endblock %}

{% block body %}

    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Home</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Contactez-nous</li>
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


                <div class=\"span5\">
                    <aside>


                        <h3>Contact Form </h3>
                        {{ include('messages.html.twig') }}

                        <form name=\"messages\"  method=\"post\" role=\"form\" class=\"contactForm\">
                            <div class=\"row\">
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"input-block-level\"  placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                    <div class=\"validation\"></div>
                                </div>

                                <div class=\"span4 form-group\">
                                    <input type=\"email\" class=\"input-block-level\" id=\"messages_email\" name=\"messages[email]\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" class=\"input-block-level\" id=\"messages_subject\" name=\"messages[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <textarea class=\"input-block-level\" id=\"messages_message\" name=\"messages[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                    <div class=\"validation\"></div>
                                    <div class=\"text-center\">

                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-messeage') }}\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>
                </div>



                <div class=\"span7\">

                    <div class=\"widget\">
                        <div class=\"widget\">

                            <ul class=\"social-links\">
                                <li><a href=\"{{ setting[0].twitter }}\" title=\"Twitter\"><i class=\"icon-square icon-32 icon-twitter\"></i></a></li>
                                <li><a href=\"{{ setting[0].facebook }}\" title=\"Facebook\"><i class=\"icon-square icon-32 icon-facebook\"></i></a></li>
                                <li><a href=\"{{ setting[0].instagram }}\" title=\"Instagram\"><i class=\"icon-square icon-32 icon-pinterest\"></i></a></li>
                                <li><a href=\"#\" title=\"Linkedin\"><i class=\"icon-square icon-32 icon-linkedin\"></i></a></li>
                                <li><a href=\"#\" title=\"Pinterest\"><i class=\"icon-square icon-32 icon-pinterest\"></i></a></li>
                            </ul>
                        </div>

                        <h3 class=\"rheading\">Contact Information<span></span></h3>
                        {{ setting[0].contact |raw }}
                    </div>

                </div>
            </div>
        </div>
    </section>

{% endblock %}


", "home/contact.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/contact.html.twig");
    }
}
