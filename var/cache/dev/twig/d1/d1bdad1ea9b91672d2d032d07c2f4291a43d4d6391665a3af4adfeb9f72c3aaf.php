<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_04928394a293c89e0ae905efb144a5df8c73ba69434792a72987eb391207fe9e extends Twig_Template
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
        $__internal_b3e9c659f4fb19c58450832b9f39e6c1f43891d4d42305a9f18d43a534dd7a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e9c659f4fb19c58450832b9f39e6c1f43891d4d42305a9f18d43a534dd7a6f->enter($__internal_b3e9c659f4fb19c58450832b9f39e6c1f43891d4d42305a9f18d43a534dd7a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_eeadfad1e575e19dccd0e258f6668ead766b4bdcebf59b7ab05b11e46ba20f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeadfad1e575e19dccd0e258f6668ead766b4bdcebf59b7ab05b11e46ba20f3c->enter($__internal_eeadfad1e575e19dccd0e258f6668ead766b4bdcebf59b7ab05b11e46ba20f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b3e9c659f4fb19c58450832b9f39e6c1f43891d4d42305a9f18d43a534dd7a6f->leave($__internal_b3e9c659f4fb19c58450832b9f39e6c1f43891d4d42305a9f18d43a534dd7a6f_prof);

        
        $__internal_eeadfad1e575e19dccd0e258f6668ead766b4bdcebf59b7ab05b11e46ba20f3c->leave($__internal_eeadfad1e575e19dccd0e258f6668ead766b4bdcebf59b7ab05b11e46ba20f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
