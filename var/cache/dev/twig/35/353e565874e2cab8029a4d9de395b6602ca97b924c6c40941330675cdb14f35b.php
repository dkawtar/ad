<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4f3bcf8ce8ae33160ada8ce4d78fcf876c129a073a96ef662c0b067c194a1b1f extends Twig_Template
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
        $__internal_98245184052b02ae90573ae9133099a5e21783a165f9fad3a7c3dcbdd1ee3185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98245184052b02ae90573ae9133099a5e21783a165f9fad3a7c3dcbdd1ee3185->enter($__internal_98245184052b02ae90573ae9133099a5e21783a165f9fad3a7c3dcbdd1ee3185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3cfb8179907aefac1b9ec737fc52f7354fc38354923b811c9d566860ad4aaca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfb8179907aefac1b9ec737fc52f7354fc38354923b811c9d566860ad4aaca6->enter($__internal_3cfb8179907aefac1b9ec737fc52f7354fc38354923b811c9d566860ad4aaca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98245184052b02ae90573ae9133099a5e21783a165f9fad3a7c3dcbdd1ee3185->leave($__internal_98245184052b02ae90573ae9133099a5e21783a165f9fad3a7c3dcbdd1ee3185_prof);

        
        $__internal_3cfb8179907aefac1b9ec737fc52f7354fc38354923b811c9d566860ad4aaca6->leave($__internal_3cfb8179907aefac1b9ec737fc52f7354fc38354923b811c9d566860ad4aaca6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
