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

/* themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig */
class __TwigTemplate_72e8df535fdd6cdecc77ae45fc3035a3 extends Template
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
        // line 1
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 3
($context["region"] ?? null), 3, $this->source))), 2 => "page-navbar", 3 => "navbar", 4 => "mdc-top-app-bar", 5 => ((        // line 7
($context["navbar_fixed"] ?? null)) ? ("mdc-top-app-bar--fixed") : ("mdc-top-app-bar--not-fixed")), 6 => ((        // line 8
($context["navbar_style"] ?? null)) ? (("mdc-top-app-bar--" . $this->sandbox->ensureToStringAllowed(($context["navbar_style"] ?? null), 8, $this->source))) : (""))];
        // line 10
        echo "
<header";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), "setAttribute", [0 => "data-mdc-auto-init", 1 => "MDCTopAppBar"], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
  <div class=\"navbar__container mdc-top-app-bar__row\">
    <section class=\"navbar__section mdc-top-app-bar__section\">

      ";
        // line 15
        $this->loadTemplate("@material_base_mdc/components/02_molecules/icon-button.twig", "themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig", 15)->display(twig_array_merge($context, ["data" => ["icon" => ["data" => ["value" => "menu"], "settings" => ["type" => "svg-sprite"]]], "settings" => ["classes" => [0 => "mdc-top-app-bar__navigation-icon", 1 => "overlay-open__button", 2 => "hidden-lg"]]]));
        // line 30
        echo "
      ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
        echo "

      ";
        // line 33
        $this->loadTemplate("@material_base_mdc/components/02_molecules/icon-button.twig", "themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig", 33)->display(twig_array_merge($context, ["data" => ["url" => "/user", "icon" => ["data" => ["value" => "account_circle"], "settings" => ["type" => "svg-sprite"]]], "settings" => ["classes" => [0 => "mdc-top-app-bar__action-item", 1 => "navbar-item--right"], "tag" => "a"]]));
        // line 50
        echo "
      ";
        // line 51
        $this->loadTemplate("@material_base_mdc/components/02_molecules/button.twig", "themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig", 51)->display(twig_array_merge($context, ["data" => ["label" => "Contact", "url" => "/contact"], "settings" => ["classes" => [0 => "mdc-button--unelevated", 1 => "button--light", 2 => "navbar-item", 3 => "visible-sm-flex"], "tag" => "a"]]));
        // line 61
        echo "    </section>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 61,  69 => 51,  66 => 50,  64 => 33,  59 => 31,  56 => 30,  54 => 15,  47 => 11,  44 => 10,  42 => 8,  41 => 7,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/themes/material_base_mdc/templates/layout/region--navbar--example.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\themes\\material_base_mdc\\templates\\layout\\region--navbar--example.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "include" => 15);
        static $filters = array("clean_class" => 3, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape'],
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
