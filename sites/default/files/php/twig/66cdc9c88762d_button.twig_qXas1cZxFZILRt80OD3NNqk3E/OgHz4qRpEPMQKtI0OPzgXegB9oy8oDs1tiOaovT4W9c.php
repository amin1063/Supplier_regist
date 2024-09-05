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

/* @material_base_mdc/components/02_molecules/button.twig */
class __TwigTemplate_f8e71cf99a24315ebbc2d46af6e3ee4e extends Template
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
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 56)) {
            // line 57
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 57);
        } else {
            // line 59
            echo "  ";
            $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 61
        echo "
";
        // line 62
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCRipple"], "method", false, false, true, 62);
        // line 63
        echo "
";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, true, 64)) {
            // line 65
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, true, 65)], "method", false, false, true, 65);
        }
        // line 67
        echo "
";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "target", [], "any", false, false, true, 68)) {
            // line 69
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "target", 1 => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "target", [], "any", false, false, true, 69)], "method", false, false, true, 69);
        }
        // line 71
        echo "
";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disabled", [], "any", false, false, true, 72)) {
            // line 73
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "disabled", 1 => true], "method", false, false, true, 73);
        }
        // line 75
        echo "
";
        // line 76
        $context["classes"] = [0 => "button", 1 => "mdc-button"];
        // line 80
        echo "
";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 81)) {
            // line 82
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 82, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 82), 82, $this->source));
        }
        // line 84
        echo "
";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 85)) {
            // line 86
            echo "  ";
            $context["tag"] = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 86);
            // line 87
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 87) == "a")) {
                // line 88
                echo "    ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 88)], "method", false, false, true, 88);
                // line 89
                echo "  ";
            } else {
                // line 90
                echo "    ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-url", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 90)], "method", false, false, true, 90);
                // line 91
                echo "  ";
            }
        } else {
            // line 93
            echo "  ";
            $context["tag"] = "button";
            // line 94
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-url", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 94)], "method", false, false, true, 94);
        }
        // line 96
        echo "
<";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 97, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo ">
  <span class=\"mdc-button__ripple\"></span>

  ";
        // line 100
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "icon", [], "any", false, false, true, 100) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon_trailing", [], "any", false, false, true, 100)) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "label", [], "any", false, false, true, 100))) {
            // line 101
            echo "    <span class=\"mdc-button__label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "label", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 103
        echo "
  ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "icon", [], "any", false, false, true, 104)) {
            // line 105
            echo "    ";
            $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "@material_base_mdc/components/02_molecules/button.twig", 105)->display(twig_array_merge($context, ["data" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 107
($context["data"] ?? null), "icon", [], "any", false, false, true, 107), "data", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107)], "settings" => ["type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 110
($context["data"] ?? null), "icon", [], "any", false, false, true, 110), "settings", [], "any", false, false, true, 110), "type", [], "any", false, false, true, 110), "classes" => twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 111
($context["data"] ?? null), "icon", [], "any", false, true, true, 111), "settings", [], "any", false, true, true, 111), "classes", [], "any", true, true, true, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "icon", [], "any", false, true, true, 111), "settings", [], "any", false, true, true, 111), "classes", [], "any", false, false, true, 111), [])) : ([])), [0 => "mdc-button__icon"])]]));
            // line 114
            echo "  ";
        }
        // line 115
        echo "
  ";
        // line 116
        if (( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon_trailing", [], "any", false, false, true, 116) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "label", [], "any", false, false, true, 116))) {
            // line 117
            echo "    <span class=\"mdc-button__label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "label", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 119
        echo "</";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 119, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@material_base_mdc/components/02_molecules/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 119,  166 => 117,  164 => 116,  161 => 115,  158 => 114,  156 => 111,  155 => 110,  154 => 107,  152 => 105,  150 => 104,  147 => 103,  141 => 101,  139 => 100,  132 => 97,  129 => 96,  125 => 94,  122 => 93,  118 => 91,  115 => 90,  112 => 89,  109 => 88,  106 => 87,  103 => 86,  101 => 85,  98 => 84,  94 => 82,  92 => 81,  89 => 80,  87 => 76,  84 => 75,  80 => 73,  78 => 72,  75 => 71,  71 => 69,  69 => 68,  66 => 67,  62 => 65,  60 => 64,  57 => 63,  55 => 62,  52 => 61,  48 => 59,  44 => 57,  42 => 56,  39 => 55,);
    }

    public function getSourceContext()
    {
        return new Source("", "@material_base_mdc/components/02_molecules/button.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\components\\02_molecules\\button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 56, "set" => 57, "include" => 105);
        static $filters = array("merge" => 82, "escape" => 97, "default" => 111);
        static $functions = array("create_attribute" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['merge', 'escape', 'default'],
                ['create_attribute']
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
