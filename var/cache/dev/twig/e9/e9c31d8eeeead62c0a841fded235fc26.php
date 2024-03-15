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

/* home/contact.html.twig */
class __TwigTemplate_d91f5a036650094027c6a9e78c604848 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        echo "Thé TipTop | Jeu Concours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <style>
.jumbotron{
      background-image: url(\"uploads/images/bgimage.avif\");
    background-size: cover;

    background-repeat: no-repeat;
}
.cad{

  margin: 0 auto;
}

.cookie-container {
  position: fixed;
  bottom: 15%;
  left: 0;
  right: 0;
  background: #2f3640;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}
.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #ffffff;
  border: 0;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}

#ck1{
color: #ffffff !important;
}
#ck2{
  color: #ffffff !important;
}
#ck3{
  color: #000000 !important;
}
.hide {
  visibility: hidden;
  bottom: 0;

}
.show {
  visibility: visible;
  bottom: 15%;
}

        </style>
       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "



<div class=\"container-fluid\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
                ";
        // line 83
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "roles", [], "any", false, false, false, 83), 0, [], "array", false, false, false, 83) == "ROLE_ADMIN"))) {
            // line 84
            echo " <li class=\"nav-item\">
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
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "roles", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98) == "ROLE_EMPLOYE"))) {
            // line 99
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/users\" >Liste des participants</a>
            </li>

            ";
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 107
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "roles", [], "any", false, false, false, 107), 0, [], "array", false, false, false, 107) == "ROLE_USER"))) {
            // line 108
            echo "
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Je participe</a>
            </li>

               ";
        }
        // line 114
        echo "      </ul>  
      
      <form class=\"d-flex\">
  
        ";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "    
           <ul class=\"navbar-nav me-auto\">
               <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
            </li> 
         <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnexion</a>
         </li>

          ";
        } else {
            // line 127
            echo "   
         <li class=\"nav-item d-flex\">
               <a class=\"nav-link\" style=\"color:white;\" href=\"/login\">Connexion</a>
            </li>
            &nbsp;  &nbsp;
         <li class=\"nav-item d-flex\">
              <a class=\"nav-link\" style=\"color:white;\" href=\"/register\">Inscription</a>
            </li>
            
           ";
        }
        // line 136
        echo "   
        </ul>      
      </form>

     
    </div>
  </div>  
</nav>

<br>
<div class=\"container\">
<center><h1> Vous souhaitez nous contacter ?</h1></center>
<center><h3>Une tasse de thé avec l'équipe.</h3></center>
<center>
<div class=\"col-6\">
<p>Du lundi au samedi, de 8h à 17h, nos employés répondent à toutes vos questions  (achats, livraison, cadeaux, etc.). 
En fonction de votre situation,le conseiller pourra vous proposer un rendez-vous.
</p>
</div>
</center>
     <div class=\"row justify-content-center\">
<div class=\"col-10\">
";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "session", [], "any", false, false, false, 158), "flashbag", [], "any", false, false, false, 158), "get", [0 => "Success"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 159
            echo "<div class=\"row justify-content-center\">
<div class=\"alert alert-dismissible alert-success col-8 \">
  <h4 class=\"alert-heading\"> ";
            // line 161
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
        // line 167
        echo " <div class=\"card border-primary mb-3\">
<form action=\"/mail\" method=\"POST\">

   <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"email\" class=\"form-label mt-4\">Email </label><span style=\"color:red;\">*</span>
      <input type=\"email\" class=\"form-control\" id=\"email\"  placeholder=\"Entrez votre Email\" name=\"mail\" required>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"objet\" class=\"form-label mt-4\">Objet </label><span style=\"color:red;\">*</span>
      <input type=\"text\" class=\"form-control\" id=\"objet\" name=\"objet\" required>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"message\" class=\"form-label mt-4\">Message </label><span style=\"color:red;\">*</span>
      <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\" name=\"message\" required></textarea>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <div class=\"form-check form-switch mt-4\">
        <input class=\"form-check-input \" type=\"checkbox\" id=\"accept\"  required>
        <label class=\"form-check-label\" for=\"accept\">Checked switch checkbox input</label><span style=\"color:red;\">*</span>
      </div>
      </div>
    </div>


    <div class=\"row justify-content-center mb-3\">
      <div class=\"col-6 mt-4\">
        <div class=\"d-grid gap-2\">
            <button class=\"btn btn-lg btn-success\" type=\"submit\">Envoyer</button>
        </div>
      </div>
    </div>


</form>
</div>
</div>
</div>
</div>
 



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 167,  290 => 161,  286 => 159,  282 => 158,  258 => 136,  246 => 127,  233 => 118,  227 => 114,  219 => 108,  217 => 107,  207 => 99,  205 => 98,  189 => 84,  187 => 83,  172 => 70,  162 => 69,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé TipTop | Jeu Concours{% endblock %}
        {% block stylesheets %}
        <style>
.jumbotron{
      background-image: url(\"uploads/images/bgimage.avif\");
    background-size: cover;

    background-repeat: no-repeat;
}
.cad{

  margin: 0 auto;
}

.cookie-container {
  position: fixed;
  bottom: 15%;
  left: 0;
  right: 0;
  background: #2f3640;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}
.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #ffffff;
  border: 0;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}

#ck1{
color: #ffffff !important;
}
#ck2{
  color: #ffffff !important;
}
#ck3{
  color: #000000 !important;
}
.hide {
  visibility: hidden;
  bottom: 0;

}
.show {
  visibility: visible;
  bottom: 15%;
}

        </style>
       
        {% endblock %}
{% block body %}




<div class=\"container-fluid\">
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") and app.user.roles[0] == \"ROLE_ADMIN\" %}
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
            {% elseif is_granted(\"IS_AUTHENTICATED_REMEMBERED\") and app.user.roles[0] == \"ROLE_EMPLOYE\" %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/users\" >Liste des participants</a>
            </li>

            {% elseif is_granted(\"IS_AUTHENTICATED_REMEMBERED\") and app.user.roles[0] == \"ROLE_USER\" %}

         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Je participe</a>
            </li>

               {% endif %}
      </ul>  
      
      <form class=\"d-flex\">
  
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}    
           <ul class=\"navbar-nav me-auto\">
               <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
            </li> 
         <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnexion</a>
         </li>

          {% else %}   
         <li class=\"nav-item d-flex\">
               <a class=\"nav-link\" style=\"color:white;\" href=\"/login\">Connexion</a>
            </li>
            &nbsp;  &nbsp;
         <li class=\"nav-item d-flex\">
              <a class=\"nav-link\" style=\"color:white;\" href=\"/register\">Inscription</a>
            </li>
            
           {% endif %}   
        </ul>      
      </form>

     
    </div>
  </div>  
</nav>

<br>
<div class=\"container\">
<center><h1> Vous souhaitez nous contacter ?</h1></center>
<center><h3>Une tasse de thé avec l'équipe.</h3></center>
<center>
<div class=\"col-6\">
<p>Du lundi au samedi, de 8h à 17h, nos employés répondent à toutes vos questions  (achats, livraison, cadeaux, etc.). 
En fonction de votre situation,le conseiller pourra vous proposer un rendez-vous.
</p>
</div>
</center>
     <div class=\"row justify-content-center\">
<div class=\"col-10\">
{% for message in app.session.flashbag.get('Success') %}
<div class=\"row justify-content-center\">
<div class=\"alert alert-dismissible alert-success col-8 \">
  <h4 class=\"alert-heading\"> {{ message }}</h4>
</div>
</div>
<br>
<br>
{% endfor %}
 <div class=\"card border-primary mb-3\">
<form action=\"/mail\" method=\"POST\">

   <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"email\" class=\"form-label mt-4\">Email </label><span style=\"color:red;\">*</span>
      <input type=\"email\" class=\"form-control\" id=\"email\"  placeholder=\"Entrez votre Email\" name=\"mail\" required>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"objet\" class=\"form-label mt-4\">Objet </label><span style=\"color:red;\">*</span>
      <input type=\"text\" class=\"form-control\" id=\"objet\" name=\"objet\" required>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <label for=\"message\" class=\"form-label mt-4\">Message </label><span style=\"color:red;\">*</span>
      <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\" name=\"message\" required></textarea>
    </div>
   </div>

    <div class=\"row justify-content-center\">
    <div class=\"col-10\">
      <div class=\"form-check form-switch mt-4\">
        <input class=\"form-check-input \" type=\"checkbox\" id=\"accept\"  required>
        <label class=\"form-check-label\" for=\"accept\">Checked switch checkbox input</label><span style=\"color:red;\">*</span>
      </div>
      </div>
    </div>


    <div class=\"row justify-content-center mb-3\">
      <div class=\"col-6 mt-4\">
        <div class=\"d-grid gap-2\">
            <button class=\"btn btn-lg btn-success\" type=\"submit\">Envoyer</button>
        </div>
      </div>
    </div>


</form>
</div>
</div>
</div>
</div>
 



{% endblock %}
", "home/contact.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\home\\contact.html.twig");
    }
}
