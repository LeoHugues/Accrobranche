<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d7461d39f7e06534120ff4203e708846eeae67e3aea834ed548a9f0703af25f4 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Connection</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo "./themeBootstrap.css";
        echo "\" />
    </head>

    <body>
    <div class=\"container\">
        <h1>Connection à l'application de getion des EPI</h1><br>
        <div class=\"well form-block\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-9\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-9\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-2\">

                    </div>
                    <div class=\"col-sm-offset-2 col-sm-9\">
                        <div class=\"checkbox\">
                            <label class=\"col-sm-2 control-label\" for=\"remember_me\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_target_path\" value=\"oc_epi_index\" />

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Connexion</button>
                    </div>
                </div>

                ";
        // line 54
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 55
            echo "                    <div class=\"alert alert-dismissable alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 57
        echo "
            </form>
        </div>
    </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 57,  99 => 55,  97 => 54,  90 => 50,  77 => 40,  60 => 26,  52 => 21,  47 => 19,  41 => 16,  36 => 14,  26 => 7,  19 => 2,);
    }
}
