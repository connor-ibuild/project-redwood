<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df6ef756d4371ab09de227ee14dff86c21e1115931618690ad5925995aada5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81cb1d09a94e91e0bd50f1c772af6e5262611084f471cb1ecccdfbb58b9f0e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cb1d09a94e91e0bd50f1c772af6e5262611084f471cb1ecccdfbb58b9f0e6b->enter($__internal_81cb1d09a94e91e0bd50f1c772af6e5262611084f471cb1ecccdfbb58b9f0e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0c7b2a9cfea7800ba4821f335b73abe4b32348d52c780bf621c33031b783c70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7b2a9cfea7800ba4821f335b73abe4b32348d52c780bf621c33031b783c70c->enter($__internal_0c7b2a9cfea7800ba4821f335b73abe4b32348d52c780bf621c33031b783c70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cb1d09a94e91e0bd50f1c772af6e5262611084f471cb1ecccdfbb58b9f0e6b->leave($__internal_81cb1d09a94e91e0bd50f1c772af6e5262611084f471cb1ecccdfbb58b9f0e6b_prof);

        
        $__internal_0c7b2a9cfea7800ba4821f335b73abe4b32348d52c780bf621c33031b783c70c->leave($__internal_0c7b2a9cfea7800ba4821f335b73abe4b32348d52c780bf621c33031b783c70c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2b9edf19515de09bf2d27195558818e434261c910b1eaf5f269e73fa48d3c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b9edf19515de09bf2d27195558818e434261c910b1eaf5f269e73fa48d3c4a->enter($__internal_f2b9edf19515de09bf2d27195558818e434261c910b1eaf5f269e73fa48d3c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d81da29d89686c929353f87f69888e1d6d3b4249315eba16e5bf46d88c03d241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81da29d89686c929353f87f69888e1d6d3b4249315eba16e5bf46d88c03d241->enter($__internal_d81da29d89686c929353f87f69888e1d6d3b4249315eba16e5bf46d88c03d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d81da29d89686c929353f87f69888e1d6d3b4249315eba16e5bf46d88c03d241->leave($__internal_d81da29d89686c929353f87f69888e1d6d3b4249315eba16e5bf46d88c03d241_prof);

        
        $__internal_f2b9edf19515de09bf2d27195558818e434261c910b1eaf5f269e73fa48d3c4a->leave($__internal_f2b9edf19515de09bf2d27195558818e434261c910b1eaf5f269e73fa48d3c4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4eb5ff5b05e9256f474b01dc080fd8af79645a8d8504c8cc050eec9503605323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb5ff5b05e9256f474b01dc080fd8af79645a8d8504c8cc050eec9503605323->enter($__internal_4eb5ff5b05e9256f474b01dc080fd8af79645a8d8504c8cc050eec9503605323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf0692e49e4bf8cf2e469da40351361f9d938c9f56aa79c21c4c9022ae049c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0692e49e4bf8cf2e469da40351361f9d938c9f56aa79c21c4c9022ae049c83->enter($__internal_cf0692e49e4bf8cf2e469da40351361f9d938c9f56aa79c21c4c9022ae049c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf0692e49e4bf8cf2e469da40351361f9d938c9f56aa79c21c4c9022ae049c83->leave($__internal_cf0692e49e4bf8cf2e469da40351361f9d938c9f56aa79c21c4c9022ae049c83_prof);

        
        $__internal_4eb5ff5b05e9256f474b01dc080fd8af79645a8d8504c8cc050eec9503605323->leave($__internal_4eb5ff5b05e9256f474b01dc080fd8af79645a8d8504c8cc050eec9503605323_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd51a0d97dda3a54257d52b733957035c9455e42d49f8eb3673d5fce1f7c6af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd51a0d97dda3a54257d52b733957035c9455e42d49f8eb3673d5fce1f7c6af1->enter($__internal_cd51a0d97dda3a54257d52b733957035c9455e42d49f8eb3673d5fce1f7c6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56ed9235d939aab4303b470040c16924067807a4aed93c4413229228ef40cdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ed9235d939aab4303b470040c16924067807a4aed93c4413229228ef40cdb3->enter($__internal_56ed9235d939aab4303b470040c16924067807a4aed93c4413229228ef40cdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56ed9235d939aab4303b470040c16924067807a4aed93c4413229228ef40cdb3->leave($__internal_56ed9235d939aab4303b470040c16924067807a4aed93c4413229228ef40cdb3_prof);

        
        $__internal_cd51a0d97dda3a54257d52b733957035c9455e42d49f8eb3673d5fce1f7c6af1->leave($__internal_cd51a0d97dda3a54257d52b733957035c9455e42d49f8eb3673d5fce1f7c6af1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/play/sf-backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
