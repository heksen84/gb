<?php

/* C:\OSPanel\domains\gameblaster/themes/demo/partials/site/footer.htm */
class __TwigTemplate_07ed98c40460798a706b1226d0aa0002b0b0e319ee82c69450fe61616d319c63 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">GameBlaster &copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">GameBlaster &copy; {{ \"now\"|date(\"Y\") }}</p>
    </div>
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/demo/partials/site/footer.htm", "");
    }
}
