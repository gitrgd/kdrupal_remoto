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

/* themes/custom/gavias_edmix/templates/node/node--event.html.twig */
class __TwigTemplate_988222e214063e39a7cc2e642d84b23c87a70fb53501f1222533b1e2d5da5693 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 15];
        $filters = ["clean_class" => 5, "escape" => 16, "date" => 21, "without" => 79, "raw" => 98];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'date', 'without', 'raw'],
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 7 => "clearfix"];
        // line 13
        echo "
<!-- Start Display article for teaser page -->
";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  <article";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <div class=\"event-block\">
      <div class=\"event-image text-center\">
        ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_image", [])), "html", null, true);
            echo "
        <div class=\"date\"> 
          <span class=\"day\">";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_start", []), "value", [])), "j"), "html", null, true);
            echo "</span><span class=\"month\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_start", []), "value", [])), "F"), "html", null, true);
            echo "</span>
        </div>
      </div>
      <div class=\"event-content\">  
        <div class=\"event-info\">
          <div class=\"title\"><a href=\"";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></div>
          ";
            // line 27
            if ($this->getAttribute(($context["content"] ?? null), "field_event_address", [])) {
                // line 28
                echo "            <div class=\"address\"><i class=\"fa fa-map-marker\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_address", []), "value", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 30
            echo "          <div class=\"body\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
        </div>
      </div>  
    </div>   
  </article>  

";
        } elseif ((        // line 36
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 37
            echo "
  <div class=\"event-block-2\">
    <div class=\"event-image text-center\">
      ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_image", [])), "html", null, true);
            echo " 
      <div class=\"event-date\">
        <span class=\"date\">";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["event_date"] ?? null), "day", [])), "html", null, true);
            echo "</span>
        <span class=\"month\">";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["event_date"] ?? null), "month", [])), "html", null, true);
            echo "</span>
      </div>
    </div>
    <div class=\"content-inner clearfix\">
      <div class=\"event-content-inner\">
        <div class=\"event-content\">
          <h3";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
            echo "><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>    
          <div class=\"event-meta\">
            <span class=\"event-time\"> ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_time", []), "value", [])), "html", null, true);
            echo " </span>&nbsp;&nbsp;-&nbsp;&nbsp;<span class=\"event-address\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_address", []), "value", [])), "html", null, true);
            echo " </span> 
          </div>
          <div class=\"event-line\"></div>  
          <div class=\"event-description\">
            ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>  
  </div>

";
        } else {
            // line 63
            echo "
<article";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => $this->getAttribute(($context["classes"] ?? null), "addClass", [0 => "node-detail"], "method")], "method")), "html", null, true);
            echo ">
  <div class=\"post-block event-full\">
    <div class=\"post-thumbnail\">
      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_image", [])), "html", null, true);
            echo "
      <div class=\"event-info clearfix\">
        <div class=\"date clearfix\"><i class=\"fa fa-calendar\"></i>";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_start", [])), "html", null, true);
            echo " <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-clock-o\"></i></span> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_time", [])), "html", null, true);
            echo "</div>
        <div class=\"address clearfix\"><i class=\"fa fa-map-marker\"></i>";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_event_address", [])), "html", null, true);
            echo "</div>
      </div>
    </div>
    <div class=\"post-content\">
      ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
         <h1";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
      ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "        
      
      <div";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_event_image", "field_event_start", "field_event_address", "field_event_time", "field_event_map", "comment"), "html", null, true);
            echo "
      </div>
      <script type=\"text/javascript\" src=\"//maps.googleapis.com/maps/api/js?key&ver=4.9.8&libraries=places,weather,panoramio&language=en\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_uri"] ?? null)), "html", null, true);
            echo "/vendor/gmap3.js\"></script>
      <script type=\"text/javascript\" src=\"";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_uri"] ?? null)), "html", null, true);
            echo "/vendor/jquery.ui.map.min.js\"></script>
      <div class=\"map margin-top-30\">
        ";
            // line 85
            $context["link"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_map", []), "value", []);
            // line 86
            echo "        <div id=\"map_canvas_event\" class=\"map_canvas\" style=\"width:100%; height:400px;\"></div>
          ";
            // line 87
            $context["style_map"] = "[{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#d3d3d3\"}]},{\"featureType\":\"transit\",\"stylers\":[{\"color\":\"#808080\"},{\"visibility\":\"off\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#b3b3b3\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"weight\":1.8}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#d7d7d7\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ebebeb\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#a7a7a7\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#efefef\"}]},{\"featureType\":\"road\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#696969\"}]},{\"featureType\":\"administrative\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#737373\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"poi\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#d6d6d6\"}]},{\"featureType\":\"road\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{},{\"featureType\":\"poi\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#dadada\"}]}]";
            // line 88
            echo "          <script type=\"text/javascript\">
            jQuery(document).ready(function(\$) {
              var stmapdefault = '";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
            echo "';
              var marker = {position:stmapdefault}
              var content = '";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "<br>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_address", []), "value", [])), "html", null, true);
            echo "';
              jQuery('#map_canvas_event').gmap({
                'scrollwheel':false,
                'zoom': 14,
                'center': stmapdefault,
                'mapTypeId':google.maps.MapTypeId.ROADMAP,
                'styles': ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["style_map"] ?? null)));
            echo ",
                'callback': function() {
                   var self = this;
                   self.addMarker(marker).click(function(){
                      if(content){
                         self.openInfoWindow({'content': content}, self.instance.markers[0]);
                      }                     
                   });
                },
                panControl: true
              });
            });
          </script>
      </div>
      
      ";
            // line 113
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 114
                echo "        <div id=\"node-single-comment\">
          ";
                // line 115
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 117
            echo " 

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/node/node--event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 117,  280 => 115,  277 => 114,  275 => 113,  257 => 98,  246 => 92,  241 => 90,  237 => 88,  235 => 87,  232 => 86,  230 => 85,  225 => 83,  221 => 82,  215 => 79,  211 => 78,  206 => 76,  200 => 75,  196 => 74,  189 => 70,  183 => 69,  178 => 67,  172 => 64,  169 => 63,  158 => 55,  149 => 51,  140 => 49,  131 => 43,  127 => 42,  122 => 40,  117 => 37,  115 => 36,  105 => 30,  99 => 28,  97 => 27,  91 => 26,  81 => 21,  76 => 19,  70 => 16,  66 => 15,  62 => 13,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/node/node--event.html.twig", "/Users/rafaelgato/sitios/kdrupal_des/web/themes/custom/gavias_edmix/templates/node/node--event.html.twig");
    }
}
