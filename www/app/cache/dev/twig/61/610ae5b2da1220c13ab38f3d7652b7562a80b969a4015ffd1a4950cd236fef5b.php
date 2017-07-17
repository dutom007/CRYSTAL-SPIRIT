<?php

/* PrestaShopBundle:Admin/Module:manage.html.twig */
class __TwigTemplate_54d52b2c03707cd11c3dd4cc2b7fcc6bd6042e523b4ba3070c1a4e8486f4600d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d2bfc31039b07ce921912ab2858c32c7892eb9fb9ae5d632cb67a69ccf2c7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2bfc31039b07ce921912ab2858c32c7892eb9fb9ae5d632cb67a69ccf2c7aa->enter($__internal_9d2bfc31039b07ce921912ab2858c32c7892eb9fb9ae5d632cb67a69ccf2c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:manage.html.twig"));

        // line 114
        $context["js_translatable"] = twig_array_merge(array("Bulk Action - One module minimum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to select at least one module to use the bulk action.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action \"[1]\" is not available, impossible to perform your request.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action [1] is not available for module [2]. Skipped.", array(), "Admin.Modules.Notification")),         // line 118
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2bfc31039b07ce921912ab2858c32c7892eb9fb9ae5d632cb67a69ccf2c7aa->leave($__internal_9d2bfc31039b07ce921912ab2858c32c7892eb9fb9ae5d632cb67a69ccf2c7aa_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd87e11457d9afb3e0c109956cc0764e3aecc3a75367e03833020b6aceb397a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd87e11457d9afb3e0c109956cc0764e3aecc3a75367e03833020b6aceb397a2->enter($__internal_cd87e11457d9afb3e0c109956cc0764e3aecc3a75367e03833020b6aceb397a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/module/drop.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/plugins/jquery.pstagger.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cd87e11457d9afb3e0c109956cc0764e3aecc3a75367e03833020b6aceb397a2->leave($__internal_cd87e11457d9afb3e0c109956cc0764e3aecc3a75367e03833020b6aceb397a2_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0945eeb07f7120d93a07a16a81769384111ecd45f9401afe887b50737b27f826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0945eeb07f7120d93a07a16a81769384111ecd45f9401afe887b50737b27f826->enter($__internal_0945eeb07f7120d93a07a16a81769384111ecd45f9401afe887b50737b27f826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0945eeb07f7120d93a07a16a81769384111ecd45f9401afe887b50737b27f826->leave($__internal_0945eeb07f7120d93a07a16a81769384111ecd45f9401afe887b50737b27f826_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_c03b1d946f7fdc9ac2cb153b0eb491c285ed6171e1efe11bc428bba8e891a1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03b1d946f7fdc9ac2cb153b0eb491c285ed6171e1efe11bc428bba8e891a1c4->enter($__internal_c03b1d946f7fdc9ac2cb153b0eb491c285ed6171e1efe11bc428bba8e891a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            ";
        // line 45
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 45)->display($context);
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 47)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 49)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 51)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")))));
        // line 52
        echo "            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 55
        if ((($context["level"] ?? $this->getContext($context, "level")) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 56
            echo "                            <div class=\"module-sorting module-bulk-actions pull-right\">
                                <select class=\"c-select c-select-sm\">
                                  <option value=\"\" disabled selected>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", array(), "Admin.Global"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-uninstall\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-reset\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable-mobile\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable-mobile\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                </select>
                            </div>
                        ";
        }
        // line 68
        echo "                        <div class=\"module-sorting module-sorting-author pull-right\">
                            <select class=\"c-select c-select-sm\">
                              <option value=\"\" disabled>- ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo " -</option>
                              <option value=\"name\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "</option>
                              <option value=\"access-desc\" selected>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last access", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 80
        echo "\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% installed modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
                   </div>
\t\t";
        // line 87
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 87)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "modules", array()), "display_type" => "list", "origin" => "manage", "id" => "all")));
        // line 88
        echo "
\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% built-in modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "native_modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                 data-title=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Built-in modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
\t\t</div>
\t\t";
        // line 98
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 98)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "native_modules", array()), "display_type" => "list", "origin" => "manage", "id" => "native")));
        // line 99
        echo "
\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% theme modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "theme_bundle", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
\t\t</div>
\t\t";
        // line 109
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 109)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "theme_bundle", array()), "display_type" => "list", "origin" => "manage", "id" => "theme")));
        // line 110
        echo "        </div>
    </div>
";
        
        $__internal_c03b1d946f7fdc9ac2cb153b0eb491c285ed6171e1efe11bc428bba8e891a1c4->leave($__internal_c03b1d946f7fdc9ac2cb153b0eb491c285ed6171e1efe11bc428bba8e891a1c4_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 110,  252 => 109,  246 => 106,  242 => 105,  237 => 103,  231 => 99,  229 => 98,  223 => 95,  219 => 94,  214 => 92,  208 => 88,  206 => 87,  200 => 84,  196 => 83,  191 => 81,  188 => 80,  178 => 72,  174 => 71,  170 => 70,  166 => 68,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 56,  129 => 55,  124 => 52,  121 => 51,  119 => 50,  116 => 49,  114 => 48,  111 => 47,  109 => 46,  106 => 45,  102 => 42,  96 => 41,  87 => 38,  83 => 37,  79 => 36,  75 => 35,  70 => 34,  64 => 33,  55 => 30,  51 => 29,  46 => 28,  40 => 27,  33 => 25,  31 => 118,  30 => 114,  11 => 25,);
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
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/module/drop.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/plugins/jquery.pstagger.css') }}\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            {# Bulk Action confirm modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig' %}
            {# Addons connect modal with level authorization#}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains toolbar-nav for module page with level authorization #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains menu with Selection/Categories/Popular and Tag Search #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig' with { 'topMenuData': topMenuData } %}
            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% if level > constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') %}
                            <div class=\"module-sorting module-bulk-actions pull-right\">
                                <select class=\"c-select c-select-sm\">
                                  <option value=\"\" disabled selected>{{ 'Bulk Actions'|trans({}, 'Admin.Global') }}</option>
                                  <option value=\"bulk-uninstall\">{{ 'Uninstall'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-disable\">{{ 'Disable'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-enable\">{{ 'Enable'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-reset\">{{ 'Reset'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-enable-mobile\">{{ 'Enable Mobile'|trans({}, 'Admin.Modules.Feature') }}</option>
                                  <option value=\"bulk-disable-mobile\">{{ 'Disable Mobile'|trans({}, 'Admin.Modules.Feature') }}</option>
                                </select>
                            </div>
                        {% endif %}
                        <div class=\"module-sorting module-sorting-author pull-right\">
                            <select class=\"c-select c-select-sm\">
                              <option value=\"\" disabled>- {{ 'Sort by'|trans({}, 'Admin.Actions') }} -</option>
                              <option value=\"name\">{{ 'Name'|trans({}, 'Admin.Global') }}</option>
                              <option value=\"access-desc\" selected>{{ 'Last access'|trans({}, 'Admin.Modules.Feature') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {# Actual Page Content #}
\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">{{ '%nbModules% installed modules'|trans({'%nbModules%' : modules.modules|length}, 'Admin.Modules.Feature') }}</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"{{ \"Installed modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                                data-content=\"{{ \"These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.\"|trans({}, 'Admin.Modules.Help') }}\">
                           </span>
                   </div>
\t\t{% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.modules, 'display_type': 'list', 'origin': 'manage', 'id': 'all' } %}

\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">{{ '%nbModules% built-in modules'|trans({'%nbModules%' : modules.native_modules|length}, 'Admin.Modules.Feature') }}</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                 data-title=\"{{ \"Built-in modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                                data-content=\"{{ \"These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.\"|trans({}, 'Admin.Modules.Help') }}\">
                           </span>
\t\t</div>
\t\t{% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.native_modules, 'display_type': 'list', 'origin': 'manage', 'id': 'native' } %}

\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">{{ '%nbModules% theme modules'|trans({'%nbModules%' : modules.theme_bundle|length}, 'Admin.Modules.Feature') }}</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"{{ \"Theme modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                                data-content=\"{{ \"Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.\"|trans({}, 'Admin.Modules.Help') }}\">
                           </span>
\t\t</div>
\t\t{% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.theme_bundle, 'display_type': 'list', 'origin': 'manage', 'id': 'theme' } %}
        </div>
    </div>
{% endblock %}

{% set js_translatable = {
\"Bulk Action - One module minimum\": \"You need to select at least one module to use the bulk action.\"|trans({}, 'Admin.Modules.Notification'),
\"Bulk Action - Request not found\": 'The action \"[1]\" is not available, impossible to perform your request.'|trans({}, 'Admin.Modules.Notification'),
\"Bulk Action - Request not available for module\": \"The action [1] is not available for module [2]. Skipped.\"|trans({}, 'Admin.Modules.Notification'),
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin/Module:manage.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
