<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_19b4ef0474571ba5ba4e1bee447bcd08d08eb7f19cfcae6c4dbbf2eea9da4d44 extends Twig_Template
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
        $__internal_fa449bb9bc9f7f6e6bb5c514c842c8b74f11b1ad8ece02ecce0ccd194f69e3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa449bb9bc9f7f6e6bb5c514c842c8b74f11b1ad8ece02ecce0ccd194f69e3f2->enter($__internal_fa449bb9bc9f7f6e6bb5c514c842c8b74f11b1ad8ece02ecce0ccd194f69e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0bec06eb7a1b86b52f066f21dc077b2ae01b83de950527e31047964e93e44155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bec06eb7a1b86b52f066f21dc077b2ae01b83de950527e31047964e93e44155->enter($__internal_0bec06eb7a1b86b52f066f21dc077b2ae01b83de950527e31047964e93e44155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa449bb9bc9f7f6e6bb5c514c842c8b74f11b1ad8ece02ecce0ccd194f69e3f2->leave($__internal_fa449bb9bc9f7f6e6bb5c514c842c8b74f11b1ad8ece02ecce0ccd194f69e3f2_prof);

        
        $__internal_0bec06eb7a1b86b52f066f21dc077b2ae01b83de950527e31047964e93e44155->leave($__internal_0bec06eb7a1b86b52f066f21dc077b2ae01b83de950527e31047964e93e44155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
