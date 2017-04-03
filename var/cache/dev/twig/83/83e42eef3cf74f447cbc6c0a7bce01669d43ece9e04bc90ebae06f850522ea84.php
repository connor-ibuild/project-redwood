<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_232c0d6a8e76b934aa78f12343af1e72a560d38f05385c438eb29092e3925804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91dc272bd01f35515bde8d514e207f11bd2434001216d275cdb2177cc302d063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dc272bd01f35515bde8d514e207f11bd2434001216d275cdb2177cc302d063->enter($__internal_91dc272bd01f35515bde8d514e207f11bd2434001216d275cdb2177cc302d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d6aeb53fb0b2b3263cd0267d7888a50b0c811db944b891d1b6b8bec76e026abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6aeb53fb0b2b3263cd0267d7888a50b0c811db944b891d1b6b8bec76e026abc->enter($__internal_d6aeb53fb0b2b3263cd0267d7888a50b0c811db944b891d1b6b8bec76e026abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91dc272bd01f35515bde8d514e207f11bd2434001216d275cdb2177cc302d063->leave($__internal_91dc272bd01f35515bde8d514e207f11bd2434001216d275cdb2177cc302d063_prof);

        
        $__internal_d6aeb53fb0b2b3263cd0267d7888a50b0c811db944b891d1b6b8bec76e026abc->leave($__internal_d6aeb53fb0b2b3263cd0267d7888a50b0c811db944b891d1b6b8bec76e026abc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c364c1494ae22e2d71b803ea8b8f952c153f4876248b32154a691c14f656d3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c364c1494ae22e2d71b803ea8b8f952c153f4876248b32154a691c14f656d3fd->enter($__internal_c364c1494ae22e2d71b803ea8b8f952c153f4876248b32154a691c14f656d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b1bcabad427469c8efd6528749c63506b62ed64736c6c7ae1f38ddaf66c0eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1bcabad427469c8efd6528749c63506b62ed64736c6c7ae1f38ddaf66c0eb3->enter($__internal_4b1bcabad427469c8efd6528749c63506b62ed64736c6c7ae1f38ddaf66c0eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4b1bcabad427469c8efd6528749c63506b62ed64736c6c7ae1f38ddaf66c0eb3->leave($__internal_4b1bcabad427469c8efd6528749c63506b62ed64736c6c7ae1f38ddaf66c0eb3_prof);

        
        $__internal_c364c1494ae22e2d71b803ea8b8f952c153f4876248b32154a691c14f656d3fd->leave($__internal_c364c1494ae22e2d71b803ea8b8f952c153f4876248b32154a691c14f656d3fd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4950bdc4e96544fd55ccc513c6fcb26f7e9a1c51cb59b9ea81fd4fc9e97cb458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4950bdc4e96544fd55ccc513c6fcb26f7e9a1c51cb59b9ea81fd4fc9e97cb458->enter($__internal_4950bdc4e96544fd55ccc513c6fcb26f7e9a1c51cb59b9ea81fd4fc9e97cb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_288d49509bf8ee273a656ecf75e3ad84660b2953e5efc8b548e7d361a8527683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288d49509bf8ee273a656ecf75e3ad84660b2953e5efc8b548e7d361a8527683->enter($__internal_288d49509bf8ee273a656ecf75e3ad84660b2953e5efc8b548e7d361a8527683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_288d49509bf8ee273a656ecf75e3ad84660b2953e5efc8b548e7d361a8527683->leave($__internal_288d49509bf8ee273a656ecf75e3ad84660b2953e5efc8b548e7d361a8527683_prof);

        
        $__internal_4950bdc4e96544fd55ccc513c6fcb26f7e9a1c51cb59b9ea81fd4fc9e97cb458->leave($__internal_4950bdc4e96544fd55ccc513c6fcb26f7e9a1c51cb59b9ea81fd4fc9e97cb458_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_726bb64306e8db0b92c52826e6e0e1f7b596c08bf4b8dfa857daff9896dceda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726bb64306e8db0b92c52826e6e0e1f7b596c08bf4b8dfa857daff9896dceda1->enter($__internal_726bb64306e8db0b92c52826e6e0e1f7b596c08bf4b8dfa857daff9896dceda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb2205f17548636994b399064d7704445a92df29a5358c6919aa35ce877b589b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2205f17548636994b399064d7704445a92df29a5358c6919aa35ce877b589b->enter($__internal_eb2205f17548636994b399064d7704445a92df29a5358c6919aa35ce877b589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eb2205f17548636994b399064d7704445a92df29a5358c6919aa35ce877b589b->leave($__internal_eb2205f17548636994b399064d7704445a92df29a5358c6919aa35ce877b589b_prof);

        
        $__internal_726bb64306e8db0b92c52826e6e0e1f7b596c08bf4b8dfa857daff9896dceda1->leave($__internal_726bb64306e8db0b92c52826e6e0e1f7b596c08bf4b8dfa857daff9896dceda1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/play/sf-backend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
