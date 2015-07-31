<?php

/* OCEPIBundle:Success:insertFicheSucces.html.twig */
class __TwigTemplate_6874c364e4b7224d27ce7634a7ec3ab7beb4457dffb38a6c42a208e081d5fe7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCEPIBundle::base.html.twig", "OCEPIBundle:Success:insertFicheSucces.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCEPIBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"bs-component\" data-relatedvars=\"jumbotron-padding,jumbotron-color,jumbotron-bg,jumbotron-heading-color,jumbotron-font-size\">
        <div class=\"jumbotron\">
            <h1>Ajout réussi ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " !</h1>
            <p>La nouvelle fiche de vie a bien était enregistré .</p>
            <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("oc_epi_index");
        echo "\" class=\"btn btn-primary btn-lg\">Accueil</a></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OCEPIBundle:Success:insertFicheSucces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
