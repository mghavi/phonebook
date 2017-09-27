<?php

/* search.html.twig */
class __TwigTemplate_3eb51d3b85652bef981bd936033b926ddc9f1ab95f667bdd246771bb14c6b52c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "search.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"box box-info\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">جستجو</h3>
        </div>
        <div class=\"box-body\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>جستجو بر اساس :</label>
                            ";
        // line 15
        echo "                            <select name=\"search\" class=\"form-control\">
                                <option></option>
                                <option value=\"firstname\">نام</option>
                                <option value=\"lastname\">نام خانوادگی</option>
                                <option value=\"email\">ایمیل</option>
                                <option value=\"cellphone\">تلفن همراه</option>
                                <option value=\"workphone\">تلفن محل کار</option>
                                <option value=\"homephone\">تلفن منزل</option>
                                <option value=\"comment\">توضیحات</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>مقدار</label>
                            <input type=\"text\" name =\"item\" class=\"form-control\" placeholder=\"مقدار\">
                        </div>
                    </div>
                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info pull-right\">ارسال</button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">مشخصات مشتری</h3>

            <div class=\"box-tools\">
                <ul class=\"pagination pagination-sm no-margin pull-right\">
                    <li><a href=\"#\">«</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        ";
        // line 58
        echo "                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>تلفن همراه</th>
                        <th>تلفن محل کار</th>
                        <th>تلفن منزل</th>
                        <th>توضیحات</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            <div class=\"progress progress-xs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                            </div>
                        </td>
                        <td><span class=\"badge bg-red\">55%</span></td>
                    </tr>
                    <tr>
                        ";
        // line 78
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 79
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "cell_phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "work_phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "home_phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "comment", array()), "html", null, true);
            echo "</td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                        ";
        // line 88
        echo "                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 88,  146 => 87,  138 => 85,  134 => 84,  130 => 83,  126 => 82,  122 => 81,  118 => 80,  113 => 79,  108 => 78,  87 => 58,  43 => 15,  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{%extends \"base.html.twig\"%}
{% block content %}
    <div class=\"box box-info\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">جستجو</h3>
        </div>
        <div class=\"box-body\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>جستجو بر اساس :</label>
                            {#                            <input type=\"search\" name =\"firstname\" class=\"form-control\">#}
                            <select name=\"search\" class=\"form-control\">
                                <option></option>
                                <option value=\"firstname\">نام</option>
                                <option value=\"lastname\">نام خانوادگی</option>
                                <option value=\"email\">ایمیل</option>
                                <option value=\"cellphone\">تلفن همراه</option>
                                <option value=\"workphone\">تلفن محل کار</option>
                                <option value=\"homephone\">تلفن منزل</option>
                                <option value=\"comment\">توضیحات</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>مقدار</label>
                            <input type=\"text\" name =\"item\" class=\"form-control\" placeholder=\"مقدار\">
                        </div>
                    </div>
                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info pull-right\">ارسال</button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">مشخصات مشتری</h3>

            <div class=\"box-tools\">
                <ul class=\"pagination pagination-sm no-margin pull-right\">
                    <li><a href=\"#\">«</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        {#                        <th style=\"width: 10px\">#</th>#}
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>تلفن همراه</th>
                        <th>تلفن محل کار</th>
                        <th>تلفن منزل</th>
                        <th>توضیحات</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            <div class=\"progress progress-xs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                            </div>
                        </td>
                        <td><span class=\"badge bg-red\">55%</span></td>
                    </tr>
                    <tr>
                        {#                        {% for results in result %}#}
                        {% for user in result %}
                            <td>{{ user.firstname }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.cell_phone }}</td>
                            <td>{{ user.work_phone }}</td>
                            <td>{{ user.home_phone }}</td>
                            <td>{{ user.comment }}</td>
                        {% endfor %}
                        {#                        {% endfor %}#}
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

{% endblock content %}", "search.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\search.html.twig");
    }
}
