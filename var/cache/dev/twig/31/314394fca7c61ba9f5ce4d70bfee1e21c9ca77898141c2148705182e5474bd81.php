<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1acab24b760ecf9bf4977ae993c16f3f32057278e6c2fd5feb53cc727d41e3cb extends Twig_Template
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
        $__internal_6f94d6fd220997bb49db3de38a188e0173091b3a670b99db3c798542e0816c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f94d6fd220997bb49db3de38a188e0173091b3a670b99db3c798542e0816c41->enter($__internal_6f94d6fd220997bb49db3de38a188e0173091b3a670b99db3c798542e0816c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e33095df6f6820ac4d10852bfad25fa9a90f54a68ccef7e0cd4529f21409f19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33095df6f6820ac4d10852bfad25fa9a90f54a68ccef7e0cd4529f21409f19c->enter($__internal_e33095df6f6820ac4d10852bfad25fa9a90f54a68ccef7e0cd4529f21409f19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6f94d6fd220997bb49db3de38a188e0173091b3a670b99db3c798542e0816c41->leave($__internal_6f94d6fd220997bb49db3de38a188e0173091b3a670b99db3c798542e0816c41_prof);

        
        $__internal_e33095df6f6820ac4d10852bfad25fa9a90f54a68ccef7e0cd4529f21409f19c->leave($__internal_e33095df6f6820ac4d10852bfad25fa9a90f54a68ccef7e0cd4529f21409f19c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
