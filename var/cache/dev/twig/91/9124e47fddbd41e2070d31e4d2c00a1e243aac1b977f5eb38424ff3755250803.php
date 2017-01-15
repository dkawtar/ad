<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e9326c1b16bdde36ede9329553f17ed6a6dd8b0edf248a86168d3625fb1ffea7 extends Twig_Template
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
        $__internal_8752c34fda91493a2160fc191924918c0e4d0a77061db5bab80e7af7057132e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8752c34fda91493a2160fc191924918c0e4d0a77061db5bab80e7af7057132e3->enter($__internal_8752c34fda91493a2160fc191924918c0e4d0a77061db5bab80e7af7057132e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_03e5a444cbad8729ede4df1528750b1be8aa7844bb534bd22cce8cd38ab75c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e5a444cbad8729ede4df1528750b1be8aa7844bb534bd22cce8cd38ab75c57->enter($__internal_03e5a444cbad8729ede4df1528750b1be8aa7844bb534bd22cce8cd38ab75c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8752c34fda91493a2160fc191924918c0e4d0a77061db5bab80e7af7057132e3->leave($__internal_8752c34fda91493a2160fc191924918c0e4d0a77061db5bab80e7af7057132e3_prof);

        
        $__internal_03e5a444cbad8729ede4df1528750b1be8aa7844bb534bd22cce8cd38ab75c57->leave($__internal_03e5a444cbad8729ede4df1528750b1be8aa7844bb534bd22cce8cd38ab75c57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
