<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_934bedfb2c50c438642d11a7ca02f876b15a4891e315396188c43c655a7a0eb0 extends Twig_Template
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
        $__internal_4cf4969d696923da1df9af26b5f4b574b6359ac0fb8df1d2245e4ffd98d58e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf4969d696923da1df9af26b5f4b574b6359ac0fb8df1d2245e4ffd98d58e47->enter($__internal_4cf4969d696923da1df9af26b5f4b574b6359ac0fb8df1d2245e4ffd98d58e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6ebcfa760215001230f144fa4d686e381d0a5f630c1b546887ab256680d26629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebcfa760215001230f144fa4d686e381d0a5f630c1b546887ab256680d26629->enter($__internal_6ebcfa760215001230f144fa4d686e381d0a5f630c1b546887ab256680d26629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4cf4969d696923da1df9af26b5f4b574b6359ac0fb8df1d2245e4ffd98d58e47->leave($__internal_4cf4969d696923da1df9af26b5f4b574b6359ac0fb8df1d2245e4ffd98d58e47_prof);

        
        $__internal_6ebcfa760215001230f144fa4d686e381d0a5f630c1b546887ab256680d26629->leave($__internal_6ebcfa760215001230f144fa4d686e381d0a5f630c1b546887ab256680d26629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
