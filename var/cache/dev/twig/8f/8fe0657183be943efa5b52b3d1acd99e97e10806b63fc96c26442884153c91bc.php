<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e173a85e595cfe08b3993df01e013349eb245ce93ab344fcf0ce6bcd44bba5b7 extends Twig_Template
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
        $__internal_dc3282d692d6added5bed1dd396ef84140f2d218ccca6bc2b76bf10223fa3951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3282d692d6added5bed1dd396ef84140f2d218ccca6bc2b76bf10223fa3951->enter($__internal_dc3282d692d6added5bed1dd396ef84140f2d218ccca6bc2b76bf10223fa3951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b47d1a84b134141cf0c79603bcf70d0dc87a8fe54b6537ec7eb34455e0f16c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47d1a84b134141cf0c79603bcf70d0dc87a8fe54b6537ec7eb34455e0f16c0a->enter($__internal_b47d1a84b134141cf0c79603bcf70d0dc87a8fe54b6537ec7eb34455e0f16c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dc3282d692d6added5bed1dd396ef84140f2d218ccca6bc2b76bf10223fa3951->leave($__internal_dc3282d692d6added5bed1dd396ef84140f2d218ccca6bc2b76bf10223fa3951_prof);

        
        $__internal_b47d1a84b134141cf0c79603bcf70d0dc87a8fe54b6537ec7eb34455e0f16c0a->leave($__internal_b47d1a84b134141cf0c79603bcf70d0dc87a8fe54b6537ec7eb34455e0f16c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
