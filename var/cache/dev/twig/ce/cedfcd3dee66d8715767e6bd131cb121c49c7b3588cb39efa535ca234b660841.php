<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bc71b330613c406a1cbb51d032d47635443355bbf5a7c6cc6ec50bf61cd468c8 extends Twig_Template
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
        $__internal_771aa115be71b76a64481a08fbd108728fd7580f47de57e178f64953e27d0b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771aa115be71b76a64481a08fbd108728fd7580f47de57e178f64953e27d0b60->enter($__internal_771aa115be71b76a64481a08fbd108728fd7580f47de57e178f64953e27d0b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6712e1eb7c3200fa11d07af6a3d0eac0708a2d272939c02d33f09058276dbb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6712e1eb7c3200fa11d07af6a3d0eac0708a2d272939c02d33f09058276dbb4f->enter($__internal_6712e1eb7c3200fa11d07af6a3d0eac0708a2d272939c02d33f09058276dbb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_771aa115be71b76a64481a08fbd108728fd7580f47de57e178f64953e27d0b60->leave($__internal_771aa115be71b76a64481a08fbd108728fd7580f47de57e178f64953e27d0b60_prof);

        
        $__internal_6712e1eb7c3200fa11d07af6a3d0eac0708a2d272939c02d33f09058276dbb4f->leave($__internal_6712e1eb7c3200fa11d07af6a3d0eac0708a2d272939c02d33f09058276dbb4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
