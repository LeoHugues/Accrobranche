<?php

/* OCEPIBundle:Default:pagination.html.twig */
class __TwigTemplate_f7ae322847329932405c1637a3c6f593654ebeda2d88a150b24bb96e20e32782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"pagination pagination-lg\">
    ";
        // line 2
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 3
            echo "    <li>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 5
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => 1, "id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array())))), "html", null, true);
            echo "\"><<</a>
    </li>
    <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 9
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array())))), "html", null, true);
            echo "\"><</a>
    </li>
    ";
        }
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(        // line 14
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 15
            echo "        <li ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) == $context["p"])) {
                echo "class=\"active\"";
            }
            echo ">
            <a";
            // line 16
            if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                echo " class=\"current-page\"";
            }
            // line 17
            echo "                    href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 18
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $context["p"], "id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))) {
            // line 22
            echo "        <li>
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 24
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array())))), "html", null, true);
            echo "\">></a>
        </li>
        <li>
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 28
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()), "id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array())))), "html", null, true);
            echo "\">>></a>
        </li>
    ";
        }
        // line 31
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "OCEPIBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  87 => 28,  86 => 27,  80 => 24,  79 => 23,  76 => 22,  73 => 21,  62 => 18,  60 => 17,  56 => 16,  49 => 15,  46 => 14,  43 => 13,  41 => 12,  35 => 9,  34 => 8,  28 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
