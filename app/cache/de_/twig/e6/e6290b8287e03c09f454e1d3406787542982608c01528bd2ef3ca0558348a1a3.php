<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_024ad679b9955d8932ed2250d31ea8650599918bec76d8288a9d75ab11b8400a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acd991445c76b26ad592df8475ac82229065c04ed0f9bad1fb366cd482753534 = $this->env->getExtension("native_profiler");
        $__internal_acd991445c76b26ad592df8475ac82229065c04ed0f9bad1fb366cd482753534->enter($__internal_acd991445c76b26ad592df8475ac82229065c04ed0f9bad1fb366cd482753534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd991445c76b26ad592df8475ac82229065c04ed0f9bad1fb366cd482753534->leave($__internal_acd991445c76b26ad592df8475ac82229065c04ed0f9bad1fb366cd482753534_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_011eac77ee19692a3842db8adda8727731a3855976b895d9b03429a00cec4f1f = $this->env->getExtension("native_profiler");
        $__internal_011eac77ee19692a3842db8adda8727731a3855976b895d9b03429a00cec4f1f->enter($__internal_011eac77ee19692a3842db8adda8727731a3855976b895d9b03429a00cec4f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_011eac77ee19692a3842db8adda8727731a3855976b895d9b03429a00cec4f1f->leave($__internal_011eac77ee19692a3842db8adda8727731a3855976b895d9b03429a00cec4f1f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0ac9f3e79a878e6abd5381dd6ce7e9676fa4a29b767c90b489328aa97aed683 = $this->env->getExtension("native_profiler");
        $__internal_e0ac9f3e79a878e6abd5381dd6ce7e9676fa4a29b767c90b489328aa97aed683->enter($__internal_e0ac9f3e79a878e6abd5381dd6ce7e9676fa4a29b767c90b489328aa97aed683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0ac9f3e79a878e6abd5381dd6ce7e9676fa4a29b767c90b489328aa97aed683->leave($__internal_e0ac9f3e79a878e6abd5381dd6ce7e9676fa4a29b767c90b489328aa97aed683_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2de7d4cc00f002ae890d322b2384b0e075fc37b27b38178a804c4d99471e9f = $this->env->getExtension("native_profiler");
        $__internal_4e2de7d4cc00f002ae890d322b2384b0e075fc37b27b38178a804c4d99471e9f->enter($__internal_4e2de7d4cc00f002ae890d322b2384b0e075fc37b27b38178a804c4d99471e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e2de7d4cc00f002ae890d322b2384b0e075fc37b27b38178a804c4d99471e9f->leave($__internal_4e2de7d4cc00f002ae890d322b2384b0e075fc37b27b38178a804c4d99471e9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
