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

/* themes/material_base/templates/misc/status-messages.html.twig */
class __TwigTemplate_2bce0fbb711c72f51e03e6306a57a8bd extends Template
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
        // line 22
        echo "<div data-drupal-messages>
  ";
        // line 23
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 24
            echo "    <div class=\"messages__group\">
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 26
                echo "        ";
                $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(                // line 28
$context["type"], 28, $this->source)), 2 => "messages--colored", 3 => ((                // line 30
($context["messages_fixed"] ?? null)) ? ("messages--fixed") : (""))];
                // line 32
                echo "
        ";
                // line 33
                if (($context["type"] == "error")) {
                    // line 34
                    echo "          ";
                    $context["message_icon"] = "warning";
                    // line 35
                    echo "        ";
                } elseif (($context["type"] == "warning")) {
                    // line 36
                    echo "          ";
                    $context["message_icon"] = "info";
                    // line 37
                    echo "        ";
                } else {
                    // line 38
                    echo "          ";
                    $context["message_icon"] = "check_circle";
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "        
        <div role=\"";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["type"] == "error")) ? ("alert") : ("contentinfo")));
                echo "\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 41, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "role", "aria-label"), "html", null, true);
                echo ">
          
          ";
                // line 43
                if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                    // line 44
                    echo "            <h2 class=\"visually-hidden\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 44, $this->source), "html", null, true);
                    echo "</h2>
          ";
                }
                // line 46
                echo "
          <div class=\"messages__icon\">
            ";
                // line 48
                $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "themes/material_base/templates/misc/status-messages.html.twig", 48)->display(twig_array_merge($context, ["data" => ["value" =>                 // line 50
($context["message_icon"] ?? null)], "settings" => ["type" => "svg-sprite"]]));
                // line 56
                echo "          </div>

          <div class=\"messages__content\">
            ";
                // line 59
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 60
                    echo "              <ul class=\"messages__list\">
                ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 62
                        echo "                  <li class=\"messages__item\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 62, $this->source), "html", null, true);
                        echo "</li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "              </ul>
            ";
                } else {
                    // line 66
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 66, $this->source)), "html", null, true);
                    echo "
            ";
                }
                // line 68
                echo "          </div>

          <div class=\"messages__close\">
            <div class=\"messages__close-button\">
              ";
                // line 72
                $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "themes/material_base/templates/misc/status-messages.html.twig", 72)->display(twig_array_merge($context, ["data" => ["value" => "close"], "settings" => ["type" => "svg-sprite"]]));
                // line 80
                echo "            </div>
          </div>

        </div>
        ";
                // line 85
                echo "        ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85);
                // line 86
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "    </div>
  ";
        }
        // line 89
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 89,  183 => 87,  169 => 86,  166 => 85,  160 => 80,  158 => 72,  152 => 68,  146 => 66,  142 => 64,  133 => 62,  129 => 61,  126 => 60,  124 => 59,  119 => 56,  117 => 50,  116 => 48,  112 => 46,  106 => 44,  104 => 43,  95 => 41,  92 => 40,  89 => 39,  86 => 38,  83 => 37,  80 => 36,  77 => 35,  74 => 34,  72 => 33,  69 => 32,  67 => 30,  66 => 28,  64 => 26,  47 => 25,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\misc\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "for" => 25, "set" => 26, "include" => 48);
        static $filters = array("escape" => 41, "without" => 41, "length" => 59, "first" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include'],
                ['escape', 'without', 'length', 'first'],
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
