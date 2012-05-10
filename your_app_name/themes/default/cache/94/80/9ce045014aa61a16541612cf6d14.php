<?php

/* index.html.twig */
class __TwigTemplate_94809ce045014aa61a16541612cf6d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "images/favicon.ico\" alt=\"\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "css/styles.css\" />
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "<script src=\"";
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "js/jquery.js\"></script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  76 => 13,  71 => 12,  66 => 8,  61 => 5,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  42 => 10,  40 => 8,  32 => 6,  28 => 5,  22 => 1,  36 => 7,  33 => 4,  27 => 2,);
    }
}
