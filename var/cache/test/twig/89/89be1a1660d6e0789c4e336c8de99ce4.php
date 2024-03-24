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

/* base.html.twig */
class __TwigTemplate_98dc379bac9d7c6b274184f2695ee637 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"A l’occasion de l’ouverture de notre 10ème boutique à Nice, Nous organisons le jeu concours du Thé TipTop qui permet à notre clientèle de gagner jusqu’au 150000 cadeaux.\"/>
        <meta name=\"keywords\" content=\"ThéTipTop ,Thé Bio, jeu concours\"/>
        <meta name=\"ROBOTS\" content=\"INDEX, FOLLOW\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"The TipTop\">

        <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/logo1.ico"), "html", null, true);
        echo "\" />
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">

";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </head>

    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        <footer style=\"position:relative; bottom:0; width:100%;  margin-top:90px; opacity:0.85;\">
        <div class=\"container-fluid\" style=\"padding: 30px 30px ; background: #000000;\" align=\"center\">
            <div class=\"row justify-content-center\">
            <div class=\"col-md-4 col-4\">
         <p style=\"color:white;\"> 18 rue Léon Frot 75011 Paris, France </p>
            </div>

            <div class=\"col-md-4 col-4\">
            <p style=\"color:white;\">admin@dsp-archiwebf21-yb.fr</p>
            </div>

            <div class=\"col-md-4 col-4\">
            <a href=\"/cgv\" style=\"color:white;\" >CGU et CGV</a>   
            </div>  
            </div>
            <div class=\"row justify-content-center\">
            <div class=\"col-md-4 col-4\">
             <a href=\"/mentions\" style=\"color:white;\" >Mentions légales</a>   
            </div>  
            <div class=\"col-md-4 col-4\">
             <a href=\"/histoire\" style=\"color:white;\" >À Propos</a>   
            </div>
            <div class=\"col-md-4 col-4\">
             <a href=\"/contact\" style=\"color:white;\" >Contact</a>   
            </div>
      </div><br>
        <div class=\"col-md-12 col-12\" style=\"background: #ffffff;\">
            <p style=\"color: black; \" align=\"center\">
                &copy; 2023 : Thé TipTop
            </p>
        </div>
             </div>
             </div>
    </footer>
    
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "        <style>


.cardCreatAccount{
    background-color: #8989e5;
}
.buttonSubmitLogin{
    background-color: #8989e5;
}
.buttonSubmitRegister{
    background-color: white;
}
.presentationOfTheGame{
    text-align: center;
}

        </style>
       
       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 47,  205 => 42,  195 => 41,  166 => 20,  156 => 19,  137 => 5,  90 => 48,  88 => 47,  83 => 44,  81 => 41,  78 => 40,  76 => 19,  68 => 14,  63 => 12,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Thé TipTop | Jeu Concours{% endblock %}</title>
        <meta name=\"description\" content=\"A l’occasion de l’ouverture de notre 10ème boutique à Nice, Nous organisons le jeu concours du Thé TipTop qui permet à notre clientèle de gagner jusqu’au 150000 cadeaux.\"/>
        <meta name=\"keywords\" content=\"ThéTipTop ,Thé Bio, jeu concours\"/>
        <meta name=\"ROBOTS\" content=\"INDEX, FOLLOW\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"The TipTop\">

        <link rel=\"icon\" href=\"{{ asset('uploads/images/logo1.ico') }}\" />
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap.css') }}\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">

{% block stylesheets %}
        <style>


.cardCreatAccount{
    background-color: #8989e5;
}
.buttonSubmitLogin{
    background-color: #8989e5;
}
.buttonSubmitRegister{
    background-color: white;
}
.presentationOfTheGame{
    text-align: center;
}

        </style>
       
       
        {% endblock %}

        {% block javascripts %}
        
        {% endblock %}
    </head>

    <body>
        {% block body %}{% endblock %}
        <footer style=\"position:relative; bottom:0; width:100%;  margin-top:90px; opacity:0.85;\">
        <div class=\"container-fluid\" style=\"padding: 30px 30px ; background: #000000;\" align=\"center\">
            <div class=\"row justify-content-center\">
            <div class=\"col-md-4 col-4\">
         <p style=\"color:white;\"> 18 rue Léon Frot 75011 Paris, France </p>
            </div>

            <div class=\"col-md-4 col-4\">
            <p style=\"color:white;\">admin@dsp-archiwebf21-yb.fr</p>
            </div>

            <div class=\"col-md-4 col-4\">
            <a href=\"/cgv\" style=\"color:white;\" >CGU et CGV</a>   
            </div>  
            </div>
            <div class=\"row justify-content-center\">
            <div class=\"col-md-4 col-4\">
             <a href=\"/mentions\" style=\"color:white;\" >Mentions légales</a>   
            </div>  
            <div class=\"col-md-4 col-4\">
             <a href=\"/histoire\" style=\"color:white;\" >À Propos</a>   
            </div>
            <div class=\"col-md-4 col-4\">
             <a href=\"/contact\" style=\"color:white;\" >Contact</a>   
            </div>
      </div><br>
        <div class=\"col-md-12 col-12\" style=\"background: #ffffff;\">
            <p style=\"color: black; \" align=\"center\">
                &copy; 2023 : Thé TipTop
            </p>
        </div>
             </div>
             </div>
    </footer>
    
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\base.html.twig");
    }
}
