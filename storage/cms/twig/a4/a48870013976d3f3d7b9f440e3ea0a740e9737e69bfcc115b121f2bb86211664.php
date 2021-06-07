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

/* /home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzetek.htm */
class __TwigTemplate_eda3e6833802520c41c0c34fcb6e2de2d4e2e353cebcb620130cb4b125c44743 extends \Twig\Template
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
        echo " 
<div class=\"container my-5\">
\t<div class=\"row\">
\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t<input type=\"search\" id=\"form1\" class=\"form-control\" name=\"properties\" placeholder=\"Keresés...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t

\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<div class=\"input-group d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<select class=\"selectpicker w-100\" data-show-subtext=\"true\" data-live-search=\"true\" name=\"faculty\" placeholder=\"Kar\">
\t\t\t\t\t\t\t<option value=\"\">Bármelyik</option>
\t\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faculties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faculty"]) {
            // line 19
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faculty"], "faculty", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faculty"], "faculty", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faculty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<div class=\"input-group d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<select class=\"selectpicker w-100\" data-show-subtext=\"true\" data-live-search=\"true\" name=\"subject\" placeholder=\"Tárgy\">
\t\t\t\t\t\t\t<option value=\"\">Bármelyik</option>
\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subject"], "subject", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subject"], "subject", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</form>
\t</div>
</div>


";
        // line 49
        echo "  

";
        // line 51
        $context["notes"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "notes", [], "any", false, false, true, 51);
        // line 52
        echo "
<div class=\"container\">
\t<div class=\"row\">

\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 57
            echo "\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px;\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-center align-items-center\">
\t\t\t\t<img src=\"themes/jegyzetszerver/assets/images/Programozás%20I.-II..jpg\" class=\"img-fluid\" alt=\"...\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Cím: ";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["note"], "title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p>Szerző: ";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["note"], "author", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Tárgy: ";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["note"], "subject", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>";
            // line 68
            echo (((twig_get_attribute($this->env, $this->source, $context["note"], "is_pdf", [], "any", false, false, true, 68) == 1)) ? ("A jegyzet elérhető PDF-ben") : ("PDF-ben nem elérhető"));
            echo "</p>
 \t\t\t\t\t<p>Kar: ";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["note"], "faculty", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><a href=\"/jegyzet/";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["note"], "slug", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo " \">Jegyzet adatlapjának megtekintése</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t\t";
            // line 84
            echo "\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t</div>

</div>

";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "lastPage", [], "any", false, false, true, 92) > 1)) {
            // line 93
            echo "
<div class=\"row pagination mb-5 mt-5 m-0 p-0\">
    <div class=\"col-12 d-flex justify-content-center\">
\t        ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "currentPage", [], "any", false, false, true, 96) > 1)) {
                // line 97
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "previousPageUrl", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "\" rel=\"prev\" class=\"d-inline\">
\t\t\t\t<button type=\"button\" class=\"btn paginer-next-prev\">
\t            Előző <i class=\"fas fa-chevron-left\"></i></button>
\t\t\t\t</a>
\t        ";
            }
            // line 102
            echo "\t
\t        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "lastPage", [], "any", false, false, true, 103)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 104
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "url", [0 => $context["page"]], "method", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "\" class=\"d-inline\">
\t\t\t\t<button type=\"button\"
\t                    class=\"btn rounded-circle paginer-btn mx-1 ";
                // line 106
                echo (((twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "currentPage", [], "any", false, false, true, 106) == $context["page"])) ? ("active-btn") : (null));
                echo "\">
\t\t\t\t\t";
                // line 107
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 107, $this->source), "html", null, true);
                echo "
\t            </button>
\t\t\t\t</a>
\t
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t
\t        ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "hasMorePages", [], "any", false, false, true, 113)) {
                // line 114
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["notes"] ?? null), "nextPageUrl", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "\" rel=\"next\" class=\"d-inline\">
\t\t\t\t<button type=\"button\"class=\"btn paginer-next-prev\">
\t            Következő <i class=\"fas fa-chevron-right\"></i></button>
\t\t\t\t</a>
\t        ";
            }
            // line 118
            echo "   \t\t

    </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzetek.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 118,  237 => 114,  235 => 113,  232 => 112,  221 => 107,  217 => 106,  211 => 104,  207 => 103,  204 => 102,  195 => 97,  193 => 96,  188 => 93,  186 => 92,  180 => 88,  171 => 84,  163 => 70,  159 => 69,  155 => 68,  151 => 67,  147 => 66,  143 => 65,  133 => 57,  129 => 56,  123 => 52,  121 => 51,  117 => 49,  98 => 32,  87 => 30,  83 => 29,  73 => 21,  62 => 19,  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# ez a kereső form #} 
<div class=\"container my-5\">
\t<div class=\"row\">
\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t\t\t\t<input type=\"search\" id=\"form1\" class=\"form-control\" name=\"properties\" placeholder=\"Keresés...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t

\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<div class=\"input-group d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<select class=\"selectpicker w-100\" data-show-subtext=\"true\" data-live-search=\"true\" name=\"faculty\" placeholder=\"Kar\">
\t\t\t\t\t\t\t<option value=\"\">Bármelyik</option>
\t\t\t\t\t\t\t{% for faculty in faculties %}
\t\t\t\t\t\t\t\t<option value=\"{{ faculty.faculty }}\">{{ faculty.faculty }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<div class=\"input-group d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<select class=\"selectpicker w-100\" data-show-subtext=\"true\" data-live-search=\"true\" name=\"subject\" placeholder=\"Tárgy\">
\t\t\t\t\t\t\t<option value=\"\">Bármelyik</option>
\t\t\t\t\t\t\t{% for subject in subjects %}
\t\t\t\t\t\t\t\t<option value=\"{{ subject.subject }}\">{{ subject.subject }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-10 text-center\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</form>
\t</div>
</div>


{# ez listázza ki a találatokat #}  

{% set notes = searchForm.notes %}

<div class=\"container\">
\t<div class=\"row\">

\t\t{% for note in notes %}
\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 mb-3\">
\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px;\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-center align-items-center\">
\t\t\t\t<img src=\"themes/jegyzetszerver/assets/images/Programozás%20I.-II..jpg\" class=\"img-fluid\" alt=\"...\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Cím: {{ note.title }}</h5>
\t\t\t\t\t<p>Szerző: {{ note.author }}</p>
\t\t\t\t\t<p>Tárgy: {{ note.subject }}</p>
\t\t\t\t\t<p>{{ note.is_pdf == 1 ? 'A jegyzet elérhető PDF-ben' : 'PDF-ben nem elérhető' }}</p>
 \t\t\t\t\t<p>Kar: {{ note.faculty }}</p>
\t\t\t\t\t<p><a href=\"/jegyzet/{{ note.slug }} \">Jegyzet adatlapjának megtekintése</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t\t{#\t
\t\t\t\t\tCím: {{ note.title }} </br>
\t\t\t\t\tSzerző: {{ note.author }} </br>
\t\t\t\t\tTárgy: {{ note.subject }} </br>
\t\t\t\t\tPDF ? {{ note.is_pdf }} </br>
\t\t\t\t\tKar: {{ note.faculty }} </br>
\t\t\t\t\t<img src=\"{{ note.image }}\" alt=\"borító kép\"></img> </br>
\t\t\t\t\tURL: <a href=\"/jegyzet/{{ note.slug }} \">Jegyzet adatlapjának megtekintése</a> </br>
\t\t\t\t\t
\t\t\t\t\t<hr> #}\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t{% endfor %}
\t</div>

</div>

{% if notes.lastPage > 1 %}

<div class=\"row pagination mb-5 mt-5 m-0 p-0\">
    <div class=\"col-12 d-flex justify-content-center\">
\t        {% if notes.currentPage > 1 %}
\t\t\t\t<a href=\"{{ notes.previousPageUrl }}\" rel=\"prev\" class=\"d-inline\">
\t\t\t\t<button type=\"button\" class=\"btn paginer-next-prev\">
\t            Előző <i class=\"fas fa-chevron-left\"></i></button>
\t\t\t\t</a>
\t        {% endif %}
\t
\t        {% for page in range(1, notes.lastPage) %}
\t\t\t\t<a href=\"{{ notes.url(page) }}\" class=\"d-inline\">
\t\t\t\t<button type=\"button\"
\t                    class=\"btn rounded-circle paginer-btn mx-1 {{ notes.currentPage == page ? 'active-btn' : null }}\">
\t\t\t\t\t{{ page }}
\t            </button>
\t\t\t\t</a>
\t
\t        {% endfor %}
\t
\t        {% if notes.hasMorePages %}
\t\t\t\t<a href=\"{{ notes.nextPageUrl }}\" rel=\"next\" class=\"d-inline\">
\t\t\t\t<button type=\"button\"class=\"btn paginer-next-prev\">
\t            Következő <i class=\"fas fa-chevron-right\"></i></button>
\t\t\t\t</a>
\t        {% endif %}   \t\t

    </div>
</div>

{% endif %}", "/home/igenyesh/jegyzet.igenyeshonlap.hu/themes/jegyzetszerver/pages/jegyzetek.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18, "set" => 51, "if" => 92);
        static $filters = array("escape" => 19);
        static $functions = array("range" => 103);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['range']
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
