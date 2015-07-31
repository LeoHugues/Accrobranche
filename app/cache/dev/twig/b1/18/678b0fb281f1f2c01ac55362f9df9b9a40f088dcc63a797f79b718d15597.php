<?php

/* WebSiteBundle::about.html.twig */
class __TwigTemplate_b118678b0fb281f1f2c01ac55362f9df9b9a40f088dcc63a797f79b718d15597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::base.html.twig", "WebSiteBundle::about.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"box\">
            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">About
                    <strong>business casual</strong>
                </h2>
                <hr>
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive img-border-left\" src=\"img/slide-2.jpg\" alt=\"\">
            </div>
            <div class=\"col-md-6\">
                <p>This is a great place to introduce your company or project and describe what you do.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"box\">
            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">Our
                    <strong>Team</strong>
                </h2>
                <hr>
            </div>
            <div class=\"col-sm-4 text-center\">
                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class=\"col-sm-4 text-center\">
                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class=\"col-sm-4 text-center\">
                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "WebSiteBundle::about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
