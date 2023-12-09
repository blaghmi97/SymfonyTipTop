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

/* admin/employes.html.twig */
class __TwigTemplate_715f8556df84943c1926d450e480f5c3d4bfa7d4c9687f994f45fab83473d4f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/employes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thé Tiotop";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    

";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/users\" >Liste des participants</a>
            </li>
                        <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/employes\" >Liste des employés</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/groslot\">Le gros lot</a>
            </li>
            
      </ul>
      <form class=\"d-flex\">
      <ul class=\"navbar-nav me-auto\">
       <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
            </li>
        <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
            </li>
            </ul>
      </form>
    </div>
  </div>  
</nav>



<br><br>


  <center>   <h1>Liste des employés</h1>  </center>
<br> <hr> <br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Pays</th>

            </tr>
        </thead>
        <tbody>

        

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            echo "            <tr>
            
            ";
            // line 77
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 77)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_EMPLOYE")) {
                // line 78
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
               <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 82), "html", null, true);
                echo " </td>
                <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 83), "html", null, true);
                echo " </td>
                <td>
                   <a onclick=\"return confirm('Vouler vraiment supprimer ce compte !')\" class=\"btn btn-danger\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employetouser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" >Supprimer</a>

                </td>
            
              
            </tr>
            ";
            }
            // line 91
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </tbody>
    </table>
    







";
    }

    public function getTemplateName()
    {
        return "admin/employes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 93,  180 => 91,  170 => 85,  165 => 83,  161 => 82,  157 => 81,  153 => 80,  149 => 79,  144 => 78,  142 => 77,  138 => 75,  134 => 74,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/employes.html.twig", "/var/www/templates/admin/employes.html.twig");
    }
}
