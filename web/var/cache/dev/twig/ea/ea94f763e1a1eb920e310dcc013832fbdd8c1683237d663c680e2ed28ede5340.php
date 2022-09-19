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

/* Homepage/default.html.twig */
class __TwigTemplate_3759357ac7d349189b91fd846ba13473eb248936bb77512fabf49330c1c985ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layoutName"]) || array_key_exists("layoutName", $context) ? $context["layoutName"] : (function () { throw new RuntimeError('Variable "layoutName" does not exist.', 1, $this->source); })()), "Homepage/default.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage/default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage/default.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!DOCTYPE html>
    <html lang=\"de-DE\" prefix=\"og: http://ogp.me/ns#\">
    <meta charset=\"UTF-8\">
    <title>BeBlack - A creative OnePager free to use | wwww.lautenschlager.de</title>
    <meta name=\"description\" content=\"BeBlack is short for beautiful black. A creative OnePager free to use. Created by www.lautenschlager.de\">
    <link rel=\"author\" href=\"https://lautenschlager.de\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "/img/favicon.png\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/css/normalize.min.css\" media=\"all\" />
    <link href=\"https://fonts.googleapis.com/css?family=Raleway&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "/css/flexboxgrid.css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "/css/theme.css\" media=\"all\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    </head>
    <body>
    <header class=\"fade-in\">
        <div class=\"navigation-bar flex middle-xs\">
            <img src=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "/img/logo.svg\" class=\"logo\">
            <nav class=\"end-xs\">
                <ul>
                    <li><a href=\"#about-us\">About us</a></li>
                    <li><a href=\"#services\">Services</a></li>
                    <li><a href=\"#portfolio\">Portfolio</a></li>
                    <li><a href=\"#benefits\">Benefits</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class=\"hero flex middle-xs\" style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "/img/hero-image.jpg');
                }\">
            <div class=\"hero-text \">
                <h1>BeBlack</h1>
                <p>Short for beautiful black. A creative OnePager free to use.</p>
            </div>
        </div>
    </header>
    <div class=\"wrapper\">
        <main>
            <section class=\"intro\" id=\"about-us\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md\">
                            <h2 class=\"section-title\">About text</h2>
                        </div>
                    </div>
                    <div class=\"row margin-bottom \">
                        <div class=\"col-md\">
                            <p class=\"highlight\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p class=\"author\">- John Doe</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                    <div class=\"row team center-xs\">
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "/img/Romi-Kobe.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Romi Kobe</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Romi Kobe<br/><span class=\"position\">CEO</span></p>
                        </div>
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "/img/Isaac-Desideria.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Isaac Desideria</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Isaac Desideria<br/><span class=\"position\">CTO</span></p>
                        </div>
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "/img/Magda-Ilija.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Magda Ilija</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Magda Ilija<br/><span class=\"position\">CFO</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <hr/>
            <section class=\"services\" id=\"services\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 center-xs\">
                            <h2 class=\"section-title\">Services</h2>
                        </div>
                    </div>
                    <div class=\"row icon-row\">
                        <div class=\"col-xs center-xs\">
                            <img src=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon\"><br/>
                            Service 1
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\"><br/>
                            Service 2
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\"><br/>
                            Service 3
                        </div>
                    </div>
                    <div class=\"row icon-row\">
                        <div class=\"col-xs center-xs\">
                            <img src=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\"><br/>
                            Service 4
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "/img/005-fountain-pen.svg\" class=\"icon\"><br/>
                            Service 5
                        </div>
                    </div>
                    <div class=\"row margin-bottom \">
                        <div class=\"col-md\">
                            <p class=\"highlight\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p class=\"author\">- John Doe</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"cta middle-xs\">
                <div class=\"container\">
                    <div class=\"row middle-md\">
                        <div class=\"col-md-8\">
                            <h2>Call to Action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                            <a href=\"\"><button class=\"light\">Call to action</button></a>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "/img/cta-display.png\" class=\"display\">
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"portfolio\" id=\"portfolio\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <h2 class=\"section-title\">Portfolio</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                    </div>
                </div>
                <div class=\"padding-small\">
                    <div class=\"row margin-bottom-small\">
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "/img/project-1.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "/img/project-2.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "/img/project-3.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row margin-bottom-small\">
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 214, $this->source); })()), "html", null, true);
        echo "/img/project-4.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "/img/project-5.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 238, $this->source); })()), "html", null, true);
        echo "/img/project-6.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class=\"cta\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <h2>Call to action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href=\"\"><button class=\"light\">Call to action</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"blurbs\" id=\"benefits\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md center-xs\">
                            <h2 class=\"section-title\">Benefits</h2>
                        </div>
                    </div>
                    <div class=\"row margin-bottom-small center-xs\">
                        <div class=\"col-md\">
                            <img src=\"";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 270, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon \">
                            <h3>Benefit 1</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 275, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\">
                            <h3>Benefit 2</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 280, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\">
                            <h3>Benefit 3</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <img src=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\">
                            <h3>Benefit 4</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 292, $this->source); })()), "html", null, true);
        echo "/img/005-fountain-pen.svg\" class=\"icon\">
                            <h3>Benefit 5</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"newsletter\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md \">
                            <h2>Our newsletter</h2>
                            <form class=\"flex center-xs\">
                                <input placeholder=\"Enter Your Email\" type=\"email\" required=\"\" name=\"\">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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
                    <img src=\"";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 349, $this->source); })()), "html", null, true);
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
        // line 377
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 377, $this->source); })()), "html", null, true);
        echo "/credits.txt\">Credits</a>.</p>
                </div>

            </div>
        </div>
    </footer>

    <div class=\"row secondary-footer\">
        <div class=\"col-md\">
            <p>Made with love ♥ by Andreas Lautenschlager © 2019.</p>
        </div>
        <div class=\"col-md end-md\">
            <p><a href=\"#\">Imprint</a> | <a href=\"#\">Data Protection</a></p>
        </div>
    </div>
    <script src=\"https://cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsAreLoaded\" defer></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"";
        // line 394
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 394, $this->source); })()), "html", null, true);
        echo "/js/script.js\" defer></script>
    </body>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 399
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 400
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Homepage/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 400,  632 => 399,  616 => 394,  594 => 377,  561 => 349,  499 => 292,  489 => 287,  477 => 280,  467 => 275,  457 => 270,  420 => 238,  403 => 226,  386 => 214,  367 => 200,  350 => 188,  333 => 176,  310 => 158,  278 => 131,  269 => 127,  258 => 121,  249 => 117,  240 => 113,  216 => 94,  206 => 89,  193 => 81,  183 => 76,  170 => 68,  160 => 63,  123 => 31,  107 => 20,  96 => 14,  90 => 13,  83 => 11,  77 => 10,  69 => 4,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends layoutName %}

{% block body %}
    <!DOCTYPE html>
    <html lang=\"de-DE\" prefix=\"og: http://ogp.me/ns#\">
    <meta charset=\"UTF-8\">
    <title>BeBlack - A creative OnePager free to use | wwww.lautenschlager.de</title>
    <meta name=\"description\" content=\"BeBlack is short for beautiful black. A creative OnePager free to use. Created by www.lautenschlager.de\">
    <link rel=\"author\" href=\"https://lautenschlager.de\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/favicon.png\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/css/normalize.min.css\" media=\"all\" />
    <link href=\"https://fonts.googleapis.com/css?family=Raleway&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/css/flexboxgrid.css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/css/theme.css\" media=\"all\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    </head>
    <body>
    <header class=\"fade-in\">
        <div class=\"navigation-bar flex middle-xs\">
            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/logo.svg\" class=\"logo\">
            <nav class=\"end-xs\">
                <ul>
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
    <div class=\"wrapper\">
        <main>
            <section class=\"intro\" id=\"about-us\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md\">
                            <h2 class=\"section-title\">About text</h2>
                        </div>
                    </div>
                    <div class=\"row margin-bottom \">
                        <div class=\"col-md\">
                            <p class=\"highlight\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p class=\"author\">- John Doe</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                    <div class=\"row team center-xs\">
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/Romi-Kobe.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Romi Kobe</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Romi Kobe<br/><span class=\"position\">CEO</span></p>
                        </div>
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/Isaac-Desideria.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Isaac Desideria</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Isaac Desideria<br/><span class=\"position\">CTO</span></p>
                        </div>
                        <div class=\"col-md\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/Magda-Ilija.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Magda Ilija</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"img/twitter-icon.svg\" class=\"team-icon\"></a>
                                    </div>
                                </div>
                            </div>
                            <p class=\"team-name\">Magda Ilija<br/><span class=\"position\">CFO</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <hr/>
            <section class=\"services\" id=\"services\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 center-xs\">
                            <h2 class=\"section-title\">Services</h2>
                        </div>
                    </div>
                    <div class=\"row icon-row\">
                        <div class=\"col-xs center-xs\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/001-achievement.svg\" class=\"icon\"><br/>
                            Service 1
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/002-pencil.svg\" class=\"icon\"><br/>
                            Service 2
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/003-idea.svg\" class=\"icon\"><br/>
                            Service 3
                        </div>
                    </div>
                    <div class=\"row icon-row\">
                        <div class=\"col-xs center-xs\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/004-shopping-bag.svg\" class=\"icon\"><br/>
                            Service 4
                        </div>
                        <div class=\"col-xs center-xs\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/005-fountain-pen.svg\" class=\"icon\"><br/>
                            Service 5
                        </div>
                    </div>
                    <div class=\"row margin-bottom \">
                        <div class=\"col-md\">
                            <p class=\"highlight\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p class=\"author\">- John Doe</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <div class=\"col-md\">
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"cta middle-xs\">
                <div class=\"container\">
                    <div class=\"row middle-md\">
                        <div class=\"col-md-8\">
                            <h2>Call to Action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                            <a href=\"\"><button class=\"light\">Call to action</button></a>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/cta-display.png\" class=\"display\">
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"portfolio\" id=\"portfolio\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <h2 class=\"section-title\">Portfolio</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                    </div>
                </div>
                <div class=\"padding-small\">
                    <div class=\"row margin-bottom-small\">
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-1.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-2.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-3.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row margin-bottom-small\">
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-4.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-5.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"hover-outer-box\">
                                <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/project-6.jpg\">
                                <div class=\"hover-inner-box\">
                                    <div class=\"hover-content\">
                                        <h3>Projecttitle</h3>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                        <a href=\"\"><button class=\"light\">Call to action</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class=\"cta\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <h2>Call to action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href=\"\"><button class=\"light\">Call to action</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"blurbs\" id=\"benefits\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md center-xs\">
                            <h2 class=\"section-title\">Benefits</h2>
                        </div>
                    </div>
                    <div class=\"row margin-bottom-small center-xs\">
                        <div class=\"col-md\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/001-achievement.svg\" class=\"icon \">
                            <h3>Benefit 1</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/002-pencil.svg\" class=\"icon\">
                            <h3>Benefit 2</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/003-idea.svg\" class=\"icon\">
                            <h3>Benefit 3</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                    <div class=\"row center-xs\">
                        <div class=\"col-md\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/004-shopping-bag.svg\" class=\"icon\">
                            <h3>Benefit 4</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class=\"col-md\">
                            <img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/005-fountain-pen.svg\" class=\"icon\">
                            <h3>Benefit 5</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"newsletter\">
                <div class=\"container\">
                    <div class=\"row center-xs\">
                        <div class=\"col-md \">
                            <h2>Our newsletter</h2>
                            <form class=\"flex center-xs\">
                                <input placeholder=\"Enter Your Email\" type=\"email\" required=\"\" name=\"\">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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

    <div class=\"row secondary-footer\">
        <div class=\"col-md\">
            <p>Made with love ♥ by Andreas Lautenschlager © 2019.</p>
        </div>
        <div class=\"col-md end-md\">
            <p><a href=\"#\">Imprint</a> | <a href=\"#\">Data Protection</a></p>
        </div>
    </div>
    <script src=\"https://cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsAreLoaded\" defer></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/js/script.js\" defer></script>
    </body>
    </html>
{% endblock %}

{% block stylesheets %}{% endblock %}
{% block javascripts %}{% endblock %}



", "Homepage/default.html.twig", "/var/www/html/templates/Homepage/default.html.twig");
    }
}
