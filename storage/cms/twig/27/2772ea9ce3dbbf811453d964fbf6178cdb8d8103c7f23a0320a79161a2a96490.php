<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/pages/home.htm */
class __TwigTemplate_c0ce3b0f82e813d41b4430a1b9d62bea2347a1c52a2876278a82ea74055ba54b extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h5>Все новости подряд</h5>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h5>Все новости подряд</h5>
    </div>
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/home.htm", "");
    }
}
