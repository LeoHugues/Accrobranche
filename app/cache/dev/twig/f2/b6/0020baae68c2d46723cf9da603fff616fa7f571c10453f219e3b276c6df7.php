<?php

/* ::base.html.twig */
class __TwigTemplate_f2b60020baae68c2d46723cf9da603fff616fa7f571c10453f219e3b276c6df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
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
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "        <style>
            ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        </style>
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        </div>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  75 => 13,  70 => 8,  65 => 6,  60 => 5,  54 => 16,  52 => 15,  49 => 14,  47 => 13,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
