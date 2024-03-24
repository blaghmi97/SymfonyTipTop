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

/* home/index.html.twig */
class __TwigTemplate_7335a2ab5a730cd8908e059828ef19fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_cadeau_check");
        echo "\" id=\"ticketsRecord\">Mes gains</a>
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






<br/> <br/> <br/><br/> <br/> <br/>

    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 contentCodeCadeau\" id=\"blockCodeCadeau\">
                                <h2 class=\"text-white\">Veuillez rentrer le code cadeau de 10 chiffres se trouvant sur votre facture.</h2>
                                <p class=\"Bold\" id=\"result\"></p>
                                <br/>
                                <div class=\"row\">
                                <div class=\"col-7\">
                                <input id=\"codeCadeau\" type=\"text\" id=\"inp\" placeholder=\"Entrez ici votre code cadeau !\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"button\" id=\"submitCodeCadeau\" value=\"Valider\"  class=\"btn btn-success btn-block\">
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                          

                            <div class=\"card border-success contentCodeCadeau col-sm-6 mt-4 \" style=\"background-color: rgba(245, 225, 235, 0.8)\" id=\"blockTicketcRecord\" hidden=true >
                            <div class=\"card-body\">
                            <h4 class=\"card-title\">Mes Gains :</h4>
                            ";
        // line 76
        if (((isset($context["ticketsCount"]) || array_key_exists("ticketsCount", $context) ? $context["ticketsCount"] : (function () { throw new RuntimeError('Variable "ticketsCount" does not exist.', 76, $this->source); })()) > 0)) {
            // line 77
            echo "                            <p class=\"card-text\" id=\"\">Vous avez gagné <B>";
            echo twig_escape_filter($this->env, (isset($context["ticketsCount"]) || array_key_exists("ticketsCount", $context) ? $context["ticketsCount"] : (function () { throw new RuntimeError('Variable "ticketsCount" does not exist.', 77, $this->source); })()), "html", null, true);
            echo " </b> cadeau. Voici la liste des gains que vous avez déjà gagné :</p>
                            ";
        } else {
            // line 79
            echo "                             <p class=\"card-text\" id=\"\" style=\"font-size:18px\"> Vous avez pas de gain .</p>
                            ";
        }
        // line 81
        echo "                                <ul>
                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketsOwnByUser"]) || array_key_exists("ticketsOwnByUser", $context) ? $context["ticketsOwnByUser"] : (function () { throw new RuntimeError('Variable "ticketsOwnByUser" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 83
            echo "                                    <li style=\"list-style: none;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticket", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </ul>
                            </div>
                            </div>
 

<div class=\"container\">
<br><br>
<center><h3>Participez et Gagnez avec Notre Jeu-Concours Exclusif :</h3></center>
<center><p style=\"font-size:18px\">À l'occasion de l'ouverture de notre 10ème boutique à Nice, Thé Tip Top célèbre en offrant des récompenses garanties à chaque participation. 
Découvrez ci-dessous les trésors que vous pourriez débloquer avec votre achat de plus de 49€. Ne manquez pas votre chance de gagner !</p></center>

<center><p style=\"font-size:14px\">Un tirage au sort pour remporter un an de thé d'une valeur de 360€ aura lieu après la fin de ce jeu concours. Ne manquez pas votre chance !</p></center>
<div class=\"row justify-content-center\">

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/infuseur.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Infuseur à thé</h4></center>
<center><p>60% des tickets offrent un infuseur à thé. Une manière élégante de savourer nos thés bios et handmades.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/boitedetox.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé détox ou infusion</h4></center>
<center><p>20% des tickets offrent une boite de 100g d’un thé détox ou d’infusion. Découvrez nos mélanges uniques.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/boitesignature.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé signature</h4></center>
<center><p>10% des tickets offrent une boite de 100g d’un de nos thés signature. Une sélection exclusive pour nos clients.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/coffret39.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 39€</h4></center>
<center><p>6% des tickets offrent un coffret découverte d’une valeur de 39€. Explorez notre gamme de thés bios.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/coffret69.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 69€</h4></center>
<center><p>4% des tickets offrent un coffret découverte d’une valeur de 69€. L’expérience ultime pour les amateurs de thé.</p></center>
</div>
</div>
</div>





</div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<script>


\$(document).on('click','#submitCodeCadeau',function(e){
    e.preventDefault();
    codeCadeau = document.getElementById('codeCadeau').value;
    if(codeCadeau.length != 10 || isNaN(codeCadeau)){
        result = document.getElementById('result');
        result.style = \"color:red;\";
        result.innerHTML = \"Le code doit contenir 10 chiffres.\"
        setTimeout(function(){result.innerHTML = \"Le code doit contenir 10 chiffres.\";},2000);

    }
    else{
        \$.ajax({
            url: 'codecadeau/check',
            method:'post',
            datatype:'json',
            data: {
                \"codeCadeau\" : codeCadeau
            },
            async:true,
            success: function(\$data){
                if(\$data === 0){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le code à déjà été utilisé\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
                else if(\$data === 1){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le délais pour obtenir votre gain est dépassé.\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
                else{
                    result = document.getElementById('result');
                    result.style = \"color:white;\";
                    result.innerHTML = \"vous avez remporté un: \"+\$data+\" !\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
            }
        });
    }
});

\$(document).on('click','#ticketsRecord',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

\$(document).on('click','#enterCode',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 85,  200 => 83,  196 => 82,  193 => 81,  189 => 79,  183 => 77,  181 => 76,  123 => 21,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé Tiptop{% endblock %}

{% block stylesheets %}
  
{% endblock %}

{% block body %}


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">Thé TipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('app_code_cadeau_check')}}\" id=\"ticketsRecord\">Mes gains</a>
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






<br/> <br/> <br/><br/> <br/> <br/>

    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 contentCodeCadeau\" id=\"blockCodeCadeau\">
                                <h2 class=\"text-white\">Veuillez rentrer le code cadeau de 10 chiffres se trouvant sur votre facture.</h2>
                                <p class=\"Bold\" id=\"result\"></p>
                                <br/>
                                <div class=\"row\">
                                <div class=\"col-7\">
                                <input id=\"codeCadeau\" type=\"text\" id=\"inp\" placeholder=\"Entrez ici votre code cadeau !\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"button\" id=\"submitCodeCadeau\" value=\"Valider\"  class=\"btn btn-success btn-block\">
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                          

                            <div class=\"card border-success contentCodeCadeau col-sm-6 mt-4 \" style=\"background-color: rgba(245, 225, 235, 0.8)\" id=\"blockTicketcRecord\" hidden=true >
                            <div class=\"card-body\">
                            <h4 class=\"card-title\">Mes Gains :</h4>
                            {% if ticketsCount > 0 %}
                            <p class=\"card-text\" id=\"\">Vous avez gagné <B>{{ ticketsCount }} </b> cadeau. Voici la liste des gains que vous avez déjà gagné :</p>
                            {% else %}
                             <p class=\"card-text\" id=\"\" style=\"font-size:18px\"> Vous avez pas de gain .</p>
                            {% endif %}
                                <ul>
                                {% for ticket in ticketsOwnByUser %}
                                    <li style=\"list-style: none;\">{{ ticket.ticket.title }}</li>
                                {% endfor %}
                                </ul>
                            </div>
                            </div>
 

<div class=\"container\">
<br><br>
<center><h3>Participez et Gagnez avec Notre Jeu-Concours Exclusif :</h3></center>
<center><p style=\"font-size:18px\">À l'occasion de l'ouverture de notre 10ème boutique à Nice, Thé Tip Top célèbre en offrant des récompenses garanties à chaque participation. 
Découvrez ci-dessous les trésors que vous pourriez débloquer avec votre achat de plus de 49€. Ne manquez pas votre chance de gagner !</p></center>

<center><p style=\"font-size:14px\">Un tirage au sort pour remporter un an de thé d'une valeur de 360€ aura lieu après la fin de ce jeu concours. Ne manquez pas votre chance !</p></center>
<div class=\"row justify-content-center\">

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/infuseur.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Infuseur à thé</h4></center>
<center><p>60% des tickets offrent un infuseur à thé. Une manière élégante de savourer nos thés bios et handmades.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/boitedetox.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé détox ou infusion</h4></center>
<center><p>20% des tickets offrent une boite de 100g d’un thé détox ou d’infusion. Découvrez nos mélanges uniques.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/boitesignature.png\" alt=\"Boite de 100g - Thé détox ou infusion\"/>
  </svg>
<hr>
<center><h4>Boite de 100g - Thé signature</h4></center>
<center><p>10% des tickets offrent une boite de 100g d’un de nos thés signature. Une sélection exclusive pour nos clients.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/coffret39.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 39€</h4></center>
<center><p>6% des tickets offrent un coffret découverte d’une valeur de 39€. Explorez notre gamme de thés bios.</p></center>
</div>

<div class=\"card border-secondary mb-3\" style=\"max-width: 15rem; max-height: 30rem; margin-right: 1em;\">
  <svg  class=\"d-block user-select-none mt-1\" width=\"100%\" height=\"10\" >
    <img src=\"uploads/images/coffret69.png\" alt=\"Boite de 100g - Thé détox ou infusion\" />
  </svg>
<hr>
<center><h4>Coffret découverte 69€</h4></center>
<center><p>4% des tickets offrent un coffret découverte d’une valeur de 69€. L’expérience ultime pour les amateurs de thé.</p></center>
</div>
</div>
</div>





</div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<script>


\$(document).on('click','#submitCodeCadeau',function(e){
    e.preventDefault();
    codeCadeau = document.getElementById('codeCadeau').value;
    if(codeCadeau.length != 10 || isNaN(codeCadeau)){
        result = document.getElementById('result');
        result.style = \"color:red;\";
        result.innerHTML = \"Le code doit contenir 10 chiffres.\"
        setTimeout(function(){result.innerHTML = \"Le code doit contenir 10 chiffres.\";},2000);

    }
    else{
        \$.ajax({
            url: 'codecadeau/check',
            method:'post',
            datatype:'json',
            data: {
                \"codeCadeau\" : codeCadeau
            },
            async:true,
            success: function(\$data){
                if(\$data === 0){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le code à déjà été utilisé\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
                else if(\$data === 1){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le délais pour obtenir votre gain est dépassé.\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
                else{
                    result = document.getElementById('result');
                    result.style = \"color:white;\";
                    result.innerHTML = \"vous avez remporté un: \"+\$data+\" !\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
            }
        });
    }
});

\$(document).on('click','#ticketsRecord',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

\$(document).on('click','#enterCode',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

</script>
{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\SymfonyTipTop\\templates\\home\\index.html.twig");
    }
}
