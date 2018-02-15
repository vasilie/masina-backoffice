<?php

/* /Applications/AMPPS/www/masina-backoffice/themes/responsiv-flat/layouts/fallback.htm */
class __TwigTemplate_ad6d8aece2cad187760403acd654890b41584af083f6ac284804c4f440b14e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/masina-backoffice/themes/responsiv-flat/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Applications/AMPPS/www/masina-backoffice/themes/responsiv-flat/layouts/fallback.htm", "");
    }
}
