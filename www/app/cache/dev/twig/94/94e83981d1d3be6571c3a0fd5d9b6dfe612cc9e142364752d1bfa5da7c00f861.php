<?php

/* PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig */
class __TwigTemplate_6223f53352bf7b5b950fcba8d9c4d6911868f338e9e47d585f97eb0ba511ba6d extends Twig_Template
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
        $__internal_c315fb66d174cea30dd4c523b41a45fc3244eb7e4f95959b3528dbdf532de18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c315fb66d174cea30dd4c523b41a45fc3244eb7e4f95959b3528dbdf532de18a->enter($__internal_c315fb66d174cea30dd4c523b41a45fc3244eb7e4f95959b3528dbdf532de18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig"));

        // line 25
        echo "<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8 module-menu-item\">
            ";
        // line 28
        if (array_key_exists("topMenuData", $context)) {
            // line 29
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 29)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")))));
            // line 30
            echo "            ";
        }
        // line 31
        echo "            ";
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? $this->getContext($context, "requireFilterStatus")) == true))) {
            // line 32
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 32)->display($context);
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>

        <div class=\"col-md-4\">
            <div class=\"input-group module-search-block\">
                <span class=\"input-group-addon module-search-icon\">
                    <i class=\"material-icons\">search</i>
                </span>
                <input id=\"module-search-bar\" class=\"module-search-bar form-control\" type=\"text\">
            </div>
        </div>

    </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 50
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 52
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        
        $__internal_c315fb66d174cea30dd4c523b41a45fc3244eb7e4f95959b3528dbdf532de18a->leave($__internal_c315fb66d174cea30dd4c523b41a45fc3244eb7e4f95959b3528dbdf532de18a_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 52,  62 => 50,  44 => 34,  41 => 33,  38 => 32,  35 => 31,  32 => 30,  29 => 29,  27 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8 module-menu-item\">
            {% if topMenuData is defined %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig' with { 'topMenuData': topMenuData } %}
            {% endif %}
            {% if requireFilterStatus is defined and requireFilterStatus == true %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig' %}
            {% endif %}
        </div>

        <div class=\"col-md-4\">
            <div class=\"input-group module-search-block\">
                <span class=\"input-group-addon module-search-icon\">
                    <i class=\"material-icons\">search</i>
                </span>
                <input id=\"module-search-bar\" class=\"module-search-bar form-control\" type=\"text\">
            </div>
        </div>

    </div>
</div>

<hr class=\"top-menu-separator\"/>

{% set js_translatable = {
\"Search - placeholder\": \"Search modules: keyword, name, author...\"|trans({}, 'Admin.Modules.Help'),
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}
