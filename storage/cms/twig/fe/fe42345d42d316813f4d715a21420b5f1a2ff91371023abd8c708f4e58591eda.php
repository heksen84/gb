<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/pages/ps4.htm */
class __TwigTemplate_66019e19032c66c2756ff0d3e9faf2e165ef1ec6487fd62232be29016071488e extends Twig_Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>PlayStation 4</h1>
                <p>Всё о playstation 4</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/ps4.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("xbox");
        echo "\" class=\"btn btn-lg btn-default\">Continue XBOX</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/ps4.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>PlayStation 4</h1>
                <p>Всё о playstation 4</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/ps4.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a href=\"{{ 'xbox'|page }}\" class=\"btn btn-lg btn-default\">Continue XBOX</a></p>
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/ps4.htm", "");
    }
}
