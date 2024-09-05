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

/* themes/material_base/themes/material_base_mdc/templates/form/form-element--checkbox.html.twig */
class __TwigTemplate_0682ed39d4ca1b14b275848dcc224d9d extends Template
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
        // line 47
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 50
($context["type"] ?? null), 50, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["name"] ?? null), 51, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["name"] ?? null), 52, $this->source))), 5 => ((!twig_in_filter(        // line 53
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 54
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 55
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 57
        echo "
";
        // line 58
        $context["description_classes"] = [0 => "description", 1 => (((        // line 60
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 62
        echo "
";
        // line 63
        $context["label_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 64
        echo "
";
        // line 65
        $context["label_classes"] = [0 => "option", 1 => (((        // line 67
($context["label_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 68
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 69
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 71
        echo "
<div";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">

  ";
        // line 74
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 75
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 75, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 78))) {
            // line 79
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 79), "addClasses", [0 => "description"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">
      ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "
  <div class=\"mdc-form-field";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" mdc-checkbox--disabled") : ("")));
        echo "\" data-mdc-auto-init=\"MDCFormField\">

    <div class=\"mdc-checkbox\" data-mdc-auto-init=\"MDCCheckbox\">
      <input";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => "mdc-checkbox__native-control"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
        echo ">

      <div class=\"mdc-checkbox__background\">
        <svg class=\"mdc-checkbox__checkmark\" viewBox=\"0 0 24 24\">
          <path class=\"mdc-checkbox__checkmark-path\" fill=\"none\" d=\"M1.73,12.91 8.1,19.28 22.79,4.59\"/>
        </svg>
        <div class=\"mdc-checkbox__mixedmark\"></div>
      </div>

      <div class=\"mdc-checkbox__ripple\"></div>
    </div>

    <label";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["label_classes"] ?? null)], "method", false, false, true, 99), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 99)], "method", false, false, true, 99), 99, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["label"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 99, $this->source), "html", null, true);
        echo "</label>

  </div>

  ";
        // line 103
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 104
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 104, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 106
        echo "
  ";
        // line 107
        if (($context["errors"] ?? null)) {
            // line 108
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 109, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 112
        echo "
  ";
        // line 113
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 113))) {
            // line 114
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 114), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 114), 114, $this->source), "html", null, true);
            echo ">
      ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 118
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/form/form-element--checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 118,  163 => 115,  158 => 114,  156 => 113,  153 => 112,  147 => 109,  144 => 108,  142 => 107,  139 => 106,  133 => 104,  131 => 103,  122 => 99,  107 => 87,  101 => 84,  98 => 83,  92 => 80,  87 => 79,  85 => 78,  82 => 77,  76 => 75,  74 => 74,  69 => 72,  66 => 71,  64 => 69,  63 => 68,  62 => 67,  61 => 65,  58 => 64,  56 => 63,  53 => 62,  51 => 60,  50 => 58,  47 => 57,  45 => 55,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 50,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/form/form-element--checkbox.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\form\\form-element--checkbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 47, "if" => 74);
        static $filters = array("clean_class" => 50, "escape" => 72);
        static $functions = array("create_attribute" => 63);

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
