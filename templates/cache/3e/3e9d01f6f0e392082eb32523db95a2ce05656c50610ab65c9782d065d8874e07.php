<?php

/* base.html.twig */
class __TwigTemplate_3966d14ecb4a4e04b4c392d29f320a90e3e124c39db8ed17bff35261cfceea39 extends Twig_Template
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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "dist/css/AdminLTE.css\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "dist/css/skins/skin-blue.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "dist/css/bootstrap-rtl.min.css\">
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
                <a href=\"index2.html\" class=\"logo\">
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

                    <!-- Sidebar user panel (optional) -->


                    <!-- search form (Optional) -->

                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        </li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"treeview\">
                            <a href=\"#\"><i class=\"fa fa-link\"></i> <span>مشتری</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"#\">جدید</a></li>
                                <li><a href=\"#\">جستجو</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
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
        // line 111
        echo twig_escape_filter($this->env, ($context["pagename"] ?? null), "html", null, true);
        echo "
                    </h1>
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    ";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <";
        // line 131
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
        // line 142
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "bootstrap/js/bootstrap.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "dist/js/app.min.js\"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
    </body>
</html>
";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
        // line 118
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
        return array (  203 => 118,  200 => 117,  187 => 146,  182 => 144,  177 => 142,  164 => 131,  158 => 119,  156 => 117,  147 => 111,  122 => 89,  55 => 25,  51 => 24,  43 => 19,  34 => 13,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE 2</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.4 -->
        <link rel=\"stylesheet\" href=\"{{path}}bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{path}}dist/css/AdminLTE.css\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"{{path}}dist/css/skins/skin-blue.min.css\">
        <link rel=\"stylesheet\" href=\"{{path}}dist/css/bootstrap-rtl.min.css\">
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
                <a href=\"index2.html\" class=\"logo\">
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

                    <!-- Sidebar user panel (optional) -->


                    <!-- search form (Optional) -->

                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">
                            {{name}}
                        </li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"treeview\">
                            <a href=\"#\"><i class=\"fa fa-link\"></i> <span>مشتری</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"#\">جدید</a></li>
                                <li><a href=\"#\">جستجو</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
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
        <script src=\"{{path}}plugins/jQuery/jQuery-2.1.4.min.js\"></script>
        <!-- Bootstrap 3.3.4 -->
        <script src=\"{{path}}bootstrap/js/bootstrap.min.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{path}}dist/js/app.min.js\"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\base.html.twig");
    }
}
