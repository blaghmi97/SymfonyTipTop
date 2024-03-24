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

/* security/home.html.twig */
class __TwigTemplate_6dfaec12ea2011b02da02d6a9d913c56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/home.html.twig", 1);
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

<div class=\"jumbotron\"><br>
  <h1  align=\"center\" style=\"font-size:45px\">Thé TipTop</h1><br>
  <h2  align=\"center\" style=\"font-size:25px\">Participez et Gagnez avec Notre Jeu-Concours Exclusif de Thé TipTop.</h2>
<hr class=\"my-4\">
<center><p style=\"font-size:20px\">À l'occasion de l'ouverture de notre 10ème boutique à Nice, Thé Tip Top célèbre en offrant des récompenses garanties à chaque participation. 
Découvrez ci-dessous les trésors que vous pourriez débloquer avec votre achat de plus de 49€. Ne manquez pas votre chance de gagner !</p></center>
<center><p style=\"font-size:15px\"> Un tirage au sort pour remporter un an de thé d'une valeur de 360€ aura lieu après la fin de ce jeu concours. Ne manquez pas votre chance ! </p></center>
 <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 152, $this->source); })()), "closingDate", [], "any", false, false, false, 152), "-30 day"), "d-m-Y"), "html", null, true);
        echo " </b> et le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 152, $this->source); })()), "closingDate", [], "any", false, false, false, 152), "d-m-Y"), "html", null, true);
        echo " </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>";
        // line 153
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 153, $this->source); })()), "closingDate", [], "any", false, false, false, 153), "d-m-Y"), "html", null, true);
        echo " </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr><br>     

                <center>
                  <a href=\"/register\" class=\"btn btn-success btn-block\" > <h3> je participe </h3></a>
                </center>
       <br>
</div>
<br> 
<div class=\"container\">
<b><h4>Comment jouer ?</h4></b>
<h5>1. Obtenez un ticket de participation après un achat en magasin ou en ligne.</h5>
<h5>2. Saisissez le code du ticket pour vérifier votre participation.</h5>
<h5>3. récupérer vos gains du magasin.</h5>
</div>

 <br> 
<div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/infuseur.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Infuseur à thé</h4></center>
<center><p>60% des tickets offrent un infuseur à thé. Une manière élégante de savourer nos thés bios et handmades.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/boitedetox.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé détox ou infusion</h4></center>
<center><p>20% des tickets offrent une boite de 100g d’un thé détox ou d’infusion. Découvrez nos mélanges uniques.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/boitesignature.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé signature</h4></center>
<center><p>10% des tickets offrent une boite de 100g d’un de nos thés signature. Une sélection exclusive pour nos clients.</p></center>
</div>
</div>
<div class=\"row justify-content-center\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em; \">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"5\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/coffret39.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 39€</h4></center>
<center><p>6% des tickets offrent un coffret découverte d’une valeur de 39€. Explorez notre gamme de thés bios.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"5\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/coffret69.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 69€</h4></center>
<center><p>4% des tickets offrent un coffret découverte d’une valeur de 69€. L’expérience ultime pour les amateurs de thé.</p></center>
</div>
</div>
</div>







<br>
<center><h2>La sagesse de tout l’univers se trouve dans une tasse de thé.</h2></center>
<center><p style=\"font-size:16px\">Thé Tip Top est une jeune entreprise fondée par un groupe d’amis pharmaciens ayant fait leurs études en Angleterre et passionnés de thé. De retour en France, la passion grandissante a fait
germer l’idée de produire un thé bio et fait maison.
L’objectif est clair: faire la promotion de gammes de thés de très grande qualité avec des
mélanges signatures de l’entreprise, des thés détox, des thés blancs, des thés légumes, infusions,
etc</p></center>


    
</div>
</div>

 <div class=\"cookie-container show\" id=\"cookiePopup\">
     <p style=\"font-size:25px\" id=\"ck1\">Nous respectons votre vie privée.</p>
      <p id=\"ck2\">
        Nous utilisons des cookies pour améliorer votre expérience de navigation, diffuser des publicités ou des contenus personnalisés et analyser notre trafic. En cliquant sur « Accepter », vous consentez à notre utilisation des cookies. 
      </p>


      <button class=\"btn btn-success mb-4 \" id=\"ck3\">Accepter </button>
      <button class=\"btn btn-danger mb-4 mr-3\" id=\"ck4\">Fermer</button>
      <a style=\"font-size:15px;font-color:#ffffff;\" href=\"/mentions\">Mentions légales</a> 

    </div>
    
    </div>

<script>
let popUp = document.getElementById(\"cookiePopup\");
document.getElementById(\"ck3\").addEventListener(\"click\", () => {
  popUp.classList.add(\"hide\");
  popUp.classList.remove(\"show\");
  localStorage.setItem(\"cookieBannerDisplayed\", \"true\");
});

document.getElementById(\"ck4\").addEventListener(\"click\", () => {
  popUp.classList.add(\"hide\");
  popUp.classList.remove(\"show\");

});
  if (localStorage.getItem(\"cookieBannerDisplayed\")) {
      popUp.classList.remove(\"show\");
      popUp.classList.add(\"hide\");
      
  }


</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 153,  276 => 152,  258 => 136,  246 => 127,  233 => 118,  227 => 114,  219 => 108,  217 => 107,  207 => 99,  205 => 98,  189 => 84,  187 => 83,  172 => 70,  162 => 69,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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

<div class=\"jumbotron\"><br>
  <h1  align=\"center\" style=\"font-size:45px\">Thé TipTop</h1><br>
  <h2  align=\"center\" style=\"font-size:25px\">Participez et Gagnez avec Notre Jeu-Concours Exclusif de Thé TipTop.</h2>
<hr class=\"my-4\">
<center><p style=\"font-size:20px\">À l'occasion de l'ouverture de notre 10ème boutique à Nice, Thé Tip Top célèbre en offrant des récompenses garanties à chaque participation. 
Découvrez ci-dessous les trésors que vous pourriez débloquer avec votre achat de plus de 49€. Ne manquez pas votre chance de gagner !</p></center>
<center><p style=\"font-size:15px\"> Un tirage au sort pour remporter un an de thé d'une valeur de 360€ aura lieu après la fin de ce jeu concours. Ne manquez pas votre chance ! </p></center>
 <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>{{ date.closingDate|date_modify(\"-30 day\")|date('d-m-Y') }} </b> et le <b>{{ date.closingDate|date('d-m-Y') }} </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>{{ date.closingDate|date('d-m-Y') }} </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr><br>     

                <center>
                  <a href=\"/register\" class=\"btn btn-success btn-block\" > <h3> je participe </h3></a>
                </center>
       <br>
</div>
<br> 
<div class=\"container\">
<b><h4>Comment jouer ?</h4></b>
<h5>1. Obtenez un ticket de participation après un achat en magasin ou en ligne.</h5>
<h5>2. Saisissez le code du ticket pour vérifier votre participation.</h5>
<h5>3. récupérer vos gains du magasin.</h5>
</div>

 <br> 
<div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/infuseur.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Infuseur à thé</h4></center>
<center><p>60% des tickets offrent un infuseur à thé. Une manière élégante de savourer nos thés bios et handmades.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/boitedetox.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé détox ou infusion</h4></center>
<center><p>20% des tickets offrent une boite de 100g d’un thé détox ou d’infusion. Découvrez nos mélanges uniques.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"15\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/boitesignature.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé signature</h4></center>
<center><p>10% des tickets offrent une boite de 100g d’un de nos thés signature. Une sélection exclusive pour nos clients.</p></center>
</div>
</div>
<div class=\"row justify-content-center\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem; margin-right: 1em; \">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"5\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/coffret39.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 39€</h4></center>
<center><p>6% des tickets offrent un coffret découverte d’une valeur de 39€. Explorez notre gamme de thés bios.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 20rem; max-height: 30rem;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"5\"  focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" style=\"font-size:1.125rem;text-anchor:middle\">
    <img src=\"uploads/images/coffret69.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 69€</h4></center>
<center><p>4% des tickets offrent un coffret découverte d’une valeur de 69€. L’expérience ultime pour les amateurs de thé.</p></center>
</div>
</div>
</div>







<br>
<center><h2>La sagesse de tout l’univers se trouve dans une tasse de thé.</h2></center>
<center><p style=\"font-size:16px\">Thé Tip Top est une jeune entreprise fondée par un groupe d’amis pharmaciens ayant fait leurs études en Angleterre et passionnés de thé. De retour en France, la passion grandissante a fait
germer l’idée de produire un thé bio et fait maison.
L’objectif est clair: faire la promotion de gammes de thés de très grande qualité avec des
mélanges signatures de l’entreprise, des thés détox, des thés blancs, des thés légumes, infusions,
etc</p></center>


    
</div>
</div>

 <div class=\"cookie-container show\" id=\"cookiePopup\">
     <p style=\"font-size:25px\" id=\"ck1\">Nous respectons votre vie privée.</p>
      <p id=\"ck2\">
        Nous utilisons des cookies pour améliorer votre expérience de navigation, diffuser des publicités ou des contenus personnalisés et analyser notre trafic. En cliquant sur « Accepter », vous consentez à notre utilisation des cookies. 
      </p>


      <button class=\"btn btn-success mb-4 \" id=\"ck3\">Accepter </button>
      <button class=\"btn btn-danger mb-4 mr-3\" id=\"ck4\">Fermer</button>
      <a style=\"font-size:15px;font-color:#ffffff;\" href=\"/mentions\">Mentions légales</a> 

    </div>
    
    </div>

<script>
let popUp = document.getElementById(\"cookiePopup\");
document.getElementById(\"ck3\").addEventListener(\"click\", () => {
  popUp.classList.add(\"hide\");
  popUp.classList.remove(\"show\");
  localStorage.setItem(\"cookieBannerDisplayed\", \"true\");
});

document.getElementById(\"ck4\").addEventListener(\"click\", () => {
  popUp.classList.add(\"hide\");
  popUp.classList.remove(\"show\");

});
  if (localStorage.getItem(\"cookieBannerDisplayed\")) {
      popUp.classList.remove(\"show\");
      popUp.classList.add(\"hide\");
      
  }


</script>

{% endblock %}
", "security/home.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\security\\home.html.twig");
    }
}
