<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7ee7a59187f80fe52ced68e1e0558e26758e2067761723a56ff55067bbe94b3b extends Twig_Template
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
        $__internal_bcf68ee915200569e22874e9a7111667fdb2ed1734b3774e1fff149f018a433e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf68ee915200569e22874e9a7111667fdb2ed1734b3774e1fff149f018a433e->enter($__internal_bcf68ee915200569e22874e9a7111667fdb2ed1734b3774e1fff149f018a433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_82a6c73b6c6222e2a66904aa47857b1bfef3a19f2349eed9bb5e41c5095fe119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a6c73b6c6222e2a66904aa47857b1bfef3a19f2349eed9bb5e41c5095fe119->enter($__internal_82a6c73b6c6222e2a66904aa47857b1bfef3a19f2349eed9bb5e41c5095fe119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bcf68ee915200569e22874e9a7111667fdb2ed1734b3774e1fff149f018a433e->leave($__internal_bcf68ee915200569e22874e9a7111667fdb2ed1734b3774e1fff149f018a433e_prof);

        
        $__internal_82a6c73b6c6222e2a66904aa47857b1bfef3a19f2349eed9bb5e41c5095fe119->leave($__internal_82a6c73b6c6222e2a66904aa47857b1bfef3a19f2349eed9bb5e41c5095fe119_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/play/sf-backend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
