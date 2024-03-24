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

/* employe/gains.html.twig */
class __TwigTemplate_13bfe0c893386f144f7b8a4a0c511f3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/gains.html.twig", 1);
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

        echo "Gains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">Thé TipTop </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
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

<br>
<br>
<br>

    <div class=\"container\">






        <div class=\"justify-content-center row\">
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "flashbag", [], "any", false, false, false, 43), "get", [0 => "Success"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> ";
            // line 45
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4></center>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 ";
        // line 71
        if ((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 71, $this->source); })())) {
            echo " 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 82
                echo "            <tr>
                <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                <td>";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 84) == 0)) {
                    echo "<span class=\"badge bg-warning\">Gain pas encore distribué</span> ";
                } else {
                    echo "<span class=\"badge bg-info\">Gain est déja distribué</span>";
                }
                echo "</td>
                <td>";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 85) == 0)) {
                    // line 86
                    echo "                <form method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                <input type=\"hidden\" value=\"";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 87), "html", null, true);
                    echo "\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gain</button>
                </form>
        ";
                }
                // line 91
                echo "                
                
                </td>
    
            </tr>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </tbody>
    </table>
 ";
        }
        // line 100
        echo " 

</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<br><br><br>

<br><br>

<br>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/gains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 100,  225 => 98,  213 => 91,  206 => 87,  201 => 86,  199 => 85,  191 => 84,  187 => 83,  184 => 82,  180 => 81,  167 => 71,  142 => 48,  132 => 45,  129 => 44,  125 => 43,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gains{% endblock %}



{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">Thé TipTop </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
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

<br>
<br>
<br>

    <div class=\"container\">






        <div class=\"justify-content-center row\">
{% for message in app.session.flashbag.get('Success') %}
<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> {{ message }}</h4></center>
</div>
<br>
{% endfor %} 
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 {% if wins %} 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        {% for win in wins %}
            <tr>
                <td>{{win.ticket.title}}</td>
                <td>{% if win.send == 0 %}<span class=\"badge bg-warning\">Gain pas encore distribué</span> {% else %}<span class=\"badge bg-info\">Gain est déja distribué</span>{% endif %}</td>
                <td>{% if win.send == 0 %}
                <form method=\"POST\" action=\"{{path('app_code_send')}}\">
                <input type=\"hidden\" value=\"{{win.id }}\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gain</button>
                </form>
        {% endif %}
                
                
                </td>
    
            </tr>
            
        {% endfor %}
        </tbody>
    </table>
 {% endif %} 

</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<br><br><br>

<br><br>

<br>



{% endblock %}
", "employe/gains.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\employe\\gains.html.twig");
    }
}
