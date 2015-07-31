<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_439cb243a83a99df7d4af6004f08f3e9e95c6fd7919dd2b548e3f84a136cc436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 5
            echo "        <div class=\"container\">
            <h1>Ajouter un nouvelle utilisateur</h1><br>
            <div class=\"well form-block\">
                ";
            // line 8
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 11
            echo "            </div>
        </div>
    ";
        } else {
            // line 14
            echo "        <div class=\"jumbotron\">
            <h1>Droit Insuffisant</h1>
            <p>Vous devez être un administrateur pour pouvoir rajouter un compte sur l'application.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("oc_epi_index");
            echo "\">Retourner à l'accueil</a></p>
        </div>
    ";
        }
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "                    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
        // line 10
        echo "                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  63 => 9,  60 => 8,  52 => 17,  47 => 14,  42 => 11,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
