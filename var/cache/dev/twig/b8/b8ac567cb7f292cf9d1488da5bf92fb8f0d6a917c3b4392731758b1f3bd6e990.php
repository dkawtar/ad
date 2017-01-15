<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7e0f6a4f35c664e77971b8d20353d51dfd87892beaabd3e59419b98840c7b11d extends Twig_Template
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
        $__internal_ec799755905fb9238e88c447ca67342139a15f2b64dc38f2f267022b2d1fe24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec799755905fb9238e88c447ca67342139a15f2b64dc38f2f267022b2d1fe24d->enter($__internal_ec799755905fb9238e88c447ca67342139a15f2b64dc38f2f267022b2d1fe24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_745aa24fd6fee7d46536311b44f1cd564327e4bda96d2953270be648847b9bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745aa24fd6fee7d46536311b44f1cd564327e4bda96d2953270be648847b9bd6->enter($__internal_745aa24fd6fee7d46536311b44f1cd564327e4bda96d2953270be648847b9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ec799755905fb9238e88c447ca67342139a15f2b64dc38f2f267022b2d1fe24d->leave($__internal_ec799755905fb9238e88c447ca67342139a15f2b64dc38f2f267022b2d1fe24d_prof);

        
        $__internal_745aa24fd6fee7d46536311b44f1cd564327e4bda96d2953270be648847b9bd6->leave($__internal_745aa24fd6fee7d46536311b44f1cd564327e4bda96d2953270be648847b9bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
