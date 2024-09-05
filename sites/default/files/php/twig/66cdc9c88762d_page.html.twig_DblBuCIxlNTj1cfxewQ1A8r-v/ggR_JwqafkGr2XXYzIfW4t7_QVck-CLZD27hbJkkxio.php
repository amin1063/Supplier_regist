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

/* themes/material_base/themes/material_base_mdc/templates/layout/page.html.twig */
class __TwigTemplate_d2e7e929a2e8993350622a0a474f9f72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
            'navbar_adjust' => [$this, 'block_navbar_adjust'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@material_base/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ((($context["navbar_style"] ?? null) == "dense")) {
            // line 4
            $context["navbar_style_adjust"] = "mdc-top-app-bar--dense-fixed-adjust";
        } elseif ((        // line 5
($context["navbar_style"] ?? null) == "prominent")) {
            // line 6
            $context["navbar_style_adjust"] = "mdc-top-app-bar--prominent-fixed-adjust";
        } else {
            // line 8
            $context["navbar_style_adjust"] = "mdc-top-app-bar--fixed-adjust";
        }
        // line 1
        $this->parent = $this->loadTemplate("@material_base/layout/page.html.twig", "themes/material_base/themes/material_base_mdc/templates/layout/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <div class=\"page-container layout-container";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["page_layout"] ?? null)) ? (" layout-container--node") : (" layout-container--page")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["drawer_full"] ?? null)) ? (" mdc-drawer-app-content") : ("")));
        echo "\">
";
    }

    // line 15
    public function block_navbar_adjust($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  <div class=\"page-navbar-adjust ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_style_adjust"] ?? null), 16, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["drawer_below"] ?? null)) ? (" mdc-drawer-app-content") : ("")));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 15,  66 => 12,  62 => 11,  57 => 1,  54 => 8,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 4);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
