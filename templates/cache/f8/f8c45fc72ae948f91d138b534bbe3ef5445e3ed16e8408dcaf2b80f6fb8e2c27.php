<?php

/* insert.html.twig */
class __TwigTemplate_7be2d1aa0b840bcc211313322dbb13fff0dfc089a121d955f9d31ba8b561d685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "insert.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container-fluid\">
        <div class=\"col-md-3\">
            <form method=\"post\">
                <div class=\"form-group\">
                    <label>نام کاربری</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"نام کاربری\">
                </div>
                <div class=\"form-group\">
                    <label>نام</label>
                    <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"نام\">
                </div>
                <div class=\"form-group\">
                    <label>نام خانوادگی</label>
                    <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"نام خانوادگی\">
                </div>
                <div class=\"form-group\">
                    <label>ایمیل</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"ایمیل\">
                </div>
                <div class=\"form-group\">
                    <label>شماره تلفن</label>
                    <input type=\"text\" class=\"form-control\" name=\"phone1\" placeholder=\"شماره تلفن\">
                </div>
                <div class=\"form-group\">
                    <label>شماره تلفن</label>
                    <input type=\"text\" class=\"form-control\" name=\"phone2\" placeholder=\"شماره تلفن\">
                </div>
                <div class=\"form-group\">
                    <label>شماره تلفن</label>
                    <input type=\"text\" class=\"form-control\" name=\"phone3\" placeholder=\"شماره تلفن\">
                </div>
                <div class=\"form-group\">
                    <label>آدرس</label>
                    <input type=\"text\" class=\"form-control\" name=\"address\" placeholder=\"آدرس\">
                </div>
                <div class=\"form-group\">
                    <label>توضیحات</label>
                    <textarea class=\"form-control\" name=\"comment\" rows=\"3\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-default\">تایید</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "insert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "insert.html.twig", "C:\\xampp\\htdocs\\phonebook\\templates\\insert.html.twig");
    }
}
