<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6d61663caf2de9c78e0781257217f448115a512631d9678f11d8c724604a2ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae3402a2952aa173b9d021dfa173d9594a0520a44f0356f11f26990ff30db251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3402a2952aa173b9d021dfa173d9594a0520a44f0356f11f26990ff30db251->enter($__internal_ae3402a2952aa173b9d021dfa173d9594a0520a44f0356f11f26990ff30db251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b28ed95c9d1433f3d40eed36a8d1cfbd5ce527c155cda627fa5d9a5497b1c1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28ed95c9d1433f3d40eed36a8d1cfbd5ce527c155cda627fa5d9a5497b1c1df->enter($__internal_b28ed95c9d1433f3d40eed36a8d1cfbd5ce527c155cda627fa5d9a5497b1c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3402a2952aa173b9d021dfa173d9594a0520a44f0356f11f26990ff30db251->leave($__internal_ae3402a2952aa173b9d021dfa173d9594a0520a44f0356f11f26990ff30db251_prof);

        
        $__internal_b28ed95c9d1433f3d40eed36a8d1cfbd5ce527c155cda627fa5d9a5497b1c1df->leave($__internal_b28ed95c9d1433f3d40eed36a8d1cfbd5ce527c155cda627fa5d9a5497b1c1df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f693d53d2f74235519ccb590c2516a54c2f287f610e2aa7560542d9e2673c12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f693d53d2f74235519ccb590c2516a54c2f287f610e2aa7560542d9e2673c12c->enter($__internal_f693d53d2f74235519ccb590c2516a54c2f287f610e2aa7560542d9e2673c12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_185397e32bb0a6a9b6cac926c5e1bd77f4ac50219894968ab0e6bc475bc08a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185397e32bb0a6a9b6cac926c5e1bd77f4ac50219894968ab0e6bc475bc08a8a->enter($__internal_185397e32bb0a6a9b6cac926c5e1bd77f4ac50219894968ab0e6bc475bc08a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_185397e32bb0a6a9b6cac926c5e1bd77f4ac50219894968ab0e6bc475bc08a8a->leave($__internal_185397e32bb0a6a9b6cac926c5e1bd77f4ac50219894968ab0e6bc475bc08a8a_prof);

        
        $__internal_f693d53d2f74235519ccb590c2516a54c2f287f610e2aa7560542d9e2673c12c->leave($__internal_f693d53d2f74235519ccb590c2516a54c2f287f610e2aa7560542d9e2673c12c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/play/sf-backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
