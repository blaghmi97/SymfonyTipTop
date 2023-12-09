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

/* employe/gains.html.twig */
class __TwigTemplate_eda623d83a0d3c4c907423de4295c3a18e3a56c83c03ee697ac1853d995efe5f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "employe/gains.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gains";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
      
            
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

<br>
<br>
<br>

    <div class=\"container\">






        <div class=\"justify-content-center row\">
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 46), "flashbag", [], "any", false, false, false, 46), "get", [0 => "Success"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> ";
            // line 48
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4></center>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 ";
        // line 74
        if (($context["wins"] ?? null)) {
            echo " 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["wins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 85
                echo "            <tr>
                <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 86), "title", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                <td>";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 87) == 0)) {
                    echo "<span class=\"badge bg-warning\">Gains pas encore distribué</span> ";
                } else {
                    echo "<span class=\"badge bg-info\">Gains est déja distribué</span>";
                }
                echo "</td>
                <td>";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 88) == 0)) {
                    // line 89
                    echo "                <form method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                <input type=\"hidden\" value=\"";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 90), "html", null, true);
                    echo "\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gaint</button>
                </form>
        ";
                }
                // line 94
                echo "                
                
                </td>
    
            </tr>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "        </tbody>
    </table>
 ";
        }
        // line 103
        echo " 

</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<br><br><br>

<br><br>

<br>



";
    }

    public function getTemplateName()
    {
        return "employe/gains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 103,  198 => 101,  186 => 94,  179 => 90,  174 => 89,  172 => 88,  164 => 87,  160 => 86,  157 => 85,  153 => 84,  140 => 74,  115 => 51,  105 => 48,  102 => 47,  98 => 46,  58 => 8,  54 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employe/gains.html.twig", "/var/www/templates/employe/gains.html.twig");
    }
}
