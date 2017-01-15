<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9d6dddcf291d1129f6344fe0f20fd32b8aec521c385c8246c8f0c4e75111f8e7 extends Twig_Template
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
        $__internal_f1d620d051c1fec6c89f906a3a145e8f1f70b4e7e7e560e45f67ffb1ab09a514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d620d051c1fec6c89f906a3a145e8f1f70b4e7e7e560e45f67ffb1ab09a514->enter($__internal_f1d620d051c1fec6c89f906a3a145e8f1f70b4e7e7e560e45f67ffb1ab09a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a128a6960e7c170684ef057ba5bcf90b42fb67dfa17117423f9e2aae9465b038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a128a6960e7c170684ef057ba5bcf90b42fb67dfa17117423f9e2aae9465b038->enter($__internal_a128a6960e7c170684ef057ba5bcf90b42fb67dfa17117423f9e2aae9465b038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f1d620d051c1fec6c89f906a3a145e8f1f70b4e7e7e560e45f67ffb1ab09a514->leave($__internal_f1d620d051c1fec6c89f906a3a145e8f1f70b4e7e7e560e45f67ffb1ab09a514_prof);

        
        $__internal_a128a6960e7c170684ef057ba5bcf90b42fb67dfa17117423f9e2aae9465b038->leave($__internal_a128a6960e7c170684ef057ba5bcf90b42fb67dfa17117423f9e2aae9465b038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
