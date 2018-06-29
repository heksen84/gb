<?php

/* C:\OSPanel\domains\gameblaster/themes/gameblaster/partials/site/footer.htm */
class __TwigTemplate_c72b7172e5a16f491712c50647a699aad460b4d9526440160cfe70b0d42458ff extends Twig_Template
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
        <h3>реклама на сайте</h3>
        <p class=\"muted credit\">GameBlaster &copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <h3>реклама на сайте</h3>
        <p class=\"muted credit\">GameBlaster &copy; {{ \"now\"|date(\"Y\") }}</p>
    </div>
</div>", "C:\\OSPanel\\domains\\gameblaster/themes/gameblaster/partials/site/footer.htm", "");
    }
}
