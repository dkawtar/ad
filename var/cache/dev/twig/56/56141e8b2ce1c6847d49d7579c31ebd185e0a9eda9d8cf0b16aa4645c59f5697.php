<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7683a37a1229541ebe540dd95d87a9ae42d10f43b09b06803ba8560b272eaa6c extends Twig_Template
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
        $__internal_2ba07713abc67287162981c576293bd9f2a4bc50914268c9543288b1b85e45fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba07713abc67287162981c576293bd9f2a4bc50914268c9543288b1b85e45fa->enter($__internal_2ba07713abc67287162981c576293bd9f2a4bc50914268c9543288b1b85e45fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_837175ec5485cdc23f805c74aca0bcdbe15d453a105fe657fd45ad99500074f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837175ec5485cdc23f805c74aca0bcdbe15d453a105fe657fd45ad99500074f2->enter($__internal_837175ec5485cdc23f805c74aca0bcdbe15d453a105fe657fd45ad99500074f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2ba07713abc67287162981c576293bd9f2a4bc50914268c9543288b1b85e45fa->leave($__internal_2ba07713abc67287162981c576293bd9f2a4bc50914268c9543288b1b85e45fa_prof);

        
        $__internal_837175ec5485cdc23f805c74aca0bcdbe15d453a105fe657fd45ad99500074f2->leave($__internal_837175ec5485cdc23f805c74aca0bcdbe15d453a105fe657fd45ad99500074f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
