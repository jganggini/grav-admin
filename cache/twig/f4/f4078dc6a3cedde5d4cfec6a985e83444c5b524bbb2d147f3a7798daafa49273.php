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

/* @Page:C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/control */
class __TwigTemplate_6a7c91ef529bd3177b2c4ae82483896b7f88abb63ba2e24b9fe77de10892ca6e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/control"));

        // line 1
        echo "<p>The <a href=\"/grav-admin/arquitectura-digital/devops\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <kbd>Ctrl + S</kbd> for any page.  The theme will merge the combination of the defaults with any `<kbd>Ctrl + S</kbd> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h1><strong>CONTROL</strong> Space</h1>
<h2>Arquitectura Digital</h2>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/control";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>The <a href=\"/grav-admin/arquitectura-digital/devops\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <kbd>Ctrl + S</kbd> for any page.  The theme will merge the combination of the defaults with any `<kbd>Ctrl + S</kbd> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h1><strong>CONTROL</strong> Space</h1>
<h2>Arquitectura Digital</h2>", "@Page:C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/control", "");
    }
}
