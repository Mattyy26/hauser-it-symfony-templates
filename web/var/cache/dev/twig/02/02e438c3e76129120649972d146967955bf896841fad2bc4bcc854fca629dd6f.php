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

/* ollie.html.twig */
class __TwigTemplate_cac067a57776c92109ffb452f2d1d047ea7b00abb81aeb343f9f807b815ccbfa extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ollie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ollie.html.twig"));

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
";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "<body>
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
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "/img/Romi-Kobe.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Romi Kobe</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "/img/twitter-icon.svg\" class=\"team-icon\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"team-name\">Romi Kobe<br/><span class=\"position\">CEO</span></p>
                    </div>
                    <div class=\"col-md\">
                        <div class=\"hover-outer-box\">
                            <img src=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "/img/Isaac-Desideria.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Isaac Desideria</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "/img/twitter-icon.svg\" class=\"team-icon\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"team-name\">Isaac Desideria<br/><span class=\"position\">CTO</span></p>
                    </div>
                    <div class=\"col-md\">
                        <div class=\"hover-outer-box\">
                            <img src=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "/img/Magda-Ilija.jpg\">
                            <div class=\"hover-inner-box\">
                                <div class=\"hover-content\">
                                    <h3>Magda Ilija</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "/img/facebook-icon.svg\" class=\"team-icon\"></a> <a href=\"#!\" target=\"blank\" rel=\"noopener\"><img src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 73, $this->source); })()), "html", null, true);
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
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon\"><br/>
                        Service 1
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\"><br/>
                        Service 2
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\"><br/>
                        Service 3
                    </div>
                </div>
                <div class=\"row icon-row\">
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\"><br/>
                        Service 4
                    </div>
                    <div class=\"col-xs center-xs\">
                        <img src=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 110, $this->source); })()), "html", null, true);
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
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 137, $this->source); })()), "html", null, true);
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
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 155, $this->source); })()), "html", null, true);
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
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 167, $this->source); })()), "html", null, true);
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
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 179, $this->source); })()), "html", null, true);
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
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 193, $this->source); })()), "html", null, true);
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
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 205, $this->source); })()), "html", null, true);
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
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 217, $this->source); })()), "html", null, true);
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
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 249, $this->source); })()), "html", null, true);
        echo "/img/001-achievement.svg\" class=\"icon \">
                        <h3>Benefit 1</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 254, $this->source); })()), "html", null, true);
        echo "/img/002-pencil.svg\" class=\"icon\">
                        <h3>Benefit 2</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 259
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 259, $this->source); })()), "html", null, true);
        echo "/img/003-idea.svg\" class=\"icon\">
                        <h3>Benefit 3</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                </div>
                <div class=\"row center-xs\">
                    <div class=\"col-md\">
                        <img src=\"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 266, $this->source); })()), "html", null, true);
        echo "/img/004-shopping-bag.svg\" class=\"icon\">
                        <h3>Benefit 4</h3>
                        <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                    </div>
                    <div class=\"col-md\">
                        <img src=\"";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 271, $this->source); })()), "html", null, true);
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
        ";
        // line 291
        $this->displayBlock('footer', $context, $blocks);
        // line 294
        echo "        <div class=\"row secondary-footer\">
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
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 304, $this->source); })()), "html", null, true);
        echo "/js/script.js\" defer></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "    ";
        $this->loadTemplate("header.html.twig", "ollie.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 292
        echo "            ";
        $this->loadTemplate("footer.html.twig", "ollie.html.twig", 292)->display($context);
        // line 293
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ollie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 293,  545 => 292,  535 => 291,  524 => 15,  514 => 14,  499 => 304,  487 => 294,  485 => 291,  460 => 271,  450 => 266,  438 => 259,  428 => 254,  418 => 249,  381 => 217,  364 => 205,  347 => 193,  328 => 179,  311 => 167,  294 => 155,  271 => 137,  239 => 110,  230 => 106,  219 => 100,  210 => 96,  201 => 92,  173 => 73,  163 => 68,  146 => 60,  136 => 55,  119 => 47,  109 => 42,  82 => 17,  80 => 14,  72 => 11,  66 => 10,  59 => 8,  53 => 7,  45 => 1,);
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
{% block header %}
    {% include \"header.html.twig\" %}
{% endblock %}
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
        {% block footer %}
            {% include \"footer.html.twig\" %}
        {% endblock %}
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
</html>", "ollie.html.twig", "/var/www/html/templates/ollie.html.twig");
    }
}
