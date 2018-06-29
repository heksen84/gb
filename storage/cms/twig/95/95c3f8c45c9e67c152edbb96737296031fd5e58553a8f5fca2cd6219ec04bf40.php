<?php

/* C:\OSPanel\domains\gameblaster/themes/demo/pages/404.htm */
class __TwigTemplate_bad3d60930748f034b9cb6eae864da1096e26cc340104ce2a7ffd2c77d8ab4c2 extends Twig_Template
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
        <h1>нет страницы</h1>
        <p>Сарян</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>нет страницы</h1>
        <p>Сарян</p>
    </div>
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/demo/pages/404.htm", "");
    }
}
