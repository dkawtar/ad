<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_eecc86dcb5847ba119f55f5e1c948e39e0afa62a8abc80d34402aeaebb1331ea extends Twig_Template
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
        $__internal_016bda8606304e594bdeab6bb75d61153a04ce481d520a22a1eb0b5c51bc87d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016bda8606304e594bdeab6bb75d61153a04ce481d520a22a1eb0b5c51bc87d7->enter($__internal_016bda8606304e594bdeab6bb75d61153a04ce481d520a22a1eb0b5c51bc87d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2b6d60ec316fc39af0167de87b4a9cac86ea2e8a1b8798e430d9cf13d133a3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6d60ec316fc39af0167de87b4a9cac86ea2e8a1b8798e430d9cf13d133a3ad->enter($__internal_2b6d60ec316fc39af0167de87b4a9cac86ea2e8a1b8798e430d9cf13d133a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_016bda8606304e594bdeab6bb75d61153a04ce481d520a22a1eb0b5c51bc87d7->leave($__internal_016bda8606304e594bdeab6bb75d61153a04ce481d520a22a1eb0b5c51bc87d7_prof);

        
        $__internal_2b6d60ec316fc39af0167de87b4a9cac86ea2e8a1b8798e430d9cf13d133a3ad->leave($__internal_2b6d60ec316fc39af0167de87b4a9cac86ea2e8a1b8798e430d9cf13d133a3ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
