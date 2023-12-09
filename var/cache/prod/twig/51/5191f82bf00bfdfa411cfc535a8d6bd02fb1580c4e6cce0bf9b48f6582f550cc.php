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
class __TwigTemplate_95ebc08bacfb009eacd612faeaabe882865ac49d75e4fa3556d6685bf99f1eb9 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
  

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta charset=\"UTF-8\" />
        <title> AtypikHouse | Votre plateforme pour résérver votre habitat partout en europe </title>
        <meta name=\"description\" content=\"Jeu concours The TipTop.\"/>
        <meta name=\"keywords\" content=\"TipTop ,Thé, jeu concours\"/>
        <meta name=\"ROBOTS\" content=\"INDEX, FOLLOW\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"The TipTop\">




        <link rel=\"icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/the-logo.png"), "html", null, true);
        echo "\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </head>

    <body>
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        <footer style=\"position:relative; bottom:0; width:100%;  margin-top:90px; opacity:0.85;\">
        <div class=\"container-fluid\" style=\"padding: 30px 30px ; background: #000000;\" align=\"center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4 col-4\">
         <p style=\"color:white;\"> 15 Rue de l'union 75015 Paris,France </p>
            </div>

            <div class=\"col-md-4 col-4\">
            <p style=\"color:white;\">thetiptop@gmail.com</p>
                 
             </div>
             <div class=\"col-md-4 col-4\">
             <a href=\"/mentions\" style=\"color:white;\" >CGU et CGV</a>   
                </div>  
                
           

      </div>
        <div class=\"col-md-12 col-12\" style=\"background: #ffffff;\">
            <p style=\"color: black; \" align=\"center\">
                &copy; 2022 : Thé TipTop
            </p>
        </div>
             </div>
             </div>
    </footer>
    
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thé TipTop | Jeu Concours";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
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
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        
        ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  163 => 50,  158 => 45,  154 => 44,  133 => 25,  129 => 24,  122 => 7,  89 => 51,  87 => 50,  82 => 47,  80 => 44,  77 => 43,  75 => 24,  70 => 22,  65 => 20,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
