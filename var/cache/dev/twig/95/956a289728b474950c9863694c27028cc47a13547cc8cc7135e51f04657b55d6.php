<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_736db1d2cec6d270ade21ea489f85cd32fccd508a96213922f1fd0c2807e0568 extends Twig_Template
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
        $__internal_b29245d502908e0238484879cdcb6210ca70e3c8c785d8ec0e3c559c405b272f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29245d502908e0238484879cdcb6210ca70e3c8c785d8ec0e3c559c405b272f->enter($__internal_b29245d502908e0238484879cdcb6210ca70e3c8c785d8ec0e3c559c405b272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7f40fa732c2ff7938fcd19b7e8685c518623e24adb2e3c072a249bddfabff04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f40fa732c2ff7938fcd19b7e8685c518623e24adb2e3c072a249bddfabff04f->enter($__internal_7f40fa732c2ff7938fcd19b7e8685c518623e24adb2e3c072a249bddfabff04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b29245d502908e0238484879cdcb6210ca70e3c8c785d8ec0e3c559c405b272f->leave($__internal_b29245d502908e0238484879cdcb6210ca70e3c8c785d8ec0e3c559c405b272f_prof);

        
        $__internal_7f40fa732c2ff7938fcd19b7e8685c518623e24adb2e3c072a249bddfabff04f->leave($__internal_7f40fa732c2ff7938fcd19b7e8685c518623e24adb2e3c072a249bddfabff04f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
