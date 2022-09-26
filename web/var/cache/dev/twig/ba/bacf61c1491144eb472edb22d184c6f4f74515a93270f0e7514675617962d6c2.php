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

/* header.html.twig */
class __TwigTemplate_bf1788f77598c1968d897aa344ee465527202413a9d65992b459a7e8115e5938 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "<header class=\"fade-in\">
    <div class=\"navigation-bar flex middle-xs\">
        <img src=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "/img/logo.svg\" class=\"logo\">
        <nav class=\"end-xs\">
            <ul>
                <li><a href=\"/xbartamartin\">UserHomepage</a></li>
                <li><a href=\"#about-us\">About us</a></li>
                <li><a href=\"#services\">Services</a></li>
                <li><a href=\"#portfolio\">Portfolio</a></li>
                <li><a href=\"#benefits\">Benefits</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class=\"hero flex middle-xs\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "/img/hero-image.jpg');
            }\">
        <div class=\"hero-text \">
            <h1>BeBlack</h1>
            <p>Short for beautiful black. A creative OnePager free to use.</p>
        </div>
    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
<header class=\"fade-in\">
    <div class=\"navigation-bar flex middle-xs\">
        <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/logo.svg\" class=\"logo\">
        <nav class=\"end-xs\">
            <ul>
                <li><a href=\"/xbartamartin\">UserHomepage</a></li>
                <li><a href=\"#about-us\">About us</a></li>
                <li><a href=\"#services\">Services</a></li>
                <li><a href=\"#portfolio\">Portfolio</a></li>
                <li><a href=\"#benefits\">Benefits</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class=\"hero flex middle-xs\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/hero-image.jpg');
            }\">
        <div class=\"hero-text \">
            <h1>BeBlack</h1>
            <p>Short for beautiful black. A creative OnePager free to use.</p>
        </div>
    </div>
</header>
{% endblock %}", "header.html.twig", "/var/www/html/templates/header.html.twig");
    }
}
