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

/* themes/material_base/templates/navigation/menu--footer.html.twig */
class __TwigTemplate_1e9869c678f282b153658195a2fb4cb7 extends Template
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
        echo "
<div class=\"footer-menu footer-menu--depth-";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_depth"] ?? null), 28, $this->source), "html", null, true);
        echo " footer-menu--items-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 28, $this->source)), "html", null, true);
        echo "\">
  ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "
</div>

";
    }

    // line 32
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
            // line 33
            echo "  ";
            $macros["menus"] = $this;
            // line 34
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 35
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ("menu--level-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 36, $this->source))], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 38
                    echo "      <div class=\"footer-menu__panel footer-menu--level-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 38, $this->source), "html", null, true);
                    echo "\">
      <ul class=\"menu menu--level-";
                    // line 39
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 39, $this->source), "html", null, true);
                    echo "\">
    ";
                }
                // line 41
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "      ";
                    // line 43
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_expanded", [], "any", false, false, true, 45)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_collapsed", [], "any", false, false, true, 46)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("menu-item--active-trail") : (""))];
                    // line 50
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 51
                    ob_start(function () { return ''; });
                    // line 52
                    echo "          <span class=\"footer-menu__item-text\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo "</span>
        ";
                    $context["item_label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 54
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["item_label"] ?? null), 54, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), ["class" => [0 => "footer-menu__item"]]), "html", null, true);
                    echo "
        ";
                    // line 55
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55)) {
                        // line 56
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 56, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 58
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "    </ul>
    ";
                // line 61
                if ((($context["menu_level"] ?? null) != 0)) {
                    // line 62
                    echo "      </div>
    ";
                }
                // line 64
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/navigation/menu--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 64,  151 => 62,  149 => 61,  146 => 60,  139 => 58,  133 => 56,  131 => 55,  126 => 54,  120 => 52,  118 => 51,  113 => 50,  111 => 47,  110 => 46,  109 => 45,  108 => 43,  106 => 42,  101 => 41,  96 => 39,  91 => 38,  85 => 36,  82 => 35,  79 => 34,  76 => 33,  61 => 32,  53 => 29,  47 => 28,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/navigation/menu--footer.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\navigation\\menu--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 32, "if" => 34, "for" => 41, "set" => 43);
        static $filters = array("escape" => 28, "length" => 28);
        static $functions = array("link" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'length'],
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
