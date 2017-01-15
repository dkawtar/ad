<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_72083fc7d9208f366890582e8b2fcd77abdbcfc751bdab31742684b3b84d92f4 extends Twig_Template
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
        $__internal_e0ffb7911bb0755b607e7a49097896b9f62a36db93aa3ce1beec6313200b4a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ffb7911bb0755b607e7a49097896b9f62a36db93aa3ce1beec6313200b4a74->enter($__internal_e0ffb7911bb0755b607e7a49097896b9f62a36db93aa3ce1beec6313200b4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_333ccda81d14d60249d7b792170a4fdf5ef1ce8d9398c60ae0ae71f432b53494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333ccda81d14d60249d7b792170a4fdf5ef1ce8d9398c60ae0ae71f432b53494->enter($__internal_333ccda81d14d60249d7b792170a4fdf5ef1ce8d9398c60ae0ae71f432b53494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e0ffb7911bb0755b607e7a49097896b9f62a36db93aa3ce1beec6313200b4a74->leave($__internal_e0ffb7911bb0755b607e7a49097896b9f62a36db93aa3ce1beec6313200b4a74_prof);

        
        $__internal_333ccda81d14d60249d7b792170a4fdf5ef1ce8d9398c60ae0ae71f432b53494->leave($__internal_333ccda81d14d60249d7b792170a4fdf5ef1ce8d9398c60ae0ae71f432b53494_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
