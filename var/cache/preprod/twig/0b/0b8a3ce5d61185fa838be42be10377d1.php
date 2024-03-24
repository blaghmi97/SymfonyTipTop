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

/* admin/addemploye.html.twig */
class __TwigTemplate_6c2c2eee3e219857ebcf1a8da7196557 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addemploye.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/addemploye.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S'inscrire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Inscription d'un employé</h1> </center>
                        <hr />
                        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
                            <div class=\"mb-3 form-group\">
                               
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "surname", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                               
                           
                            <div class=\"mb-3 input-group\">
                            
                                 ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                              
                            </div>
                            <div class=\"mb-3 input-group\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "address", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\">
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "city", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "country", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-7\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "aboutUs", [], "any", false, false, false, 84), 'label', ["label" => "Comment avez-vous entendu parlez du jeu ?"]);
        echo "
                            </div>
                            </div>
                            
                            <div class=\"col-5\">
                            <div class=\"mt-3 mb-3 input-group\">
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "aboutUs", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"clo-row\">
                             ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'errors', ["attr" => ["class" => "form-control", "style" => "color:red;"]]);
        echo " 
                            </div>
                            
                            <div class=\"mb-3 input-group\">
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                             <div>
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "plainPassword", [], "any", false, false, false, 102), "first", [], "any", false, false, false, 102), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\" mb-3 input-group\">
                           
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "plainPassword", [], "any", false, false, false, 106), "first", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
                            </div>
                            <div class=\"input-group\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "plainPassword", [], "any", false, false, false, 110), "second", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\" >
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), "agreeTerms", [], "any", false, false, false, 113), 'errors');
        echo "
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "agreeTerms", [], "any", false, false, false, 117), 'widget');
        echo "
                            </div>
                            </div>
                          <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                              <span style=\"color:red;\"> (*) </span> &nbsp; ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "agreeTerms", [], "any", false, false, false, 122), 'label', ["label" => "Accepter les conditions d'utilisation"]);
        echo "
                            </div>
                                
                            </div>
                            </div>
                            <div class=\"row\" >
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "newsletter", [], "any", false, false, false, 128), 'errors');
        echo "
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "newsletter", [], "any", false, false, false, 131), 'widget');
        echo "
                                
                            </div>
                            </div>
                            <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                               <span style=\"color:red;\"> (*) </span> &nbsp;  ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "newsletter", [], "any", false, false, false, 137), 'label', ["label" => "J’accepte de recevoir la newsletter de TeaTipTop"]);
        echo "
                                
                            </div>
                            </div>
                            </div>
                            <hr />
                            <div class=\"mt-3 row\" >
                            
                            <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"S'inscrire\" />
                            </div>

                        ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/addemploye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 148,  260 => 137,  251 => 131,  245 => 128,  236 => 122,  228 => 117,  221 => 113,  215 => 110,  208 => 106,  201 => 102,  195 => 99,  188 => 95,  180 => 90,  171 => 84,  161 => 77,  153 => 72,  145 => 67,  138 => 63,  129 => 57,  123 => 54,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'inscrire{% endblock %}

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
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Inscription d'un employé</h1> </center>
                        <hr />
                        {{ form_start(registrationForm) }}
                            <div class=\"mb-3 form-group\">
                               
                                {{ form_widget(registrationForm.surname,{'attr' : {'class':'form-control'}}) }}
                                </div>
                               
                           
                            <div class=\"mb-3 input-group\">
                            
                                 {{ form_widget(registrationForm.name,{'attr' : {'class':'form-control'}}) }}
                              
                            </div>
                            <div class=\"mb-3 input-group\">
                                {{ form_widget(registrationForm.address,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\"row\">
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.city,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.country,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-7\">
                            <div class=\"mt-4 input-group\">
                                {{ form_label(registrationForm.aboutUs, 'Comment avez-vous entendu parlez du jeu ?') }}
                            </div>
                            </div>
                            
                            <div class=\"col-5\">
                            <div class=\"mt-3 mb-3 input-group\">
                                {{ form_widget(registrationForm.aboutUs,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            </div>
                            <div class=\"clo-row\">
                             {{ form_errors(registrationForm.email,{'attr' : {'class':'form-control','style':'color:red;'}}) }} 
                            </div>
                            
                            <div class=\"mb-3 input-group\">
                                {{ form_widget(registrationForm.email,{'attr' : {'class':'form-control'}}) }}
                            </div>
                             <div>
                            {{ form_errors(registrationForm.plainPassword.first,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\" mb-3 input-group\">
                           
                                {{ form_widget(registrationForm.plainPassword.first,{'attr' : {'class':'form-control'}}) }}
                                
                            </div>
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.plainPassword.second,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\"row\" >
                            {{ form_errors(registrationForm.agreeTerms) }}
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                
                                {{ form_widget(registrationForm.agreeTerms) }}
                            </div>
                            </div>
                          <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                              <span style=\"color:red;\"> (*) </span> &nbsp; {{ form_label(registrationForm.agreeTerms, \"Accepter les conditions d\\'utilisation\") }}
                            </div>
                                
                            </div>
                            </div>
                            <div class=\"row\" >
                            {{ form_errors(registrationForm.newsletter) }}
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                {{ form_widget(registrationForm.newsletter) }}
                                
                            </div>
                            </div>
                            <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                               <span style=\"color:red;\"> (*) </span> &nbsp;  {{ form_label(registrationForm.newsletter, \"J’accepte de recevoir la newsletter de TeaTipTop\") }}
                                
                            </div>
                            </div>
                            </div>
                            <hr />
                            <div class=\"mt-3 row\" >
                            
                            <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"S'inscrire\" />
                            </div>

                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/addemploye.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\admin\\addemploye.html.twig");
    }
}
