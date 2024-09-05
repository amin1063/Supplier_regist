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

/* themes/material_base/templates/layout/region--footer.html.twig */
class __TwigTemplate_97ae8d23003035176ceb7099d9f22980 extends Template
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
        // line 15
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 17
($context["region"] ?? null), 17, $this->source))), 2 => "page-footer", 3 => "footer", 4 => ((        // line 20
($context["footer_style"] ?? null)) ? (("footer--" . $this->sandbox->ensureToStringAllowed(($context["footer_style"] ?? null), 20, $this->source))) : (""))];
        // line 22
        echo "
";
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <footer";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), "setAttribute", [0 => "role", 1 => "contentinfo"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    <div class=\"footer__container\">
      <div class=\"footer__section\">
        ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 27, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/layout/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  48 => 24,  46 => 23,  43 => 22,  41 => 20,  40 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/layout/region--footer.html.twig", "C:\\xampp\\htdocs\\alpha2\\themes\\material_base\\templates\\layout\\region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 23);
        static $filters = array("clean_class" => 17, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
