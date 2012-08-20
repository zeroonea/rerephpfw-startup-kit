<?php

/* 404.html.twig */
class __TwigTemplate_fe11a8637b522251d76d7a11ea6a8e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Error 404";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
\t<div class=\"col_16\">
\t\t<h1>Error 404</h1>
\t\t<p>Sorry, the page you are looking for cannot be found!</p>
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, get_url("home"), "html", null, true);
        echo "\">Back to Home</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  36 => 5,  33 => 4,  27 => 2,);
    }
}
