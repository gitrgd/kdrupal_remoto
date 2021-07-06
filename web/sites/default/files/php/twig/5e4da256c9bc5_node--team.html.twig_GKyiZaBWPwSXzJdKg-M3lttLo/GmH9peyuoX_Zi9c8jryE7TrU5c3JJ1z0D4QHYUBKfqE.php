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

/* themes/custom/gavias_edmix/templates/node/node--team.html.twig */
class __TwigTemplate_5032b10b6e674558ac1bb9ad66ad8c696a16e243ce83ba7cbdef4d73314fe255 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 11, "set" => 43];
        $filters = ["escape" => 3, "e" => 4, "t" => 4, "clean_class" => 46, "without" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'e', 't', 'clean_class', 'without'],
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
        // line 1
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  <div class=\"team-block team-teaser-1\">
    <div class=\"team-image\">";
            // line 3
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
      <a class=\"team-email\" href=\"mailto:";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_email", []), "value", [])));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Email"));
            echo "</a>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>   
      <div class=\"team-job\">";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"team-body\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
      <div class=\"socials\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_link", []), "value", [])));
                echo "\">
            <i class=\"";
                // line 13
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_icon", []), "value", [])));
                echo "\"></i>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo " 
      </div>
    </div>
  </div>  

";
        } elseif ((        // line 20
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 21
            echo "
  <div class=\"team-block team-teaser-2\">
    <div class=\"team-image\">";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
      <a class=\"team-email\" href=\"mailto:";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_email", []), "value", [])));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Email"));
            echo "</a>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>   
      <div class=\"team-job\">";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"team-body\">";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
      <div class=\"socials\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_link", []), "value", [])));
                echo "\">
            <i class=\"";
                // line 33
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_icon", []), "value", [])));
                echo "\"></i>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " 
      </div>
    </div>
  </div>  

";
        } else {
            // line 41
            echo "
";
            // line 43
            $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 46
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(            // line 47
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(            // line 48
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(            // line 49
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((            // line 50
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 7 => "clearfix"];
            // line 54
            echo "
<article";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-single-page\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-3 col-xs-12\">
        <div class=\"team-image\">";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "</div>
        <div class=\"team-contact margin-top-10\">
            <div class=\"heading\">";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_contact", [])), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 65
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_link", []), "value", [])));
                echo "\">
                  <i class=\"";
                // line 66
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_icon", []), "value", [])));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " 
            </div>
          </div>
      </div>
      <div class=\"col-md-9 col-sm-9 col-xs-12\">
        <div class=\"team-name clearfix\">
          <div class=\"name\">";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</div>
          <div class=\"job\">";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
        </div> 
        <div class=\"team-description\">";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_description", [])), "html", null, true);
            echo "</div>
        <div class=\"team-info\">
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_education", [])), "html", null, true);
            echo "</div>
          </div>
        </div>
        <div";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
        </div>
        <div class=\"team-quote\"> ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", [])), "html", null, true);
            echo " </div>
      </div>
     
    ";
            // line 90
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 91
                echo "      <div id=\"node-single-comment\">
        ";
                // line 92
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 94
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 101
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 101,  282 => 94,  276 => 92,  273 => 91,  271 => 90,  265 => 87,  260 => 85,  256 => 84,  250 => 81,  246 => 80,  240 => 77,  235 => 75,  231 => 74,  223 => 68,  214 => 66,  209 => 65,  205 => 64,  200 => 62,  196 => 61,  191 => 59,  184 => 55,  181 => 54,  179 => 50,  178 => 49,  177 => 48,  176 => 47,  175 => 46,  174 => 43,  171 => 41,  163 => 35,  154 => 33,  149 => 32,  145 => 31,  140 => 29,  136 => 28,  130 => 27,  122 => 24,  118 => 23,  114 => 21,  112 => 20,  105 => 15,  96 => 13,  91 => 12,  87 => 11,  82 => 9,  78 => 8,  72 => 7,  64 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/node/node--team.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/node/node--team.html.twig");
    }
}
