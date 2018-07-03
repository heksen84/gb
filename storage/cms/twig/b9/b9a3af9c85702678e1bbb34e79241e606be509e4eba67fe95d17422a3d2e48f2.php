<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/pages/pc.htm */
class __TwigTemplate_b8605526fb7673cee14f2d373ba342f230ad47f099886418ea3f57427c17cea3 extends Twig_Template
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
        echo "<div class=\"jumbotron title-js header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>PC</h1>
                <p>Всё о PC</p>
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
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/pc.htm";
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
        return new Twig_Source("<div class=\"jumbotron title-js header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>PC</h1>
                <p>Всё о PC</p>
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
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/pc.htm", "");
    }
}
