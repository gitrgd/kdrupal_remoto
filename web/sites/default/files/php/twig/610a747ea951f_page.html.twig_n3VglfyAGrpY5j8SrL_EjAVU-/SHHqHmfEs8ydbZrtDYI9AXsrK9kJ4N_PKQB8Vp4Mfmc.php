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

/* themes/custom/gavias_edmix/templates/page/page.html.twig */
class __TwigTemplate_b1c26f032dd681bfea20748a97b697a1d3185da67c347660df7ff0bc005d4188 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "include" => 9, "if" => 12];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"body-page gva-body-page\">
\t";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/custom/gavias_edmix/templates/page/page.html.twig", 9)->display($context);
        // line 10
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/gavias_edmix/templates/page/page.html.twig", 10)->display($context);
        // line 11
        echo "\t
   ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 13
            echo "   \t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 18
        echo "\t
\t<div role=\"main\" class=\"main main-page";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null)), "html", null, true);
        echo "\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 23
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 26
        echo "\t

\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 29
            echo "\t\t\t<div class=\"help show hidden\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 37
        echo "
\t\t";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])) {
            // line 39
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 46
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 56
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container container-bg\">
\t\t\t\t";
        // line 61
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/custom/gavias_edmix/templates/page/page.html.twig", 61)->display($context);
        // line 62
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 66
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 72
        echo "
\t\t";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 74
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t
\t\t";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])) {
            // line 84
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 88
        echo "
\t</div>
</div>

";
        // line 92
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/custom/gavias_edmix/templates/page/page.html.twig", 92)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 92,  215 => 88,  209 => 85,  206 => 84,  204 => 83,  201 => 82,  193 => 77,  188 => 74,  186 => 73,  183 => 72,  176 => 68,  172 => 66,  170 => 65,  165 => 62,  163 => 61,  156 => 56,  147 => 50,  141 => 46,  139 => 45,  135 => 43,  129 => 40,  126 => 39,  124 => 38,  121 => 37,  113 => 32,  108 => 29,  106 => 28,  102 => 26,  96 => 24,  93 => 23,  91 => 22,  85 => 19,  82 => 18,  76 => 15,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/page/page.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/page/page.html.twig");
    }
}
