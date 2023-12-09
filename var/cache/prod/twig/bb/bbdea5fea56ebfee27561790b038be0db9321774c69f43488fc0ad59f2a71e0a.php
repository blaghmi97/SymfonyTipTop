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
class __TwigTemplate_394fa0542107d0a784573e655fd1d9882b1bc92bb9711de1be24f55591da79ba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thé TipTop | Jeu Concours";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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

        </style>
       
        ";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "




<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
                ";
        // line 34
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "roles", [], "any", false, false, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN"))) {
            // line 35
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
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["app"] ?? null), "user", [], "any", false, false, false, 49), "roles", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) == "ROLE_EMPLOYE"))) {
            // line 50
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/admin/users\" >Liste des participants</a>
            </li>

            ";
        } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["app"] ?? null), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) == "ROLE_USER"))) {
            // line 59
            echo "
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Je participe</a>
            </li>

               ";
        }
        // line 65
        echo "      </ul>  
      
      <form class=\"d-flex\">
  
        ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "    
           <ul class=\"navbar-nav me-auto\">
               <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
            </li> 
         <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
         </li>

          ";
        } else {
            // line 78
            echo "   
         <li class=\"nav-item d-flex\">
              <b>  <a class=\"nav-link\" style=\"color:white;\" href=\"/register\">Inscription</a></b>
            </li>
            
           ";
        }
        // line 83
        echo "   
        </ul>      
      </form>

     
    </div>
  </div>  
</nav>

<div class=\"jumbotron\"><br>
  <h1  align=\"center\" style=\"font-size:45px\">The TipTop</h1><br>
  <h2  align=\"center\" style=\"font-size:25px\">Bienvenue sur Thé TipTop le jeu-concours! Inscrivez-vous et participez.</h2><br>
<hr class=\"my-4\">
 <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 96), "-30 day"), "d-m-Y"), "html", null, true);
        echo " </b> et le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 96), "d-m-Y"), "html", null, true);
        echo " </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 97), "d-m-Y"), "html", null, true);
        echo " </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr><br>     <div class=\"col-md-6 offset-md-1\">
                <p style=\"font-size:18px\"><b>- 1 500 000 Cadeaux à gagner :</b>des infuseurs à thé,des boites de 100g d’un thé detox ou infusion,des boites de 100g de thé signature,
                des coffrets découverte d’une valeur de 39 €,des coffrets découverte d’une valeur de 69 €</p>
               </center>  
             </div>
  <br>      <br>                   <center>
                                <a href=\"/register\" class=\"btn btn-success btn-block\" > <h3> je participe </h3></a>
                            </center>
                            <br>
</div>
<br>  <br> 
<center><h2>La sagesse de tout l’univers se trouve dans une tasse de thé.</h2></center>
<center><p style=\"font-size:16px\">Thé Tip Top est une jeune entreprise fondée par un groupe d’amis pharmaciens ayant fait leurs études en Angleterre et passionnés de thé. De retour en France, la passion grandissante a fait
germer l’idée de produire un thé bio et fait maison.
L’objectif est clair: faire la promotion de gammes de thés de très grande qualité avec des
mélanges signatures de l’entreprise, des thés détox, des thés blancs, des thés légumes, infusions,
etc</p></center>


    
</div>
</div>

<script>



   
</script>
";
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
        return array (  184 => 97,  178 => 96,  163 => 83,  155 => 78,  142 => 69,  136 => 65,  128 => 59,  126 => 58,  116 => 50,  114 => 49,  98 => 35,  96 => 34,  81 => 21,  77 => 20,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/home.html.twig", "/var/www/templates/security/home.html.twig");
    }
}
