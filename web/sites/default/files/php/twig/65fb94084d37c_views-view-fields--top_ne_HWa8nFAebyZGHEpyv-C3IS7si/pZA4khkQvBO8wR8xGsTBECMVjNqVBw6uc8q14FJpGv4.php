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

/* themes/custom/silver/templates/views-view-fields--top_news_slider--entertainment.html.twig */
class __TwigTemplate_2a75e47bc48cc2900b46eab3f88885e7 extends Template
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
        echo "<div class=\"position-relative\">
    ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_blog_image", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
    <div class=\"overlay position-relative bg-light\">
        <div class=\"mb-2\" style=\"font-size: 13px;\">
            <a href=\"\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_category", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</a>
            <span class=\"px-1\">/</span>
            <span>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "changed", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span>
        </div>
        <a class=\"h4 m-0\" href=\"\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</a>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/silver/templates/views-view-fields--top_news_slider--entertainment.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 7,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"position-relative\">
    {{ fields.field_blog_image.content }}
    <div class=\"overlay position-relative bg-light\">
        <div class=\"mb-2\" style=\"font-size: 13px;\">
            <a href=\"\">{{ fields.field_category.content}}</a>
            <span class=\"px-1\">/</span>
            <span>{{ fields.changed.content }}</span>
        </div>
        <a class=\"h4 m-0\" href=\"\">{{ fields.title.content}}</a>
    </div>
</div>", "themes/custom/silver/templates/views-view-fields--top_news_slider--entertainment.html.twig", "/var/www/html/web/themes/custom/silver/templates/views-view-fields--top_news_slider--entertainment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
