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

/* employe/index.html.twig */
class __TwigTemplate_394fc2e80c8e4cc85da97c3933df792e1c58ee6bdb575fa45fb0a366be09eec9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "employe/index.html.twig", 1);
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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\">
  <div class=\"container\">


   
       

            ";
        // line 18
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18), "roles", [], "any", false, false, false, 18)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN")) {
            // line 19
            echo "
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
          ";
        } else {
            // line 41
            echo "                          <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                          
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
        }
        // line 56
        echo "      </ul>
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


";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 73), "flashbag", [], "any", false, false, false, 73), "get", [0 => "Erreur"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            echo "<div class=\"alert alert-dismissible alert-danger\">
  <h4 class=\"alert-heading\"> ";
            // line 75
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo " 

   <div class=\"container\">
        <div class=\"justify-content-center row\">
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
                               </div>
                             </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
</div>
<br><br> <br> <br> <br>
<br> <br> <br><br><br>
<br> <br>  <br>  <br> <br> 
<br> 

       
   


";
    }

    public function getTemplateName()
    {
        return "employe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 78,  147 => 75,  144 => 74,  140 => 73,  121 => 56,  104 => 41,  80 => 19,  78 => 18,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employe/index.html.twig", "/var/www/templates/employe/index.html.twig");
    }
}
