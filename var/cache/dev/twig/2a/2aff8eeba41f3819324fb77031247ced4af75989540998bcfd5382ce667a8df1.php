<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_766ffb571a308896c7b3ba3b01afc32cfa67057fb9b8889d0fd2e3f615f9c180 extends Twig_Template
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
        $__internal_adc371f304f485184f6b6d5edd0ad64240006f4fcf824c7811c44aeb456cd43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc371f304f485184f6b6d5edd0ad64240006f4fcf824c7811c44aeb456cd43d->enter($__internal_adc371f304f485184f6b6d5edd0ad64240006f4fcf824c7811c44aeb456cd43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_207d6aac49ddf50ce498c9d160ef3f340db5dbc04cd869e825a3f6a0cb5ec5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207d6aac49ddf50ce498c9d160ef3f340db5dbc04cd869e825a3f6a0cb5ec5f8->enter($__internal_207d6aac49ddf50ce498c9d160ef3f340db5dbc04cd869e825a3f6a0cb5ec5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_adc371f304f485184f6b6d5edd0ad64240006f4fcf824c7811c44aeb456cd43d->leave($__internal_adc371f304f485184f6b6d5edd0ad64240006f4fcf824c7811c44aeb456cd43d_prof);

        
        $__internal_207d6aac49ddf50ce498c9d160ef3f340db5dbc04cd869e825a3f6a0cb5ec5f8->leave($__internal_207d6aac49ddf50ce498c9d160ef3f340db5dbc04cd869e825a3f6a0cb5ec5f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
