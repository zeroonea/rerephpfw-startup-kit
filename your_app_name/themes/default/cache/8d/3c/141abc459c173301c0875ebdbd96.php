<?php

/* index.html.twig */
class __TwigTemplate_8d3c141abc459c173301c0875ebdbd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fb_head_prefix' => array($this, 'block_fb_head_prefix'),
            'title' => array($this, 'block_title'),
            'custom_styles' => array($this, 'block_custom_styles'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'external_scripts' => array($this, 'block_external_scripts'),
            'custom_scripts' => array($this, 'block_custom_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head";
        // line 6
        $this->displayBlock('fb_head_prefix', $context, $blocks);
        echo ">
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\t
\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<meta name=\"viewport\" content=\"width=device-width\">
\t
\t<link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "images/favicon.png\" alt=\"thehe.ro\"/>
\t";
        // line 17
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/reset.css")), "html", null, true);
        echo "
\t";
        // line 18
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/typography.css")), "html", null, true);
        echo "
\t";
        // line 19
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/text.css")), "html", null, true);
        echo "
\t";
        // line 20
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/grid.css")), "html", null, true);
        echo "
\t";
        // line 21
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/style.css")), "html", null, true);
        echo "
\t";
        // line 22
        $this->displayBlock('custom_styles', $context, $blocks);
        // line 23
        echo "\t";
        echo print_all_ext_css();
        echo " 
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "js/modernizr-2.5.3-respond-1.1.0.min.js\"></script>
\t";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        $this->displayBlock('external_scripts', $context, $blocks);
        // line 33
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 34
        echo "</body>
</html>
";
    }

    // line 6
    public function block_fb_head_prefix($context, array $blocks = array())
    {
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_custom_styles($context, array $blocks = array())
    {
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
    }

    // line 30
    public function block_external_scripts($context, array $blocks = array())
    {
        // line 31
        echo "<script src=\"";
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "js/jquery.js\"></script>
";
    }

    // line 33
    public function block_custom_scripts($context, array $blocks = array())
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
        return array (  136 => 33,  129 => 31,  126 => 30,  121 => 29,  116 => 25,  111 => 22,  106 => 9,  101 => 6,  95 => 34,  93 => 33,  91 => 30,  89 => 29,  84 => 26,  82 => 25,  78 => 24,  73 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  37 => 9,  31 => 6,  24 => 1,  36 => 5,  33 => 4,  27 => 2,);
    }
}
