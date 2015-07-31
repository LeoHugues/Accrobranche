<?php

/* WebSiteBundle::base.html.twig */
class __TwigTemplate_870c50fcdeaf406d69e19d1965694be6b277fe9801fd6ad7c7e26d237f98025e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WebSiteBundle::base.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <style>
        body {
            background: url('";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/bg.jpg"), "html", null, true);
        echo "') no-repeat center center fixed;
        }
    </style>
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/css/business-casual.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        // line 35
        echo "    <div class=\"brand\">
        <img class=\"img-responsive center-block\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/font-accrobranche.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class=\"navbar-brand intro-text\" href=\"index.html.twig\"><strong>OC'AVENRURES</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("website_index", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("accueil", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("website_parcours", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("parcours", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("website_horaires", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("horaires.dates", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"contact.html.twig\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tarifs", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"contact.html.twig\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("plan", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("website_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                    <li>
                        <a href=\"contact.html.twig\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("liens", array(), "header"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    ";
        // line 95
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        // line 83
        echo "    ";
    }

    // line 95
    public function block_javascript($context, array $blocks = array())
    {
        // line 96
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function() {
                jQuery('.carousel').carousel({
                    interval: 5000 //changes the speed
                })
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "WebSiteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 99,  192 => 97,  189 => 96,  186 => 95,  182 => 83,  179 => 82,  175 => 95,  162 => 84,  160 => 82,  149 => 74,  141 => 71,  135 => 68,  129 => 65,  121 => 62,  113 => 59,  105 => 56,  82 => 36,  79 => 35,  77 => 34,  74 => 33,  57 => 19,  51 => 16,  44 => 12,  34 => 4,  31 => 3,  11 => 1,);
    }
}
