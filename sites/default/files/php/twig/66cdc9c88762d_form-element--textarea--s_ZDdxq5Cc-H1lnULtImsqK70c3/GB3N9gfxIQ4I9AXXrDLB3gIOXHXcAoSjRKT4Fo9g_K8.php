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

/* form-element--textarea--static-label.html.twig */
class __TwigTemplate_7e02a996c5808a25bf0f185084fdf66f extends Template
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
        // line 49
        $context["full_width"] = false;
        // line 50
        echo "
";
        // line 51
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["type"] ?? null), 54, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), 5 => ((!twig_in_filter(        // line 57
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 58
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 59
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 61
        echo "
";
        // line 62
        $context["description_classes"] = [0 => "description", 1 => "mdc-text-field-helper-text"];
        // line 66
        echo "
";
        // line 67
        $context["mdc_classes"] = [0 => "mdc-text-field", 1 => "mdc-text-field--textarea", 2 => "mdc-text-field--outlined", 3 => ((        // line 71
($context["full_width"] ?? null)) ? ("mdc-text-field--fullwidth") : ("")), 4 => (((        // line 72
($context["disabled"] ?? null) == "disabled")) ? ("mdc-text-field--disabled") : ("")), 5 => "mdc-text-field--no-label", 6 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["textarea_attributes"] ?? null), "required", [], "any", false, false, true, 74)) ? ("js-form-required") : ("")), 7 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["textarea_attributes"] ?? null), "required", [], "any", false, false, true, 75)) ? ("form-required") : (""))];
        // line 77
        echo "
";
        // line 78
        $context["label_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 79
        echo "
";
        // line 80
        $context["label_classes"] = [0 => "form-item__label", 1 => "label-not-floating", 2 => (((        // line 83
($context["label_display"] ?? null) == "invisible")) ? ("visually-hidden") : (("label-" . $this->sandbox->ensureToStringAllowed(($context["label_display"] ?? null), 83, $this->source)))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 84
($context["textarea_attributes"] ?? null), "required", [], "any", false, false, true, 84)) ? ("js-form-required") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 85
($context["textarea_attributes"] ?? null), "required", [], "any", false, false, true, 85)) ? ("form-required") : (""))];
        // line 87
        echo "
";
        // line 88
        $context["label_attributes"] = twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["label_classes"] ?? null)], "method", false, false, true, 88);
        // line 89
        echo "
";
        // line 90
        $context["label_attributes"] = twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["textarea_attributes"] ?? null), "id", [], "any", false, false, true, 90), 90, $this->source) . "-label")], "method", false, false, true, 90);
        // line 91
        echo "
<div";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
        echo ">

  ";
        // line 94
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 95
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 95, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 98))) {
            // line 99
            echo "    <div class=\"mdc-text-field-helper-line\">
      <div";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 100), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 100), "setAttribute", [0 => "aria-hidden", 1 => "true"], "method", false, false, true, 100), 100, $this->source), "html", null, true);
            echo ">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 105
        echo "
  ";
        // line 106
        if ((($context["label_display"] ?? null) == "before")) {
            // line 107
            echo "    <label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label_attributes"] ?? null), 107, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["label"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 107, $this->source), "html", null, true);
            echo "</label>
  ";
        }
        // line 109
        echo "
  <div";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["textarea_wrapper_attributes"] ?? null), "addClass", [0 => ($context["mdc_classes"] ?? null)], "method", false, false, true, 110), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCTextField"], "method", false, false, true, 110), 110, $this->source), "html", null, true);
        echo ">
    <div class=\"mdc-text-field__ripple\"></div>

    ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 113)) {
            // line 114
            echo "      <textarea";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["textarea_attributes"] ?? null), "setAttribute", [0 => "aria-labelledby", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 115
($context["textarea_attributes"] ?? null), "id", [], "any", false, false, true, 115), 115, $this->source) . "-label")], "method", false, false, true, 114), "setAttribute", [0 => "aria-controls", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 116
($context["description"] ?? null), "attributes", [], "any", false, false, true, 116), "id", [], "any", false, false, true, 116)], "method", false, false, true, 115), "setAttribute", [0 => "aria-describedby", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 117
($context["description"] ?? null), "attributes", [], "any", false, false, true, 117), "id", [], "any", false, false, true, 117)], "method", false, false, true, 116), "addClass", [0 => "mdc-text-field__input"], "method", false, false, true, 117), 118, $this->source), "html", null, true);
            // line 119
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textarea_value"] ?? null), 119, $this->source), "html", null, true);
            echo "</textarea>
    ";
        } else {
            // line 121
            echo "      <textarea";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["textarea_attributes"] ?? null), "setAttribute", [0 => "aria-labelledby", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 122
($context["textarea_attributes"] ?? null), "id", [], "any", false, false, true, 122), 122, $this->source) . "-label")], "method", false, false, true, 121), "addClass", [0 => "mdc-text-field__input"], "method", false, false, true, 122), 123, $this->source), "html", null, true);
            // line 124
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["textarea_value"] ?? null), 124, $this->source), "html", null, true);
            echo "</textarea>
    ";
        }
        // line 126
        echo "
    <div class=\"mdc-notched-outline\">
      <div class=\"mdc-notched-outline__leading\"></div>
      <div class=\"mdc-notched-outline__trailing\"></div>
    </div>
  </div>

  ";
        // line 133
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 134
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 134, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 136
        echo "
  ";
        // line 137
        if ((($context["label_display"] ?? null) != "before")) {
            // line 138
            echo "    <label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label_attributes"] ?? null), 138, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["label"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 138, $this->source), "html", null, true);
            echo "</label>
  ";
        }
        // line 140
        echo "
  ";
        // line 141
        if (($context["errors"] ?? null)) {
            // line 142
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 143, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 146
        echo "
  ";
        // line 147
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147))) {
            // line 148
            echo "    <div class=\"mdc-text-field-helper-line";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["description_display"] ?? null) == "invisible")) ? (" visually-hidden") : ("")));
            echo "\">
      <div";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 149), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 149), "setAttribute", [0 => "aria-hidden", 1 => "true"], "method", false, false, true, 149), 149, $this->source), "html", null, true);
            echo ">
        ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 154
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "form-element--textarea--static-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 154,  228 => 150,  224 => 149,  219 => 148,  217 => 147,  214 => 146,  208 => 143,  205 => 142,  203 => 141,  200 => 140,  192 => 138,  190 => 137,  187 => 136,  181 => 134,  179 => 133,  170 => 126,  164 => 124,  162 => 122,  160 => 121,  154 => 119,  152 => 117,  151 => 116,  150 => 115,  148 => 114,  146 => 113,  140 => 110,  137 => 109,  129 => 107,  127 => 106,  124 => 105,  117 => 101,  113 => 100,  110 => 99,  108 => 98,  105 => 97,  99 => 95,  97 => 94,  92 => 92,  89 => 91,  87 => 90,  84 => 89,  82 => 88,  79 => 87,  77 => 85,  76 => 84,  75 => 83,  74 => 80,  71 => 79,  69 => 78,  66 => 77,  64 => 75,  63 => 74,  62 => 72,  61 => 71,  60 => 67,  57 => 66,  55 => 62,  52 => 61,  50 => 59,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 51,  41 => 50,  39 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "form-element--textarea--static-label.html.twig", "themes/material_base/themes/material_base_mdc/templates/form/form-element--textarea--static-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 94);
        static $filters = array("clean_class" => 54, "escape" => 92);
        static $functions = array("create_attribute" => 78);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
