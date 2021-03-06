<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d9d8d4e939badcc672fe6acee0b84be99432cf3ce43ff6de3479635280f308d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_521d06bb214db4606b46868bc51ff660fd11e43d4736454ea9645b27381beef4 = $this->env->getExtension("native_profiler");
        $__internal_521d06bb214db4606b46868bc51ff660fd11e43d4736454ea9645b27381beef4->enter($__internal_521d06bb214db4606b46868bc51ff660fd11e43d4736454ea9645b27381beef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_521d06bb214db4606b46868bc51ff660fd11e43d4736454ea9645b27381beef4->leave($__internal_521d06bb214db4606b46868bc51ff660fd11e43d4736454ea9645b27381beef4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0bb3bcf23cfe8228a0b4086e6290ed1812761f9988dbf4df6ce7a5dd6f213571 = $this->env->getExtension("native_profiler");
        $__internal_0bb3bcf23cfe8228a0b4086e6290ed1812761f9988dbf4df6ce7a5dd6f213571->enter($__internal_0bb3bcf23cfe8228a0b4086e6290ed1812761f9988dbf4df6ce7a5dd6f213571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0bb3bcf23cfe8228a0b4086e6290ed1812761f9988dbf4df6ce7a5dd6f213571->leave($__internal_0bb3bcf23cfe8228a0b4086e6290ed1812761f9988dbf4df6ce7a5dd6f213571_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f9ee6d2eee689e5fea1a6e63a7be63afb1cdf926e4518c944672838bd714c690 = $this->env->getExtension("native_profiler");
        $__internal_f9ee6d2eee689e5fea1a6e63a7be63afb1cdf926e4518c944672838bd714c690->enter($__internal_f9ee6d2eee689e5fea1a6e63a7be63afb1cdf926e4518c944672838bd714c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f9ee6d2eee689e5fea1a6e63a7be63afb1cdf926e4518c944672838bd714c690->leave($__internal_f9ee6d2eee689e5fea1a6e63a7be63afb1cdf926e4518c944672838bd714c690_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb305501dbc3382e523c150f42271158cfab05e2cdb630549196e7eef567a8f9 = $this->env->getExtension("native_profiler");
        $__internal_cb305501dbc3382e523c150f42271158cfab05e2cdb630549196e7eef567a8f9->enter($__internal_cb305501dbc3382e523c150f42271158cfab05e2cdb630549196e7eef567a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb305501dbc3382e523c150f42271158cfab05e2cdb630549196e7eef567a8f9->leave($__internal_cb305501dbc3382e523c150f42271158cfab05e2cdb630549196e7eef567a8f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
