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

/* footer.html.twig */
class __TwigTemplate_63d545de3cbc08c209c141c1f857aa0848c2ff56ce88ce71089d77527ee33910 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "<section class=\"contact\" id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md center-xs\">
                <h2 class=\"section-title\">Contact</h2>
            </div>
        </div>
        <div class=\"row margin-bottom-small center-xs\">
            <div class=\"col-md\">Call Us<br/>+49 561 0000 0000</div>
            <div class=\"col-md\">Address<br/>Streetname 12</div>
            <div class=\"col-md\">Email<br/>kontakt@lautenschlager.de</div>
        </div>
        <form action=\"\">
            <div class=\"row margin-bottom-small center-xs\">

                <div class=\"col-md padding-small\">
                    <div class=\"row\">
                        <div class=\"col-md\">
                            <input placeholder=\"Enter Your Name\" type=\"text\" name=\"\" value=\"\" class=\"margin-bottom-small\">
                            <input placeholder=\"Enter Your Email\" type=\"email\" name=\"\"  value=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md padding-small\">
                    <textarea placeholder=\"Your Message\" name=\"\" rows=\"8\" class=\"margin-bottom-small\"></textarea>
                    <input type=\"submit\" value=\"Submit\">
                </div>
            </div>
        </form>
    </div>
</section>
</main>
</div>
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md center-xs\">
                <img src=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "/img/logo-footer.svg\" class=\"margin-bottom\" style=\"max-width: 150px;\">
            </div>
        </div>
        <div class=\"row margin-bottom-small\">
            <div class=\"col-md-8\">
                <h3>About us</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-md-4\">
                <h3>Links</h3>
                <ul>
                    <li><a href=\"#home\">Home</a></li>
                    <li><a href=\"#about-us\">About us</a></li>
                    <li><a href=\"#services\">Services</a></li>
                    <li><a href=\"#portfolio\">Portfolio</a></li>
                    <li><a href=\"#why-us\">Why us</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md \">
                <p>Follow me on <a href=\"https://twitter.com/lautenschlagera\" target=\"_blank\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: #38A1F3;\">
                            <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\"></path>
                        </svg></a></p>
                <p>Template created for free commercial use by Andreas Lautenschlager.</p>
                <p>More free downloads under <a href=\"https://lautenschlager.de\" target=\"_blank\" rel=\"noopener\">lautenschlager.de</a></p>
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\" target=\"_blank\"><img alt=\"Creative Commons License\" style=\"border-width:0; max-width: 60px;\" src=\"https://i.creativecommons.org/l/by/4.0/88x31.png\"></a><br>This work is licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\" target=\"_blank\">Creative Commons Attribution 4.0 International License</a>.
                <p>I thank following people for their contribution: <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "/credits.txt\">Credits</a>.</p>
            </div>

        </div>
    </div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 67,  102 => 39,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
<section class=\"contact\" id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md center-xs\">
                <h2 class=\"section-title\">Contact</h2>
            </div>
        </div>
        <div class=\"row margin-bottom-small center-xs\">
            <div class=\"col-md\">Call Us<br/>+49 561 0000 0000</div>
            <div class=\"col-md\">Address<br/>Streetname 12</div>
            <div class=\"col-md\">Email<br/>kontakt@lautenschlager.de</div>
        </div>
        <form action=\"\">
            <div class=\"row margin-bottom-small center-xs\">

                <div class=\"col-md padding-small\">
                    <div class=\"row\">
                        <div class=\"col-md\">
                            <input placeholder=\"Enter Your Name\" type=\"text\" name=\"\" value=\"\" class=\"margin-bottom-small\">
                            <input placeholder=\"Enter Your Email\" type=\"email\" name=\"\"  value=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md padding-small\">
                    <textarea placeholder=\"Your Message\" name=\"\" rows=\"8\" class=\"margin-bottom-small\"></textarea>
                    <input type=\"submit\" value=\"Submit\">
                </div>
            </div>
        </form>
    </div>
</section>
</main>
</div>
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md center-xs\">
                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/logo-footer.svg\" class=\"margin-bottom\" style=\"max-width: 150px;\">
            </div>
        </div>
        <div class=\"row margin-bottom-small\">
            <div class=\"col-md-8\">
                <h3>About us</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-md-4\">
                <h3>Links</h3>
                <ul>
                    <li><a href=\"#home\">Home</a></li>
                    <li><a href=\"#about-us\">About us</a></li>
                    <li><a href=\"#services\">Services</a></li>
                    <li><a href=\"#portfolio\">Portfolio</a></li>
                    <li><a href=\"#why-us\">Why us</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md \">
                <p>Follow me on <a href=\"https://twitter.com/lautenschlagera\" target=\"_blank\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: #38A1F3;\">
                            <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\"></path>
                        </svg></a></p>
                <p>Template created for free commercial use by Andreas Lautenschlager.</p>
                <p>More free downloads under <a href=\"https://lautenschlager.de\" target=\"_blank\" rel=\"noopener\">lautenschlager.de</a></p>
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\" target=\"_blank\"><img alt=\"Creative Commons License\" style=\"border-width:0; max-width: 60px;\" src=\"https://i.creativecommons.org/l/by/4.0/88x31.png\"></a><br>This work is licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\" target=\"_blank\">Creative Commons Attribution 4.0 International License</a>.
                <p>I thank following people for their contribution: <a href=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/credits.txt\">Credits</a>.</p>
            </div>

        </div>
    </div>
</footer>
{% endblock %}", "footer.html.twig", "/var/www/html/templates/footer.html.twig");
    }
}
