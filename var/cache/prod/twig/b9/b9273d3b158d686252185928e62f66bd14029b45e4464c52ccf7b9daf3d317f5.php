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

/* registration/register.html.twig */
class __TwigTemplate_8cd3fa176f0acd73dd635e7aaf84c7e60b05b5968e3ceb081ebb519858d760da extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "S'inscrire";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
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
                  <b>  <a class=\"nav-link\" style=\"color:white;\" href=\"/login\">Se connecter</a></b>
            </li>
      </form>
    </div>
  </div>  
</nav>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Inscription</h1> </center>
                        <hr />
                        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
                            <div class=\"mb-3 form-group\">
                               
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "surname", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                               
                           
                            <div class=\"mb-3 input-group\">
                            
                                 ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "name", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                              
                            </div>
                            <div class=\"mb-3 input-group\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "address", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\">
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "country", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-7\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "aboutUs", [], "any", false, false, false, 66), 'label', ["label" => "Comment avez-vous entendu parlez du jeu ?"]);
        echo "
                            </div>
                            </div>
                            
                            <div class=\"col-5\">
                            <div class=\"mt-3 mb-3 input-group\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "aboutUs", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"mb-3 input-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                             <div>
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 80), "first", [], "any", false, false, false, 80), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\" mb-3 input-group\">
                           
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 84), "first", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"input-group\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 87), "second", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 92), 'widget');
        echo "
                            </div>
                            </div>
                          <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 97), 'label', ["label" => "Accepter les conditions d'utilisation"]);
        echo "
                            </div>
                                
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "newsletter", [], "any", false, false, false, 105), 'widget');
        echo "
                            </div>
                            </div>
                            <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "newsletter", [], "any", false, false, false, 110), 'label', ["label" => "J’accepte de recevoir la newsletter de TeaTipTop"]);
        echo "
                                
                            </div>
                            </div>
                            </div>
                            <hr />
                            <div class=\"mt-3 row\" >
                            
                            <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"S'inscrire\" />
                            </div>

                                                        <div class=\"mt-3 row\" >
                            
                            
                            <a href=\"/login\" class=\"btn btn-primary btn-block\" >J'ai déja un compte</a>
                            </div>
                        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 126,  209 => 110,  201 => 105,  190 => 97,  182 => 92,  174 => 87,  168 => 84,  161 => 80,  155 => 77,  147 => 72,  138 => 66,  128 => 59,  120 => 54,  112 => 49,  105 => 45,  96 => 39,  90 => 36,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/var/www/templates/registration/register.html.twig");
    }
}
