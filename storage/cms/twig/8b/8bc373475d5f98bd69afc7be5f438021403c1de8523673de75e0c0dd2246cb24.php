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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet-feltoltese.htm */
class __TwigTemplate_643aa9cc91da1be9ed6ca102258e54036a7827f6c7f229809a17380d58c88b0c extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
<h3 class=\"text-center my-1 pt-5\" style=\"height: 550px;\">Ez az űrlapot csak bejelentkezett oktatók érhetik el.</h3>

";
        }
        // line 6
        echo "
";
        // line 7
        if (($context["user"] ?? null)) {
            // line 8
            echo "
<div class=\"container my-5\">
\t<h1 class=\"font-weight-bold text-center my-3\">Jegyzet feltöltési űrlap</h1>
\t<form data-request=\"onSubmit\" data-request-files data-request-flash>  

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    
    ";
            // line 15
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
    ";
            // line 16
            echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
            echo "

    <div class=\"row d-flex justify-content-center\">
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Cím\" name=\"title\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Szerző\" name=\"author\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Megjelenés éve\" name=\"appearance\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Tárgy\" name=\"subject\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Kar\" name=\"faculty\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<label for=\"floatingTextarea\">Leírás</label>
\t\t<div class=\"form-floating\">
\t\t\t<textarea class=\"form-control\" placeholder=\"leírás\" style=\"height: 100px\" name=\"description\"></textarea>
\t\t</div>
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<div class=\"custom-control custom-switch\">
    \t<label class=\"custom-control-label checkbox-set-value\" for=\"customSwitch1\">Ez a jegyzet egy PDF?</label>
        <input type=\"checkbox\" class=\"custom-control-input checkbox-set-value\" id=\"customSwitch1\" name=\"is_pdf\" value=\"\" name=\"is_pdf\">
    </div>
    <label class=\"custom-control-label checkbox-set-value my-2\">PDF feltöltése:</label>
    <input type=\"file\" name=\"pdf_file\" accept=\"pdf\" placeholder=\"PDF fájl\" class=\"ms-3\"> <br>
    <label class=\"custom-control-label checkbox-set-value\">Borítókép feltöltése:</label>
    <input type=\"file\" class=\"ms-3 my-2\" name=\"image\" accept=\"image/*\" data-request=\"onImageUpload\" placeholder=\"Borítókép\" data-request-files data-request-flash>
\t</div>
\t<div id=\"imageResult\" class=\"preview-image-div\">Nincs előnézet</div>
    </br>
    <div class=\"col-4 d-flex justify-content-center\">
\t\t<button type=\"submit\" class=\"btn btn-primary my-5 text-center\">Jegyzet beküldése</button>
\t</div>
\t</div>
\t</form>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet-feltoltese.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  61 => 15,  52 => 8,  50 => 7,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}

<h3 class=\"text-center my-1 pt-5\" style=\"height: 550px;\">Ez az űrlapot csak bejelentkezett oktatók érhetik el.</h3>

{% endif %}

{% if user %}

<div class=\"container my-5\">
\t<h1 class=\"font-weight-bold text-center my-3\">Jegyzet feltöltési űrlap</h1>
\t<form data-request=\"onSubmit\" data-request-files data-request-flash>  

    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    
    {{ form_token() }}
    {{ form_sessionKey() }}

    <div class=\"row d-flex justify-content-center\">
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Cím\" name=\"title\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Szerző\" name=\"author\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Megjelenés éve\" name=\"appearance\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Tárgy\" name=\"subject\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Kar\" name=\"faculty\">
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<label for=\"floatingTextarea\">Leírás</label>
\t\t<div class=\"form-floating\">
\t\t\t<textarea class=\"form-control\" placeholder=\"leírás\" style=\"height: 100px\" name=\"description\"></textarea>
\t\t</div>
\t</div>
\t<div class=\"col-8 my-2\">
\t\t<div class=\"custom-control custom-switch\">
    \t<label class=\"custom-control-label checkbox-set-value\" for=\"customSwitch1\">Ez a jegyzet egy PDF?</label>
        <input type=\"checkbox\" class=\"custom-control-input checkbox-set-value\" id=\"customSwitch1\" name=\"is_pdf\" value=\"\" name=\"is_pdf\">
    </div>
    <label class=\"custom-control-label checkbox-set-value my-2\">PDF feltöltése:</label>
    <input type=\"file\" name=\"pdf_file\" accept=\"pdf\" placeholder=\"PDF fájl\" class=\"ms-3\"> <br>
    <label class=\"custom-control-label checkbox-set-value\">Borítókép feltöltése:</label>
    <input type=\"file\" class=\"ms-3 my-2\" name=\"image\" accept=\"image/*\" data-request=\"onImageUpload\" placeholder=\"Borítókép\" data-request-files data-request-flash>
\t</div>
\t<div id=\"imageResult\" class=\"preview-image-div\">Nincs előnézet</div>
    </br>
    <div class=\"col-4 d-flex justify-content-center\">
\t\t<button type=\"submit\" class=\"btn btn-primary my-5 text-center\">Jegyzet beküldése</button>
\t</div>
\t</div>
\t</form>
</div>

{% endif %}", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet-feltoltese.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array();
        static $functions = array("form_token" => 15, "form_sessionKey" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['form_token', 'form_sessionKey']
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
