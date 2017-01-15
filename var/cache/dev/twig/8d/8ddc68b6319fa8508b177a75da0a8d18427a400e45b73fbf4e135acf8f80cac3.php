<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_cf0d7d068bad2b47f7a79b9b34733f898dfbfd8aa5ff2070fb78a05fbdee19cd extends Twig_Template
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
        $__internal_0aa818a2670ace133ab46b544d7eb2db3b98487034b6b4bee9c6cc0f3159a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa818a2670ace133ab46b544d7eb2db3b98487034b6b4bee9c6cc0f3159a3ca->enter($__internal_0aa818a2670ace133ab46b544d7eb2db3b98487034b6b4bee9c6cc0f3159a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_566e43716641aeba7d276c9838f4779c05aee2c7b468bfa738841fdf51786cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566e43716641aeba7d276c9838f4779c05aee2c7b468bfa738841fdf51786cb7->enter($__internal_566e43716641aeba7d276c9838f4779c05aee2c7b468bfa738841fdf51786cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0aa818a2670ace133ab46b544d7eb2db3b98487034b6b4bee9c6cc0f3159a3ca->leave($__internal_0aa818a2670ace133ab46b544d7eb2db3b98487034b6b4bee9c6cc0f3159a3ca_prof);

        
        $__internal_566e43716641aeba7d276c9838f4779c05aee2c7b468bfa738841fdf51786cb7->leave($__internal_566e43716641aeba7d276c9838f4779c05aee2c7b468bfa738841fdf51786cb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
