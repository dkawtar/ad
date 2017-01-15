<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cef81b4c806682a3b30705296c9396c7e2f51b9d9247fdb4a2eb74b3472844d9 extends Twig_Template
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
        $__internal_769a0819baab2a8bebc46f0594003f1307dc5a08a82b2d0fa8f9c48f993544e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769a0819baab2a8bebc46f0594003f1307dc5a08a82b2d0fa8f9c48f993544e8->enter($__internal_769a0819baab2a8bebc46f0594003f1307dc5a08a82b2d0fa8f9c48f993544e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_80376a7ea429c2ce4e6214692a556ea6d44a50889f0fa4e0313447a64e504f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80376a7ea429c2ce4e6214692a556ea6d44a50889f0fa4e0313447a64e504f21->enter($__internal_80376a7ea429c2ce4e6214692a556ea6d44a50889f0fa4e0313447a64e504f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_769a0819baab2a8bebc46f0594003f1307dc5a08a82b2d0fa8f9c48f993544e8->leave($__internal_769a0819baab2a8bebc46f0594003f1307dc5a08a82b2d0fa8f9c48f993544e8_prof);

        
        $__internal_80376a7ea429c2ce4e6214692a556ea6d44a50889f0fa4e0313447a64e504f21->leave($__internal_80376a7ea429c2ce4e6214692a556ea6d44a50889f0fa4e0313447a64e504f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
