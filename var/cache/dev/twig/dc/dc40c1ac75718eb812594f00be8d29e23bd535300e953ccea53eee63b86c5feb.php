<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cf8e42cc6c49ccf83e4a6c774291c8abbb1e4f6594b51f9dc11d1e50161c8b28 extends Twig_Template
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
        $__internal_5a80ddc406b45eb76e8f7eb6aa01fecdb1be4728bf198e031432a5847207d1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a80ddc406b45eb76e8f7eb6aa01fecdb1be4728bf198e031432a5847207d1e4->enter($__internal_5a80ddc406b45eb76e8f7eb6aa01fecdb1be4728bf198e031432a5847207d1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_04ecf1967ac79fcb7711f2d2e159d63c8b0bbe821346213115c9cf91b7901688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ecf1967ac79fcb7711f2d2e159d63c8b0bbe821346213115c9cf91b7901688->enter($__internal_04ecf1967ac79fcb7711f2d2e159d63c8b0bbe821346213115c9cf91b7901688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5a80ddc406b45eb76e8f7eb6aa01fecdb1be4728bf198e031432a5847207d1e4->leave($__internal_5a80ddc406b45eb76e8f7eb6aa01fecdb1be4728bf198e031432a5847207d1e4_prof);

        
        $__internal_04ecf1967ac79fcb7711f2d2e159d63c8b0bbe821346213115c9cf91b7901688->leave($__internal_04ecf1967ac79fcb7711f2d2e159d63c8b0bbe821346213115c9cf91b7901688_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
