<?php

/* WebSiteBundle::index.html.twig */
class __TwigTemplate_785733f0fd8df9646ee1e12003ca4f5a6e8ca953ad4c0585e3b3f4cbbf70dc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::base.html.twig", "WebSiteBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebSiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Accueil
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    <div class=\"row\" xmlns=\"http://www.w3.org/1999/html\">
            <div class=\"box\">
                <div class=\"col-lg-12 text-center\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                    <h2 class=\"brand-before\">
                        <small>
                            <strong>
                                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oc.bienvenue", array(), "index"), "html", null, true);
        echo "
                            </strong>
                        </small>
                    </h2>
                    <h1 class=\"brand-name\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oc.hauteur", array(), "index"), "html", null, true);
        echo " !</h1>
                    <hr class=\"tagline-divider\">
                    <h2>
                        <small>
                            <strong>OC'AVENTURES</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
                        ";
        // line 62
        echo $this->env->getExtension('translator')->trans("nos.parcours", array(), "index");
        echo "
                    </h2>
                    <hr>
                        <img class=\"img-responsive img-border img-left\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/hauteur.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <div class=\"row\">
                        <p> <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("accroche.nos.parcours", array(), "index"), "html", null, true);
        echo "</strong></p>
                        <p> <a href=\"#\"><h4 class=\"souligner\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("parcours.adulte", array(), "index"), "html", null, true);
        echo "</h4></a>
                            ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("parcours.adulte.desc", array(), "index"), "html", null, true);
        echo "</p>
                        <p>
                            <a href=\"#\"><h4 class=\"souligner\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("parcours.enfant", array(), "index"), "html", null, true);
        echo "</h4></a>
                            ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("parcours.enfant.desc", array(), "index"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
                        ";
        // line 85
        echo $this->env->getExtension('translator')->trans("confort.title", array(), "index");
        echo "
                    </h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/accueil.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"row\">
                        <p>- ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confort.terrasse", array(), "index"), "html", null, true);
        echo "</p>
                        <p>- ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confort.pique.nique", array(), "index"), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "WebSiteBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 91,  169 => 90,  164 => 88,  158 => 85,  143 => 73,  139 => 72,  134 => 70,  130 => 69,  126 => 68,  120 => 65,  114 => 62,  95 => 46,  88 => 42,  70 => 27,  64 => 24,  58 => 21,  42 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
