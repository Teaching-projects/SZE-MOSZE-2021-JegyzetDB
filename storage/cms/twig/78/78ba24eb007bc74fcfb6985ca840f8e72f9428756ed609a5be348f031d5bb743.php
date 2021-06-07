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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_e760be6392fbbc3dec2139fbb9c236cde5b0e4e8570617db8bce04e879294401 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

    <div class=\"form-group p-2 mb-2\">
        <label for=\"userSigninLogin\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 4, $this->source), "html", null, true);
        echo "</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Adja meg ";
        // line 10
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 10, $this->source)), "html", null, true);
        echo "ét\" />
    </div>

    <div class=\"form-group p-2 mb-2\">
        <label for=\"userSigninPassword\">Jelszó</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Adja meg jelszavát!\" />
    </div>

    ";
        // line 23
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 24
            echo "    <div class=\"form-group p-2 mb-2\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Bejelentkezve maradok</label>
        </div>
    </div>
    ";
        }
        // line 30
        echo "
    <button type=\"submit\" class=\"btn btn-block py-2 mb-3 package-btn mt-1\">Belépés</button>

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  80 => 30,  72 => 24,  70 => 23,  54 => 10,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSignin') }}

    <div class=\"form-group p-2 mb-2\">
        <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Adja meg {{ loginAttributeLabel|lower }}ét\" />
    </div>

    <div class=\"form-group p-2 mb-2\">
        <label for=\"userSigninPassword\">Jelszó</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Adja meg jelszavát!\" />
    </div>

    {% if rememberLoginMode == 'ask' %}
    <div class=\"form-group p-2 mb-2\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Bejelentkezve maradok</label>
        </div>
    </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-block py-2 mb-3 package-btn mt-1\">Belépés</button>

{{ form_close() }}
", "/home/igenyesh/jegyzet.igenyeshonlap.hu/plugins/rainlab/user/components/account/signin.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 4, "lower" => 10);
        static $functions = array("form_ajax" => 1, "form_close" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'lower'],
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
