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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/head.htm */
class __TwigTemplate_3e1af53f3041a261c1d5a36ec2ca8f3cf0518e5f71b6fdea9ff707d57583297e extends \Twig\Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "keywords", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">

    <link rel=\"icon\" type=\"image/png\" href=\"#\">


    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/all.min.css", 2 => "assets/css/bootstrapselect.css", 3 => "assets/scss/app.scss"]);
        // line 18
        echo "\" rel=\"stylesheet\"> ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "
    <title>Jegyzetszerver - ";
        // line 20
        $context['__placeholder_title_default_contents'] = null;        ob_start();        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        $context['__placeholder_title_default_contents'] = ob_get_clean();        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('title', $context['__placeholder_title_default_contents']);
        unset($context['__placeholder_title_default_contents']);        echo "</title>
</head>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 23
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 24
                echo "<p data-control=\"flash-message\" class=\"flash-message fade ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 24, $this->source), "html", null, true);
                echo "\" data-interval=\"5\">
    ";
                // line 25
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 25, $this->source), "html", null, true);
                echo "
</p>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  87 => 24,  84 => 23,  77 => 20,  74 => 19,  70 => 18,  68 => 13,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"{{ this.page.description }}\">
    <meta name=\"title\" content=\"{{ this.page.title }}\">
    <meta name=\"keywords\" content=\"{{ this.page.keywords }}\">
    <meta property=\"og:title\" content=\"{{ this.page.title }}\">
    <meta property=\"og:description\" content=\"{{ this.page.description }}\">

    <link rel=\"icon\" type=\"image/png\" href=\"#\">


    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/all.min.css',
            'assets/css/bootstrapselect.css',
            'assets/scss/app.scss',
        ]|theme }}\" rel=\"stylesheet\"> {% styles %}

    <title>Jegyzetszerver - {% placeholder title default %}{{ this.page.title }}{% endplaceholder %}</title>
</head>

{% flash %}
<p data-control=\"flash-message\" class=\"flash-message fade {{ type }}\" data-interval=\"5\">
    {{ message }}
</p>
{% endflash %}", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/head.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 18, "placeholder" => 20, "flash" => 23);
        static $filters = array("escape" => 4, "theme" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'placeholder', 'flash'],
                ['escape', 'theme'],
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
