<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea72957c213ddba2aaa8a7deb25b14d02e67fd86d6c6aa830e4b90e3195d661b extends Twig_Template
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
        $__internal_50bc1393b9e403119ef730e100697f551014d5c7ee77b8b8f39a29d48dc43875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bc1393b9e403119ef730e100697f551014d5c7ee77b8b8f39a29d48dc43875->enter($__internal_50bc1393b9e403119ef730e100697f551014d5c7ee77b8b8f39a29d48dc43875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50bc1393b9e403119ef730e100697f551014d5c7ee77b8b8f39a29d48dc43875->leave($__internal_50bc1393b9e403119ef730e100697f551014d5c7ee77b8b8f39a29d48dc43875_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e815853740365cb42e2e313c5db6a56bdaa360a3f4e8ddfbfa606763b94fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e815853740365cb42e2e313c5db6a56bdaa360a3f4e8ddfbfa606763b94fb6->enter($__internal_27e815853740365cb42e2e313c5db6a56bdaa360a3f4e8ddfbfa606763b94fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_27e815853740365cb42e2e313c5db6a56bdaa360a3f4e8ddfbfa606763b94fb6->leave($__internal_27e815853740365cb42e2e313c5db6a56bdaa360a3f4e8ddfbfa606763b94fb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ff71e9efc523a5e942013d4f3be4bfbe18be824bca2672e1fa8a94d40d2bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ff71e9efc523a5e942013d4f3be4bfbe18be824bca2672e1fa8a94d40d2bae->enter($__internal_d8ff71e9efc523a5e942013d4f3be4bfbe18be824bca2672e1fa8a94d40d2bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8ff71e9efc523a5e942013d4f3be4bfbe18be824bca2672e1fa8a94d40d2bae->leave($__internal_d8ff71e9efc523a5e942013d4f3be4bfbe18be824bca2672e1fa8a94d40d2bae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f7bc34278d49712b72e352fca28abcccd7fd869f1315b6086982edaa82a642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7bc34278d49712b72e352fca28abcccd7fd869f1315b6086982edaa82a642a->enter($__internal_3f7bc34278d49712b72e352fca28abcccd7fd869f1315b6086982edaa82a642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f7bc34278d49712b72e352fca28abcccd7fd869f1315b6086982edaa82a642a->leave($__internal_3f7bc34278d49712b72e352fca28abcccd7fd869f1315b6086982edaa82a642a_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/crystalsdx/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
