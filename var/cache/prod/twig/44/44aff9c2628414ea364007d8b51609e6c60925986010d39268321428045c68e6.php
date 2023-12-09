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

/* security/login.html.twig */
class __TwigTemplate_4b609b8c01f85a50536b5f8f31ab7a55b971f8510a4067b83d45abbdbff6576e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "        
       
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
    
      </ul>
      <form class=\"d-flex\">
         <li class=\"nav-item d-flex\">
              <b>  <a class=\"nav-link\" style=\"color:white;\" href=\"/register\">Inscription</a></b>
            </li>
      </form>
    </div>
  </div>  
</nav>

                   
<br/><br/>
<br/><br/>
<br/><br/>

 <div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Se connecter :</h1> </center>
                        <hr />
                                                    <form method=\"post\">
                                ";
        // line 44
        if (($context["error"] ?? null)) {
            // line 45
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 47
        echo "                        <br/>
                                
                                <div class=\"mb-3 input-group\">
                                    <input type=\"email\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email\" autocomplete=\"email\" required autofocus>
                                </div>
                                <br/>
                                <div class=\"mb-2 input-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"mot de passe\" autocomplete=\"current-password\" required>
                                </div>
                                <br/>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"row mt-3\">
                                        <button type=\"submit\" class=\" btn btn-success buttonSubmitLogin btn-block\">Se connecter</button>
                                </div>
                                
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<br><br><br>
<script>



   
</script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  119 => 50,  114 => 47,  108 => 45,  106 => 44,  69 => 9,  65 => 8,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/templates/security/login.html.twig");
    }
}
