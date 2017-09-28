<?php

/* login.html.twig */
class __TwigTemplate_4f686630125312d27dcd778f9fa41dfcadb4d5799386dcc35b253818c02fb1ef extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"rtl\">
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "dist/css/AdminLTE.min.css\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "plugins/iCheck/square/blue.css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <b>Admin</b>LTE
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <p class=\"login-box-msg\">ورود کاربران</p>
                <form method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" placeholder=\"ایمیل\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"رمز عبور\">
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox icheck\">
                                <label>
                                    <input type=\"checkbox\" name=\"remember\"> Remember Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <a href=\"#\">I forgot my password</a><br>

            </div><!-- /.login-box-body -->
            ";
        // line 56
        if ( !twig_test_empty(($context["message"] ?? null))) {
            // line 57
            echo "                <div class=\"box box-info box-solid\">
                    ";
            // line 65
            echo "                    <!-- /.box-header -->
                    <div class=\"box-body\">
                        <ul class=\"list-inline\">
                            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 69
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            ";
        }
        // line 76
        echo "        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "bootstrap/js/bootstrap.min.js\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "plugins/iCheck/icheck.min.js\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 83,  125 => 81,  120 => 79,  115 => 76,  108 => 71,  99 => 69,  95 => 68,  90 => 65,  87 => 57,  85 => 56,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html dir=\"rtl\">
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"{{path}}bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{path}}dist/css/AdminLTE.min.css\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"{{path}}plugins/iCheck/square/blue.css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"login-page\">
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <b>Admin</b>LTE
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <p class=\"login-box-msg\">ورود کاربران</p>
                <form method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" placeholder=\"ایمیل\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"رمز عبور\">
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox icheck\">
                                <label>
                                    <input type=\"checkbox\" name=\"remember\"> Remember Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <a href=\"#\">I forgot my password</a><br>

            </div><!-- /.login-box-body -->
            {% if message is not empty %}
                <div class=\"box box-info box-solid\">
                    {#<div class=\"box-header with-border\">
                        <h3 class=\"box-title\">هشدار</h3>
                        <div class=\"box-tools pull-right\">
                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>#}
                    <!-- /.box-header -->
                    <div class=\"box-body\">
                        <ul class=\"list-inline\">
                            {% for msg in message %}
                                <li>{{ msg }}</li>
                                {% endfor %}
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            {% endif %}
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src=\"{{path}}plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"{{path}}bootstrap/js/bootstrap.min.js\"></script>
        <!-- iCheck -->
        <script src=\"{{path}}plugins/iCheck/icheck.min.js\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
", "login.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\login.html.twig");
    }
}
