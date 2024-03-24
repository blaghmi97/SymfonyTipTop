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

/* home/profil.html.twig */
class __TwigTemplate_fdecae3b959e5e5a8f76178cfeb9fa60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">


   
       

            ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13), 0, [], "array", false, false, false, 13) == "ROLE_ADMIN")) {
            // line 14
            echo " <a class=\"navbar-brand\" href=\"/admin\">Thé TipTop</a>
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

          ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35) == "ROLE_EMPLOYE")) {
            // line 36
            echo "                            <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                          
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
          ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50), 0, [], "array", false, false, false, 50) == "ROLE_USER")) {
            // line 51
            echo "    <a class=\"navbar-brand\" href=\"/\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\" id=\"ticketsRecord\">Mes gains</a>
            </li>
            
      </ul>
            ";
        }
        // line 63
        echo "      </ul>
      <form class=\"d-flex\">
  <ul class=\"navbar-nav me-auto\">
       <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Mon profil</a>
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
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 col-lg-8 col-xl-8\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Mon Profil</h1> </center>
                        <hr />
                       
                            <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Prénom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "surname", [], "any", false, false, false, 97), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
<br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>      <label style=\"font-size:18px\">Nom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                            <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>  <label style=\"font-size:18px\">Adresse :<label> </b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "address", [], "any", false, false, false, 124), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Ville :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "city", [], "any", false, false, false, 137), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Pays :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "country", [], "any", false, false, false, 150), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Email :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "email", [], "any", false, false, false, 164), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>


                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Statut :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "roles", [], "any", false, false, false, 179), 0, [], "array", false, false, false, 179), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                               <br>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 179,  274 => 164,  257 => 150,  241 => 137,  225 => 124,  208 => 110,  192 => 97,  156 => 63,  142 => 51,  140 => 50,  124 => 36,  122 => 35,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">


   
       

            {% if app.user.roles[0]== \"ROLE_ADMIN\" %}
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

          {% elseif app.user.roles[0]== \"ROLE_EMPLOYE\" %}
                            <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                          
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
          {% elseif app.user.roles[0]== \"ROLE_USER\" %}
    <a class=\"navbar-brand\" href=\"/\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\" id=\"ticketsRecord\">Mes gains</a>
            </li>
            
      </ul>
            {% endif %}
      </ul>
      <form class=\"d-flex\">
  <ul class=\"navbar-nav me-auto\">
       <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Mon profil</a>
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
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 col-lg-8 col-xl-8\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Mon Profil</h1> </center>
                        <hr />
                       
                            <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Prénom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.surname}}<label>
                                </div>
                               </div>
                            </div>
<br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>      <label style=\"font-size:18px\">Nom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.name}}<label>
                                </div>
                               </div>
                            </div>

                            <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>  <label style=\"font-size:18px\">Adresse :<label> </b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.address}}<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Ville :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.city}}<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Pays :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.country}}<label>
                                </div>
                               </div>
                            </div>

                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Email :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.email}}<label>
                                </div>
                               </div>
                            </div>


                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Statut :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.roles[0]}}<label>
                                </div>
                               </div>
                               <br>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
{% endblock %}
", "home/profil.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\home\\profil.html.twig");
    }
}
