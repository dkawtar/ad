<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_04ae6a9c60119e7464f2889dc11455bcc9921ca0e2edfc68d0ec19bee8f75eae extends Twig_Template
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
        $__internal_8d2721116701c56932ae054bac3de18cc9e3f2309c02412dba420da14fb0b501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2721116701c56932ae054bac3de18cc9e3f2309c02412dba420da14fb0b501->enter($__internal_8d2721116701c56932ae054bac3de18cc9e3f2309c02412dba420da14fb0b501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_3d3a10dd5b8a18b5bde0b1f852bc2014a933d320270f2ddf9cd384d4974c7f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3a10dd5b8a18b5bde0b1f852bc2014a933d320270f2ddf9cd384d4974c7f52->enter($__internal_3d3a10dd5b8a18b5bde0b1f852bc2014a933d320270f2ddf9cd384d4974c7f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8d2721116701c56932ae054bac3de18cc9e3f2309c02412dba420da14fb0b501->leave($__internal_8d2721116701c56932ae054bac3de18cc9e3f2309c02412dba420da14fb0b501_prof);

        
        $__internal_3d3a10dd5b8a18b5bde0b1f852bc2014a933d320270f2ddf9cd384d4974c7f52->leave($__internal_3d3a10dd5b8a18b5bde0b1f852bc2014a933d320270f2ddf9cd384d4974c7f52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
