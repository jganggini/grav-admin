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

/* forms/layouts/field.html.twig */
class __TwigTemplate_6e9170f4cd5cb6a39eedf9a18694a95504766c1c17b628b870230cdec61c5792 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/layouts/field.html.twig"));

        // line 1
        $this->displayBlock('field', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 2
        echo "<div class=\"form-field ";
        echo twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null));
        echo twig_trim_filter(($context["form_field_outer_core"] ?? null));
        echo "\">
  ";
        // line 3
        $this->displayBlock('contents', $context, $blocks);
        // line 51
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 4
        echo "    ";
        if (($context["show_label"] ?? null)) {
            // line 5
            echo "      <div class=\"";
            echo ($context["layout_form_field_outer_label_classes"] ?? null);
            echo "\">";
            // line 6
            echo ($context["form_field_toggleable"] ?? null);
            // line 7
            echo "<label class=\"";
            echo ($context["layout_form_field_label_classes"] ?? null);
            echo ($context["form_field_label_trim"] ?? null);
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [])) {
                echo "for=\"";
                echo ($context["form_field_for"] ?? null);
                echo "\"";
            }
            echo ">";
            // line 8
            $this->displayBlock('label', $context, $blocks);
            // line 18
            echo "</label>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"";
        echo ($context["layout_form_field_outer_data_classes"] ?? null);
        echo "\"
        ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 23
        echo "    >
      ";
        // line 24
        $this->displayBlock('group', $context, $blocks);
        // line 42
        echo "      ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [], "any", true, true)) {
            // line 43
            echo "        <div class=\"";
            echo ($context["form_field_extra_wrapper_classes"] ?? null);
            echo "\">
          <span class=\"form-description\">
            ";
            // line 45
            echo ($context["form_field_description"] ?? null);
            echo "
          </span>
        </div>
      ";
        }
        // line 49
        echo "    </div>
  ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 9
        if (($context["form_field_help"] ?? null)) {
            // line 10
            echo "<span class=\"tooltip\" data-tooltip=\"";
            echo twig_escape_filter($this->env, ($context["form_field_help"] ?? null));
            echo "\">";
            echo ($context["form_field_label"] ?? null);
            echo "</span>";
        } else {
            // line 12
            echo ($context["form_field_label"] ?? null);
        }
        // line 14
        if (($context["form_field_required"] ?? null)) {
            // line 15
            echo "              <span class=\"required\">*</span>";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 22
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 24
    public function block_group($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group"));

        // line 25
        echo "        ";
        $this->displayBlock('input', $context, $blocks);
        // line 41
        echo "      ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 26
        echo "          <div class=\"";
        echo ($context["layout_form_field_wrapper_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo "\">
            ";
        // line 27
        $this->displayBlock('prepend', $context, $blocks);
        // line 28
        echo "            <input
              name=\"";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
              value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "));
        echo "\"
              ";
        // line 31
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 32
        echo "            />
            ";
        // line 33
        $this->displayBlock('append', $context, $blocks);
        // line 34
        echo "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 35
            echo "            <div class=\"";
            echo ($context["form_field_inline_error_classes"] ?? null);
            echo "\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 36
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
            </div>
            ";
        }
        // line 39
        echo "          </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 27
    public function block_prepend($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prepend"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 33
    public function block_append($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "append"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/layouts/field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  271 => 33,  260 => 31,  249 => 27,  241 => 39,  235 => 36,  230 => 35,  227 => 34,  225 => 33,  222 => 32,  220 => 31,  216 => 30,  212 => 29,  209 => 28,  207 => 27,  200 => 26,  194 => 25,  187 => 41,  184 => 25,  178 => 24,  167 => 22,  159 => 15,  157 => 14,  154 => 12,  147 => 10,  145 => 9,  139 => 8,  131 => 49,  124 => 45,  118 => 43,  115 => 42,  113 => 24,  110 => 23,  108 => 22,  103 => 21,  98 => 18,  96 => 8,  85 => 7,  83 => 6,  79 => 5,  76 => 4,  70 => 3,  62 => 51,  60 => 3,  54 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block field %}
<div class=\"form-field {{ layout_form_field_outer_classes|trim -}} {{- form_field_outer_core|trim -}}\">
  {% block contents %}
    {% if show_label %}
      <div class=\"{{- layout_form_field_outer_label_classes -}}\">
        {{- form_field_toggleable -}}
        <label class=\"{{ layout_form_field_label_classes }}{{ form_field_label_trim }}\" {% if field.id %}for=\"{{ form_field_for }}\"{% endif %}>
          {%- block label -%}
            {%- if form_field_help -%}
              <span class=\"tooltip\" data-tooltip=\"{{ form_field_help|e }}\">{{ form_field_label|raw }}</span>
            {%- else -%}
              {{ form_field_label|raw }}
            {%- endif -%}
            {%- if form_field_required %}
              <span class=\"required\">*</span>
            {%- endif -%}
          {%- endblock -%}
        </label>
      </div>
    {% endif %}
    <div class=\"{{ layout_form_field_outer_data_classes }}\"
        {% block global_attributes %}{% endblock %}
    >
      {% block group %}
        {% block input %}
          <div class=\"{{ layout_form_field_wrapper_classes }} {{ field.size }}\">
            {% block prepend %}{% endblock prepend %}
            <input
              name=\"{{ (scope ~ field.name)|fieldName }}\"
              value=\"{{ value|join(', ')|e }}\"
              {% block input_attributes %}{% endblock %}
            />
            {% block append %}{% endblock append %}
            {% if inline_errors and errors %}
            <div class=\"{{ form_field_inline_error_classes }}\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first|raw }}</p>
            </div>
            {% endif %}
          </div>
        {% endblock %}
      {% endblock %}
      {% if field.description is defined %}
        <div class=\"{{ form_field_extra_wrapper_classes }}\">
          <span class=\"form-description\">
            {{ form_field_description|raw }}
          </span>
        </div>
      {% endif %}
    </div>
  {% endblock %}
</div>
{% endblock %}
", "forms/layouts/field.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\form\\templates\\forms\\layouts\\field.html.twig");
    }
}
