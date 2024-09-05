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

/* themes/material_base/themes/material_base_mdc/templates/form/form-element--textfield.html.twig */
class __TwigTemplate_f9da92c3cca66181a8cff743c27e147a extends Template
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
        $context["outlined"] = false;
        // line 50
        $context["full_width"] = false;
        // line 51
        echo "
";
        // line 52
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), 5 => ((!twig_in_filter(        // line 58
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 60
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 62
        echo "
";
        // line 63
        $context["description_classes"] = [0 => "description", 1 => "mdc-text-field-helper-text"];
        // line 67
        echo "
";
        // line 68
        $context["mdc_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 69
        echo "
";
        // line 70
        $context["mdc_classes"] = [0 => "mdc-text-field", 1 => ((        // line 72
($context["outlined"] ?? null)) ? ("mdc-text-field--outlined") : ("mdc-text-field--filled")), 2 => ((        // line 73
($context["full_width"] ?? null)) ? ("mdc-text-field--fullwidth") : ("")), 3 => (((        // line 74
($context["disabled"] ?? null) == "disabled")) ? ("mdc-text-field--disabled") : ("")), 4 => (((        // line 75
($context["label_display"] ?? null) == "invisible")) ? ("mdc-text-field--no-label") : ("")), 5 => ((        // line 76
($context["required"] ?? null)) ? ("js-form-required") : ("")), 6 => ((        // line 77
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 79
        echo "
<div";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "html", null, true);
        echo ">

  ";
        // line 82
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 83
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 83, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 86))) {
            // line 87
            echo "    <div class=\"mdc-text-field-helper-line\">
      <div";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 88), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 88), "setAttribute", [0 => "aria-hidden", 1 => "true"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            echo ">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 93
        echo "
  <label";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mdc_attributes"] ?? null), "addClass", [0 => ($context["mdc_classes"] ?? null)], "method", false, false, true, 94), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCTextField"], "method", false, false, true, 94), 94, $this->source), "html", null, true);
        echo ">
    <div class=\"mdc-text-field__ripple\"></div>

    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 97)) {
            // line 98
            echo "      <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "setAttribute", [0 => "aria-labelledby", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 99
($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 99), 99, $this->source) . "-label")], "method", false, false, true, 98), "setAttribute", [0 => "aria-controls", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 100
($context["description"] ?? null), "attributes", [], "any", false, false, true, 100), "id", [], "any", false, false, true, 100)], "method", false, false, true, 99), "setAttribute", [0 => "aria-describedby", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), "id", [], "any", false, false, true, 101)], "method", false, false, true, 100), "addClass", [0 => "mdc-text-field__input"], "method", false, false, true, 101), 102, $this->source), "html", null, true);
            // line 103
            echo ">
    ";
        } else {
            // line 105
            echo "      <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "setAttribute", [0 => "aria-labelledby", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 106
($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 106), 106, $this->source) . "-label")], "method", false, false, true, 105), "addClass", [0 => "mdc-text-field__input"], "method", false, false, true, 106), 107, $this->source), "html", null, true);
            // line 108
            echo ">
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (($context["outlined"] ?? null)) {
            // line 112
            echo "      <div class=\"mdc-notched-outline\">
        <div class=\"mdc-notched-outline__leading\"></div>
        ";
            // line 114
            if ((($context["label_display"] ?? null) != "after")) {
                // line 115
                echo "          <div class=\"mdc-notched-outline__notch";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["label_display"] ?? null) == "invisible")) ? (" visually-hidden") : ("")));
                echo "\">
            <span class=\"mdc-floating-label\" id=\"";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 116), 116, $this->source) . "-label"), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["label"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 116, $this->source), "html", null, true);
                echo "</span>
          </div>
        ";
            }
            // line 119
            echo "        <div class=\"mdc-notched-outline__trailing\"></div>
      </div>
    ";
        } elseif ((        // line 121
($context["label_display"] ?? null) != "after")) {
            // line 122
            echo "      <span class=\"mdc-floating-label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["label_display"] ?? null) == "invisible")) ? (" visually-hidden") : ("")));
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 122), 122, $this->source) . "-label"), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["label"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 122, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if ( !($context["outlined"] ?? null)) {
            // line 126
            echo "      <div class=\"mdc-line-ripple\"></div>
    ";
        }
        // line 128
        echo "  </label>

  ";
        // line 130
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 131
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 131, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 133
        echo "
  ";
        // line 134
        if ((($context["label_display"] ?? null) == "after")) {
            // line 135
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 135, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 137
        echo "
  ";
        // line 138
        if (($context["errors"] ?? null)) {
            // line 139
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 140, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 143
        echo "
  ";
        // line 144
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 144))) {
            // line 145
            echo "    <div class=\"mdc-text-field-helper-line";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["description_display"] ?? null) == "invisible")) ? (" visually-hidden") : ("")));
            echo "\">
      <div";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 146), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 146), "setAttribute", [0 => "aria-hidden", 1 => "true"], "method", false, false, true, 146), 146, $this->source), "html", null, true);
            echo ">
        ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 151
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/form/form-element--textfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 151,  239 => 147,  235 => 146,  230 => 145,  228 => 144,  225 => 143,  219 => 140,  216 => 139,  214 => 138,  211 => 137,  205 => 135,  203 => 134,  200 => 133,  194 => 131,  192 => 130,  188 => 128,  184 => 126,  182 => 125,  179 => 124,  169 => 122,  167 => 121,  163 => 119,  155 => 116,  150 => 115,  148 => 114,  144 => 112,  142 => 111,  139 => 110,  135 => 108,  133 => 106,  131 => 105,  127 => 103,  125 => 101,  124 => 100,  123 => 99,  121 => 98,  119 => 97,  113 => 94,  110 => 93,  103 => 89,  99 => 88,  96 => 87,  94 => 86,  91 => 85,  85 => 83,  83 => 82,  78 => 80,  75 => 79,  73 => 77,  72 => 76,  71 => 75,  70 => 74,  69 => 73,  68 => 72,  67 => 70,  64 => 69,  62 => 68,  59 => 67,  57 => 63,  54 => 62,  52 => 60,  51 => 59,  50 => 58,  49 => 57,  48 => 56,  47 => 55,  46 => 52,  43 => 51,  41 => 50,  39 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/form/form-element--textfield.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\form\\form-element--textfield.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 82);
        static $filters = array("clean_class" => 55, "escape" => 80);
        static $functions = array("create_attribute" => 68);

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
