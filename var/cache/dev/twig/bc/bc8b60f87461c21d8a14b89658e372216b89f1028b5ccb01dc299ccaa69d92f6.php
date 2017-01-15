<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ecc6e9334647b9bae8e0790b1044599157f65709ba7bfa9124b204a2125fb161 extends Twig_Template
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
        $__internal_d5c30b0eb8c268478c9e4a40d8d9000dd6f6f31e6cc0cd91a2a57aac68164c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c30b0eb8c268478c9e4a40d8d9000dd6f6f31e6cc0cd91a2a57aac68164c15->enter($__internal_d5c30b0eb8c268478c9e4a40d8d9000dd6f6f31e6cc0cd91a2a57aac68164c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_43a772846068d81d81a874d4a76f12d6b18f63403ae2a09bb52c2ab39c59a723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a772846068d81d81a874d4a76f12d6b18f63403ae2a09bb52c2ab39c59a723->enter($__internal_43a772846068d81d81a874d4a76f12d6b18f63403ae2a09bb52c2ab39c59a723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d5c30b0eb8c268478c9e4a40d8d9000dd6f6f31e6cc0cd91a2a57aac68164c15->leave($__internal_d5c30b0eb8c268478c9e4a40d8d9000dd6f6f31e6cc0cd91a2a57aac68164c15_prof);

        
        $__internal_43a772846068d81d81a874d4a76f12d6b18f63403ae2a09bb52c2ab39c59a723->leave($__internal_43a772846068d81d81a874d4a76f12d6b18f63403ae2a09bb52c2ab39c59a723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
