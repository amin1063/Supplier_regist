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

/* @material_base/components/01_atoms/icon.twig */
class __TwigTemplate_8adc4cc5fed17870745c812aafbacc67 extends Template
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
        // line 34
        echo "
";
        // line 35
        $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 36
        echo "
";
        // line 37
        $context["classes"] = [0 => "icon"];
        // line 41
        echo "
";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 42)) {
            // line 43
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 43, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "classes", [], "any", false, false, true, 43), 43, $this->source));
        }
        // line 45
        echo "
";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "type", [], "any", false, false, true, 46) == "font")) {
            // line 47
            echo "  <i";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), "setAttribute", [0 => "aria-hidden", 1 => "true"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</i>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "type", [], "any", false, false, true, 48) == "svg-sprite")) {
            // line 49
            echo "  <svg";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "><use xlink:href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\"></use></svg>
";
        } else {
            // line 51
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@material_base/components/01_atoms/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 51,  72 => 49,  70 => 48,  63 => 47,  61 => 46,  58 => 45,  54 => 43,  52 => 42,  49 => 41,  47 => 37,  44 => 36,  42 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "@material_base/components/01_atoms/icon.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\components\\01_atoms\\icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 42);
        static $filters = array("merge" => 43, "escape" => 47);
        static $functions = array("create_attribute" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
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
