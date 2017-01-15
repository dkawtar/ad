<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_366b635f91363a6d47ba70d9d6bf8a949f9a50fc0a42944dbb1a410b79c84aea extends Twig_Template
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
        $__internal_c3400ba2f996a9c9128a3222235c846118a74431f860fce648e453d14a977fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3400ba2f996a9c9128a3222235c846118a74431f860fce648e453d14a977fd1->enter($__internal_c3400ba2f996a9c9128a3222235c846118a74431f860fce648e453d14a977fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a9c6c21393774b58d0b729787c4cebe98b2436da149cc133a5731c1c2ed83492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c6c21393774b58d0b729787c4cebe98b2436da149cc133a5731c1c2ed83492->enter($__internal_a9c6c21393774b58d0b729787c4cebe98b2436da149cc133a5731c1c2ed83492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3400ba2f996a9c9128a3222235c846118a74431f860fce648e453d14a977fd1->leave($__internal_c3400ba2f996a9c9128a3222235c846118a74431f860fce648e453d14a977fd1_prof);

        
        $__internal_a9c6c21393774b58d0b729787c4cebe98b2436da149cc133a5731c1c2ed83492->leave($__internal_a9c6c21393774b58d0b729787c4cebe98b2436da149cc133a5731c1c2ed83492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
