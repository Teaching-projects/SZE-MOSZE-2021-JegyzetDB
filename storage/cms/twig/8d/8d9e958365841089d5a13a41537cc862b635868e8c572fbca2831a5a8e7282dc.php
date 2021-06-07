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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/footer.htm */
class __TwigTemplate_6804711de6bf5170e70387d302ceed87155ade1d1645ae953d6817c3e4a146ba extends \Twig\Template
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
        echo "<!-- Footer -->
<footer class=\"text-center text-lg-start bg-footer text-muted\">
  <!-- Section: Social media -->
  <div class=\"container\">
  \t<div class=\"row d-flex justify-content-center\">
  \t\t<div class=\"col-6 text-center text-white\">
  \t\t\t<h1 class=\"font-weight-bold bottom-border p-3\">Elérhetőség</h1>
  \t\t\t<p class=\"font-weight-bold mt-3\">Cím: 9026 Győr, Egyetem tér 1.</p>
  \t\t\t<p class=\"font-weight-bold\">Tel: +36 96/503-457</p>
  \t\t\t<p class=\"font-weight-bold\">Fax: +36 96/503-458 </p>
  \t\t\t<p class=\"font-weight-bold mb-3\">Email: info@univgyor.hu</p>
  \t\t</div>
  \t</div>
  </div>
  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"text-center text-lg-start bg-footer text-muted\">
  <!-- Section: Social media -->
  <div class=\"container\">
  \t<div class=\"row d-flex justify-content-center\">
  \t\t<div class=\"col-6 text-center text-white\">
  \t\t\t<h1 class=\"font-weight-bold bottom-border p-3\">Elérhetőség</h1>
  \t\t\t<p class=\"font-weight-bold mt-3\">Cím: 9026 Győr, Egyetem tér 1.</p>
  \t\t\t<p class=\"font-weight-bold\">Tel: +36 96/503-457</p>
  \t\t\t<p class=\"font-weight-bold\">Fax: +36 96/503-458 </p>
  \t\t\t<p class=\"font-weight-bold mb-3\">Email: info@univgyor.hu</p>
  \t\t</div>
  \t</div>
  </div>
  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/partials/site/footer.htm", "");
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
