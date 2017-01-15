<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_15399241fca1457b9906263c6dab6a6c8ea75c1cb1423aa0873f358d4b75f0d7 extends Twig_Template
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
        $__internal_3a9c84db80cdadfc4b65820242242eb9e95a30c3a902ba0715c62715bedc31c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9c84db80cdadfc4b65820242242eb9e95a30c3a902ba0715c62715bedc31c5->enter($__internal_3a9c84db80cdadfc4b65820242242eb9e95a30c3a902ba0715c62715bedc31c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fa1e3610449e0c7a0311c8e84cd5678aa4f0e755751f0334ca907b5f3beb377c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1e3610449e0c7a0311c8e84cd5678aa4f0e755751f0334ca907b5f3beb377c->enter($__internal_fa1e3610449e0c7a0311c8e84cd5678aa4f0e755751f0334ca907b5f3beb377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3a9c84db80cdadfc4b65820242242eb9e95a30c3a902ba0715c62715bedc31c5->leave($__internal_3a9c84db80cdadfc4b65820242242eb9e95a30c3a902ba0715c62715bedc31c5_prof);

        
        $__internal_fa1e3610449e0c7a0311c8e84cd5678aa4f0e755751f0334ca907b5f3beb377c->leave($__internal_fa1e3610449e0c7a0311c8e84cd5678aa4f0e755751f0334ca907b5f3beb377c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
