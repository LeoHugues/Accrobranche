<?php

/* :default:index.html.twig */
class __TwigTemplate_6ed2d2eb7d6f477fee2c70ed572248631c2fb07542f2a21b019f007ac25020b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    Homepage.
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }
}
