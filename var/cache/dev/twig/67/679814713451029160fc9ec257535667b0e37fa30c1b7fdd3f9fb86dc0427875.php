<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6f1852cedaf4322ddf636d7aa0ed2e1fc77fa5d4a3709de6b883b6cef8c1ebcc extends Twig_Template
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
        $__internal_7b9d18d6d64b3424749c6007bf0c4f8261058ccb6b2f2799db1cee2747b835bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9d18d6d64b3424749c6007bf0c4f8261058ccb6b2f2799db1cee2747b835bf->enter($__internal_7b9d18d6d64b3424749c6007bf0c4f8261058ccb6b2f2799db1cee2747b835bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_73778a3cb868a0d348e39f80c2097bedcaf1f2d4f585180050cce6c90e035eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73778a3cb868a0d348e39f80c2097bedcaf1f2d4f585180050cce6c90e035eb5->enter($__internal_73778a3cb868a0d348e39f80c2097bedcaf1f2d4f585180050cce6c90e035eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b9d18d6d64b3424749c6007bf0c4f8261058ccb6b2f2799db1cee2747b835bf->leave($__internal_7b9d18d6d64b3424749c6007bf0c4f8261058ccb6b2f2799db1cee2747b835bf_prof);

        
        $__internal_73778a3cb868a0d348e39f80c2097bedcaf1f2d4f585180050cce6c90e035eb5->leave($__internal_73778a3cb868a0d348e39f80c2097bedcaf1f2d4f585180050cce6c90e035eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
