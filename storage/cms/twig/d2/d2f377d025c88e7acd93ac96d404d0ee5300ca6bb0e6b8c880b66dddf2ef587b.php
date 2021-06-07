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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolat.htm */
class __TwigTemplate_b13db58f84ba136015e6747edfd16f02e5a47afe57f2c194f9337274cb74758b extends \Twig\Template
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
        echo "<div class=\"container\">
\t<h1 class=\"text-center mt-4\">Kérdéseivel keressen minket bátran!</h1>
\t
\t\t<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
\t\t\t<div class=\"row d-flex justify-content-center\">
\t<div class=\"col-8\">
    <label>Név</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" required name=\"name\">
\t</div>

\t\t</div>
\t\t<div class=\"col-8\">
    <label>Email cím</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"email\" name=\"email\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" >
\t  
\t</div>
\t<span data-validate-for=\"email\"></span>
\t\t</div>
\t\t<div class=\"col-8\">
    <label>Tárgy</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" required>
\t</div>
\t\t</div>
\t<div class=\"col-8\">
\t\t<label>Üzenet</label>
\t\t<div class=\"form-floating\">
\t\t<textarea class=\"form-control\" placeholder=\"Üzenet\" row=\"4\" id=\"floatingTextarea\" style=\"height: 100px\" required></textarea>
\t\t</div>
\t</div>
\t<div class=\"col-8 d-flex justify-content-center mb-4\">
    <button type=\"submit\" data-attach-loading class=\"btn btn-secondary my-3\">Küldés</button>
    </div>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    \t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolat.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
\t<h1 class=\"text-center mt-4\">Kérdéseivel keressen minket bátran!</h1>
\t
\t\t<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
\t\t\t<div class=\"row d-flex justify-content-center\">
\t<div class=\"col-8\">
    <label>Név</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" required name=\"name\">
\t</div>

\t\t</div>
\t\t<div class=\"col-8\">
    <label>Email cím</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"email\" name=\"email\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" >
\t  
\t</div>
\t<span data-validate-for=\"email\"></span>
\t\t</div>
\t\t<div class=\"col-8\">
    <label>Tárgy</label>
\t<div class=\"input-group my-2\">
\t  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\" required>
\t</div>
\t\t</div>
\t<div class=\"col-8\">
\t\t<label>Üzenet</label>
\t\t<div class=\"form-floating\">
\t\t<textarea class=\"form-control\" placeholder=\"Üzenet\" row=\"4\" id=\"floatingTextarea\" style=\"height: 100px\" required></textarea>
\t\t</div>
\t</div>
\t<div class=\"col-8 d-flex justify-content-center mb-4\">
    <button type=\"submit\" data-attach-loading class=\"btn btn-secondary my-3\">Küldés</button>
    </div>
    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>
    \t</form>
\t</div>
</div>", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolat.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
