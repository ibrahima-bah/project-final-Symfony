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

/* admin/footer.html.twig */
class __TwigTemplate_8999be35830558abe15e2b7f8c77946ddacf211eb27d288de745fc214bd12417 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        // line 1
        echo "
<footer class=\"main-footer\">
    <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/demo.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  73 => 23,  68 => 21,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<footer class=\"main-footer\">
    <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"{{ asset('assets') }}/admin/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('assets') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('assets') }}/admin/dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('assets') }}/admin/dist/js/demo.js\"></script>", "admin/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/project_test2/templates/admin/footer.html.twig");
    }
}
