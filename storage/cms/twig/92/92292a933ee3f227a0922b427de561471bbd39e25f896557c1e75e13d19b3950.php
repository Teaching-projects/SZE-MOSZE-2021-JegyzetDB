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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolati-urlap.htm */
class __TwigTemplate_72a8136e295c9a75b6c96ec0c3475d29e89d475317bbb98d4d6e843ef90b4c76 extends \Twig\Template
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
        echo "Valami ilyesmi design: https://colorlib.com/wp/bootstrap-contact-form/

<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    <label>Your name</label>
    <input type=\"text\" name=\"name\">
    <span data-validate-for=\"name\">Hey! How about inputing your name.</span>

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    <span data-validate-for=\"email\"></span>


    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\" data-attach-loading>Send</button>

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>

    <div class=\"flash error\">
        Ooops. Something went wrong please check the requiered fields.
    </div>

    <div class=\"flash success\">
        Your message has been sent. Thank you.
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolati-urlap.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Valami ilyesmi design: https://colorlib.com/wp/bootstrap-contact-form/

<form data-request=\"contactform::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    <label>Your name</label>
    <input type=\"text\" name=\"name\">
    <span data-validate-for=\"name\">Hey! How about inputing your name.</span>

    <label>Your email</label>
    <input type=\"email\" name=\"email\">
    <span data-validate-for=\"email\"></span>


    <label>Your message</label>
    <textarea name=\"content\"></textarea>

    <button type=\"submit\" data-attach-loading>Send</button>

    <div class=\"alert alert-danger\" data-validate-error>
        <p data-message></p>
    </div>

    <div class=\"flash error\">
        Ooops. Something went wrong please check the requiered fields.
    </div>

    <div class=\"flash success\">
        Your message has been sent. Thank you.
    </div>
</form>", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/kapcsolati-urlap.htm", "");
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
