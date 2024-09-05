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

/* @material_base/layout/page.html.twig */
class __TwigTemplate_c27d6fa4a3421956b669e8bee9cbd40a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
            'navbar_adjust' => [$this, 'block_navbar_adjust'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "
";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 53)) {
            // line 54
            echo "  ";
            if (((($context["drawer_style"] ?? null) == "permanent") || (($context["drawer_height"] ?? null) == "full"))) {
                // line 55
                echo "    ";
                $context["drawer_full"] = true;
                // line 56
                echo "  ";
            } else {
                // line 57
                echo "    ";
                $context["drawer_below"] = true;
                // line 58
                echo "  ";
            }
        }
        // line 60
        echo "
<div class=\"page\">
  ";
        // line 62
        if (($context["drawer_full"] ?? null)) {
            // line 63
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        $this->displayBlock('page_container', $context, $blocks);
        // line 69
        echo "
    <div class=\"page-container__overlay\"></div>

    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 72)) {
            // line 73
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (($context["drawer_below"] ?? null)) {
            // line 77
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('navbar_adjust', $context, $blocks);
        // line 83
        echo "
      ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 84)) {
            // line 85
            echo "        <header class=\"page-header\" role=\"banner\">
          <div class=\"page-header__bg\">
            <div class=\"page-header__container\">
              <div class=\"page-header__content\">
                ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </header>
      ";
        }
        // line 95
        echo "
      ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 96)) {
            // line 97
            echo "        <div class=\"page-actions\">
          <div class=\"page-actions__container\">
            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 103
        echo "
      <main class=\"page-main\" role=\"main\">

        ";
        // line 106
        if (($context["page_layout"] ?? null)) {
            // line 107
            echo "
          ";
            // line 109
            echo "          <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 110
            echo "          ";
            $this->displayBlock('content', $context, $blocks);
            // line 113
            echo "
        ";
        } else {
            // line 115
            echo "
          ";
            // line 117
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_top", [], "any", false, false, true, 117)) {
                // line 118
                echo "            <div class=\"main-top\">
              ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_top", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 122
            echo "
          <div class=\"main-content\">
            <div class=\"main-content__container\">

              ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 126)) {
                // line 127
                echo "                <div class=\"page-content-above\">
                  ";
                // line 128
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 131
            echo "
              <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 133
            echo "              <div class=\"main-content__content\">

                <div class=\"page-content__wrapper\">
                  <div class=\"page-content-primary\">
                    ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
                    ";
            // line 138
            if ( !($context["messages_fixed"] ?? null)) {
                // line 139
                echo "                      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "
                    ";
            }
            // line 141
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
                    ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "

                    <div class=\"page-content layout-content\">
                      ";
            // line 145
            $this->displayBlock("content", $context, $blocks);
            echo "
                    </div>
                  </div>

                  ";
            // line 149
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 149)) {
                // line 150
                echo "                    <div class=\"page-content-secondary\">
                      ";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 154
            echo "                </div>

                ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 156)) {
                // line 157
                echo "                  <aside class=\"page-sidebar page-sidebar--first layout-sidebar-first\" role=\"complementary\">
                    ";
                // line 158
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "
                  </aside>
                ";
            }
            // line 161
            echo "
                ";
            // line 162
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162)) {
                // line 163
                echo "                  <aside class=\"page-sidebar page-sidebar--second layout-sidebar-second\" role=\"complementary\">
                    ";
                // line 164
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                echo "
                  </aside>
                ";
            }
            // line 167
            echo "              </div>

              ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 169)) {
                // line 170
                echo "                <div class=\"page-content-below\">
                  ";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 174
            echo "
            </div>
          </div>

          ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_bottom", [], "any", false, false, true, 178)) {
                // line 179
                echo "            <div class=\"main-bottom\">
              ";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_bottom", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 183
            echo "
        ";
        }
        // line 185
        echo "      </main>

      ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 187)) {
            // line 188
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 190
        echo "
    </div>
  </div>

  ";
        // line 194
        if (($context["messages_fixed"] ?? null)) {
            // line 195
            echo "    <div class=\"messages__wrapper messages__wrapper--fixed\">
      <div class=\"messages__container\">
        ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 201
        echo "
  ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "overlay", [], "any", false, false, true, 202)) {
            // line 203
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "overlay", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 205
        echo "</div>
";
    }

    // line 66
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <div class=\"page-container layout-container";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["page_layout"] ?? null)) ? (" layout-container--node") : (" layout-container--page")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["drawer_full"] ?? null)) ? (" page-drawer-page-content") : ("")));
        echo "\">
  ";
    }

    // line 80
    public function block_navbar_adjust($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "      <div class=\"page-navbar-adjust";
        ((($context["navbar_style"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" page-navbar-adjust--" . ($context["navbar_style"] ?? null)), "html", null, true))) : (print ("")));
        echo ((($context["navbar_fixed"] ?? null)) ? (" page-navbar-adjust--fixed") : (""));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["drawer_below"] ?? null)) ? (" page-drawer-page-content") : ("")));
        echo "\">
    ";
    }

    // line 110
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@material_base/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 111,  383 => 110,  374 => 81,  370 => 80,  362 => 67,  358 => 66,  353 => 205,  347 => 203,  345 => 202,  342 => 201,  335 => 197,  331 => 195,  329 => 194,  323 => 190,  317 => 188,  315 => 187,  311 => 185,  307 => 183,  301 => 180,  298 => 179,  296 => 178,  290 => 174,  284 => 171,  281 => 170,  279 => 169,  275 => 167,  269 => 164,  266 => 163,  264 => 162,  261 => 161,  255 => 158,  252 => 157,  250 => 156,  246 => 154,  240 => 151,  237 => 150,  235 => 149,  228 => 145,  222 => 142,  217 => 141,  211 => 139,  209 => 138,  205 => 137,  199 => 133,  196 => 131,  190 => 128,  187 => 127,  185 => 126,  179 => 122,  173 => 119,  170 => 118,  167 => 117,  164 => 115,  160 => 113,  157 => 110,  155 => 109,  152 => 107,  150 => 106,  145 => 103,  138 => 99,  134 => 97,  132 => 96,  129 => 95,  120 => 89,  114 => 85,  112 => 84,  109 => 83,  107 => 80,  104 => 79,  98 => 77,  96 => 76,  93 => 75,  87 => 73,  85 => 72,  80 => 69,  78 => 66,  75 => 65,  69 => 63,  67 => 62,  63 => 60,  59 => 58,  56 => 57,  53 => 56,  50 => 55,  47 => 54,  45 => 53,  42 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "@material_base/layout/page.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 53, "set" => 55, "block" => 66);
        static $filters = array("escape" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
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
