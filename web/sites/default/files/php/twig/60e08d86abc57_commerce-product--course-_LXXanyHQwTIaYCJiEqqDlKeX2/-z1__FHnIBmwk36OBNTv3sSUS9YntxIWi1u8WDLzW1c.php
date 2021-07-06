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

/* themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course--teaser.html.twig */
class __TwigTemplate_4a09cce3587f5f0c4279129bf6bb92dd6601556a12e28c898fa98bf28775b3f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 26];
        $filters = ["escape" => 25, "t" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 22
        echo "<div class=\"course-block\">      
  <div class=\"course-block-inner\">
    <div class=\"image lightGallery\">
      ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_images", [])), "html", null, true);
        echo "
      ";
        // line 26
        if (($context["video_link"] ?? null)) {
            // line 27
            echo "        <a class=\"video-link popup-video\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-video-camera\"></i></a>
      ";
        }
        // line 29
        echo "    </div>
    <div class=\"course-content\">
      <div class=\"content-inner\">
        <h4 class=\"title\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a> </h4> 
        <div class=\"teacher\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_course_teacher", [])), "html", null, true);
        echo "</div>
      </div>   
      <div class=\"content-action\">
        <div class=\"left\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Apply now"));
        echo "</a></div>
        <div class=\"right\">
            ";
        // line 38
        if (( !$this->getAttribute(($context["product"] ?? null), "variation_price", []) == 0)) {
            echo "  
            <div class=\"course-price\">
            ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
            echo " </div>
            ";
        } else {
            // line 42
            echo "            <div class=\"course-price gratis\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("GRATIS"));
            echo "</div>
            ";
        }
        // line 44
        echo "        </div>
          
          
      </div> 
    </div>
  </div>
</div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  106 => 42,  101 => 40,  96 => 38,  89 => 36,  83 => 33,  77 => 32,  72 => 29,  66 => 27,  64 => 26,  60 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course--teaser.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/commerce-node/commerce-product--course--teaser.html.twig");
    }
}
