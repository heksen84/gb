<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/partials/explain/ps4.htm */
class __TwigTemplate_3791311cb9267681e422dbe8f1647564ca70d106e5260ad4e0d8f49a05266c83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
       ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/partials/explain/ps4.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
       {% component 'blogPosts2' %}
</p>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/partials/explain/ps4.htm", "");
    }
}
