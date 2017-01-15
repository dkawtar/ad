<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_87c90a545467f90ab28eb2dfb0a4f61d8f6da05b32d98be63d16fde1eee59998 extends Twig_Template
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
        $__internal_582c0bd8a0dec05204ac0d4e241e8dd0fbbb0f8183f77122ff9bbbf68b847d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582c0bd8a0dec05204ac0d4e241e8dd0fbbb0f8183f77122ff9bbbf68b847d36->enter($__internal_582c0bd8a0dec05204ac0d4e241e8dd0fbbb0f8183f77122ff9bbbf68b847d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_838179e5a6beca2e89af22ee90c2524535d1e184723d08e537df2c7d3e27f447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838179e5a6beca2e89af22ee90c2524535d1e184723d08e537df2c7d3e27f447->enter($__internal_838179e5a6beca2e89af22ee90c2524535d1e184723d08e537df2c7d3e27f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_582c0bd8a0dec05204ac0d4e241e8dd0fbbb0f8183f77122ff9bbbf68b847d36->leave($__internal_582c0bd8a0dec05204ac0d4e241e8dd0fbbb0f8183f77122ff9bbbf68b847d36_prof);

        
        $__internal_838179e5a6beca2e89af22ee90c2524535d1e184723d08e537df2c7d3e27f447->leave($__internal_838179e5a6beca2e89af22ee90c2524535d1e184723d08e537df2c7d3e27f447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
