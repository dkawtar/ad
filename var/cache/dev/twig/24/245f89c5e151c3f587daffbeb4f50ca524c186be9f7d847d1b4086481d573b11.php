<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6a72c49680c762b57eb39da34e421ac01663bce6fcd80d22ef92988a9c95057d extends Twig_Template
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
        $__internal_cd327a560aba598cd68e7d96d3b47c9c89b3e372404019992f9123c1aef059ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd327a560aba598cd68e7d96d3b47c9c89b3e372404019992f9123c1aef059ba->enter($__internal_cd327a560aba598cd68e7d96d3b47c9c89b3e372404019992f9123c1aef059ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5f9ae39d77c349e9c2ad905f2d9916a2a17a9584ba69de75a8bc6ccfe6adbdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9ae39d77c349e9c2ad905f2d9916a2a17a9584ba69de75a8bc6ccfe6adbdf6->enter($__internal_5f9ae39d77c349e9c2ad905f2d9916a2a17a9584ba69de75a8bc6ccfe6adbdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cd327a560aba598cd68e7d96d3b47c9c89b3e372404019992f9123c1aef059ba->leave($__internal_cd327a560aba598cd68e7d96d3b47c9c89b3e372404019992f9123c1aef059ba_prof);

        
        $__internal_5f9ae39d77c349e9c2ad905f2d9916a2a17a9584ba69de75a8bc6ccfe6adbdf6->leave($__internal_5f9ae39d77c349e9c2ad905f2d9916a2a17a9584ba69de75a8bc6ccfe6adbdf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
