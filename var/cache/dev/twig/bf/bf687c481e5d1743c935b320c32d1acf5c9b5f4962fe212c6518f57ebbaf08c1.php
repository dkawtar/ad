<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c4301679aa89a51a67ce083be669212c07223eea446452214b3809669ff94a84 extends Twig_Template
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
        $__internal_03ee79f0c7ff8890dd33fa61079ccb2511d8f1ec9a743d7386288c34b13b038e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ee79f0c7ff8890dd33fa61079ccb2511d8f1ec9a743d7386288c34b13b038e->enter($__internal_03ee79f0c7ff8890dd33fa61079ccb2511d8f1ec9a743d7386288c34b13b038e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d020f6ba0b0ef042d5bf6d82cce2d081e9b479322d6698c10af0b6c0d540e042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d020f6ba0b0ef042d5bf6d82cce2d081e9b479322d6698c10af0b6c0d540e042->enter($__internal_d020f6ba0b0ef042d5bf6d82cce2d081e9b479322d6698c10af0b6c0d540e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_03ee79f0c7ff8890dd33fa61079ccb2511d8f1ec9a743d7386288c34b13b038e->leave($__internal_03ee79f0c7ff8890dd33fa61079ccb2511d8f1ec9a743d7386288c34b13b038e_prof);

        
        $__internal_d020f6ba0b0ef042d5bf6d82cce2d081e9b479322d6698c10af0b6c0d540e042->leave($__internal_d020f6ba0b0ef042d5bf6d82cce2d081e9b479322d6698c10af0b6c0d540e042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
