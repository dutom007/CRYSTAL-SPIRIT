<?php

/* PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig */
class __TwigTemplate_2b91a1bb77dddf1d65b571bba4cfb3d07ec880fdc202db0e51b4da7053b73826 extends Twig_Template
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
        $__internal_16489364066c313902fdd0974dc6cfc9417b351620c77fed5a3f97c1b2f91aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16489364066c313902fdd0974dc6cfc9417b351620c77fed5a3f97c1b2f91aee->enter($__internal_16489364066c313902fdd0974dc6cfc9417b351620c77fed5a3f97c1b2f91aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig"));

        // line 25
        if ($this->getAttribute(($context["attr"] ?? null), "counter", array(), "any", true, true)) {
            // line 26
            echo "  <span
    class=\"maxLength\">";
            // line 27
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => "<span class=\"currentTotalMax\">", "[/2]" => "</span>"));
            // line 32
            echo "</span>
";
        }
        
        $__internal_16489364066c313902fdd0974dc6cfc9417b351620c77fed5a3f97c1b2f91aee->leave($__internal_16489364066c313902fdd0974dc6cfc9417b351620c77fed5a3f97c1b2f91aee_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 32,  27 => 27,  24 => 26,  22 => 25,);
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
{% if attr.counter is defined %}
  <span
    class=\"maxLength\">{{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
      '[1]': '<span class=\"currentLength\">',
      '[/1]': '</span>',
      '[2]': '<span class=\"currentTotalMax\">',
      '[/2]': '</span>',
    })|raw }}</span>
{% endif %}
", "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form_max_length.html.twig");
    }
}
