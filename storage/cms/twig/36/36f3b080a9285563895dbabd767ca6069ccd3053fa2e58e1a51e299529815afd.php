<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/pages/xbox.htm */
class __TwigTemplate_0e94979b124e3e83914a54233a48e4821c05880d03f15778f0ee4ddfcf015b19 extends Twig_Template
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
                <h1>XBOX</h1>
                <p>Всё о XBOX</p>
            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/xbox.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/xbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>XBOX</h1>
                <p>Всё о XBOX</p>
            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/xbox.htm\" %}</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/xbox.htm", "");
    }
}
