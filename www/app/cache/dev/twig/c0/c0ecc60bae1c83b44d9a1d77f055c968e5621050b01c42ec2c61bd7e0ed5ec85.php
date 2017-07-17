<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig */
class __TwigTemplate_4c2876f6bbd151eb45e9c62fc510b848eff33746d546c723c8a540adc2a3f147 extends Twig_Template
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
        $__internal_5cae3165a1d360bddd664105e0ae2423a2ad393fb7a3a05c108aa13f97793e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae3165a1d360bddd664105e0ae2423a2ad393fb7a3a05c108aa13f97793e3d->enter($__internal_5cae3165a1d360bddd664105e0ae2423a2ad393fb7a3a05c108aa13f97793e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig"));

        // line 26
        echo "<div class=\"module-placeholders-wrapper row\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "
      <div class=\"timeline-item col-xl-4 col-lg-6 col-md-12 col-sm-12\">
        <div class=\"timeline-item-wrapper\">
            <div class=\"animated-background\">
              <div class=\"background-masker header-top\"></div>
              <div class=\"background-masker header-left\"></div>
              <div class=\"background-masker header-right\"></div>
              <div class=\"background-masker header-bottom\"></div>
              <div class=\"background-masker subheader-left\"></div>
              <div class=\"background-masker subheader-right\"></div>
              <div class=\"background-masker subheader-bottom\"></div>
              <div class=\"background-masker content-top\"></div>
              <div class=\"background-masker content-first-end\"></div>
              <div class=\"background-masker content-second-line\"></div>
              <div class=\"background-masker content-second-end\"></div>
              <div class=\"background-masker content-third-line\"></div>
              <div class=\"background-masker content-third-end\"></div>
            </div>
          </div>
      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>

<div class=\"module-placeholders-failure row\">
      <div class=\"module-placeholders-failure-wrapper col-md-12\">
          <div class='module-placeholders-failure-msg'>
          </div>
          <button id='module-placeholders-failure-retry' type=\"button\" class=\"btn btn-primary\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try again", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>

</div>
";
        
        $__internal_5cae3165a1d360bddd664105e0ae2423a2ad393fb7a3a05c108aa13f97793e3d->leave($__internal_5cae3165a1d360bddd664105e0ae2423a2ad393fb7a3a05c108aa13f97793e3d_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 56,  56 => 50,  29 => 28,  25 => 27,  22 => 26,);
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
{#Simulate a bunch of module card #}
<div class=\"module-placeholders-wrapper row\">
    {% for i in 0..8 %}

      <div class=\"timeline-item col-xl-4 col-lg-6 col-md-12 col-sm-12\">
        <div class=\"timeline-item-wrapper\">
            <div class=\"animated-background\">
              <div class=\"background-masker header-top\"></div>
              <div class=\"background-masker header-left\"></div>
              <div class=\"background-masker header-right\"></div>
              <div class=\"background-masker header-bottom\"></div>
              <div class=\"background-masker subheader-left\"></div>
              <div class=\"background-masker subheader-right\"></div>
              <div class=\"background-masker subheader-bottom\"></div>
              <div class=\"background-masker content-top\"></div>
              <div class=\"background-masker content-first-end\"></div>
              <div class=\"background-masker content-second-line\"></div>
              <div class=\"background-masker content-second-end\"></div>
              <div class=\"background-masker content-third-line\"></div>
              <div class=\"background-masker content-third-end\"></div>
            </div>
          </div>
      </div>

    {% endfor %}
</div>

<div class=\"module-placeholders-failure row\">
      <div class=\"module-placeholders-failure-wrapper col-md-12\">
          <div class='module-placeholders-failure-msg'>
          </div>
          <button id='module-placeholders-failure-retry' type=\"button\" class=\"btn btn-primary\">{{ 'Try again'|trans({}, 'Admin.Actions') }}</button>
      </div>

</div>
", "PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_loader.html.twig");
    }
}
