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

/* themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course.html.twig */
class __TwigTemplate_89af5f460449734f22c7d6829fad72666483ed02db77d69e85488a8cfe4822e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 26];
        $filters = ["escape" => 23, "raw" => 38, "t" => 47, "without" => 117];
        $functions = ["drupal_view" => 127];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 't', 'without'],
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
        // line 22
        echo "
<article";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div class=\"single-course\">
    <div class=\"image course-images lightGallery\">
      ";
        // line 26
        if ($this->getAttribute(($context["product"] ?? null), "field_course_images", [])) {
            // line 27
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_images", [])), "html", null, true);
            echo " 
      ";
        }
        // line 29
        echo "      ";
        if (($context["video_link"] ?? null)) {
            // line 30
            echo "          <a class=\"video-link popup-video\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-video-camera\"></i></a>
      ";
        }
        // line 32
        echo "    </div>
    
    <div class=\"course-content\">
      <h1";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
        echo "</h1>
      
      <div class=\"add-to-cart-content-inner\">
        ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])));
        echo "
      </div>
       
      <div class=\"course-meta clearfix\">
        ";
        // line 43
        if ($this->getAttribute(($context["product"] ?? null), "field_course_teacher", [])) {
            // line 44
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-teacher\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Teacher"));
            echo "</div>
              <div class=\"val\">";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_teacher", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if ($this->getAttribute(($context["product"] ?? null), "field_course_category", [])) {
            // line 54
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-category\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Category"));
            echo "</div>
              <div class=\"val\">";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_category", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 61
        echo "  
    
        ";
        // line 63
        if ($this->getAttribute(($context["product"] ?? null), "field_course_duration", [])) {
            // line 64
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-duration\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Duration Time"));
            echo "</div>
              <div class=\"val\">";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_duration", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        if ($this->getAttribute(($context["product"] ?? null), "field_course_level", [])) {
            // line 74
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-level\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Level"));
            echo "</div>
              <div class=\"val\">";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_level", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ($this->getAttribute(($context["product"] ?? null), "field_course_student", [])) {
            // line 84
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-students\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Students"));
            echo "</div>
              <div class=\"val\">";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_student", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 92
        echo "
        ";
        // line 93
        if ($this->getAttribute(($context["product"] ?? null), "variation_price", [])) {
            // line 94
            echo "          <div class=\"meta-item\">
            <div class=\"icon icon-price\"></div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Price"));
            echo "</div>
              <div class=\"val\">";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 102
        echo "          
          ";
        // line 103
        if ($this->getAttribute(($context["product"] ?? null), "field_course_indice", [])) {
            // line 104
            echo "          <div class=\"meta-item\">
            <div class=\"icon\"><i class=\"fas fa-download\" data-fa-transform=\"grow-10\"></i> </div>
            <div class=\"content\">
              <div class=\"lab\">";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Indice Curso (Descarga)"));
            echo "</div>
                <div class=\"val butdown\">";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_indice", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 112
        echo "       
      </div>

      <div class=\"post-content\">
        <div";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "field_course_level", "field_course_features", "field_course_featured", "field_course_teacher", "field_course_duration", "field_course_images", "comment", "field_course_video", "variation_price", "variations", "field_course_category", "field_course_comment", "field_course_indice"), "html", null, true);
        // line 118
        echo "</div>
      </div>
        
      <div class=\"course-features\">
        ";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_features", [])), "html", null, true);
        echo "
      </div>

      <div class=\"course-lessons block-info\">
        <div class=\"block-info-title\">";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Lessons of Course"));
        echo "</div>
        <div class=\"content-inner\">";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("lessons", "lesson_block2"), "html", null, true);
        echo "</div>
      </div>
      
      ";
        // line 130
        if ($this->getAttribute(($context["product"] ?? null), "field_course_comment", [])) {
            // line 131
            echo "        <div id=\"node-single-comment\">
          ";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_comment", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 135
        echo "    

    </div>
  </div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 135,  289 => 132,  286 => 131,  284 => 130,  278 => 127,  274 => 126,  267 => 122,  261 => 118,  259 => 117,  256 => 116,  250 => 112,  243 => 108,  239 => 107,  234 => 104,  232 => 103,  229 => 102,  222 => 98,  218 => 97,  213 => 94,  211 => 93,  208 => 92,  201 => 88,  197 => 87,  192 => 84,  190 => 83,  187 => 82,  180 => 78,  176 => 77,  171 => 74,  169 => 73,  166 => 72,  159 => 68,  155 => 67,  150 => 64,  148 => 63,  144 => 61,  137 => 58,  133 => 57,  128 => 54,  126 => 53,  123 => 52,  116 => 48,  112 => 47,  107 => 44,  105 => 43,  98 => 39,  94 => 38,  86 => 35,  81 => 32,  75 => 30,  72 => 29,  66 => 27,  64 => 26,  58 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course.html.twig");
    }
}
