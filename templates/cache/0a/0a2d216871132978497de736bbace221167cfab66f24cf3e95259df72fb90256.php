<?php

/* test.html.twig */
class __TwigTemplate_7abcb2eeb37bb2132e3a7effd3bbb5f4edfa392be831cef2b2e84eb1316cebd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
    <body>
        <h1>hu</h1>
        ";
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["results"]) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["results"], "firstname", array()), "html", null, true);
            echo "
            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["results"], "lastname", array()), "html", null, true);
            echo "<br>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['results'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        ";
        // line 24
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 24,  43 => 11,  34 => 8,  29 => 7,  24 => 6,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<html>
    <body>
        <h1>hu</h1>
        {#                {{ dump() }}#}
        {% for results in result %}
            {{results.firstname}}
            {{results.lastname}}<br>

        {% endfor %}
        {#<ul>
            {% for user in users %}
                <li>{{ user.username|e }}</li>
                {% endfor %}
        </ul>
        {% for letter in 'a'..'z' %}
            {{loop.index}}  * {{ letter }}
        {% else %}
            <h1>no user found</h1>
        {% endfor %}
        {% for i in 0..10 %}
            * {{ i }}
        {% endfor %}#}

    </body>
</html>", "test.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\test.html.twig");
    }
}
