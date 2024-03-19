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

/* themes/custom/silver/templates/page--front.html.twig */
class __TwigTemplate_78f2ae2758e6ead9bae553f3f1a225ca extends Template
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
        // line 46
        echo "<div class=\"container-fluid\">
        <div class=\"row align-items-center bg-light px-lg-5\">
            <div class=\"col-12 col-md-8\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                        <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                            <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a></div>
                            <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 text-right d-none d-md-block\">
                    Monday, January 01, 2045
                </div>
            </div>
            <div class=\"row align-items-center py-2 px-lg-5\">
                <div class=\"col-lg-4\">
                    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-8 text-center text-lg-right\">
                    ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_image", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    <!-- Navbar Start -->
    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
                ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_bar", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
                <div class=\"input-group ml-auto\" style=\"width: 100%; max-width: 300px;\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Keyword\">
                    <div class=\"input-group-append\">
                        <button class=\"input-group-text text-secondary\"><i
                                class=\"fa fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    
    <!-- Top News Slider Start -->
    ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_news_slider", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
    <!-- Top News Slider End -->

    <!-- Main News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mainslider", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "categories", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Featured News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\"> 
          ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <!-- Featured News Slider End -->

     <!-- Category News Slider Start -->
    <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Business</h3>
                    </div>
                    ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "business", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Technology</h3>
                    </div>
                    ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "technology", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
<!-- Category News Slider End -->

<!-- Category News Slider Start -->
    <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Entertainment</h3>
                    </div>
                    ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "business", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Sports</h3>
                    </div>
                    ";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "technology", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    
    <!-- Category News Slider End -->

</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/silver/templates/page--front.html.twig";
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
        return array (  174 => 149,  165 => 143,  147 => 128,  138 => 122,  122 => 109,  109 => 99,  103 => 96,  92 => 88,  75 => 74,  64 => 66,  58 => 63,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"container-fluid\">
        <div class=\"row align-items-center bg-light px-lg-5\">
            <div class=\"col-12 col-md-8\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                        <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                            <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a></div>
                            <div class=\"text-truncate\"><a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 text-right d-none d-md-block\">
                    Monday, January 01, 2045
                </div>
            </div>
            <div class=\"row align-items-center py-2 px-lg-5\">
                <div class=\"col-lg-4\">
                    {{ page.logo }}
                </div>
                <div class=\"col-lg-8 text-center text-lg-right\">
                    {{ page.top_image }}
                </div>
            </div>
        </div>
    <!-- Navbar Start -->
    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
                {{ page.nav_bar }}
                <div class=\"input-group ml-auto\" style=\"width: 100%; max-width: 300px;\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Keyword\">
                    <div class=\"input-group-append\">
                        <button class=\"input-group-text text-secondary\"><i
                                class=\"fa fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    
    <!-- Top News Slider Start -->
    {{ page.top_news_slider }}
    <!-- Top News Slider End -->

    <!-- Main News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    {{ page.mainslider }}
                </div>
                <div class=\"col-lg-4\">
                    {{ page.categories }}
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Featured News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\"> 
          {{ page.featured }}
        </div>
    </div>
    <!-- Featured News Slider End -->

     <!-- Category News Slider Start -->
    <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Business</h3>
                    </div>
                    {{ page.business }}
                </div>
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Technology</h3>
                    </div>
                    {{ page.technology }}
                </div>
            </div>
        </div>
    </div>
<!-- Category News Slider End -->

<!-- Category News Slider Start -->
    <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Entertainment</h3>
                    </div>
                    {{ page.business }}
                </div>
                <div class=\"col-lg-6 py-3\">
                    <div class=\"bg-light py-2 px-4 mb-3\">
                        <h3 class=\"m-0\">Sports</h3>
                    </div>
                    {{ page.technology }}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Category News Slider End -->

</div>", "themes/custom/silver/templates/page--front.html.twig", "/var/www/html/web/themes/custom/silver/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 63);
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
