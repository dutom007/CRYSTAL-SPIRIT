<?php

/* PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig */
class __TwigTemplate_616a615f7b5166795a626193b94feec2e48f20918f140c5af67ae9bf43ce552d extends Twig_Template
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
        $__internal_d3db37cfe656f8471b0b8552e34ad55fcf360ec07f697a54344815c3294033b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3db37cfe656f8471b0b8552e34ad55fcf360ec07f697a54344815c3294033b2->enter($__internal_d3db37cfe656f8471b0b8552e34ad55fcf360ec07f697a54344815c3294033b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig"));

        // line 25
        echo "<div class=\"ps-dropdown dropdown btn-group\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenuData"] ?? $this->getContext($context, "topMenuData")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "        ";
            $context["refMenu"] = $this->getAttribute($context["menu"], "refMenu", array());
            // line 28
            echo "        <span type=\"button\"  id=\"";
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? $this->getContext($context, "refMenu")), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"js-selected-item selected-item module-category-selector-label\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
            </span>
            <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
        </span>
        <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? $this->getContext($context, "refMenu")), "html", null, true);
            echo "\">
            <ul class=\"items-list js-items-list\">
                <li class=\"module-category-reset\">
                    <a class=\"dropdown-item\" href=\"#\">
                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Categories", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast($this->getAttribute($context["menu"], "subMenu", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 42
                echo "                    <li class=\"module-category-menu\" data-category-ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "refMenu", array()), "html", null, true);
                echo "\" data-category-display-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "\">
                        <a  class=\"dropdown-item\" href=\"#\">
                            ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["subMenu"], "name", array()), "html", null, true);
                echo "<span class=\"pull-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["subMenu"], "modules", array())), "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
";
        
        $__internal_d3db37cfe656f8471b0b8552e34ad55fcf360ec07f697a54344815c3294033b2->leave($__internal_d3db37cfe656f8471b0b8552e34ad55fcf360ec07f697a54344815c3294033b2_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 51,  82 => 48,  70 => 44,  62 => 42,  58 => 41,  52 => 38,  45 => 34,  38 => 30,  32 => 28,  29 => 27,  25 => 26,  22 => 25,);
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
<div class=\"ps-dropdown dropdown btn-group\">
    {% for menu in topMenuData %}
        {% set refMenu = menu.refMenu %}
        <span type=\"button\"  id=\"{{refMenu}}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"js-selected-item selected-item module-category-selector-label\">
                {{menu.name}}
            </span>
            <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
        </span>
        <div class=\"ps-dropdown-menu dropdown-menu module-category-selector\" aria-labelledby=\"{{refMenu}}\">
            <ul class=\"items-list js-items-list\">
                <li class=\"module-category-reset\">
                    <a class=\"dropdown-item\" href=\"#\">
                            {{ 'All Categories'|trans({}, 'Admin.Modules.Feature') }}
                    </a>
                </li>
                {% for subMenu in menu.subMenu|arrayCast %}
                    <li class=\"module-category-menu\" data-category-ref=\"{{subMenu.refMenu}}\" data-category-display-name=\"{{subMenu.name}}\">
                        <a  class=\"dropdown-item\" href=\"#\">
                            {{subMenu.name}}<span class=\"pull-right\">{{subMenu.modules|length }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
</div>
", "PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories.html.twig");
    }
}
