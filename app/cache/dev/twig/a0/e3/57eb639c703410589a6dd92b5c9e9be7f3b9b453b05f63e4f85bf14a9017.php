<?php

/* WebSiteBundle::blog.html.twig */
class __TwigTemplate_a0e357eb639c703410589a6dd92b5c9e9be7f3b9b453b05f63e4f85bf14a9017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::base.html.twig", "WebSiteBundle::blog.html.twig", 1);
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
        echo "        Horaires et dates d'ouverture
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Company
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./front/images/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <ul class=\"pager\">
                        <li class=\"previous\"><a href=\"#\">&larr; Older</a>
                        </li>
                        <li class=\"next\"><a href=\"#\">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "WebSiteBundle::blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  65 => 26,  52 => 16,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
