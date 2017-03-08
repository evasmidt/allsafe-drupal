<?php

/* themes/custom/allsafe/templates/block/block.html.twig */
class __TwigTemplate_893b2912b330ae5627485fee0c5cf76283cbfe5bf045de01d0676f0d6cf07dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45, "block" => 65);
        $filters = array("length" => 61, "without" => 66);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
                array('length', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "delta", array()) != "main")) {
            // line 46
            echo "<section";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 50
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 51
            echo "    <h2 ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 53
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 54
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_formatted_component_title", array())) {
            // line 55
            echo "    <div class=\"row component-title-section\">
      <div class=\"component-title columns medium-6 medium-offset-3 slide-in\">
        ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_formatted_component_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 60
        echo " 
  ";
        // line 61
        if (twig_length_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null))) {
            // line 62
            echo "  <div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
            echo ">
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        if (twig_length_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null))) {
            // line 70
            echo "  </div>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "delta", array()) != "main")) {
            // line 74
            echo "</section>
";
        }
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_formatted_component_title"), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/allsafe/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  123 => 65,  117 => 74,  115 => 73,  112 => 72,  108 => 70,  106 => 69,  103 => 68,  101 => 65,  98 => 64,  92 => 62,  90 => 61,  87 => 60,  80 => 57,  76 => 55,  74 => 54,  69 => 53,  61 => 51,  59 => 50,  55 => 49,  52 => 48,  46 => 46,  44 => 45,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - block.subject: Block title.*/
/*  * - content: Block content.*/
/*  * - block.module: Module that generated the block.*/
/*  * - block.delta: An ID for the block, unique within each module.*/
/*  * - block.region: The block region embedding the current block.*/
/*  * - classes: String of classes that can be used to style contextually through*/
/*  *   CSS. It can be manipulated through the variable classes_array from*/
/*  *   preprocess functions. The default values can be one or more of the following:*/
/*  *   - block: The current template type, i.e., "theming hook".*/
/*  *   - block-[module]: The module generating the block. For example, the user module*/
/*  *     is responsible for handling the default user navigation block. In that case*/
/*  *     the class would be "block-user".*/
/*  * - title_prefix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed in front of the main title tag that*/
/*  *   appears in the template.*/
/*  * - title_suffix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed after the main title tag that appears in*/
/*  *   the template.*/
/*  **/
/*  * Helper variables:*/
/*  * - classes_array: Array of html class attribute values. It is flattened*/
/*  *   into a string within the variable classes.*/
/*  * - block_zebra: Outputs 'odd' and 'even' dependent on each block region.*/
/*  * - zebra: Same output as block_zebra but independent of any block region.*/
/*  * - block_id: Counter dependent on each block region.*/
/*  * - id: Same output as block_id but independent of any block region.*/
/*  * - is_front: Flags true when presented in the front page.*/
/*  * - logged_in: Flags true when the current user is a logged-in member.*/
/*  * - is_admin: Flags true when the current user is an administrator.*/
/*  * - block_html_id: A valid HTML ID and guaranteed unique.*/
/*  * - content_attributes: Raw HTML attributes for block content.*/
/*  * - title_attributes: Raw HTML attributes for the block title tag.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_block()*/
/*  * @see template_process()*/
/*  *//* */
/* #}*/
/* {% if block.delta != 'main' %}*/
/* <section{{ attributes }}>*/
/*   {% endif %}*/
/* */
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2 {{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% if content.field_formatted_component_title %}*/
/*     <div class="row component-title-section">*/
/*       <div class="component-title columns medium-6 medium-offset-3 slide-in">*/
/*         {{ content.field_formatted_component_title }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %} */
/*   {% if content_attributes|length %}*/
/*   <div {{ content_attributes }}>*/
/*     {% endif %}*/
/* */
/*     {% block content %}*/
/*       {{ content|without('field_formatted_component_title') }}*/
/*     {% endblock %}*/
/* */
/*     {% if content_attributes|length %}*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   {% if block.delta != 'main' %}*/
/* </section>*/
/* {% endif %}*/
/* */
