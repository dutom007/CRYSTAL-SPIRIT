<?php

/* PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig */
class __TwigTemplate_e168c19eeef968a96fc68e1bf5c3fbba1e3b2856fed87cbe4aaa764f1c8f9ab5 extends Twig_Template
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
        $__internal_faa9d759068f380a751751bc8593185082952ee6c03de5f799bca7bca0d0f956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa9d759068f380a751751bc8593185082952ee6c03de5f799bca7bca0d0f956->enter($__internal_faa9d759068f380a751751bc8593185082952ee6c03de5f799bca7bca0d0f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig"));

        // line 25
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"]) =         array($this->getAttribute($this->getAttribute(        // line 26
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "displayPrice", array()), $this->getAttribute($this->getAttribute(        // line 29
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "url_active", array()), $this->getAttribute($this->getAttribute(        // line 30
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array()), $this->getAttribute($this->getAttribute(        // line 31
($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()));
        // line 33
        echo "
<div class=\"pull-right btn-group\">
  ";
        // line 35
        if ((($context["level"] ?? $this->getContext($context, "level")) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_READ"))) {
            // line 36
            echo "    ";
            if ((($context["url_active"] ?? $this->getContext($context, "url_active")) == "buy")) {
                // line 37
                echo "      <a class=\"btn pull-left btn-primary btn-primary-reverse btn-primary-outline light-button module_action_menu_go_to_addons\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                echo "\" target=\"_blank\">
        ";
                // line 38
                if ((($context["priceRaw"] ?? $this->getContext($context, "priceRaw")) != "0.00")) {
                    echo twig_escape_filter($this->env, ($context["priceDisplay"] ?? $this->getContext($context, "priceDisplay")), "html", null, true);
                    echo "
        ";
                } else {
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover", array(), "Admin.Modules.Feature"), "html", null, true);
                }
                // line 40
                echo "      </a>
    ";
            } else {
                // line 42
                echo "      <form class=\"btn-group\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["urls"] ?? $this->getContext($context, "urls")), ($context["url_active"] ?? $this->getContext($context, "url_active")), array(), "array"), "html", null, true);
                echo "\">
        <button type=\"submit\" class=\"btn btn-primary-reverse btn-primary-outline light-button module_action_menu_";
                // line 43
                echo twig_escape_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active")), "html", null, true);
                echo "\"
           data-confirm_modal=\"module-modal-confirm-";
                // line 44
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active")), "html", null, true);
                echo "\" ";
                if (((($context["level"] ?? $this->getContext($context, "level")) < twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")) || ((($context["level"] ?? $this->getContext($context, "level")) < twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_DELETE")) && !twig_in_filter(($context["url_active"] ?? $this->getContext($context, "url_active")), array(0 => "configure", 1 => "install", 2 => "upgrade"))))) {
                    echo " disabled=\"disabled\" ";
                }
                echo ">
            ";
                // line 45
                echo twig_escape_filter($this->env, twig_replace_filter(twig_capitalize_string_filter($this->env, ($context["url_active"] ?? $this->getContext($context, "url_active"))), array("_" => " ")), "html", null, true);
                echo "
        </button>
        ";
                // line 47
                if ((twig_length_filter($this->env, ($context["urls"] ?? $this->getContext($context, "urls"))) > 1)) {
                    // line 48
                    echo "        <input type=\"hidden\" class=\"btn\">
        ";
                }
                // line 50
                echo "      </form>
      ";
                // line 51
                if ((twig_length_filter($this->env, ($context["urls"] ?? $this->getContext($context, "urls"))) > 1)) {
                    // line 52
                    echo "        ";
                    if (((($context["level"] ?? $this->getContext($context, "level")) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_CREATE")) || ((twig_in_filter("configure", twig_get_array_keys_filter(($context["urls"] ?? $this->getContext($context, "urls")))) && twig_in_filter("upgrade", twig_get_array_keys_filter(($context["urls"] ?? $this->getContext($context, "urls"))))) && twig_in_filter(($context["url_active"] ?? $this->getContext($context, "url_active")), array(0 => "configure", 1 => "install", 2 => "upgrade"))))) {
                        // line 53
                        echo "            <button type=\"button\" class=\"btn btn-primary-outline  dropdown-toggle light-button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "</span>
            </button>
            <div class=\"dropdown-menu\">
              ";
                        // line 58
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? $this->getContext($context, "urls")));
                        foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                            // line 59
                            echo "                ";
                            if (($context["module_action"] != ($context["url_active"] ?? $this->getContext($context, "url_active")))) {
                                // line 60
                                echo "                  ";
                                if (((($context["level"] ?? $this->getContext($context, "level")) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_DELETE")) || ((($context["level"] ?? $this->getContext($context, "level")) < twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_DELETE")) && twig_in_filter($context["module_action"], array(0 => "configure", 1 => "install", 2 => "upgrade"))))) {
                                    // line 61
                                    echo "                    <li>
                      <form method=\"post\" action=\"";
                                    // line 62
                                    echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                                    echo "\">
                        <button type=\"submit\" class=\"dropdown-item module_action_menu_";
                                    // line 63
                                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                                    echo "\" data-confirm_modal=\"module-modal-confirm-";
                                    echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                                    echo "-";
                                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                                    echo "\">
                          ";
                                    // line 64
                                    echo twig_escape_filter($this->env, twig_replace_filter(twig_capitalize_string_filter($this->env, $context["module_action"]), array("_" => " ")), "html", null, true);
                                    echo "
                        </button>
                      </form>
                    </li>
                  ";
                                }
                                // line 69
                                echo "                ";
                            }
                            // line 70
                            echo "              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "            </div>
        ";
                    }
                    // line 73
                    echo "      ";
                }
                // line 74
                echo "    ";
            }
            // line 75
            echo "  ";
        }
        // line 76
        echo "</div>
";
        
        $__internal_faa9d759068f380a751751bc8593185082952ee6c03de5f799bca7bca0d0f956->leave($__internal_faa9d759068f380a751751bc8593185082952ee6c03de5f799bca7bca0d0f956_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 76,  157 => 75,  154 => 74,  151 => 73,  147 => 71,  141 => 70,  138 => 69,  130 => 64,  122 => 63,  118 => 62,  115 => 61,  112 => 60,  109 => 59,  105 => 58,  99 => 55,  95 => 53,  92 => 52,  90 => 51,  87 => 50,  83 => 48,  81 => 47,  76 => 45,  66 => 44,  62 => 43,  57 => 42,  53 => 40,  50 => 39,  44 => 38,  39 => 37,  36 => 36,  34 => 35,  30 => 33,  28 => 31,  27 => 30,  26 => 29,  25 => 28,  24 => 27,  23 => 26,  22 => 25,);
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
{% set url, priceRaw, priceDisplay, url_active, urls, name =
  module.attributes.url,
  module.attributes.price.raw,
  module.attributes.price.displayPrice,
  module.attributes.url_active,
  module.attributes.urls,
  module.attributes.name
%}

<div class=\"pull-right btn-group\">
  {% if level > constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_READ') %}
    {% if url_active == 'buy' %}
      <a class=\"btn pull-left btn-primary btn-primary-reverse btn-primary-outline light-button module_action_menu_go_to_addons\" href=\"{{ url }}\" target=\"_blank\">
        {% if priceRaw != '0.00' %}{{ priceDisplay }}
        {% else %}{{ 'Discover'|trans({}, 'Admin.Modules.Feature') }}{% endif %}
      </a>
    {% else %}
      <form class=\"btn-group\" method=\"post\" action=\"{{ urls[url_active] }}\">
        <button type=\"submit\" class=\"btn btn-primary-reverse btn-primary-outline light-button module_action_menu_{{ url_active }}\"
           data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ url_active }}\" {% if (level < constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE')) or (level < constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_DELETE') and (url_active not in ['configure', 'install', 'upgrade'])) %} disabled=\"disabled\" {% endif %}>
            {{ url_active|capitalize|replace({'_': \" \"}) }}
        </button>
        {% if urls|length > 1 %}
        <input type=\"hidden\" class=\"btn\">
        {% endif %}
      </form>
      {% if (urls|length > 1) %}
        {% if (level > constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_CREATE')) or ((('configure' in urls|keys) and ('upgrade' in urls|keys)) and  url_active in ['configure', 'install', 'upgrade']) %}
            <button type=\"button\" class=\"btn btn-primary-outline  dropdown-toggle light-button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">{{ 'Toggle Dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
            </button>
            <div class=\"dropdown-menu\">
              {% for module_action, module_url in urls %}
                {% if module_action != url_active %}
                  {% if ((level >= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_DELETE')) or ((level < constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_DELETE')) and (module_action in ['configure', 'install', 'upgrade']))) %}
                    <li>
                      <form method=\"post\" action=\"{{ module_url }}\">
                        <button type=\"submit\" class=\"dropdown-item module_action_menu_{{ module_action }}\" data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ module_action }}\">
                          {{module_action|capitalize|replace({'_': \" \"})}}
                        </button>
                      </form>
                    </li>
                  {% endif %}
                {% endif %}
              {% endfor %}
            </div>
        {% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
</div>
", "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
