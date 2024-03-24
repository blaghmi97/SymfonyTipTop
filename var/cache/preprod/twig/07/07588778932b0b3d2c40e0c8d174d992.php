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
class __TwigTemplate_92e2a2ff54208a7e1f6a61415910e458 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/employes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/employes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Thé Tiptop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/admin\">Thé TipTop</a>
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
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnexion</a>
            </li>
            </ul>
      </form>
    </div>
  </div>  
</nav>



<br><br>


  <center>   <h1>Liste des employés</h1>  <a href=\"/admin/addemploye\" class=\"btn btn-success\">Ajouter un employé</a></center>
<br> <hr>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", [0 => "success"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "<div class=\"row justify-content-center\">
<div class=\"alert alert-dismissible alert-success col-8 \">
  <h4 class=\"alert-heading\"> ";
            // line 61
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
</div>
<br>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "


 <br>

 <div class=\"container\">
 <div class=\"col-md-12 col-sm-3\">
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
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 91
            echo "            <tr>
            
            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 93), 0, [], "array", false, false, false, 93) == "ROLE_EMPLOYE")) {
                // line 94
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
                <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 96), "html", null, true);
                echo "</td>
               <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                <td>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 98), "html", null, true);
                echo " </td>
                <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 99), "html", null, true);
                echo " </td>
                <td>
                   <a onclick=\"return confirm('Vouler vraiment supprimer ce compte !')\" class=\"btn btn-danger\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employetouser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" >Supprimer</a>

                </td>
            
              
            </tr>
            ";
            }
            // line 107
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
    </table>
    

</div>
</div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  237 => 109,  230 => 107,  220 => 101,  215 => 99,  211 => 98,  207 => 97,  203 => 96,  199 => 95,  194 => 94,  192 => 93,  188 => 91,  184 => 90,  159 => 67,  147 => 61,  143 => 59,  139 => 58,  90 => 11,  83 => 10,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé Tiptop{% endblock %}

{% block stylesheets %}
    

{% endblock %}

{% block body %}


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/admin\">Thé TipTop</a>
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
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnexion</a>
            </li>
            </ul>
      </form>
    </div>
  </div>  
</nav>



<br><br>


  <center>   <h1>Liste des employés</h1>  <a href=\"/admin/addemploye\" class=\"btn btn-success\">Ajouter un employé</a></center>
<br> <hr>
{% for message in app.session.flashbag.get('success') %}
<div class=\"row justify-content-center\">
<div class=\"alert alert-dismissible alert-success col-8 \">
  <h4 class=\"alert-heading\"> {{ message }}</h4>
</div>
</div>
<br>
<br>
{% endfor %}



 <br>

 <div class=\"container\">
 <div class=\"col-md-12 col-sm-3\">
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

        

        {% for user in users %}
            <tr>
            
            {% if user.roles[0]== \"ROLE_EMPLOYE\" %}
                <td>{{ user.surname }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
               <td>{{ user.address }}</td>
                <td>{{ user.city }} </td>
                <td>{{ user.country }} </td>
                <td>
                   <a onclick=\"return confirm('Vouler vraiment supprimer ce compte !')\" class=\"btn btn-danger\" href=\"{{path('employetouser', { 'id': user.id })}}\" >Supprimer</a>

                </td>
            
              
            </tr>
            {% endif %}   
        {% endfor %}
        </tbody>
    </table>
    

</div>
</div>




{% endblock %}
", "admin/employes.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\admin\\employes.html.twig");
    }
}
