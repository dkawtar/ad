<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d064cf5ac1d53076ee39c5a0ee634bb84b70a5d3411ffb28d5021b0baacaca21 extends Twig_Template
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
        $__internal_b2f58cb306e1be0c157a5a0185e56e59212b03a590c8ea865e400ad87c21e546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f58cb306e1be0c157a5a0185e56e59212b03a590c8ea865e400ad87c21e546->enter($__internal_b2f58cb306e1be0c157a5a0185e56e59212b03a590c8ea865e400ad87c21e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fd29af8fdab2d7b83e12f061d15d46f45ffd8b4ee2399b8fc5d3e98c1e65b154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd29af8fdab2d7b83e12f061d15d46f45ffd8b4ee2399b8fc5d3e98c1e65b154->enter($__internal_fd29af8fdab2d7b83e12f061d15d46f45ffd8b4ee2399b8fc5d3e98c1e65b154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b2f58cb306e1be0c157a5a0185e56e59212b03a590c8ea865e400ad87c21e546->leave($__internal_b2f58cb306e1be0c157a5a0185e56e59212b03a590c8ea865e400ad87c21e546_prof);

        
        $__internal_fd29af8fdab2d7b83e12f061d15d46f45ffd8b4ee2399b8fc5d3e98c1e65b154->leave($__internal_fd29af8fdab2d7b83e12f061d15d46f45ffd8b4ee2399b8fc5d3e98c1e65b154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
