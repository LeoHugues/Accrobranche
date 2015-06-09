<?php

/* OCEPIBundle:Default:index.html.twig */
class __TwigTemplate_7a4e8bb5222a9d79366ac54e43a68623b3a8a6e9bc9f4634353dc5f9e51f7928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCEPIBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <div class=\"alert alert-dismissable alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <h4>Attention !</h4>
            <p>
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"alert alert-dismissable alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("oc_epi_insert_ficheDeVie");
        echo "\">
                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg pull-right\"></span>
                </a>
            </div>
        </div>
        <div class=\"bs-componentr\">
            <ul class=\"nav nav-tabs\">
                ";
        // line 36
        $context["first"] = true;
        // line 37
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 38
            echo "                    <li ";
            if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) {
                echo "class= \"active\"";
            }
            echo ">
                        <a href=\"#";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\" aria-expanded=\"true\">
                            ";
            // line 40
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["fiche"], "modele", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "fabriquant", array()), "html", null, true);
            echo "
                            <span class=\"badge\">";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    ";
            // line 44
            $context["first"] = false;
            // line 45
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </ul>
            <div id=\"myTabContent\" class=\"tab-content\">
                ";
        // line 48
        $context["first"] = true;
        // line 49
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 50
            echo "                    <div class=\"tab-pane fade ";
            if (((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) == true)) {
                echo "active in";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 51
            $context["first"] = false;
            // line 52
            echo "                        <table class=\"table table-striped\">
                            ";
            // line 53
            if (((twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["fiche"], "equipements", array())) != null))) {
                // line 54
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
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fiche"], "equipements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
                    // line 70
                    echo "                                    <tr>
                                        <td>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numInterne", array()), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numSerie", array()), "html", null, true);
                    echo "</td>
                                        ";
                    // line 73
                    if (((twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) != null))) {
                        // line 74
                        echo "                                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["equipement"], "controles", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["controle"]) {
                            // line 75
                            echo "                                                <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "sangle", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "couture", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 77
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "marquage", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 78
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "longes", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "mousqueton", array()), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 80
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["controle"], "dateControle", array()), "d/m/Y"), "html", null, true);
                            echo "</td>
                                                <td>";
                            // line 81
                            echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "remarque", array()), "html", null, true);
                            echo "</td>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['controle'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 83
                        echo "                                        ";
                    } else {
                        // line 84
                        echo "                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                        ";
                    }
                    // line 92
                    echo "                                        <td>
                                            <div class=\"row-centered\">
                                                <div class=\"col-centered\">
                                                    <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_gestion_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                    echo "\">
                                                        <span class=\"glyphicon glyphicon-eye-open btn btn-primary btn-xs\"></span>
                                                    </a>
                                                </div>
                                                <div class=\"col-centered\">
                                                    <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                    echo "\">
                                                        <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-xs\"></span>
                                                    </a>
                                                </div>
                                                <div class=\"col-centered\">
                                                    <a data-toggle=\"modal\" data-target=\"#myModal\">
                                                        <span data-url=\"";
                    // line 106
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
                // line 113
                echo "                            </tbody>
                            ";
            } else {
                // line 115
                echo "                                <br>
                                <div class=\"alert alert-dismissable alert-info\">
                                    Il n'y a pour le moment aucun équipement associé à cette fiche de vie.
                                </div>
                            ";
            }
            // line 120
            echo "                        </table>
                        <div class=\"row row-centered col-xs-12\">
                            <div class=\"col-centered pull-left\">
                                <h3>Gestion de la fiche de vie :</h3>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a data-toggle=\"modal\" data-target=\"#myModal\">
                                    <span data-url=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_remove_fiche", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-remove btn btn-danger btn-lg btn-remove-fiche\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_fiche", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-lg\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("oc_epi_insert_equipement");
            echo "\">
                                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg\"></span>
                                </a>
                            </div>
                            <div class=\"col-centered pull-right\">
                                <a href=\"";
            // line 141
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
        // line 148
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

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
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
        return array (  367 => 173,  364 => 172,  337 => 148,  324 => 141,  316 => 136,  308 => 131,  301 => 127,  292 => 120,  285 => 115,  281 => 113,  268 => 106,  259 => 100,  251 => 95,  246 => 92,  236 => 84,  233 => 83,  225 => 81,  221 => 80,  217 => 79,  213 => 78,  209 => 77,  205 => 76,  200 => 75,  195 => 74,  193 => 73,  189 => 72,  185 => 71,  182 => 70,  178 => 69,  161 => 54,  159 => 53,  156 => 52,  154 => 51,  145 => 50,  140 => 49,  138 => 48,  134 => 46,  128 => 45,  126 => 44,  120 => 41,  114 => 40,  110 => 39,  103 => 38,  98 => 37,  96 => 36,  86 => 29,  75 => 20,  66 => 17,  62 => 15,  58 => 14,  55 => 13,  45 => 9,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
