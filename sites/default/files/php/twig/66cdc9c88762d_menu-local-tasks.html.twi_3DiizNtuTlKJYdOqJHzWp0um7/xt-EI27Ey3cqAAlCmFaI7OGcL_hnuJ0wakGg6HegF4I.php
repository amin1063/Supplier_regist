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

/* themes/material_base/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_449aad843c7bbb88c56ce75d6a1d2a3c extends Template
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
        // line 14
        echo "
";
        // line 15
        if (($context["primary"] ?? null)) {
            // line 16
            echo "  <div class=\"tabs tabs--primary\">
    <h2 class=\"visually-hidden\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
    <ul class=\"tabs__items\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 18, $this->source), "html", null, true);
            echo "</ul>
  </div>
";
        }
        // line 21
        if (($context["secondary"] ?? null)) {
            // line 22
            echo "  <div class=\"tabs tabs--secondary\">
    <h2 class=\"visually-hidden\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
    <ul class=\"tabs__items\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 24, $this->source), "html", null, true);
            echo "</ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  62 => 23,  59 => 22,  57 => 21,  51 => 18,  47 => 17,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/navigation/menu-local-tasks.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\navigation\\menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("t" => 17, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
