<?php

/* ::base.html.twig */
class __TwigTemplate_b3022717b94e6c36ba6ee443ac917a2237966b14844a4e731ed35de71c307ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link type=\"text/css\" rel=\"stylesheet\" href = ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./themeBootstrap.css"), "html", null, true);
        echo "/>
        <style>
            ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        </style>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 15
        if ((twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null))) {
            // line 16
            echo "                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Connection obligatoire</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>Vous devez vous autentifier pour pouvoir accéder à cette page.</p>
                        <label><a class=\"btn btn-primary btn-lg\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" role=\"button\">Se connecter</a></label>
                    </div>
                </div>
            ";
        } else {
            // line 26
            echo "            <div class=\"navbar navbar-default navbar-fixed-top\">
                    <div class=\"container\">
                        <div class=\"navbar-header pull-left\">
                            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("oc_epi_index");
            echo "\" target=\"_top\" class=\"navbar-brand\">OC'Aventures - Web Application pour les EPI</a>
                        </div>

                        <ul class=\"nav navbar-nav pull-right\">
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion fiche de vie <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                                    <li><a href=\"#\">Ajouter une fiche de vie</a></li>
                                    <li><a href=\"#\">Gérer les fiches de vie</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion équipement <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                                    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("oc_epi_insert_equipement");
            echo "\">Ajouter un équipement</a></li>
                                    <li><a href=\"#\">Gérer les équipements</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Utilisateur <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                                    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Ajouter un compte</a></li>
                                    <li><a href=\"#\">Gérer mes comptes</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <p class=\"btn-logout\"><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default btn-md\" role=\"button\">Déconnection</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                    ";
            // line 60
            $this->displayBlock('body', $context, $blocks);
            // line 61
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./jquery-1.11.3.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bootstrap/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
                    ";
            // line 63
            $this->displayBlock('javascripts', $context, $blocks);
            // line 64
            echo "            ";
        }
        // line 65
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 63,  150 => 60,  145 => 8,  139 => 5,  132 => 65,  129 => 64,  127 => 63,  123 => 62,  118 => 61,  116 => 60,  108 => 55,  100 => 50,  90 => 43,  73 => 29,  68 => 26,  61 => 22,  53 => 16,  51 => 15,  44 => 11,  40 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }
}
