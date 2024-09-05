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

/* themes/material_base/themes/material_base_mdc/templates/form/input--submit.html.twig */
class __TwigTemplate_b4331e23f1084f6edf2da9ac9260a875 extends Template
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
        // line 13
        echo "
";
        // line 14
        $context["button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["for" => twig_get_attribute($this->env, $this->source,         // line 15
($context["attributes"] ?? null), "id", [], "any", false, false, true, 15), "id" => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 16
($context["attributes"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source) . "-label")]);
        // line 18
        echo "
";
        // line 19
        $context["button_classes"] = [0 => "mdc-button", 1 => "button-submit"];
        // line 23
        echo "
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 24)) {
            // line 25
            echo "  ";
            $context["button_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["button_classes"] ?? null), 25, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 25), 25, $this->source));
        }
        // line 27
        echo "
";
        // line 28
        $context["button_attributes"] = twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCRipple"], "method", false, false, true, 28);
        // line 29
        echo "
";
        // line 30
        if (($context["disabled"] ?? null)) {
            // line 31
            echo "  ";
            $context["button_attributes"] = twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "setAttribute", [0 => "disabled", 1 => 1], "method", false, false, true, 31);
        }
        // line 33
        echo "
<label";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["button_attributes"] ?? null), "addClass", [0 => ($context["button_classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo ">
  <div class=\"mdc-button__ripple\"></div>
  <span class=\"mdc-button__label\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
        echo "</span>
  <input";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source), "class"), "addClass", [0 => "button-submit__input"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo " />
</label>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 38, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/form/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  86 => 37,  82 => 36,  77 => 34,  74 => 33,  70 => 31,  68 => 30,  65 => 29,  63 => 28,  60 => 27,  56 => 25,  54 => 24,  51 => 23,  49 => 19,  46 => 18,  44 => 16,  43 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/form/input--submit.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\form\\input--submit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 24);
        static $filters = array("merge" => 25, "escape" => 34, "render" => 36, "without" => 37);
        static $functions = array("create_attribute" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape', 'render', 'without'],
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
