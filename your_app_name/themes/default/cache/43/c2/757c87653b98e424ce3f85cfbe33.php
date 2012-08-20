<?php

/* homepage.html.twig */
class __TwigTemplate_43c2757c87653b98e424ce3f85cfbe33 extends Twig_Template
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
        echo "Homepage";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
\t<div class=\"col_16\">
\t\t<h1>Welcome to ReRePHPFW!</h1>
\t\t<ul>
\t\t\t<li>PHP Libs
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"http://twig.sensiolabs.org/\">Twig</a></li>
\t\t\t\t\t<li><a href=\"http://symfony.com/doc/current/components/yaml.html\">sfYaml</a></li>
\t\t\t\t\t<li><a href=\"https://github.com/facebook/php-sdk\">Facebook PHP SDK</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>Javascript
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"http://jquery.com/\">jQuery</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>CSS
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"http://richclarkdesign.com\">Richard Clark Reset</a></li>
\t\t\t\t\t<li><a href=\"http://52framework.com/\">52framework Grid System</a></li>
\t\t\t\t\t<li><a href=\"http://simonwebdesign.com/simon-wp-framework/\">Typography from Simon WP Framework</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  27 => 2,);
    }
}
