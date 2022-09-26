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

/* base.html.twig */
class __TwigTemplate_60d60682181caaec1fff0d92644487e7f3738db0127ff1d988389d19b8065c9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de-DE\" prefix=\"og: http://ogp.me/ns#\">
<meta charset=\"UTF-8\">
<title>BeBlack - A creative OnePager free to use | wwww.lautenschlager.de</title>
<meta name=\"description\" content=\"BeBlack is short for beautiful black. A creative OnePager free to use. Created by www.lautenschlager.de\">
<link rel=\"author\" href=\"https://lautenschlager.de\" />
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "/img/favicon.png\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "/css/normalize.min.css\" media=\"all\" />
<link href=\"https://fonts.googleapis.com/css?family=Raleway&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "/css/flexboxgrid.css\" media=\"all\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/css/theme.css\" media=\"all\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
</head>
<body>
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
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "/img/Romi-Kobe.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Romi Kobe</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "/img/twitter-icon.svg\" class=\"team-icon\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"team-name\">Romi Kobe<br/><span class=\"position\">CEO</span></p>
                    </div>
                    <div class=\"col-md\">
                        <div class=\"hover-outer-box\">
                            <img src=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "/img/Isaac-Desideria.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Isaac Desideria</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "/img/twitter-icon.svg\" class=\"team-icon\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"team-name\">Isaac Desideria<br/><span class=\"position\">CTO</span></p>
                    </div>
                    <div class=\"col-md\">
                        <div class=\"hover-outer-box\">
                            <img src=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "/img/Magda-Ilija.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Magda Ilija</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "/img/twitter-icon.svg\" class=\"team-icon\"></a>
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
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon\"><br/>
                        Service 1
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\"><br/>
                        Service 2
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\"><br/>
                        Service 3
                    </div>
                </div>
                <div class=\"row icon-row\">
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\"><br/>
                        Service 4
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 107, $this->source); })()), "html", null, true);
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
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 134, $this->source); })()), "html", null, true);
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
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 152, $this->source); })()), "html", null, true);
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
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 164, $this->source); })()), "html", null, true);
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
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 176, $this->source); })()), "html", null, true);
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
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 190, $this->source); })()), "html", null, true);
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
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 202, $this->source); })()), "html", null, true);
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
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 214, $this->source); })()), "html", null, true);
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
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 246, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon \">
                        <h3>Benefit 1</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 251, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\">
                        <h3>Benefit 2</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 256, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\">
                        <h3>Benefit 3</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                </div>
                <div class=\"row center-xs\">
                    <div class=\"col-md\">
                        <img src=\"";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 263, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\">
                        <h3>Benefit 4</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 268, $this->source); })()), "html", null, true);
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
        // line 298
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "/js/script.js\" defer></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 298,  454 => 268,  444 => 263,  432 => 256,  422 => 251,  412 => 246,  375 => 214,  358 => 202,  341 => 190,  322 => 176,  305 => 164,  288 => 152,  265 => 134,  233 => 107,  224 => 103,  213 => 97,  204 => 93,  195 => 89,  167 => 70,  157 => 65,  140 => 57,  130 => 52,  113 => 44,  103 => 39,  70 => 11,  64 => 10,  57 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/twitter-icon.svg\" class=\"team-icon\"></a>
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
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/twitter-icon.svg\" class=\"team-icon\"></a>
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
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"{{ url(\"homepage_default\") }}layouts/{{ layout }}/img/twitter-icon.svg\" class=\"team-icon\"></a>
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
</html>", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
