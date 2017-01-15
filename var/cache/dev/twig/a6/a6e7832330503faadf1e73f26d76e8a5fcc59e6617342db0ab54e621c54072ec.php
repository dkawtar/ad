<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2ceb6976b8fd426b19ccaa1ee4685109dfa253007cb798ac8c2b14b9d5373df1 extends Twig_Template
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
        $__internal_fc6d842e9c2884843413727934227230139e594620670970a86da19d555996ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6d842e9c2884843413727934227230139e594620670970a86da19d555996ec->enter($__internal_fc6d842e9c2884843413727934227230139e594620670970a86da19d555996ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7c2aba6fda1be0cd22cdd03810051e76df13b180771470a62fb24c8d6f87a2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2aba6fda1be0cd22cdd03810051e76df13b180771470a62fb24c8d6f87a2ee->enter($__internal_7c2aba6fda1be0cd22cdd03810051e76df13b180771470a62fb24c8d6f87a2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fc6d842e9c2884843413727934227230139e594620670970a86da19d555996ec->leave($__internal_fc6d842e9c2884843413727934227230139e594620670970a86da19d555996ec_prof);

        
        $__internal_7c2aba6fda1be0cd22cdd03810051e76df13b180771470a62fb24c8d6f87a2ee->leave($__internal_7c2aba6fda1be0cd22cdd03810051e76df13b180771470a62fb24c8d6f87a2ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
