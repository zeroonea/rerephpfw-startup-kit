<?php

/* index.html.twig */
class __TwigTemplate_8d3c141abc459c173301c0875ebdbd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\t
<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " / ReRePHPFW Startup Kit</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width\">
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "images/favicon.png\" alt=\"thehe.ro\"/>
";
        // line 14
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/reset.css")), "html", null, true);
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/typography.css")), "html", null, true);
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/text.css")), "html", null, true);
        echo "
";
        // line 17
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/grid.css")), "html", null, true);
        echo "
";
        // line 18
        echo twig_escape_filter($this->env, add_ext_css((get_theme_url() . "css/style.css")), "html", null, true);
        echo "
";
        // line 19
        $this->displayBlock('custom_styles', $context, $blocks);
        // line 20
        echo print_all_ext_css();
        echo " 
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "js/modernizr-2.5.3-respond-1.1.0.min.js\"></script>
";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        $this->displayBlock('external_scripts', $context, $blocks);
        // line 30
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 31
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_custom_styles($context, array $blocks = array())
    {
    }

    // line 22
    public function block_head($context, array $blocks = array())
    {
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 27
    public function block_external_scripts($context, array $blocks = array())
    {
        // line 28
        echo "<script src=\"";
        echo twig_escape_filter($this->env, get_theme_url(), "html", null, true);
        echo "js/jquery.js\"></script>
";
    }

    // line 30
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
        return array (  123 => 30,  116 => 28,  113 => 27,  108 => 26,  103 => 22,  98 => 19,  93 => 9,  87 => 31,  85 => 30,  83 => 27,  81 => 26,  76 => 23,  74 => 22,  70 => 21,  66 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  23 => 1,  36 => 5,  33 => 9,  27 => 2,);
    }
}
