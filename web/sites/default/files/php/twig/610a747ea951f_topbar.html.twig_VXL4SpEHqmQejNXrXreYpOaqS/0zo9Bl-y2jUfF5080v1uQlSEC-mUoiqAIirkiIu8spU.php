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

/* themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig */
class __TwigTemplate_5339e1d088195e14af327740c3616b817b1571abd13b4222bb921aba37160040 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7];
        $filters = ["escape" => 8, "t" => 47, "raw" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
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
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-6 col-xs-6\">
        <div class=\"social-list\">
          ";
        // line 7
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])) {
            // line 8
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 9
        echo " 
          ";
        // line 10
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])) {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 12
        echo " 
          ";
        // line 13
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])) {
            // line 14
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 15
        echo " 
          ";
        // line 16
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 18
        echo " 
          ";
        // line 19
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])) {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 21
        echo " 
          ";
        // line 22
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])) {
            // line 23
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 24
        echo " 
          ";
        // line 25
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])) {
            // line 26
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 27
        echo " 
          ";
        // line 28
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])) {
            // line 29
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 30
        echo " 
          ";
        // line 31
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])) {
            // line 32
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 33
        echo " 
          ";
        // line 34
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])) {
            // line 35
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 36
        echo "  
          ";
        // line 37
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])) {
            // line 38
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 39
        echo "  
        </div>
      </div>

      <div class=\"topbar-right col-sm-6 col-xs-6\">
        
        ";
        // line 45
        if ((($context["custom_account"] ?? null) == "")) {
            // line 46
            echo "          <ul class=\"gva_topbar_menu\">
            <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_link"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
            echo "</a></li>
            <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["register_link"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Register"));
            echo "</a></li>
          </ul>  
        ";
        } else {
            // line 51
            echo "          <ul class=\"gva_topbar_menu login\">
            <li>";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["custom_account"] ?? null)));
            echo "</li>
          </ul>  
        ";
        }
        // line 54
        echo "  
      </div>

    </div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 54,  211 => 52,  208 => 51,  200 => 48,  194 => 47,  191 => 46,  189 => 45,  181 => 39,  175 => 38,  173 => 37,  170 => 36,  164 => 35,  162 => 34,  159 => 33,  153 => 32,  151 => 31,  148 => 30,  142 => 29,  140 => 28,  137 => 27,  131 => 26,  129 => 25,  126 => 24,  120 => 23,  118 => 22,  115 => 21,  109 => 20,  107 => 19,  104 => 18,  98 => 17,  96 => 16,  93 => 15,  87 => 14,  85 => 13,  82 => 12,  76 => 11,  74 => 10,  71 => 9,  65 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig");
    }
}
