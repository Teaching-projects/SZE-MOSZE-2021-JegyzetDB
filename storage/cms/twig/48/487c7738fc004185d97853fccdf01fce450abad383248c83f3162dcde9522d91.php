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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/header.htm */
class __TwigTemplate_d805071adbc57e471ed7ff1eec1e65c16587296899f6100b1dd0ff46c8e72f7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-gray text-center sticky-top\">
  <div class=\"container-fluid\">
  \t<img src=\"/themes/jegyzetszerver/assets/images/universitas_logo.png\" class=\"img-fluid me-5\">
    <a class=\"navbar-brand text-white\" href=\"/\">Kezdőlap</a>
    <button class=\"navbar-toggler my-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/jegyzetek\">Jegyzetek</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/kapcsolat\">Kapcsolat</a>
      </li>
      
      ";
        // line 17
        if (($context["user"] ?? null)) {
            // line 18
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/jegyzet-feltoltese\">Jegyzet feltöltés</a>
      </li>    
      ";
        }
        // line 22
        echo "      ";
        if ( !($context["user"] ?? null)) {
            // line 23
            echo "      
        <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"/profilom\"> Belépés </a></li>
        
      ";
        } else {
            // line 27
            echo "      
      

        <li class=\"nav-item px-lg-2\"><a class=\"nav-link text-dark  nav-animation\" href=\"/profilom\"> Profilom </a></li>
        <li class=\"nav-item px-lg-2\"><a class=\"nav-link text-dark  nav-animation sign-out-item\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"> Kijelentkezés 
        <i class=\"fas fa-sign-out-alt\"></i></a></li>

      ";
        }
        // line 35
        echo "    </ul>

    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  74 => 27,  68 => 23,  65 => 22,  59 => 18,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-gray text-center sticky-top\">
  <div class=\"container-fluid\">
  \t<img src=\"/themes/jegyzetszerver/assets/images/universitas_logo.png\" class=\"img-fluid me-5\">
    <a class=\"navbar-brand text-white\" href=\"/\">Kezdőlap</a>
    <button class=\"navbar-toggler my-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/jegyzetek\">Jegyzetek</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/kapcsolat\">Kapcsolat</a>
      </li>
      
      {% if user %}
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/jegyzet-feltoltese\">Jegyzet feltöltés</a>
      </li>    
      {% endif %}
      {% if not user %}
      
        <li class=\"nav-item\"><a class=\"nav-link text-white\" href=\"/profilom\"> Belépés </a></li>
        
      {% else %}
      
      

        <li class=\"nav-item px-lg-2\"><a class=\"nav-link text-dark  nav-animation\" href=\"/profilom\"> Profilom </a></li>
        <li class=\"nav-item px-lg-2\"><a class=\"nav-link text-dark  nav-animation sign-out-item\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"> Kijelentkezés 
        <i class=\"fas fa-sign-out-alt\"></i></a></li>

      {% endif %}
    </ul>

    </div>
  </div>
</nav>", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
