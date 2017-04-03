<?php

/* base.html.twig */
class __TwigTemplate_6b9f7a89e350cfa3ec3df934371d46f5d544de1bf33a121a9b6a643781f848f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1145587e9ce7bf2caf5268d11baeaaf62812994885d91836b3adc66fa9a1340d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1145587e9ce7bf2caf5268d11baeaaf62812994885d91836b3adc66fa9a1340d->enter($__internal_1145587e9ce7bf2caf5268d11baeaaf62812994885d91836b3adc66fa9a1340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_44094f4cf3c5be6f28ea239e04060e310fc46f9d7934f9e30a46e017b0b83691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44094f4cf3c5be6f28ea239e04060e310fc46f9d7934f9e30a46e017b0b83691->enter($__internal_44094f4cf3c5be6f28ea239e04060e310fc46f9d7934f9e30a46e017b0b83691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1145587e9ce7bf2caf5268d11baeaaf62812994885d91836b3adc66fa9a1340d->leave($__internal_1145587e9ce7bf2caf5268d11baeaaf62812994885d91836b3adc66fa9a1340d_prof);

        
        $__internal_44094f4cf3c5be6f28ea239e04060e310fc46f9d7934f9e30a46e017b0b83691->leave($__internal_44094f4cf3c5be6f28ea239e04060e310fc46f9d7934f9e30a46e017b0b83691_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb99f28db8eae71847cebbca272c84fdde1b861f4ad0a2f91307afb48a7c517c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb99f28db8eae71847cebbca272c84fdde1b861f4ad0a2f91307afb48a7c517c->enter($__internal_bb99f28db8eae71847cebbca272c84fdde1b861f4ad0a2f91307afb48a7c517c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccfdf607b4dabecfe206f4aa2d5a8a144c0372f7a1958a407a7dbf81cb449c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfdf607b4dabecfe206f4aa2d5a8a144c0372f7a1958a407a7dbf81cb449c4b->enter($__internal_ccfdf607b4dabecfe206f4aa2d5a8a144c0372f7a1958a407a7dbf81cb449c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ccfdf607b4dabecfe206f4aa2d5a8a144c0372f7a1958a407a7dbf81cb449c4b->leave($__internal_ccfdf607b4dabecfe206f4aa2d5a8a144c0372f7a1958a407a7dbf81cb449c4b_prof);

        
        $__internal_bb99f28db8eae71847cebbca272c84fdde1b861f4ad0a2f91307afb48a7c517c->leave($__internal_bb99f28db8eae71847cebbca272c84fdde1b861f4ad0a2f91307afb48a7c517c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c15f9afede5efeedc688be0a3832ac9c076f11c3a38d0d81b327cb7adb2a8c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15f9afede5efeedc688be0a3832ac9c076f11c3a38d0d81b327cb7adb2a8c52->enter($__internal_c15f9afede5efeedc688be0a3832ac9c076f11c3a38d0d81b327cb7adb2a8c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2ae76d1db01bfea3282ab189a920cb1460543942d4533fef21605b319d78606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ae76d1db01bfea3282ab189a920cb1460543942d4533fef21605b319d78606->enter($__internal_d2ae76d1db01bfea3282ab189a920cb1460543942d4533fef21605b319d78606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d2ae76d1db01bfea3282ab189a920cb1460543942d4533fef21605b319d78606->leave($__internal_d2ae76d1db01bfea3282ab189a920cb1460543942d4533fef21605b319d78606_prof);

        
        $__internal_c15f9afede5efeedc688be0a3832ac9c076f11c3a38d0d81b327cb7adb2a8c52->leave($__internal_c15f9afede5efeedc688be0a3832ac9c076f11c3a38d0d81b327cb7adb2a8c52_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_90846961753a4164404b6f4b37aa3cb88e60556cfb9d67a3d65220c69dcfa1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90846961753a4164404b6f4b37aa3cb88e60556cfb9d67a3d65220c69dcfa1fb->enter($__internal_90846961753a4164404b6f4b37aa3cb88e60556cfb9d67a3d65220c69dcfa1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0c83363fb13ea093615661cb4a51e2fccafb68bf8eb5866d07a41bc8af1323a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c83363fb13ea093615661cb4a51e2fccafb68bf8eb5866d07a41bc8af1323a->enter($__internal_d0c83363fb13ea093615661cb4a51e2fccafb68bf8eb5866d07a41bc8af1323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0c83363fb13ea093615661cb4a51e2fccafb68bf8eb5866d07a41bc8af1323a->leave($__internal_d0c83363fb13ea093615661cb4a51e2fccafb68bf8eb5866d07a41bc8af1323a_prof);

        
        $__internal_90846961753a4164404b6f4b37aa3cb88e60556cfb9d67a3d65220c69dcfa1fb->leave($__internal_90846961753a4164404b6f4b37aa3cb88e60556cfb9d67a3d65220c69dcfa1fb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a5ead71e887e83c963474de3f4c307dbe30380fec1796ca689caf31014cd6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5ead71e887e83c963474de3f4c307dbe30380fec1796ca689caf31014cd6d1->enter($__internal_4a5ead71e887e83c963474de3f4c307dbe30380fec1796ca689caf31014cd6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c87820a9a9dc172b0601222e42907660d916a0855d3ca1824c9970300166680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c87820a9a9dc172b0601222e42907660d916a0855d3ca1824c9970300166680->enter($__internal_2c87820a9a9dc172b0601222e42907660d916a0855d3ca1824c9970300166680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c87820a9a9dc172b0601222e42907660d916a0855d3ca1824c9970300166680->leave($__internal_2c87820a9a9dc172b0601222e42907660d916a0855d3ca1824c9970300166680_prof);

        
        $__internal_4a5ead71e887e83c963474de3f4c307dbe30380fec1796ca689caf31014cd6d1->leave($__internal_4a5ead71e887e83c963474de3f4c307dbe30380fec1796ca689caf31014cd6d1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/play/sf-backend/app/Resources/views/base.html.twig");
    }
}
