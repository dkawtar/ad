<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2f4a2efcbb8eabc1e92c5ee59b4206c7273a3e3f101a6c1429ce57b5d600176 extends Twig_Template
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
        $__internal_564b4fc44e91a1dfcd8388a18d2d42136e9e25ae13e41b5ccc6b9e74098c126a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564b4fc44e91a1dfcd8388a18d2d42136e9e25ae13e41b5ccc6b9e74098c126a->enter($__internal_564b4fc44e91a1dfcd8388a18d2d42136e9e25ae13e41b5ccc6b9e74098c126a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fd31f6c18c5d854c4720b0bb3aff94e8e9597b9b48ac0766b260940a6fdefd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd31f6c18c5d854c4720b0bb3aff94e8e9597b9b48ac0766b260940a6fdefd46->enter($__internal_fd31f6c18c5d854c4720b0bb3aff94e8e9597b9b48ac0766b260940a6fdefd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_564b4fc44e91a1dfcd8388a18d2d42136e9e25ae13e41b5ccc6b9e74098c126a->leave($__internal_564b4fc44e91a1dfcd8388a18d2d42136e9e25ae13e41b5ccc6b9e74098c126a_prof);

        
        $__internal_fd31f6c18c5d854c4720b0bb3aff94e8e9597b9b48ac0766b260940a6fdefd46->leave($__internal_fd31f6c18c5d854c4720b0bb3aff94e8e9597b9b48ac0766b260940a6fdefd46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
