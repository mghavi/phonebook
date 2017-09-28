<?php

/* base.html.twig */
class __TwigTemplate_e76e9b6537c927b795592ef3c5a1d94733339969db747cc5f1b1d4e7ed67b470 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/dist/css/AdminLTE.css\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/dist/css/skins/skin-blue.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/dist/css/bootstrap-rtl.min.css\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class=\"skin-blue sidebar-mini\">
        <div class=\"wrapper\">
            <!-- Main Header -->
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"#\" class=\"logo\">
                    داشبورد
                </a>
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">
                            ";
        // line 72
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        </li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"treeview active\">
                            <a href=\"#\"><i class=\"fa fa-link\"></i> <span>مشتری</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"/phonebook/client/add.php\">جدید</a></li>
                                <li><a href=\"/phonebook/client/search.php\">جستجو</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>کاربران</span></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Another Link</span></a></li>
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 93
        echo twig_escape_filter($this->env, ($context["pagename"] ?? null), "html", null, true);
        echo "
                    </h1>
                </section>
                <!-- Main content -->
                <section class=\"content\">
                    ";
        // line 98
        if ( !twig_test_empty(($context["message"] ?? null))) {
            // line 99
            echo "                        <div class=\"box box-info box-solid\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">هشدار</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body\">
                                <ul>
                                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 111
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    ";
        }
        // line 118
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <";
        // line 132
        echo "
            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/bootstrap/js/bootstrap.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/templates/dist/js/app.min.js\"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
    </body>
</html>
";
    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        // line 119
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 119,  217 => 118,  204 => 147,  199 => 145,  194 => 143,  181 => 132,  175 => 120,  172 => 118,  165 => 113,  156 => 111,  152 => 110,  139 => 99,  137 => 98,  129 => 93,  105 => 72,  51 => 21,  47 => 20,  39 => 15,  30 => 9,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"{{path}}/templates/bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{path}}/templates/dist/css/AdminLTE.css\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"{{path}}/templates/dist/css/skins/skin-blue.min.css\">
        <link rel=\"stylesheet\" href=\"{{path}}/templates/dist/css/bootstrap-rtl.min.css\">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class=\"skin-blue sidebar-mini\">
        <div class=\"wrapper\">
            <!-- Main Header -->
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"#\" class=\"logo\">
                    داشبورد
                </a>
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">
                            {{name}}
                        </li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"treeview active\">
                            <a href=\"#\"><i class=\"fa fa-link\"></i> <span>مشتری</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"/phonebook/client/add.php\">جدید</a></li>
                                <li><a href=\"/phonebook/client/search.php\">جستجو</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>کاربران</span></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Another Link</span></a></li>
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        {{pagename}}
                    </h1>
                </section>
                <!-- Main content -->
                <section class=\"content\">
                    {% if message is not empty %}
                        <div class=\"box box-info box-solid\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">هشدار</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body\">
                                <ul>
                                    {% for msg in message %}
                                        <li>{{ msg }}</li>
                                        {% endfor %}
                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    {% endif %}
                    {% block content %}
                    {% endblock %}
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <{#footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
            </footer>#}

            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src=\"{{path}}/templates/plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"{{path}}/templates/bootstrap/js/bootstrap.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{path}}/templates/dist/js/app.min.js\"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\base.html.twig");
    }
}
