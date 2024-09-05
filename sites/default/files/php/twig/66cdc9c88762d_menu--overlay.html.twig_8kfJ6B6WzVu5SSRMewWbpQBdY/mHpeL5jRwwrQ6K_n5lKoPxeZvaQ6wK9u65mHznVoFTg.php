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

/* themes/material_base/themes/material_base_mdc/templates/navigation/menu--overlay.html.twig */
class __TwigTemplate_f711d511b9be089b0c24e4dd0e393819 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "<div class=\"overlay-menu overlay-menu--accordion\">
  ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext()));
        echo "
</div>

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ("menu--level-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 35, $this->source)), 2 => "mb-accordion", 3 => "mdc-deprecated-list"], "method", false, false, true, 35), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCList"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"menu menu--level-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 37, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["menu_level"] ?? null) == 1)) ? (" mb-accordion__section-panel") : ("")));
                    echo "\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_expanded", [], "any", false, false, true, 43)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_collapsed", [], "any", false, false, true, 44)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "in_active_trail", [], "any", false, false, true, 45)) ? ("menu-item--active-trail") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_expanded", [], "any", false, false, true, 46) && (($context["menu_level"] ?? null) == 0))) ? ("mb-accordion__section") : (""))];
                    // line 49
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 50
                    ob_start(function () { return ''; });
                    // line 51
                    echo "          <span class=\"mdc-deprecated-list-item__ripple\"></span>
          <span class=\"mdc-deprecated-list-item__text\">";
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo "</span>
          ";
                    // line 53
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 53) && (($context["menu_level"] ?? null) == 0))) {
                        // line 54
                        echo "            <span class=\"mdc-deprecated-list-item__meta\">
              ";
                        // line 55
                        $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "themes/material_base/themes/material_base_mdc/templates/navigation/menu--overlay.html.twig", 55)->display(twig_array_merge($context, ["data" => ["value" => "arrow_drop_down"], "settings" => ["type" => "svg-sprite"]]));
                        // line 63
                        echo "            </span>
          ";
                    }
                    // line 65
                    echo "        ";
                    $context["item_label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 66
                    echo "        ";
                    $context["item_classes"] = [0 => "mdc-deprecated-list-item", 1 => (((twig_get_attribute($this->env, $this->source,                     // line 68
$context["item"], "is_expanded", [], "any", false, false, true, 68) && (($context["menu_level"] ?? null) == 0))) ? ("mb-accordion__section-toggle") : (""))];
                    // line 70
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["item_label"] ?? null), 70, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), 70, $this->source), ["class" => ($context["item_classes"] ?? null), "data-mdc-auto-init" => "MDCRipple"]), "html", null, true);
                    echo "
        ";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71)) {
                        // line 72
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 72, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 74
                    echo "      </li>
    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/navigation/menu--overlay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  163 => 74,  157 => 72,  155 => 71,  150 => 70,  148 => 68,  146 => 66,  143 => 65,  139 => 63,  137 => 55,  134 => 54,  132 => 53,  128 => 52,  125 => 51,  123 => 50,  118 => 49,  116 => 46,  115 => 45,  114 => 44,  113 => 43,  112 => 41,  110 => 40,  92 => 39,  85 => 37,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  55 => 31,  47 => 28,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/navigation/menu--overlay.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\navigation\\menu--overlay.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 31, "if" => 33, "for" => 39, "set" => 41, "include" => 55);
        static $filters = array("escape" => 35);
        static $functions = array("link" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set', 'include'],
                ['escape'],
                ['link']
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
