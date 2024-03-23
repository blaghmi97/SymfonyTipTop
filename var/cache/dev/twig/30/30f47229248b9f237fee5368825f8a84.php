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

/* admin/groslot.html.twig */
class __TwigTemplate_613b5f2ed694a3c89c6e0e4d27fcdef4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/groslot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/groslot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/groslot.html.twig", 1);
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

        echo "Thé Tiptop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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


    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                           
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le tirage au sort du gros lot aura lieu le ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 65, $this->source); })()), "d-m-Y"), "html", null, true);
        echo ".</h2>
                            </div>
                         
                            ";
        // line 68
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()) == null)) {
            // line 69
            echo "                            <div class=\"row\">
                            <h2 class=\"text-white\">Si vous voulez lancer le tirage au sort du gros lot veuillez cliquer sur le button </h2>
                            </div>
                                <br><br>
                                <a href=\"/admin/groswin\" class=\"btn btn-success btn-block\">Lancer </a>
                            ";
        }
        // line 75
        echo "                          
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>   
                      ";
        // line 82
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "                     <div class=\"col-md-8\" >
                      <br><br>
                <div class=\"card-group\" >
                    <div class=\"text-black cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                          
                            <div class=\"row\">
                                <h2 >Le gagnant du gros lot de 360€ est : ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "surname", [], "any", false, false, false, 91), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</h2>
                            </div>

                           
                                </div>
                                
                                </div>
                            </div>
                        </div> 

                        <br><br>

                         <div class=\"card-group\" >
                    <div class=\"text-black cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">

                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "session", [], "any", false, false, false, 107), "flashbag", [], "any", false, false, false, 107), "get", [0 => "refus"], "method", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 108
                echo "                        <div class=\"alert alert-dismissible alert-danger\">
                        <h4 class=\"alert-heading\"> ";
                // line 109
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</h4>
                        </div>
                        <br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "

                            <div class=\"col-12 \">
                          <form action=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newgame");
            echo "\" method=\"post\">
                            <div class=\"row\">
                            <div class=\"col-4\">
                               <label for=\"datejeu\" classe=\"form-label\">Date de début du jeu concours :</label>
                            </div>
                            <div class=\"col-8\">

                               <input type=\"date\" classe=\"form-control\" id=\"dt\" name=\"datejeu\" required/>
                            </div>
                             </div>
                           <br><br>
                               <input type=\"submit\" value=\"Lance un nouveau jeu\" class=\"btn btn-success\">
                            
                           

                           </form>
                                </div>
                                
                                </div>
                            </div>
                        </div> 
                        ";
        }
        // line 138
        echo "                    </div>
                </div>

                
            </div>



<br><br> <br>



        
 
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>






";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/groslot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 138,  247 => 116,  242 => 113,  232 => 109,  229 => 108,  225 => 107,  204 => 91,  194 => 83,  192 => 82,  183 => 75,  175 => 69,  173 => 68,  167 => 65,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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


    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                           
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le tirage au sort du gros lot aura lieu le {{date|date('d-m-Y')}}.</h2>
                            </div>
                         
                            {% if user == null %}
                            <div class=\"row\">
                            <h2 class=\"text-white\">Si vous voulez lancer le tirage au sort du gros lot veuillez cliquer sur le button </h2>
                            </div>
                                <br><br>
                                <a href=\"/admin/groswin\" class=\"btn btn-success btn-block\">Lancer </a>
                            {% endif %}
                          
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>   
                      {% if user %}
                     <div class=\"col-md-8\" >
                      <br><br>
                <div class=\"card-group\" >
                    <div class=\"text-black cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                          
                            <div class=\"row\">
                                <h2 >Le gagnant du gros lot de 360€ est : {{ user.user.surname}} {{ user.user.name}}</h2>
                            </div>

                           
                                </div>
                                
                                </div>
                            </div>
                        </div> 

                        <br><br>

                         <div class=\"card-group\" >
                    <div class=\"text-black cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">

                        {% for message in app.session.flashbag.get('refus') %}
                        <div class=\"alert alert-dismissible alert-danger\">
                        <h4 class=\"alert-heading\"> {{ message }}</h4>
                        </div>
                        <br>
                        {% endfor %}


                            <div class=\"col-12 \">
                          <form action=\"{{path('newgame') }}\" method=\"post\">
                            <div class=\"row\">
                            <div class=\"col-4\">
                               <label for=\"datejeu\" classe=\"form-label\">Date de début du jeu concours :</label>
                            </div>
                            <div class=\"col-8\">

                               <input type=\"date\" classe=\"form-control\" id=\"dt\" name=\"datejeu\" required/>
                            </div>
                             </div>
                           <br><br>
                               <input type=\"submit\" value=\"Lance un nouveau jeu\" class=\"btn btn-success\">
                            
                           

                           </form>
                                </div>
                                
                                </div>
                            </div>
                        </div> 
                        {% endif %}
                    </div>
                </div>

                
            </div>



<br><br> <br>



        
 
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>






{% endblock %}
", "admin/groslot.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\admin\\groslot.html.twig");
    }
}
