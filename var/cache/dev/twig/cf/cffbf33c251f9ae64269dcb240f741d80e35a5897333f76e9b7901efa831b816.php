<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b3b1e9465d545cdb16bcba8a8edb400ef1a2a0f1442e4650816fc56b38799e05 extends Twig_Template
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
        $__internal_7a434af177ee3a4da9b57671c1c04442b4a9e50d6e92cca1f26f930a16c2b8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a434af177ee3a4da9b57671c1c04442b4a9e50d6e92cca1f26f930a16c2b8b5->enter($__internal_7a434af177ee3a4da9b57671c1c04442b4a9e50d6e92cca1f26f930a16c2b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d9b7c7cf67f9c202d3b0e254b51eb4c7718f0abc7a48f84538eaf7692daf4a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b7c7cf67f9c202d3b0e254b51eb4c7718f0abc7a48f84538eaf7692daf4a16->enter($__internal_d9b7c7cf67f9c202d3b0e254b51eb4c7718f0abc7a48f84538eaf7692daf4a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7a434af177ee3a4da9b57671c1c04442b4a9e50d6e92cca1f26f930a16c2b8b5->leave($__internal_7a434af177ee3a4da9b57671c1c04442b4a9e50d6e92cca1f26f930a16c2b8b5_prof);

        
        $__internal_d9b7c7cf67f9c202d3b0e254b51eb4c7718f0abc7a48f84538eaf7692daf4a16->leave($__internal_d9b7c7cf67f9c202d3b0e254b51eb4c7718f0abc7a48f84538eaf7692daf4a16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
