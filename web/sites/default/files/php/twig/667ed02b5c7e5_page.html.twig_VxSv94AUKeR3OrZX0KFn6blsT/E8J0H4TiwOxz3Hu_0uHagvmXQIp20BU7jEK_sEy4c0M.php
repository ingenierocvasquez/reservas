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

/* themes/construction_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_3fc2ce426c8f6d8617441d6be968431d extends Template
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
        // line 60
        echo "

<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 76) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 76))) {
            // line 77
            echo "        <div class=\"col-md-9 menu-wrap\">
          ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 78)) {
                // line 79
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 81
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81)) {
                // line 82
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "        </div>
      ";
        }
        // line 86
        echo "
    </div>
  </div>
</div>
<!-- End: Header -->


<!-- Start: Slides -->
";
        // line 94
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 95
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 99
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 99, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 105
        echo "<!-- End: Slides -->


<!--Start: Top Message -->
";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 109)) {
            // line 110
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 116
        echo "<!--End: Top Message -->


<!-- Start: Top widget -->
";
        // line 120
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 120) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 120)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 120))) {
            // line 121
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
      ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 123)) {
                // line 124
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 128
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 130)) {
                // line 131
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 131, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 133
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 133)) {
                // line 134
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 134, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 136
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 136)) {
                // line 137
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 137, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 139
            echo "        </div>
    </div>
  </div>
";
        }
        // line 143
        echo "<!--End: Top widget -->

    
<!--Start: Highlighted -->
";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 147)) {
            // line 148
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 154
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 158) &&  !($context["is_front"] ?? null))) {
            // line 159
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 167
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <div class=\"row layout\">
        <!--- Start: Left SideBar -->
        ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 176)) {
            // line 177
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 177, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 183
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 186)) {
            // line 187
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 187, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">

              <!--Start: Breadcrumb -->
              ";
            // line 191
            if ( !($context["is_front"] ?? null)) {
                // line 192
                echo "                <div class=\"row\">
                  <div class=\"col-md-12\">";
                // line 193
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
                echo "</div>
                </div>
              ";
            }
            // line 196
            echo "              <!--End: Breadcrumb -->
              
              ";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "
              
            </div>              
          </div>
        ";
        }
        // line 203
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206)) {
            // line 207
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 207, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 213
        echo "        <!-- End: Right SideBar -->
        
      </div>
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 223
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 223) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 223)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 223))) {
            // line 224
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 228
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 228)) {
                // line 229
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 230
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 233
            echo "
      <div class=\"row features-list\">
        ";
            // line 235
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 235)) {
                // line 236
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 236, $this->source), "html", null, true);
                echo ">
            ";
                // line 237
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 240
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 240)) {
                // line 241
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 241, $this->source), "html", null, true);
                echo ">
            ";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 245
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 245)) {
                // line 246
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 246, $this->source), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "      </div>
    </div>
  </div>
";
        }
        // line 254
        echo "<!--End: Features -->


<!-- Start: Updates widgets -->
";
        // line 258
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 258) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 258))) {
            // line 259
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container-\">

      ";
            // line 263
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 263)) {
                // line 264
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 265
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 268
            echo "
      <div class=\"row updates-list\">    
        ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 270)) {
                // line 271
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 271, $this->source), "html", null, true);
                echo ">
            ";
                // line 272
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 275
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 275)) {
                // line 276
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 276, $this->source), "html", null, true);
                echo ">
            ";
                // line 277
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 280
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 280)) {
                // line 281
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 281, $this->source), "html", null, true);
                echo ">
            ";
                // line 282
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 285
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 285)) {
                // line 286
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 286, $this->source), "html", null, true);
                echo ">
            ";
                // line 287
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 290
            echo "      </div>
    </div>
  </div>
";
        }
        // line 294
        echo "<!--End: Updates widgets -->


<!-- Start: Middle widgets -->
";
        // line 298
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 298) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 298)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 298)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 298))) {
            // line 299
            echo "  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 302
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 302)) {
                // line 303
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 304
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 307
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 309)) {
                // line 310
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 310, $this->source), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 314)) {
                // line 315
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 315, $this->source), "html", null, true);
                echo ">
            ";
                // line 316
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 316), 316, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 319
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 319)) {
                // line 320
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 320, $this->source), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 324
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 324)) {
                // line 325
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 325, $this->source), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "      </div>
    </div>
  </div>
";
        }
        // line 333
        echo "<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->
";
        // line 337
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 337) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 337)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 337)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 337))) {
            // line 338
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 341
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 341)) {
                // line 342
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 343
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 343), 343, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 346
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 348)) {
                // line 349
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 349, $this->source), "html", null, true);
                echo ">
            ";
                // line 350
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 350), 350, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 353
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 353)) {
                // line 354
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 354, $this->source), "html", null, true);
                echo ">
            ";
                // line 355
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 357
            echo "       
        ";
            // line 358
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 358)) {
                // line 359
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 359, $this->source), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 363
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 363)) {
                // line 364
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 364, $this->source), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 368
            echo "      </div>
    </div>
  </div>
";
        }
        // line 372
        echo "<!--End: Bottom widgets -->


<!-- Start: Clients -->
";
        // line 376
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 376)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    ";
            // line 378
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 378)) {
                // line 379
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 380
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 380), 380, $this->source), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 383
            echo "    <div class=\"container\">
      ";
            // line 384
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 388
        echo "<!--End: Clients -->


<!-- Start: Footer widgets -->
";
        // line 392
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 392) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 392)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 392))) {
            // line 393
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      ";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 395)) {
                // line 396
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 397
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 397), 397, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 400
            echo "      <div class=\"row\">
        ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 401)) {
                // line 402
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 402, $this->source), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 406)) {
                // line 407
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 407, $this->source), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 408), 408, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 411)) {
                // line 412
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 412, $this->source), "html", null, true);
                echo ">
            ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 416
            echo "      </div>
    </div>
  </div>
";
        }
        // line 420
        echo "<!--End: Footer widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 426
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 427
        if (($context["show_social_icon"] ?? null)) {
            // line 428
            echo "        <p class=\"social-media\">
          ";
            // line 429
            if (($context["facebook_url"] ?? null)) {
                // line 430
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 430, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 432
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 433
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 433, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 435
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 436
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 436, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 438
            echo "          ";
            if (($context["instagram_url"] ?? null)) {
                // line 439
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 439, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
          ";
            }
            // line 441
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 442
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 442, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 444
            echo "        </p>
      ";
        }
        // line 446
        echo "      ";
        if (($context["show_credit_link"] ?? null)) {
            // line 447
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 449
        echo "  </div>
</div>
<!-- End: Copyright -->





";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "show_slideshow", "slider_content", "topwidget_class", "sidebarfirst", "contentlayout", "sidebarsecond", "features_first_class", "features_class", "updates_class", "midwidget_class", "bottom_class", "footer_class", "show_social_icon", "facebook_url", "twitter_url", "linkedin_url", "instagram_url", "rss_url", "show_credit_link"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/construction_zymphonies_theme/templates/layout/page.html.twig";
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
        return array (  863 => 449,  859 => 447,  856 => 446,  852 => 444,  846 => 442,  843 => 441,  837 => 439,  834 => 438,  828 => 436,  825 => 435,  819 => 433,  816 => 432,  810 => 430,  808 => 429,  805 => 428,  803 => 427,  799 => 426,  791 => 420,  785 => 416,  779 => 413,  774 => 412,  771 => 411,  765 => 408,  760 => 407,  757 => 406,  751 => 403,  746 => 402,  744 => 401,  741 => 400,  735 => 397,  732 => 396,  730 => 395,  726 => 393,  724 => 392,  718 => 388,  711 => 384,  708 => 383,  702 => 380,  699 => 379,  697 => 378,  692 => 376,  686 => 372,  680 => 368,  674 => 365,  669 => 364,  666 => 363,  660 => 360,  655 => 359,  653 => 358,  650 => 357,  644 => 355,  639 => 354,  636 => 353,  630 => 350,  625 => 349,  623 => 348,  619 => 346,  613 => 343,  610 => 342,  608 => 341,  603 => 338,  601 => 337,  595 => 333,  589 => 329,  583 => 326,  578 => 325,  575 => 324,  569 => 321,  564 => 320,  561 => 319,  555 => 316,  550 => 315,  547 => 314,  541 => 311,  536 => 310,  534 => 309,  530 => 307,  524 => 304,  521 => 303,  519 => 302,  514 => 299,  512 => 298,  506 => 294,  500 => 290,  494 => 287,  489 => 286,  486 => 285,  480 => 282,  475 => 281,  472 => 280,  466 => 277,  461 => 276,  458 => 275,  452 => 272,  447 => 271,  445 => 270,  441 => 268,  435 => 265,  432 => 264,  430 => 263,  424 => 259,  422 => 258,  416 => 254,  410 => 250,  404 => 247,  399 => 246,  396 => 245,  390 => 242,  385 => 241,  382 => 240,  376 => 237,  371 => 236,  369 => 235,  365 => 233,  359 => 230,  356 => 229,  354 => 228,  348 => 224,  346 => 223,  334 => 213,  327 => 209,  321 => 207,  319 => 206,  314 => 203,  306 => 198,  302 => 196,  296 => 193,  293 => 192,  291 => 191,  283 => 187,  281 => 186,  276 => 183,  269 => 179,  263 => 177,  261 => 176,  250 => 167,  242 => 162,  237 => 159,  235 => 158,  229 => 154,  222 => 150,  218 => 148,  216 => 147,  210 => 143,  204 => 139,  196 => 137,  193 => 136,  185 => 134,  182 => 133,  174 => 131,  172 => 130,  168 => 128,  162 => 125,  159 => 124,  157 => 123,  153 => 121,  151 => 120,  145 => 116,  138 => 112,  134 => 110,  132 => 109,  126 => 105,  120 => 101,  111 => 99,  107 => 98,  102 => 95,  100 => 94,  90 => 86,  86 => 84,  80 => 82,  77 => 81,  71 => 79,  69 => 78,  66 => 77,  64 => 76,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/construction_zymphonies_theme/templates/layout/page.html.twig", "C:\\laragon\\www\\reservas\\web\\themes\\construction_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 98);
        static $filters = array("escape" => 72, "raw" => 99, "date" => 426);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
