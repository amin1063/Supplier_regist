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

/* @material_base_mdc/components/02_molecules/icon-button.twig */
class __TwigTemplate_b8f88c8b8f3794094dd0dc970a855e12 extends Template
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
        // line 33
        echo "
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 34)) {
            // line 35
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 35);
        } else {
            // line 37
            echo "  ";
            $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 39
        echo "
";
        // line 42
        echo "
";
        // line 43
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "aria-pressed", 1 => "false"], "method", false, false, true, 43);
        // line 44
        echo "
";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, true, 45)) {
            // line 46
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, true, 46)], "method", false, false, true, 46);
        }
        // line 48
        echo "
";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "target", [], "any", false, false, true, 49)) {
            // line 50
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-target", 1 => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "target", [], "any", false, false, true, 50)], "method", false, false, true, 50);
        }
        // line 52
        echo "
";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "label", [], "any", false, false, true, 53)) {
            // line 54
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "aria-label", 1 => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "label", [], "any", false, false, true, 54)], "method", false, false, true, 54);
        }
        // line 56
        echo "
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disabled", [], "any", false, false, true, 57)) {
            // line 58
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "disabled", 1 => 1], "method", false, false, true, 58);
        }
        // line 60
        echo "
";
        // line 62
        echo "
";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 63)) {
            // line 64
            echo "  ";
            $context["tag"] = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 64);
            // line 65
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tag", [], "any", false, false, true, 65) == "a")) {
                // line 66
                echo "    ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "href", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 66)], "method", false, false, true, 66);
                // line 67
                echo "  ";
            } else {
                // line 68
                echo "    ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-url", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 68)], "method", false, false, true, 68);
                // line 69
                echo "  ";
            }
        } else {
            // line 71
            echo "  ";
            $context["tag"] = "button";
            // line 72
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-url", 1 => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "url", [], "any", false, false, true, 72)], "method", false, false, true, 72);
        }
        // line 74
        echo "
";
        // line 75
        $context["classes"] = [0 => "mdc-icon-button"];
        // line 78
        echo "
";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 79)) {
            // line 80
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 80, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 80), 80, $this->source));
        }
        // line 82
        echo "
<";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 83, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
        echo ">
  <div class=\"mdc-icon-button__ripple\"></div>
  ";
        // line 85
        $this->loadTemplate("@material_base/components/01_atoms/icon.twig", "@material_base_mdc/components/02_molecules/icon-button.twig", 85)->display(twig_array_merge($context, ["data" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["data"] ?? null), "icon", [], "any", false, false, true, 87), "data", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87)], "settings" => ["type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
($context["data"] ?? null), "icon", [], "any", false, false, true, 90), "settings", [], "any", false, false, true, 90), "type", [], "any", false, false, true, 90), "classes" => twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["data"] ?? null), "icon", [], "any", false, true, true, 91), "settings", [], "any", false, true, true, 91), "classes", [], "any", true, true, true, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "icon", [], "any", false, true, true, 91), "settings", [], "any", false, true, true, 91), "classes", [], "any", false, false, true, 91), [])) : ([])), [0 => "mdc-icon-button__icon"])]]));
        // line 94
        echo "</";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 94, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@material_base_mdc/components/02_molecules/icon-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 94,  156 => 91,  155 => 90,  154 => 87,  153 => 85,  147 => 83,  144 => 82,  140 => 80,  138 => 79,  135 => 78,  133 => 75,  130 => 74,  126 => 72,  123 => 71,  119 => 69,  116 => 68,  113 => 67,  110 => 66,  107 => 65,  104 => 64,  102 => 63,  99 => 62,  96 => 60,  92 => 58,  90 => 57,  87 => 56,  83 => 54,  81 => 53,  78 => 52,  74 => 50,  72 => 49,  69 => 48,  65 => 46,  63 => 45,  60 => 44,  58 => 43,  55 => 42,  52 => 39,  48 => 37,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "@material_base_mdc/components/02_molecules/icon-button.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\components\\02_molecules\\icon-button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "set" => 35, "include" => 85);
        static $filters = array("merge" => 80, "escape" => 83, "default" => 91);
        static $functions = array("create_attribute" => 37);

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
