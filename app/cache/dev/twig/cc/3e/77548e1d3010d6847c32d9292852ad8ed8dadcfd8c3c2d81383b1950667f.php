<?php

/* OCEPIBundle:Default:index.html.twig */
class __TwigTemplate_cc3e77548e1d3010d6847c32d9292852ad8ed8dadcfd8c3c2d81383b1950667f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCEPIBundle::base.html.twig", "OCEPIBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "        <div class=\"alert alert-dismissable alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <h4>Attention !</h4>
            <p>
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"alert alert-dismissable alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <h1>Page de gestion des EPI</h1><br>
    <div class=\"well col-lg-12 container\">
        <div class=\"row row-centered\">
            <div class=\"col-xs-5 pull-left col-centered\">
                <h2 id=\"nav-tabs\">Fiches de vies : Les derniers contrôles</h2>
            </div>
            <div class=\"col-xs-6 pull-right text-right col-centered\">
                <h3 class=\"col-xs-10 text-right\">Nouvelle fiche de vie : </h3>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("oc_epi_insert_ficheDeVie");
        echo "\">
                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg pull-right\"></span>
                </a>
            </div>
        </div>
        <div class=\"bs-componentr\">
            <ul class=\"nav nav-tabs\">
                ";
        // line 35
        $context["first"] = true;
        // line 36
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 37
            echo "                    <li ";
            if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) {
                echo "class= \"active\"";
            }
            echo ">
                        <a href=\"#";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\" aria-expanded=\"true\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["fiche"], "modele", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "fabriquant", array()), "html", null, true);
            echo "
                            <span class=\"badge\">";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    ";
            // line 43
            $context["first"] = false;
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </ul>
            <div id=\"myTabContent\" class=\"tab-content\">
                ";
        // line 47
        $context["first"] = true;
        // line 48
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 49
            echo "                    <div class=\"tab-pane fade ";
            if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) {
                echo "active in";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 50
            $context["first"] = false;
            // line 51
            echo "                        <table class=\"table table-striped\">
                            ";
            // line 52
            if (((twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())) != null))) {
                // line 53
                echo "                            <thead>
                            <tr>
                                <th>Num interne</th>
                                <th>Num série</th>
                                <th>Sangles</th>
                                <th>Coutures</th>
                                <th>Marquages</th>
                                <th>Longes</th>
                                <th>Mousquetons</th>
                                <th>Date</th>
                                <th>Remarque</th>
                                <th>Gestion equipement</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fiche"], "equipements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
                    // line 69
                    echo "                                    <tr>
                                        <td>";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numInterne", array()), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numSerie", array()), "html", null, true);
                    echo "</td>
                                        ";
                    // line 72
                    if (((twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) != null))) {
                        // line 73
                        echo "                                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["equipement"], "controles", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["controle"]) {
                            // line 74
                            echo "                                                <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "sangle", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 75
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "couture", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "marquage", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 77
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "longes", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "mousqueton", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 79
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["controle"], "dateControle", array()), "d/m/Y"), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "remarque", array()), "html", null, true);
                            echo "</td>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['controle'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                                        ";
                    } else {
                        // line 83
                        echo "                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                        ";
                    }
                    // line 91
                    echo "                                        <td>
                                            <div class=\"row-centered\">
                                                <div class=\"col-centered\">
                                                    <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_gestion_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                    echo "\">
                                                        <span class=\"glyphicon glyphicon-eye-open btn btn-primary btn-xs\"></span>
                                                    </a>
                                                </div>
                                                <div class=\"col-centered\">
                                                    <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                    echo "\">
                                                        <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-xs\"></span>
                                                    </a>
                                                </div>
                                                <div class=\"col-centered\">
                                                    <a data-toggle=\"modal\" data-target=\"#myModal\">
                                                        <span data-url=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_remove_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove btn btn-danger btn-xs btn-remove-equipement\"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                            </tbody>
                            ";
            } else {
                // line 114
                echo "                                <br>
                                <div class=\"alert alert-dismissable alert-info\">
                                    Il n'y a pour le moment aucun équipement associé à cette fiche de vie.
                                </div>
                            ";
            }
            // line 119
            echo "                        </table>
                        <div class=\"row row-centered col-xs-12\">
                            <div class=\"col-centered pull-left\">
                                <h3>Gestion de la fiche de vie :</h3>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a data-toggle=\"modal\" data-target=\"#myModal\">
                                    <span data-url=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_remove_fiche", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-remove btn btn-danger btn-lg btn-remove-fiche\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_fiche", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-lg\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("oc_epi_insert_equipement");
            echo "\">
                                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_gestionFiche", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-eye-open btn btn-primary btn-lg\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\"></h4>
                </div>
                <div class=\"modal-body\">
                    <p>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    <a id=\"deleteConfirmation\">
                        <span class=\"btn btn-danger\">Continuer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "    <script>
        \$('.btn-remove-equipement').click(function(){
            var url = \$(this).data('url');
            \$('#deleteConfirmation').prop('href', url);
            \$('h4.modal-title').html(\"Voulez vous vraiment supprimer l'équipement ?\");
            \$(\".modal-body p\").html(\"Si vous supprimer l'équipement, vous perdrez également tous les contrôles qui ont été réalisés. Êtes vous certain de vouloir faire cela ?\");
        });

        \$(\".btn-remove-fiche\").click(function(){
            var url = \$(this).data('url');
            \$('#deleteConfirmation').prop('href', url);
            \$('h4.modal-title').html(\"Voulez vous vraiment supprimer la fiche de vie ?\");
            \$(\".modal-body p\").html(\"Si vous supprimer la fiche de vie, tous les équipements et les contrôles qui y sont associé le seront également. Êtes vous certain de vouloir faire cela ?\");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OCEPIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 172,  362 => 171,  335 => 147,  322 => 140,  314 => 135,  306 => 130,  299 => 126,  290 => 119,  283 => 114,  279 => 112,  266 => 105,  257 => 99,  249 => 94,  244 => 91,  234 => 83,  231 => 82,  223 => 80,  219 => 79,  215 => 78,  211 => 77,  207 => 76,  203 => 75,  198 => 74,  193 => 73,  191 => 72,  187 => 71,  183 => 70,  180 => 69,  176 => 68,  159 => 53,  157 => 52,  154 => 51,  152 => 50,  143 => 49,  138 => 48,  136 => 47,  132 => 45,  126 => 44,  124 => 43,  118 => 40,  112 => 39,  108 => 38,  101 => 37,  96 => 36,  94 => 35,  84 => 28,  73 => 19,  64 => 16,  60 => 14,  56 => 13,  53 => 12,  43 => 8,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
