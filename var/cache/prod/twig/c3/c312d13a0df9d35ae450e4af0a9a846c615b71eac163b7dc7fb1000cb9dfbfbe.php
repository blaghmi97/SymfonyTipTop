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
class __TwigTemplate_a002120a589176ba81ba4b823e3a5b625abf79b3ab8cda1e04af099134097e92 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/groslot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thé Tiotop";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    

";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
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
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "d-m-Y"), "html", null, true);
        echo ".</h2>
                            </div>
                         
                            ";
        // line 68
        if ((($context["user"] ?? null) == null)) {
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
        if (($context["user"] ?? null)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user", [], "any", false, false, false, 91), "surname", [], "any", false, false, false, 91), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 107), "flashbag", [], "any", false, false, false, 107), "get", [0 => "refus"], "method", false, false, false, 107));
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
        return array (  230 => 138,  205 => 116,  200 => 113,  190 => 109,  187 => 108,  183 => 107,  162 => 91,  152 => 83,  150 => 82,  141 => 75,  133 => 69,  131 => 68,  125 => 65,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/groslot.html.twig", "/var/www/templates/admin/groslot.html.twig");
    }
}
