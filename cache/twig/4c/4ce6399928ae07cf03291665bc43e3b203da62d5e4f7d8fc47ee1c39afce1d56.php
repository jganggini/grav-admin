<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/text/edit_list.html.twig */
class __TwigTemplate_234221048a518d451f845287ea0fb86edf3f4baf2847d87c119d68d159edfeba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/text/edit_list.html.twig"));

        // line 1
        if (($context["link"] ?? null)) {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "));
            echo "</a>";
        } else {
            // line 4
            echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "));
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/text/edit_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if link -%}
    <a href=\"{{ link }}\">{{ value|join(', ')|e }}</a>
{%- else -%}
    {{ value|join(', ')|e }}
{%- endif %}
", "forms/fields/text/edit_list.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\text\\edit_list.html.twig");
    }
}
