<?php

/* OCEPIBundle:Gestion:gestionFicheDeVie.html.twig */
class __TwigTemplate_f82a637a25767b6a282c1ac4fe2beba1eaa8b14ce75d1419e6dc88c6d8502ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OCEPIBundle:Gestion:gestionFicheDeVie.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <div class=\"alert alert-dismissable alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div class=\"row row-centered col-xs-13\">
        <div class=\"col-xs-4 pull-left col-centered\">
            <h1 class=\"col-xs-12\">Fiche de vie des ";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "modele", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "fabriquant", array()), "html", null, true);
        echo " :</h1>
        </div>
        <div class=\"col-xs-7 well pull-right col-centered\">
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <p><b>Modele : </b> <span class=\"text-info\">";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "modele", array())), "html", null, true);
        echo "</span></p>
                    <p><b>Fabriquant : </b><span class=\"text-info\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "fabriquant", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Identifiant fabriquant : </b><span class=\"text-info\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "identifiantFab", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Fréquence des contrôles (en jour) : </b><span class=\"text-info\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "frequenceControle", array()), "html", null, true);
        echo "</span></p>
                </div>
                <div class=\"col-xs-6\">
                    <p><b>Date d'achat : </b><span class=\"text-info\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateAchat", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Date de fabrication : </b><span class=\"text-info\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateFabrication", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Date de mise en service : </b><span class=\"text-info\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateMiseEnService", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Durée de vie (en année) : </b><span class=\"text-info\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dureeDeVie", array()), "html", null, true);
        echo "</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"well col-lg-12 container\">
        <div class=\"row row-centered col-xs-13\">
            <div class=\"col-xs-5 pull-left col-centered\">
                <h2 class=\"col-xs-10\">Table des contrôles :</h2>
            </div>
            ";
        // line 37
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) != null))) {
            // line 38
            echo "                ";
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array())) != null))) {
                // line 39
                echo "                    <div class=\"pull-right col-centered\">
                        <a data-toggle=\"modal\" data-target=\"#myModal\">
                            <span data-url=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_remove_controle", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "dateControle", array()), "Y-m-d"))), "html", null, true);
                echo "\" class=\"btn-remove glyphicon glyphicon-remove btn btn-danger btn-lg pull-right\"></span>
                        </a>
                    </div>
                ";
            }
            // line 45
            echo "            ";
        }
        // line 46
        echo "            <div class=\"pull-right col-centered\">
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_insert_controle", array("idFiche" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()))), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg pull-right\"></span>
                </a>
            </div>
            <div class=\"col-xs-4 pull-right text-right col-centered\">
                <h3 class=\"col-xs-10 text-right pull-right\">Contrôle groupé : </h3>
            </div>
        </div>
        <table class=\"table table-striped\">
            ";
        // line 56
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) != null))) {
            // line 57
            echo "            <thead>
            <div class=\"row row-centered col-xs-12\">
                <div class=\"col-xs-2 col-centered label label-primary pull-left\" style=\"margin-right: 3%;\">
                    <h4 class=\"text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "modele", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "fabriquant", array()), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"col-xs-4 col-centered label label-primary pull-left\" style=\"margin-right: 4%;\">
                    <h4 class=\"text-center\">Sécurité</h4>
                </div>
                <div class=\"col-xs-4 col-centered label label-primary pull-left \">
                    <h4 class=\"text-center\">Informations Générales</h4>
                </div>
            </div>
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
                <th>Controleur</th>
                <th>Gestion contrôles</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
                // line 85
                echo "                <tr>
                    <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numInterne", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipement"], "numSerie", array()), "html", null, true);
                echo "</td>
                    ";
                // line 88
                if (((twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) != null))) {
                    // line 89
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "sangle", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "couture", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "marquage", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "longes", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "mousqueton", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "dateControle", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "remarque", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "user", array()), "nom", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "user", array()), "prenom", array()), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 98
                    echo "                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    ";
                }
                // line 107
                echo "                    <td>
                        <div class=\"row-centered\">
                            <div class=\"col-centered\">
                                <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_gestion_equipement", array("id" => $this->getAttribute($context["equipement"], "id", array()))), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-eye-open btn btn-primary btn-xs\"></span>
                                </a>
                            </div>
                            ";
                // line 114
                if (((twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) != null))) {
                    // line 115
                    echo "                                ";
                    if (((twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($context["equipement"], "controles", array())) != null))) {
                        // line 116
                        echo "                                    <div class=\"col-centered\">
                                        <a href=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_controle", array("idControle" => $this->getAttribute($this->getAttribute($this->getAttribute($context["equipement"], "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "id", array()))), "html", null, true);
                        echo "\">
                                            <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-xs\"></span>
                                        </a>
                                    </div>
                                ";
                    }
                    // line 122
                    echo "                            ";
                }
                // line 123
                echo "                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            </tbody>
            ";
        } else {
            // line 129
            echo "                <br>
                <div class=\"alert alert-dismissable alert-info\">
                    Il n'y a pour le moment aucun équipement associé à cette fiche de vie.
                </div>
            ";
        }
        // line 134
        echo "        </table>
        <div class=\"text-center\">
            ";
        // line 136
        $this->loadTemplate("OCEPIBundle:Default:pagination.html.twig", "OCEPIBundle:Gestion:gestionFicheDeVie.html.twig", 136)->display($context);
        // line 137
        echo "        </div>
        <div class=\"row-centered pull-right\">
            <div class=\"col-centered\">
                <h3>Ajouter un nouvel équipement :</h3>
            </div>
            <div class=\"col-centered\">
                <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("oc_epi_insert_equipement");
        echo "\">
                    <span class=\"glyphicon glyphicon-plus btn btn-success btn-lg\"></span>
                </a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"myModal\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\">Voulez vous vraiment supprimer tous les controles ?</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>
                            ";
        // line 157
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array())) != null))) {
            // line 158
            echo "                                ";
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array())) != null))) {
                // line 159
                echo "                                    Si vous continuez, vous supprimerez tous les controles effectués le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "equipements", array()), 0, array(), "array"), "controles", array()), ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), array(), "array"), "dateControle", array()), "Y-m-d"), "html", null, true);
                echo " sur la fiche de vie.
                                ";
            }
            // line 161
            echo "                            ";
        }
        // line 162
        echo "                        </p>
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
    </div>
";
    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        // line 176
        echo "    <script>
        \$('.btn-remove').click(function(){
            var url = \$(this).data('url');
            \$('#deleteConfirmation').prop('href', url);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OCEPIBundle:Gestion:gestionFicheDeVie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 176,  356 => 175,  340 => 162,  337 => 161,  331 => 159,  328 => 158,  326 => 157,  309 => 143,  301 => 137,  299 => 136,  295 => 134,  288 => 129,  284 => 127,  275 => 123,  272 => 122,  264 => 117,  261 => 116,  258 => 115,  256 => 114,  249 => 110,  244 => 107,  233 => 98,  226 => 96,  222 => 95,  218 => 94,  214 => 93,  210 => 92,  206 => 91,  202 => 90,  197 => 89,  195 => 88,  191 => 87,  187 => 86,  184 => 85,  180 => 84,  151 => 60,  146 => 57,  144 => 56,  132 => 47,  129 => 46,  126 => 45,  119 => 41,  115 => 39,  112 => 38,  110 => 37,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  54 => 12,  50 => 10,  41 => 7,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
