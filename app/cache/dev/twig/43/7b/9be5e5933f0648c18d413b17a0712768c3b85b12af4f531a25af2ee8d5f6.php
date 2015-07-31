<?php

/* OCEPIBundle:Gestion:gestionEquipement.html.twig */
class __TwigTemplate_437b9be5e5933f0648c18d413b17a0712768c3b85b12af4f531a25af2ee8d5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCEPIBundle::base.html.twig", "OCEPIBundle:Gestion:gestionEquipement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "
    <div class=\"row row-centered col-xs-13\">
        <div class=\"col-xs-4 pull-left col-centered\">
            <h1 class=\"col-xs-12\">Fiche de vie du ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "modele", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "fabriquant", array()), "html", null, true);
        echo " numéro ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "numInterne", array()), "html", null, true);
        echo " :</h1>
        </div>
        <div class=\"col-xs-7 well pull-right col-centered\">
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <p><b>Numéro Interne : </b> <span class=\"text-info\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "numInterne", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Numéro de série : </b> <span class=\"text-info\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "numSerie", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Modele : </b> <span class=\"text-info\">";
        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "modele", array())), "html", null, true);
        echo "</span></p>
                    <p><b>Fabriquant : </b><span class=\"text-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "fabriquant", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Identifiant fabriquant : </b><span class=\"text-info\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "identifiantFab", array()), "html", null, true);
        echo "</span></p>
                </div>
                <div class=\"col-xs-6\">
                    <p><b>Date d'achat : </b><span class=\"text-info\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "dateAchat", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Date de fabrication : </b><span class=\"text-info\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "dateFabrication", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Date de mise en service : </b><span class=\"text-info\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "dateMiseEnService", array()), "d/m/Y"), "html", null, true);
        echo "</span></p>
                    <p><b>Durée de vie (en année) : </b><span class=\"text-info\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "dureeDeVie", array()), "html", null, true);
        echo "</span></p>
                    <p><b>Fréquence des contrôles (en jour) : </b><span class=\"text-info\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "ficheDeVie", array()), "frequenceControle", array()), "html", null, true);
        echo "</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"well col-lg-12 container\">
        <div class=\"row\">
            <div class=\"col-xs-5 pull-left\">
                <h2 class=\"col-xs-10\">Table des contrôles :</h2>
            </div>
        </div>
        <table class=\"table table-striped\">
            ";
        // line 42
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "controles", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "controles", array())) != null))) {
            // line 43
            echo "                <thead>
                <tr>
                    <th>Date</th>
                    <th>Sangles</th>
                    <th>Coutures</th>
                    <th>Marquages</th>
                    <th>Longes</th>
                    <th>Mousquetons</th>
                    <th>Remarque</th>
                    <th>Controleur</th>
                    <th>Gestion contrôles</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "controles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["controle"]) {
                // line 58
                echo "                    <tr>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["controle"], "dateControle", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "sangle", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "couture", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "marquage", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "longes", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "mousqueton", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["controle"], "remarque", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["controle"], "user", array()), "nom", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["controle"], "user", array()), "prenom", array()), "html", null, true);
                echo "</td>
                        <td>
                            <div class=\"row-centered\">
                                <div class=\"col-centered\">
                                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_controle", array("idControle" => $this->getAttribute($context["controle"], "id", array()))), "html", null, true);
                echo "\">
                                        <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-xs\"></span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['controle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </tbody>
            ";
        } else {
            // line 80
            echo "                <br>
                <div class=\"alert alert-dismissable alert-info\">
                    Il n'y a pour le moment aucun contrôle associé à cet équipement.
                </div>
            ";
        }
        // line 85
        echo "        </table>
        <div class=\"row-centered pull-right\">
            <div class=\"col-centered\">
                <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_update_equipement", array("id" => $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "id", array()))), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-wrench btn btn-warning btn-lg\"></span>
                </a>
            </div>
            <div class=\"col-centered\">
                <a data-toggle=\"modal\" data-target=\"#myModal\">
                    <span data-url=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_epi_remove_equipement", array("id" => $this->getAttribute((isset($context["equipement"]) ? $context["equipement"] : $this->getContext($context, "equipement")), "id", array()))), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-remove btn btn-danger btn-lg btn-remove\"></span>
                </a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"myModal\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\">Voulez vous vraiment supprimer l'équipement ?</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>
                            Si vous supprimer l'équipement, vous perdrez également tous les contrôles qui ont été réalisés. Êtes vous certain de vouloir faire cela ?
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
    </div>
";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
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
        return "OCEPIBundle:Gestion:gestionEquipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 122,  253 => 121,  222 => 94,  213 => 88,  208 => 85,  201 => 80,  197 => 78,  183 => 70,  174 => 66,  170 => 65,  166 => 64,  162 => 63,  158 => 62,  154 => 61,  150 => 60,  146 => 59,  143 => 58,  139 => 57,  123 => 43,  121 => 42,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  55 => 13,  50 => 10,  41 => 7,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
