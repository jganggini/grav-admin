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

/* @Page:C:/wamp64/www/grav-admin/user/pages/01.home/AD-W20200922-1100-PI5 */
class __TwigTemplate_5abca1a71f31555e1199d1dc31aea9305f2ce8186d20414435140de33652e39a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:C:/wamp64/www/grav-admin/user/pages/01.home/AD-W20200922-1100-PI5"));

        // line 1
        echo "<div class=\"grav-youtube\">
    <iframe src=\"https://www.youtube-nocookie.com/embed/kmaBDRgUQYk?color=white&iv_load_policy=3&rel=0&showinfo=0&vq=hd1080\" frameborder=\"0\" allowfullscreen></iframe>
</div>
<p>The <a href=\"https://getgrav.org/downloads/themes\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <code>body_classes</code> for any page.  The theme will merge the combination of the defaults with any <code>body_classes</code> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h2>Body Classes</h2>
<pre><code class=\"language-yaml\">body_classes: \"header-dark header-transparent\"</code></pre>
<p>On a particular page will ensure that page has those options enabled (assuming they are false by default).</p>
<h2>Hero Options</h2>
<p>The hero template allows some options to be set in the page frontmatter. This is used by the modular <code>hero</code> as well as the blog and item templates to provide a more dynamic header.</p>
<pre><code class=\"language-yaml\">hero_classes: text-light title-h1h2 parallax overlay-dark-gradient hero-large
hero_image: road.jpg
hero_align: center</code></pre>
<p>The <code>hero_classes</code> option allows a variety of hero classes to be set dynamically these include:</p>
<ul>
<li><code>text-light</code> | <code>text-dark</code> - Controls if the text should be light or dark depending on the content</li>
<li><code>title-h1h2</code> - Enforced a close matched h1/h2 title pairing</li>
<li><code>parallax</code> - Enables a CSS-powered parallax effect</li>
<li><code>overlay-dark-gradient</code> - Displays a transparent gradient which further darkens the underlying image</li>
<li><code>overlay-light-gradient</code> - Displays a transparent gradient which further lightens the underlying image</li>
<li><code>overlay-dark</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>overlay-light</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>hero-fullscreen</code> | <code>hero-large</code> | <code>hero-medium</code> | <code>hero-small</code> | <code>hero-tiny</code> - Size of the hero block</li>
</ul>
<p>The <code>hero_image</code> should point to an image file in the current page folder.</p>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/grav-admin/user/pages/01.home/AD-W20200922-1100-PI5";
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
        return new Source("<div class=\"grav-youtube\">
    <iframe src=\"https://www.youtube-nocookie.com/embed/kmaBDRgUQYk?color=white&iv_load_policy=3&rel=0&showinfo=0&vq=hd1080\" frameborder=\"0\" allowfullscreen></iframe>
</div>
<p>The <a href=\"https://getgrav.org/downloads/themes\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Quark theme</a> has the ability to allow pages to override some of the default options by letting the user set <code>body_classes</code> for any page.  The theme will merge the combination of the defaults with any <code>body_classes</code> set. This allows you to easily add hero classes to give your blog post some <strong>bling</strong>.</p>
<p>===</p>
<h2>Body Classes</h2>
<pre><code class=\"language-yaml\">body_classes: \"header-dark header-transparent\"</code></pre>
<p>On a particular page will ensure that page has those options enabled (assuming they are false by default).</p>
<h2>Hero Options</h2>
<p>The hero template allows some options to be set in the page frontmatter. This is used by the modular <code>hero</code> as well as the blog and item templates to provide a more dynamic header.</p>
<pre><code class=\"language-yaml\">hero_classes: text-light title-h1h2 parallax overlay-dark-gradient hero-large
hero_image: road.jpg
hero_align: center</code></pre>
<p>The <code>hero_classes</code> option allows a variety of hero classes to be set dynamically these include:</p>
<ul>
<li><code>text-light</code> | <code>text-dark</code> - Controls if the text should be light or dark depending on the content</li>
<li><code>title-h1h2</code> - Enforced a close matched h1/h2 title pairing</li>
<li><code>parallax</code> - Enables a CSS-powered parallax effect</li>
<li><code>overlay-dark-gradient</code> - Displays a transparent gradient which further darkens the underlying image</li>
<li><code>overlay-light-gradient</code> - Displays a transparent gradient which further lightens the underlying image</li>
<li><code>overlay-dark</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>overlay-light</code> - Displays a solid transparent overlay which further darkens the underlying image</li>
<li><code>hero-fullscreen</code> | <code>hero-large</code> | <code>hero-medium</code> | <code>hero-small</code> | <code>hero-tiny</code> - Size of the hero block</li>
</ul>
<p>The <code>hero_image</code> should point to an image file in the current page folder.</p>", "@Page:C:/wamp64/www/grav-admin/user/pages/01.home/AD-W20200922-1100-PI5", "");
    }
}
