<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7ee4e3a302d9e53204d334d5476135b1755f4bdba0f832f4d55093b3f159d6d6 extends Twig_Template
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
        $__internal_c2e98e386ea83b904859f5ba0913afafdcfa953c0c8447d6c20fcc75da7d2f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e98e386ea83b904859f5ba0913afafdcfa953c0c8447d6c20fcc75da7d2f6c->enter($__internal_c2e98e386ea83b904859f5ba0913afafdcfa953c0c8447d6c20fcc75da7d2f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c69ec6577ed02e5752b8c979f916becddea5f06a23581a3ed8968d194d30fb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69ec6577ed02e5752b8c979f916becddea5f06a23581a3ed8968d194d30fb37->enter($__internal_c69ec6577ed02e5752b8c979f916becddea5f06a23581a3ed8968d194d30fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c2e98e386ea83b904859f5ba0913afafdcfa953c0c8447d6c20fcc75da7d2f6c->leave($__internal_c2e98e386ea83b904859f5ba0913afafdcfa953c0c8447d6c20fcc75da7d2f6c_prof);

        
        $__internal_c69ec6577ed02e5752b8c979f916becddea5f06a23581a3ed8968d194d30fb37->leave($__internal_c69ec6577ed02e5752b8c979f916becddea5f06a23581a3ed8968d194d30fb37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
