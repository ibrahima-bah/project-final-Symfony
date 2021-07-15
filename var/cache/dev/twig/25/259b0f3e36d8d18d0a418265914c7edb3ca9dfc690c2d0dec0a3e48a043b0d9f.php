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

/* home/footer.html.twig */
class __TwigTemplate_d9c357aaac9733e777eea0ee753d27b21a8c42121c85ee99b2cc983e7fca5487 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        // line 1
        echo "<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Pages interessantes</h5>
                    <ul class=\"regular\">
                        <li><a href=\"/about\">A Propos de Nous</a></li>
                        <li><a href=\"/portfolio\">Appartement</a></li>
                        <li><a href=\"/components\">Politiques</a></li>
                        <li><a href=\"/contact\">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class=\"span4\">

            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Nous Trouver</h5>
                    <address>
                        <i class=\"icon-home\"></i> <strong>Chez Antonia</strong><br>
                        103 Chemin des beugons<br>
                        13700 Marignane
                    </address>
                    <p>
                        <i class=\"icon-phone\"></i>0665737951<br>
                        <i class=\"icon-envelope-alt\"></i> antonia@ramirez-cardenas.es
                    </p>
                </div>
                <div class=\"widget\">
                    <ul class=\"social\">
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"icon-twitter icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"icon-facebook icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"icon-linkedin icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"icon-pinterest icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"icon-google-plus icon-square icon-32\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy; BAH IBRAHIMA - All right reserved
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"pull-right\">
                        <div class=\"credits\">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                            -->
                            Created by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end wrapper -->
<a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>

<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.js\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/raphael-min.js\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.easing.1.3.js\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/bootstrap.js\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 80,  132 => 79,  128 => 78,  124 => 77,  120 => 76,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Pages interessantes</h5>
                    <ul class=\"regular\">
                        <li><a href=\"/about\">A Propos de Nous</a></li>
                        <li><a href=\"/portfolio\">Appartement</a></li>
                        <li><a href=\"/components\">Politiques</a></li>
                        <li><a href=\"/contact\">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class=\"span4\">

            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Nous Trouver</h5>
                    <address>
                        <i class=\"icon-home\"></i> <strong>Chez Antonia</strong><br>
                        103 Chemin des beugons<br>
                        13700 Marignane
                    </address>
                    <p>
                        <i class=\"icon-phone\"></i>0665737951<br>
                        <i class=\"icon-envelope-alt\"></i> antonia@ramirez-cardenas.es
                    </p>
                </div>
                <div class=\"widget\">
                    <ul class=\"social\">
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"icon-twitter icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"icon-facebook icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"icon-linkedin icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"icon-pinterest icon-square icon-32\"></i></a></li>
                        <li><a href=\"#\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"icon-google-plus icon-square icon-32\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy; BAH IBRAHIMA - All right reserved
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"pull-right\">
                        <div class=\"credits\">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                            -->
                            Created by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end wrapper -->
<a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>

<script src=\"{{asset('assets')}}/js/jquery.js\"></script>
<script src=\"{{asset('assets')}}/js/raphael-min.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery.easing.1.3.js\"></script>
<script src=\"{{asset('assets')}}/js/bootstrap.js\"></script>
<script src=\"{{asset('assets')}}/js/google-code-prettify/prettify.js\"></script>", "home/footer.html.twig", "/Applications/Xampp/xamppfiles/htdocs/project_test2/templates/home/footer.html.twig");
    }
}
