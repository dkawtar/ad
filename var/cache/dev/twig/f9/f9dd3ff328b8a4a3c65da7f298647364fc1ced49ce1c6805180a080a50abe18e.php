<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1f622d11cf15ed88220bc4c3cff71dc5e0c1b8cbb34626b307a452ca63965228 extends Twig_Template
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
        $__internal_fa3e04bfb0faba9886693f1b5a8c146751b8f54e34ab90845780264edcd3cc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3e04bfb0faba9886693f1b5a8c146751b8f54e34ab90845780264edcd3cc3f->enter($__internal_fa3e04bfb0faba9886693f1b5a8c146751b8f54e34ab90845780264edcd3cc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ad6326faea34f9913191cb6e440a9d0fe136c048bdbc9d6ff005a5312862d7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6326faea34f9913191cb6e440a9d0fe136c048bdbc9d6ff005a5312862d7a7->enter($__internal_ad6326faea34f9913191cb6e440a9d0fe136c048bdbc9d6ff005a5312862d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_fa3e04bfb0faba9886693f1b5a8c146751b8f54e34ab90845780264edcd3cc3f->leave($__internal_fa3e04bfb0faba9886693f1b5a8c146751b8f54e34ab90845780264edcd3cc3f_prof);

        
        $__internal_ad6326faea34f9913191cb6e440a9d0fe136c048bdbc9d6ff005a5312862d7a7->leave($__internal_ad6326faea34f9913191cb6e440a9d0fe136c048bdbc9d6ff005a5312862d7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
