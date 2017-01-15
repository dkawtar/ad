<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1865349a6f012e81c2e46a9fe9c465b43980da3434a9b8a6f54d583b6b7f0c9e extends Twig_Template
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
        $__internal_913bbbf0d9f89c02e1b37a5fd7afe2bbcf57742f3e6cde3abbb8dd310de177b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913bbbf0d9f89c02e1b37a5fd7afe2bbcf57742f3e6cde3abbb8dd310de177b7->enter($__internal_913bbbf0d9f89c02e1b37a5fd7afe2bbcf57742f3e6cde3abbb8dd310de177b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bfda7259ac9dc5ec9c3d1de49f7227535062f0b224f63dd3f20eb79380c983df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda7259ac9dc5ec9c3d1de49f7227535062f0b224f63dd3f20eb79380c983df->enter($__internal_bfda7259ac9dc5ec9c3d1de49f7227535062f0b224f63dd3f20eb79380c983df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_913bbbf0d9f89c02e1b37a5fd7afe2bbcf57742f3e6cde3abbb8dd310de177b7->leave($__internal_913bbbf0d9f89c02e1b37a5fd7afe2bbcf57742f3e6cde3abbb8dd310de177b7_prof);

        
        $__internal_bfda7259ac9dc5ec9c3d1de49f7227535062f0b224f63dd3f20eb79380c983df->leave($__internal_bfda7259ac9dc5ec9c3d1de49f7227535062f0b224f63dd3f20eb79380c983df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
