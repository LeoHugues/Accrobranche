<?php

/* OCEPIBundle::base.html.twig */
class __TwigTemplate_ef79b0a18f291a7c5bcc9edf2c19d2d7f214a985f21ff08f471ab05c0e072814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCEPIBundle::base.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href = ";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./themeBootstrap.css"), "html", null, true);
        echo "/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null))) {
            // line 8
            echo "        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Connection obligatoire</h3>
            </div>
            <div class=\"panel-body\">
                <p>Vous devez vous autentifier pour pouvoir accéder à cette page.</p>
                <label><a class=\"btn btn-primary btn-lg\" href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" role=\"button\">Se connecter</a></label>
            </div>
        </div>
    ";
        } else {
            // line 18
            echo "    <div class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header pull-left\">
                    <a href=\"";
            // line 21
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
            // line 35
            echo $this->env->getExtension('routing')->getPath("oc_epi_insert_equipement");
            echo "\">Ajouter un équipement</a></li>
                            <li><a href=\"#\">Gérer les équipements</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Utilisateur <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"download\">
                            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Ajouter un compte</a></li>
                            <li><a href=\"#\">Gérer mes comptes</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <p class=\"btn-logout\"><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default btn-md\" role=\"button\">Déconnection</a></p>
                    </li>
                </ul>
            </div>
        </div>
        ";
            // line 52
            $this->displayBlock('content', $context, $blocks);
            // line 53
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./jquery-1.11.3.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bootstrap/js/bootstrap.js"), "html", null, true);
            echo "\"></script>
    ";
        }
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OCEPIBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  120 => 54,  115 => 53,  113 => 52,  105 => 47,  97 => 42,  87 => 35,  70 => 21,  65 => 18,  58 => 14,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
