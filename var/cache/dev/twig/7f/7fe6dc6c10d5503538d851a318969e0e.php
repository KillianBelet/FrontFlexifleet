<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gestion_vehicles.html.twig */
class __TwigTemplate_c67a353bab27aa7974c17463d19bfd37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_vehicles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_vehicles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PC | Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-warning\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"https://flexifleet.fr/wp-content/themes/hestia-child/images/actu-default.png\" alt=\"\" width=\"30\" height=\"24\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"gestion_utilisateur.html\">Gestion des utilisateurs</a>
                    </li>
                </ul>
                <button class=\"btn btn-danger\" type=\"submit\">Déconnexion</button>
            </div>
        </div>
    </nav>


    <!--FIN NAVBAR-->

    <div class=\"container mt-5\">
        <button type=\"submit\" class=\"btn btn-success mb-3\"><i class=\"fa fa-plus\"></i>&nbsp;Ajouter un véhicule</button>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\" style=\"text-align: center\">Modifier</th>
                <th scope=\"col\" style=\"text-align: center\">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 41
            echo "                <tr>
                    <th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</th>
                    <td style=\"text-align: center\"><i class=\"fa fa-edit\" style=\"color: orange\"></i></td>
                    <td style=\"text-align: center\"><i class=\"fa fa-trash\" style=\"color: red\"></i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestion_vehicles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  115 => 42,  112 => 41,  108 => 40,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}PC | Profil{% endblock %}


{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-warning\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"https://flexifleet.fr/wp-content/themes/hestia-child/images/actu-default.png\" alt=\"\" width=\"30\" height=\"24\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"gestion_utilisateur.html\">Gestion des utilisateurs</a>
                    </li>
                </ul>
                <button class=\"btn btn-danger\" type=\"submit\">Déconnexion</button>
            </div>
        </div>
    </nav>


    <!--FIN NAVBAR-->

    <div class=\"container mt-5\">
        <button type=\"submit\" class=\"btn btn-success mb-3\"><i class=\"fa fa-plus\"></i>&nbsp;Ajouter un véhicule</button>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\" style=\"text-align: center\">Modifier</th>
                <th scope=\"col\" style=\"text-align: center\">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            {% for vehicle in vehicles %}
                <tr>
                    <th scope=\"row\">{{ vehicle.name }}</th>
                    <td style=\"text-align: center\"><i class=\"fa fa-edit\" style=\"color: orange\"></i></td>
                    <td style=\"text-align: center\"><i class=\"fa fa-trash\" style=\"color: red\"></i></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "gestion_vehicles.html.twig", "C:\\xampp\\htdocs\\frontTpFlexiFleet\\templates\\gestion_vehicles.html.twig");
    }
}
