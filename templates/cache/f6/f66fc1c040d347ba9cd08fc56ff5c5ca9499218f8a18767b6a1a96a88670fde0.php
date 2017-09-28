<?php

/* form.html.twig */
class __TwigTemplate_6cd2cafd84245546a7aa225eb1110cd904bbb3118ec5c125e1dedf0cab1f2fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-12 col-sm-12\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">مشتری</h3>
            </div>
            <form method=\"post\">
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label>نام</label>
                                <input type=\"text\" name =\"firstname\" class=\"form-control\" placeholder=\"نام\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstname", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label>نام خانودگی</label>
                                <input type=\"text\" name =\"lastname\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"نام خانودگی\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastname", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label>ایمیل</label>
                                <input type=\"email\" name =\"email\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"ایمیل\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label>تلفن همراه</label>
                                <input type=\"text\" name =\"cell_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن همراه\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "cell_phone", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن محل کار</label>
                                <input type=\"text\" name =\"work_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن محل کار\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "work_phone", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن منزل</label>
                                <input type=\"text\" name =\"home_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن منزل\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "home_phone", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <label>توضیحات</label>
                            <div class=\"form-group\">
                                <textarea name=\"comment\" rows=\"4\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "comment", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info pull-right\">ارسال</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  81 => 36,  74 => 32,  67 => 28,  58 => 22,  51 => 18,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"base.html.twig\"%}
{% block content %}
    <div class=\"col-md-12 col-sm-12\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">مشتری</h3>
            </div>
            <form method=\"post\">
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label>نام</label>
                                <input type=\"text\" name =\"firstname\" class=\"form-control\" placeholder=\"نام\" value=\"{{ user.firstname }}\">
                            </div>
                            <div class=\"form-group\">
                                <label>نام خانودگی</label>
                                <input type=\"text\" name =\"lastname\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"نام خانودگی\" value=\"{{ user.lastname }}\">
                            </div>
                            <div class=\"form-group\">
                                <label>ایمیل</label>
                                <input type=\"email\" name =\"email\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"ایمیل\" value=\"{{ user.email }}\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label>تلفن همراه</label>
                                <input type=\"text\" name =\"cell_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن همراه\" value=\"{{ user.cell_phone }}\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن محل کار</label>
                                <input type=\"text\" name =\"work_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن محل کار\" value=\"{{ user.work_phone }}\">
                            </div>
                            <div class=\"form-group\">
                                <label>تلفن منزل</label>
                                <input type=\"text\" name =\"home_phone\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"تلفن منزل\" value=\"{{ user.home_phone }}\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <label>توضیحات</label>
                            <div class=\"form-group\">
                                <textarea name=\"comment\" rows=\"4\">{{ user.comment }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info pull-right\">ارسال</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
{% endblock %}", "form.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\form.html.twig");
    }
}
