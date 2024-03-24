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

/* home/histoire.html.twig */
class __TwigTemplate_408af7cabdb9361c4d671a4bcf31d1dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/histoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/histoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/histoire.html.twig", 1);
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

        echo "Notre Histoire";
        
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
        echo "
       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "



<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  </div>  
</nav>
<br><br><br>



 <div class=\"container\" >
<center><h1>Histoire de Thé TipTop</h1></center>
<br><br><br>

  <div class=\"row\">
    <div class=\"col\">
<p>Thé Tip Top est l’histoire de deux amis, Sarah Lecoq et Nathalie Lambeau qui se sont rencontrées en Chine lors d’un semestre d’échange à l’étranger proposée par leur formation universitaire. Arrivées sur le territoire chinois,
 elles s’immiscèrent dans l’histoire du pays et commencèrent à porter un intérêt à la culture du thé.

Au retour de leur voyage, elles décidèrent de se lancer en affaire avec la création de Thé Tip Top.

Les deux associées ont une sensibilité à l’environnement et à la santé des individus. C’est la raison pour laquelle, 
Thé Tip Top offre des thés issus de l’agriculture biologique et de qualité supérieur. Proposant un large panel de thés en provenance de leur pays d’origine et de mélange d’exception,
 Thé Tip Top souhaite également faire voyager ses clients à travers la dégustation et en leur permettant de se faire plaisir.</p>
    </div>
    <div class=\"col\">
     <img src=\"uploads/images/30318359-1.jpg\"   width=\"500\" height=\"230\"/>
    </div>
  </div>
<br><br><br><br><br>
  <center ><h2 > Nos engagements :</h2><center>
<br>
  <div class=\"row\">
    <div class=\"col\">

    <img src=\"uploads/images/engagement.png\" width=\"500\" />
    </div>
  </div>


</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/histoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 9,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre Histoire{% endblock %}
        {% block stylesheets %}

       
        {% endblock %}
{% block body %}




<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  </div>  
</nav>
<br><br><br>



 <div class=\"container\" >
<center><h1>Histoire de Thé TipTop</h1></center>
<br><br><br>

  <div class=\"row\">
    <div class=\"col\">
<p>Thé Tip Top est l’histoire de deux amis, Sarah Lecoq et Nathalie Lambeau qui se sont rencontrées en Chine lors d’un semestre d’échange à l’étranger proposée par leur formation universitaire. Arrivées sur le territoire chinois,
 elles s’immiscèrent dans l’histoire du pays et commencèrent à porter un intérêt à la culture du thé.

Au retour de leur voyage, elles décidèrent de se lancer en affaire avec la création de Thé Tip Top.

Les deux associées ont une sensibilité à l’environnement et à la santé des individus. C’est la raison pour laquelle, 
Thé Tip Top offre des thés issus de l’agriculture biologique et de qualité supérieur. Proposant un large panel de thés en provenance de leur pays d’origine et de mélange d’exception,
 Thé Tip Top souhaite également faire voyager ses clients à travers la dégustation et en leur permettant de se faire plaisir.</p>
    </div>
    <div class=\"col\">
     <img src=\"uploads/images/30318359-1.jpg\"   width=\"500\" height=\"230\"/>
    </div>
  </div>
<br><br><br><br><br>
  <center ><h2 > Nos engagements :</h2><center>
<br>
  <div class=\"row\">
    <div class=\"col\">

    <img src=\"uploads/images/engagement.png\" width=\"500\" />
    </div>
  </div>


</div>



{% endblock %}
", "home/histoire.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\home\\histoire.html.twig");
    }
}
