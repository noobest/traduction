<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_29bf51230b6d628528dbcbfd69a37512803e03476e6fea7f3d4a054cc283b90e extends Twig_Template
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
        $__internal_9acd0f68b23e9c73cfd53995e8ac5f6f362dd3bb132dc2feb711e96aed5bae8c = $this->env->getExtension("native_profiler");
        $__internal_9acd0f68b23e9c73cfd53995e8ac5f6f362dd3bb132dc2feb711e96aed5bae8c->enter($__internal_9acd0f68b23e9c73cfd53995e8ac5f6f362dd3bb132dc2feb711e96aed5bae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_9acd0f68b23e9c73cfd53995e8ac5f6f362dd3bb132dc2feb711e96aed5bae8c->leave($__internal_9acd0f68b23e9c73cfd53995e8ac5f6f362dd3bb132dc2feb711e96aed5bae8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
