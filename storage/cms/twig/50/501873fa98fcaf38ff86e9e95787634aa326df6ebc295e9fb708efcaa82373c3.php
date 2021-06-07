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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_7358c30754b074b6fc381982d277de24f117c447644c4b60f975c9644ce70ebc extends \Twig\Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <h3>Regisztráció</h3>

    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerName\">Teljes név</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Adja meg teljes nevét!\" />
        </div>

        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Adja meg email címét\" />
        </div>

        ";
            // line 26
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 27
                echo "            <div class=\"form-group p-2 mb-2\">
                <label for=\"registerUsername\">Felhasználónév</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Adja meg felhasználónevét\" />
            </div>
        ";
            }
            // line 37
            echo "
        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerPassword\">Jelszó</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Válasszon jelszót\" />
        </div>

        <button type=\"submit\" class=\"btn btn-primary mt-2\">Regisztráció</button>

    ";
            // line 50
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 52
            echo "    <!-- Regisztráció jelenlg nem elérhető. -->
";
        }
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  99 => 50,  84 => 37,  72 => 27,  70 => 26,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
    <h3>Regisztráció</h3>

    {{ form_ajax('onRegister') }}

        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerName\">Teljes név</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Adja meg teljes nevét!\" />
        </div>

        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Adja meg email címét\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group p-2 mb-2\">
                <label for=\"registerUsername\">Felhasználónév</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Adja meg felhasználónevét\" />
            </div>
        {% endif %}

        <div class=\"form-group p-2 mb-2\">
            <label for=\"registerPassword\">Jelszó</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Válasszon jelszót\" />
        </div>

        <button type=\"submit\" class=\"btn btn-primary mt-2\">Regisztráció</button>

    {{ form_close() }}
{% else %}
    <!-- Regisztráció jelenlg nem elérhető. -->
{% endif %}
", "/home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/register.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array();
        static $functions = array("form_ajax" => 4, "form_close" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['form_ajax', 'form_close']
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
