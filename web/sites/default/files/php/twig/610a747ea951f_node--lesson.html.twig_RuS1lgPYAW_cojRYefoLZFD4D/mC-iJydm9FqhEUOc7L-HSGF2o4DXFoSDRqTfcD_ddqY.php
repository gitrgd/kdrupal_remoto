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

/* themes/custom/gavias_edmix/templates/node/node--lesson.html.twig */
class __TwigTemplate_110cc4f3e1a2d4d36efb4b56a152edf291c9c8c144fac975bb64a4770306d331 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 8];
        $filters = ["escape" => 10, "t" => 16, "raw" => 43];
        $functions = ["drupal_view" => 57];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't', 'raw'],
                ['drupal_view']
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "clearfix"];
        // line 7
        echo "<!-- Start Display course for teaser page -->
";
        // line 8
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <div class=\"lesson-block lesson-item\">
      <span class=\"lesson-seccion\">";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_seccion", []), "value", [])), "html", null, true);
            echo " </span>
    
    <span class=\"lesson-content\">
        <i class=\"icon ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lesson_icon"] ?? null)), "html", null, true);
            echo "\"> </i>
      <span class=\"lesson-title\"><a href=\"";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
        ";
            // line 15
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", []), "value", []))) {
                // line 16
                echo "          <a class=\"gva-pajax\" data-href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
                echo "\" rel=\"bookmark\"><span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Preview"));
                echo "</span><span style=\"color: red;\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["role_admin"] ?? null)), "html", null, true);
                echo "</span></a>
        ";
            }
            // line 18
            echo "      </span>
      <span class=\"lesson-duration\">";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_lesson_time", []), "value", [])), "html", null, true);
            echo "</span>
    </span>
  </div>
<!-- End Display course for teaser page -->
";
        } else {
            // line 24
            echo "<!-- Start Display course for detail page -->
<article";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "addClass", [0 => "lesson-single"], "method")), "html", null, true);
            echo ">
  <div class=\"row\">
    <div class=\"col-sm-8 col-xs-12\">
      <div class=\"hidden\">
        <div id=\"preview-lesson-content\">
          <div class=\"clearfix\">
            <div class=\"post-title\">";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
            <div class=\"post-content\">
              ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "
            </div>  
          </div>
        </div> 
      </div> 
      <div class=\"single-lesson-content\">
      <span class=\"lesson-curso\">";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_lecture_course", [])), "html", null, true);
            echo " </span>
      <span class=\"lesson-seccion\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_seccion", []), "value", [])), "html", null, true);
            echo " </span>
        <h1 class=\"post-title\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
        <div class=\"post-content\">
          ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["lesson_content"] ?? null)));
            echo "
        </div> 
      </div> 
    </div>
    <div class=\"col-sm-4 col-xs-12 lessons\">
      <div class=\"back-to-course\"><span class=\"btc-text\">";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to the course"));
            echo "</span> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_lecture_course", [])), "html", null, true);
            echo " </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\">
          <h4 class=\"panel-title\">
            <a role=\"button\" data-toggle=\"collapse\" href=\"#panel-lession-1\" class=\"\">";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Lessons"));
            echo " <i class=\"icon gv-icon-160\"></i></a>
          </h4>
        </div>
        <div id=\"panel-lession-1\" class=\"panel-collapse collapse in\">
            <div class=\"panel-body\">
              ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("lessons", "lesson_block", $this->sandbox->ensureToStringAllowed(($context["course_id"] ?? null))), "html", null, true);
            echo "
            </div>
        </div>
      </div>
    </div>
  </div>  
</article>
<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/node/node--lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  160 => 52,  151 => 48,  143 => 43,  138 => 41,  134 => 40,  130 => 39,  121 => 33,  116 => 31,  107 => 25,  104 => 24,  96 => 19,  93 => 18,  83 => 16,  81 => 15,  75 => 14,  71 => 13,  65 => 10,  60 => 8,  57 => 7,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/node/node--lesson.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/node/node--lesson.html.twig");
    }
}
