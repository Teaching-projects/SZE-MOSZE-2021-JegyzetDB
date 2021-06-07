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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/profil.htm */
class __TwigTemplate_df259db0e9e6db5470e8e6058f309029a575c4c11f38773c0cfa259c883737d2 extends \Twig\Template
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
            echo "<div class=\"container my-5\">
    <div class=\"row\">

        <div class=\"col-md-6 col-lg-6 mb-2\">
            <h3>Belépés</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

        <div class=\"col-md-6 col-lg-6 mb-5 mb-2\">
            ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "        </div>

    </div>
    
    <div class=\"row\">
    \t<div class=\"col-lg-6 col-sm-12\">
\t\t\t<div id=\"partialUserResetForm\">
\t\t\t    ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["resetPassword"] ?? null), "code", [], "any", false, false, true, 19) == null)) {
                // line 20
                echo "\t\t\t        ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["resetPassword"] ?? null) . "::restore")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 21
                echo "\t\t\t    ";
            } else {
                // line 22
                echo "\t\t\t        ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["resetPassword"] ?? null) . "::reset")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 23
                echo "\t\t\t    ";
            }
            // line 24
            echo "\t\t\t</div>    \t\t
    \t</div>
    </div>
</div>

";
        } else {
            // line 30
            echo "<div class=\"container my-5\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t    ";
            // line 33
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t";
            // line 36
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 37
            echo "\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t";
            // line 39
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 40
            echo "\t\t</div>
\t</div>
</div>


";
        }
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/profil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  117 => 39,  113 => 37,  109 => 36,  105 => 34,  101 => 33,  96 => 30,  88 => 24,  85 => 23,  80 => 22,  77 => 21,  72 => 20,  70 => 19,  61 => 12,  57 => 11,  52 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}
<div class=\"container my-5\">
    <div class=\"row\">

        <div class=\"col-md-6 col-lg-6 mb-2\">
            <h3>Belépés</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-md-6 col-lg-6 mb-5 mb-2\">
            {% partial account ~ '::register' %}
        </div>

    </div>
    
    <div class=\"row\">
    \t<div class=\"col-lg-6 col-sm-12\">
\t\t\t<div id=\"partialUserResetForm\">
\t\t\t    {% if resetPassword.code == null %}
\t\t\t        {% partial resetPassword ~ '::restore' %}
\t\t\t    {% else %}
\t\t\t        {% partial resetPassword ~ '::reset' %}
\t\t\t    {% endif %}
\t\t\t</div>    \t\t
    \t</div>
    </div>
</div>

{% else %}
<div class=\"container my-5\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t    {% partial account ~ '::activation_check' %}
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t{% partial account ~ '::update' %}
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t{% partial account ~ '::deactivate_link' %}
\t\t</div>
\t</div>
</div>


{% endif %}", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/profil.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
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
