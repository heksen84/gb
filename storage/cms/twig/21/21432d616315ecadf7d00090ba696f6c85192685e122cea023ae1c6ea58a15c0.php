<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/pages/404.htm */
class __TwigTemplate_d62dd9c590d13022117f8a45413c9f5bbe3f2e0e8a39aeb4e4a82208be49110c extends Twig_Template
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
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/404.htm";
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
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/pages/404.htm", "");
    }
}
