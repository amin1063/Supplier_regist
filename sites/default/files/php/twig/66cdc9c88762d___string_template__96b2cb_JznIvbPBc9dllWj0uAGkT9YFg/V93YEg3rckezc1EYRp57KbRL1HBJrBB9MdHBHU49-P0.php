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

/* __string_template__96b2cb2cf580158be2cd447468de735b */
class __TwigTemplate_94212660a1b42d8a6837ea1b411ed83f extends Template
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
        echo "<span class=\"hidden\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:default=\"http://www.w3.org/2000/svg\"><defs><symbol viewBox=\"0 0 24 24\" id=\"account_circle\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08c1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"arrow_drop_down\"><path d=\"M7 10l5 5l5-5z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"check_circle\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"chevron_left\"><path d=\"M15.41 7.41L14 6l-6 6l6 6l1.41-1.41L10.83 12z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"chevron_right\"><path d=\"M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"close\"><path d=\"M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"content_copy\"><path d=\"M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z\" /></symbol><symbol overflow=\"visible\" preserveAspectRatio=\"none\" viewBox=\"0 0 24 24\" id=\"facebook\"><g><path id=\"facebook_facebook\" d=\"M16.5,3.46c-0.79-0.09-1.58-0.13-2.37-0.12c-1.07-0.05-2.11,0.33-2.89,1.06c-0.76,0.81-1.15,1.89-1.08,3v2.28  H7.5v3.08h2.65v7.9h3.19v-7.9H16l0.41-3.08h-3.07v-2c-0.03-0.4,0.08-0.79,0.31-1.12c0.33-0.29,0.77-0.43,1.21-0.37h1.64V3.46  L16.5,3.46z\" vector-effect=\"non-scaling-stroke\" /></g></symbol><symbol viewBox=\"0 0 24 24\" id=\"first_page\"><path d=\"M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6l6 6zM6 6h2v12H6z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"info\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z\" /></symbol><symbol viewBox=\"0 0 24 24\" id=\"last_page\"><path d=\"M5.59 7.41L10.18 12l-4.59 4.59L7 18l6-6l-6-6zM16 6h2v12h-2z\" /></symbol><symbol overflow=\"visible\" preserveAspectRatio=\"none\" viewBox=\"0 0 24 24\" id=\"linkedin\"><g><path id=\"linkedin_linkedin\" d=\"M4.19,9.32v10.32h3.44V9.32H4.19z M7.85,6.14C7.86,5.66,7.67,5.2,7.32,4.86c-0.37-0.34-0.87-0.52-1.38-0.5  c-0.51-0.02-1.01,0.16-1.4,0.5C4.18,5.19,3.98,5.65,3.99,6.14C3.98,6.62,4.17,7.08,4.51,7.41c0.37,0.35,0.86,0.53,1.37,0.51l0,0  C6.4,7.94,6.91,7.76,7.29,7.41c0.35-0.33,0.55-0.79,0.53-1.27l0,0H7.85z M19.99,13.73c0.09-1.25-0.3-2.48-1.08-3.46  c-0.74-0.79-1.78-1.22-2.86-1.18c-0.4,0-0.8,0.05-1.19,0.16c-0.32,0.1-0.61,0.25-0.87,0.45c-0.21,0.16-0.41,0.34-0.59,0.54  c-0.16,0.18-0.3,0.38-0.43,0.58l0,0v-1.5H9.52v0.5c0,0.33,0,1.36,0,3.08s0,3.97,0,6.74h3.47v-5.76c-0.03-0.3,0-0.59,0.07-0.88  c0.14-0.35,0.37-0.65,0.66-0.89c0.31-0.25,0.7-0.37,1.1-0.36c0.52-0.04,1.02,0.2,1.32,0.62c0.31,0.52,0.45,1.11,0.42,1.71v5.52h3.43  V13.73L19.99,13.73z\" vector-effect=\"non-scaling-stroke\" /></g></symbol><symbol viewBox=\"0 0 24 24\" id=\"menu\"><path d=\"M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z\" /></symbol><symbol overflow=\"visible\" preserveAspectRatio=\"none\" viewBox=\"0 0 24 24\" id=\"twitter\"><g><path id=\"twitter_twitter\" d=\"M20.2,6.92c-0.62,0.27-1.27,0.45-1.94,0.52c0.71-0.41,1.24-1.07,1.48-1.85c-0.66,0.39-1.38,0.67-2.13,0.81  c-1.27-1.36-3.41-1.43-4.76-0.15c-0.03,0.02-0.05,0.05-0.08,0.07c-0.65,0.62-1.01,1.48-1,2.38c0,0.26,0.03,0.52,0.08,0.77  C10.51,9.41,9.19,9.05,8,8.43C6.82,7.84,5.78,7.01,4.94,6C4.35,7.02,4.33,8.27,4.89,9.3C5.16,9.77,5.54,10.16,6,10.45  C5.46,10.43,4.93,10.27,4.46,10l0,0c-0.01,0.78,0.26,1.54,0.77,2.14c0.49,0.6,1.17,1.01,1.93,1.16c-0.29,0.07-0.58,0.11-0.88,0.11  c-0.21,0-0.43-0.02-0.64-0.05c0.44,1.37,1.7,2.3,3.14,2.33c-1.17,0.97-2.65,1.5-4.17,1.51c-0.27,0.02-0.54,0.02-0.81,0  c1.55,0.99,3.36,1.5,5.2,1.46c1.14,0.01,2.28-0.19,3.36-0.57c0.96-0.34,1.86-0.85,2.64-1.51c0.74-0.63,1.39-1.37,1.92-2.19  c0.52-0.8,0.93-1.67,1.2-2.59c0.26-0.88,0.4-1.79,0.4-2.7c0-0.19,0-0.34,0-0.44C19.18,8.18,19.75,7.59,20.2,6.92L20.2,6.92z\" vector-effect=\"non-scaling-stroke\" /></g></symbol><symbol viewBox=\"0 0 24 24\" id=\"warning\"><path d=\"M1 21h22L12 2L1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z\" /></symbol></defs></svg></span>";
    }

    public function getTemplateName()
    {
        return "__string_template__96b2cb2cf580158be2cd447468de735b";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__96b2cb2cf580158be2cd447468de735b", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
