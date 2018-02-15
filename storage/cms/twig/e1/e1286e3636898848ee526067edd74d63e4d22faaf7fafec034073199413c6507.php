<?php

/* /Applications/AMPPS/www/masina-backoffice/plugins/rainlab/builder/components/recorddetails/default.htm */
class __TwigTemplate_e1c5663a1ff643ee4627083665007d86f2fd9b515911f3f398e42b1a9589e072 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/masina-backoffice/plugins/rainlab/builder/components/recorddetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = __SELF__.record %}
{% set displayColumn = __SELF__.displayColumn %}
{% set notFoundMessage = __SELF__.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Applications/AMPPS/www/masina-backoffice/plugins/rainlab/builder/components/recorddetails/default.htm", "");
    }
}
