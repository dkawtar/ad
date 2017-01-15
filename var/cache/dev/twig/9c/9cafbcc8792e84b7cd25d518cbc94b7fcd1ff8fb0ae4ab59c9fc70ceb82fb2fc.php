<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ab92e6e4d0aec3302a5723707c264e5ee6dc1b324ffab4e76e0ebd77d5106ef6 extends Twig_Template
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
        $__internal_30789a8b90c1d48b384ae9af73bb40726f03a1120b7dac61b4d59b3d7926e141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30789a8b90c1d48b384ae9af73bb40726f03a1120b7dac61b4d59b3d7926e141->enter($__internal_30789a8b90c1d48b384ae9af73bb40726f03a1120b7dac61b4d59b3d7926e141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d4319002a6a5aa6d72caa53d0f4034fc0cd5562bf7b790a2ec00c15bb03eb27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4319002a6a5aa6d72caa53d0f4034fc0cd5562bf7b790a2ec00c15bb03eb27a->enter($__internal_d4319002a6a5aa6d72caa53d0f4034fc0cd5562bf7b790a2ec00c15bb03eb27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_30789a8b90c1d48b384ae9af73bb40726f03a1120b7dac61b4d59b3d7926e141->leave($__internal_30789a8b90c1d48b384ae9af73bb40726f03a1120b7dac61b4d59b3d7926e141_prof);

        
        $__internal_d4319002a6a5aa6d72caa53d0f4034fc0cd5562bf7b790a2ec00c15bb03eb27a->leave($__internal_d4319002a6a5aa6d72caa53d0f4034fc0cd5562bf7b790a2ec00c15bb03eb27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
