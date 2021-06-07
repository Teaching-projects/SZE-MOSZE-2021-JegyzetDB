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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet.htm */
class __TwigTemplate_7a9147ea5e0f552b33b5a8f753bdafa489afca511acc0e97cc6489b07ee228f0 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
<div class=\"container\">
\t<div class=\"row d-flex justify-content-center my-5\">
\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t";
        // line 8
        if (($context["record"] ?? null)) {
            // line 9
            echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 1000px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"/themes/jegyzetszerver/assets/images/Programozás%20I.-II..jpg\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Szerző: ";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "author", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "is_pdf", [], "any", false, false, true, 18) == 1)) {
                // line 19
                echo "\t\t\t\t\t\t\t\tPDF formátumban elérhető: Igen <br>
\t\t\t\t\t\t\t\t";
            } else {
                // line 21
                echo "\t\t\t\t\t\t\t\tPDF formátumban elérhető: Nem <br>
\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Tárgy: ";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "subject", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Kar:  ";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "faculty", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "pdf_file", [], "any", false, false, true, 25), "path", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">PDF jegyzet megtekintése</a></p>
\t\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 27, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  96 => 27,  91 => 25,  87 => 24,  83 => 23,  80 => 22,  76 => 21,  72 => 19,  70 => 18,  66 => 17,  62 => 16,  53 => 9,  51 => 8,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

<div class=\"container\">
\t<div class=\"row d-flex justify-content-center my-5\">
\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t{% if record %}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 1000px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"/themes/jegyzetszerver/assets/images/Programozás%20I.-II..jpg\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ record.title }}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Szerző: {{ record.author }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">{% if record.is_pdf == 1 %}
\t\t\t\t\t\t\t\tPDF formátumban elérhető: Igen <br>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tPDF formátumban elérhető: Nem <br>
\t\t\t\t\t\t\t\t{% endif %}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Tárgy: {{ record.subject }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Kar:  {{ record.faculty }}</p>
\t\t\t\t\t\t\t<p><a href=\"{{record.pdf_file.path }}\">PDF jegyzet megtekintése</a></p>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ notFoundMessage }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzet.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
