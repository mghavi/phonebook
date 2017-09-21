<?php

/* layout.html.twig */
class __TwigTemplate_75b9cc46998bdc610edb6049bd51a098fbbe8a6104a6b959863360afcd95178b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link rel = \"stylesheet\" type = \"text/css\" href = \"css/bootstrap.css\" />
        <link rel = \"stylesheet\" type = \"text/css\" href = \"css/bootstrap-rtl.css\" />
        <link rel = \"stylesheet\" type = \"text/css\" href = \"css/bootstrap.min.css\" />
        <link rel = \"stylesheet\" type = \"text/css\" href = \"css/bootstrap-rtl.min.css\" />
        <script src=\"js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </body>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  39 => 12,  35 => 15,  33 => 12,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\layout.html.twig");
    }
}
