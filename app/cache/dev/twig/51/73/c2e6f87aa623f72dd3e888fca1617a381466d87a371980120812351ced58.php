<?php

/* WebSiteBundle::contact.html.twig */
class __TwigTemplate_5173c2e6f87aa623f72dd3e888fca1617a381466d87a371980120812351ced58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebSiteBundle::base.html.twig", "WebSiteBundle::contact.html.twig", 1);
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
        echo "        Accueil
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"box\">
            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">Contact
                    <strong>business casual</strong>
                </h2>
                <hr>
            </div>
            <div class=\"col-md-8\">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width=\"100%\" height=\"400\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed\"></iframe>
            </div>
            <div class=\"col-md-4\">
                <p>Phone:
                    <strong>123.456.7890</strong>
                </p>
                <p>Email:
                    <strong><a href=\"mailto:name@example.com\">name@example.com</a></strong>
                </p>
                <p>Address:
                    <strong>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</strong>
                </p>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"box\">
            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">Contact
                    <strong>form</strong>
                </h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                <form role=\"form\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-4\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-lg-4\">
                            <label>Email Address</label>
                            <input type=\"email\" class=\"form-control\">
                        </div>
                        <div class=\"form-group col-lg-4\">
                            <label>Phone Number</label>
                            <input type=\"tel\" class=\"form-control\">
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"form-group col-lg-12\">
                            <label>Message</label>
                            <textarea class=\"form-control\" rows=\"6\"></textarea>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <input type=\"hidden\" name=\"save\" value=\"contact\">
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebSiteBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
