<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c5ff1fb7f38a851315149cd2525ccc1c62488b9d74d4b4ed97a6419c4b759592 extends Twig_Template
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
        $__internal_c5e31c6d38c7f629d99f46b96569be03b76e85980c1ae6a444a1a6e883af0713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e31c6d38c7f629d99f46b96569be03b76e85980c1ae6a444a1a6e883af0713->enter($__internal_c5e31c6d38c7f629d99f46b96569be03b76e85980c1ae6a444a1a6e883af0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f07aea83c1595e1a671dd2e993f830140d0ac71bbf0e3167c660593b0b36481a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07aea83c1595e1a671dd2e993f830140d0ac71bbf0e3167c660593b0b36481a->enter($__internal_f07aea83c1595e1a671dd2e993f830140d0ac71bbf0e3167c660593b0b36481a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c5e31c6d38c7f629d99f46b96569be03b76e85980c1ae6a444a1a6e883af0713->leave($__internal_c5e31c6d38c7f629d99f46b96569be03b76e85980c1ae6a444a1a6e883af0713_prof);

        
        $__internal_f07aea83c1595e1a671dd2e993f830140d0ac71bbf0e3167c660593b0b36481a->leave($__internal_f07aea83c1595e1a671dd2e993f830140d0ac71bbf0e3167c660593b0b36481a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
