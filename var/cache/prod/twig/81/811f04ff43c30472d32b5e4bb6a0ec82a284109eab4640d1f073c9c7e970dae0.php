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
class __TwigTemplate_50b0cc2f279285e52bd93da325ce57a2f5518d374f183f5268291243ecb27e7e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">


   
       

            ";
        // line 13
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN")) {
            // line 14
            echo " <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
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
        } elseif (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["app"] ?? null), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) == "ROLE_EMPLOYE")) {
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
        } elseif (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["app"] ?? null), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) == "ROLE_USER")) {
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
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 97), "surname", [], "any", false, false, false, 97), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 124), "address", [], "any", false, false, false, 124), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 137), "city", [], "any", false, false, false, 137), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 150), "country", [], "any", false, false, false, 150), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 164), "email", [], "any", false, false, false, 164), "html", null, true);
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
        echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 179), "roles", [], "any", false, false, false, 179)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "html", null, true);
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
        return array (  262 => 179,  244 => 164,  227 => 150,  211 => 137,  195 => 124,  178 => 110,  162 => 97,  126 => 63,  112 => 51,  110 => 50,  94 => 36,  92 => 35,  69 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/profil.html.twig", "/var/www/templates/home/profil.html.twig");
    }
}
