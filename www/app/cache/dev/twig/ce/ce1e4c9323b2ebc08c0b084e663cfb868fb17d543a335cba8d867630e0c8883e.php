<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_d437bc19837081ea9f45b0d03cf7328e6af01b70a02c6629ac867cafcc98e911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dd3d331c9eb1e71f7d5bbc00b476cf7174fe2b619d5b1a55198cc62a63a2654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3d331c9eb1e71f7d5bbc00b476cf7174fe2b619d5b1a55198cc62a63a2654->enter($__internal_2dd3d331c9eb1e71f7d5bbc00b476cf7174fe2b619d5b1a55198cc62a63a2654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 116
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 122
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 127
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 140
        $this->displayBlock('date_widget', $context, $blocks);
        // line 154
        $this->displayBlock('time_widget', $context, $blocks);
        // line 165
        $this->displayBlock('number_widget', $context, $blocks);
        // line 171
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 176
        $this->displayBlock('money_widget', $context, $blocks);
        // line 180
        $this->displayBlock('url_widget', $context, $blocks);
        // line 185
        $this->displayBlock('search_widget', $context, $blocks);
        // line 190
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 195
        $this->displayBlock('password_widget', $context, $blocks);
        // line 200
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 205
        $this->displayBlock('email_widget', $context, $blocks);
        // line 210
        $this->displayBlock('button_widget', $context, $blocks);
        // line 224
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 229
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 236
        $this->displayBlock('form_label', $context, $blocks);
        // line 263
        $this->displayBlock('button_label', $context, $blocks);
        // line 267
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 275
        $this->displayBlock('form_row', $context, $blocks);
        // line 283
        $this->displayBlock('button_row', $context, $blocks);
        // line 289
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 295
        $this->displayBlock('form', $context, $blocks);
        // line 301
        $this->displayBlock('form_start', $context, $blocks);
        // line 315
        $this->displayBlock('form_end', $context, $blocks);
        // line 322
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 326
        $this->displayBlock('form_errors', $context, $blocks);
        // line 336
        $this->displayBlock('form_rest', $context, $blocks);
        // line 343
        echo "
";
        // line 346
        $this->displayBlock('form_rows', $context, $blocks);
        // line 352
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 369
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 383
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 397
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_2dd3d331c9eb1e71f7d5bbc00b476cf7174fe2b619d5b1a55198cc62a63a2654->leave($__internal_2dd3d331c9eb1e71f7d5bbc00b476cf7174fe2b619d5b1a55198cc62a63a2654_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a349af644886b1d7d08cde3d8d6776e005069fc5f6b91fcd3f680f9e322c0438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a349af644886b1d7d08cde3d8d6776e005069fc5f6b91fcd3f680f9e322c0438->enter($__internal_a349af644886b1d7d08cde3d8d6776e005069fc5f6b91fcd3f680f9e322c0438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a349af644886b1d7d08cde3d8d6776e005069fc5f6b91fcd3f680f9e322c0438->leave($__internal_a349af644886b1d7d08cde3d8d6776e005069fc5f6b91fcd3f680f9e322c0438_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6ff1f9a51b4b63ffec80c47d9bd04e41231552e50653d832b25ed2e62d567963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff1f9a51b4b63ffec80c47d9bd04e41231552e50653d832b25ed2e62d567963->enter($__internal_6ff1f9a51b4b63ffec80c47d9bd04e41231552e50653d832b25ed2e62d567963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 37)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        // line 38
        echo "  <input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_6ff1f9a51b4b63ffec80c47d9bd04e41231552e50653d832b25ed2e62d567963->leave($__internal_6ff1f9a51b4b63ffec80c47d9bd04e41231552e50653d832b25ed2e62d567963_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fbf7f3f23f07bca0e359e17bd39d1268ab4139d876b1de850bc21a7972022bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf7f3f23f07bca0e359e17bd39d1268ab4139d876b1de850bc21a7972022bbc->enter($__internal_fbf7f3f23f07bca0e359e17bd39d1268ab4139d876b1de850bc21a7972022bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_fbf7f3f23f07bca0e359e17bd39d1268ab4139d876b1de850bc21a7972022bbc->leave($__internal_fbf7f3f23f07bca0e359e17bd39d1268ab4139d876b1de850bc21a7972022bbc_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_0847dc563e9a57557432ddb71a8ff361e32d8ca4d54034a1ab2ef3f479a7dadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0847dc563e9a57557432ddb71a8ff361e32d8ca4d54034a1ab2ef3f479a7dadc->enter($__internal_0847dc563e9a57557432ddb71a8ff361e32d8ca4d54034a1ab2ef3f479a7dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_0847dc563e9a57557432ddb71a8ff361e32d8ca4d54034a1ab2ef3f479a7dadc->leave($__internal_0847dc563e9a57557432ddb71a8ff361e32d8ca4d54034a1ab2ef3f479a7dadc_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_50a2760cb67d7a9afa570baae907f9b15731cc2f26bfafc7934f7d28c6191e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a2760cb67d7a9afa570baae907f9b15731cc2f26bfafc7934f7d28c6191e1c->enter($__internal_50a2760cb67d7a9afa570baae907f9b15731cc2f26bfafc7934f7d28c6191e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 59)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        // line 60
        echo "  <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_50a2760cb67d7a9afa570baae907f9b15731cc2f26bfafc7934f7d28c6191e1c->leave($__internal_50a2760cb67d7a9afa570baae907f9b15731cc2f26bfafc7934f7d28c6191e1c_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_c9511b8b1f49f03866ac17f28b5356039ead0e305e9a842b81b806d560638432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9511b8b1f49f03866ac17f28b5356039ead0e305e9a842b81b806d560638432->enter($__internal_c9511b8b1f49f03866ac17f28b5356039ead0e305e9a842b81b806d560638432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_c9511b8b1f49f03866ac17f28b5356039ead0e305e9a842b81b806d560638432->leave($__internal_c9511b8b1f49f03866ac17f28b5356039ead0e305e9a842b81b806d560638432_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_99fbbf9bc3d2e7f89e19c344586c724f7c337747417b3d1a220fe1dffc131bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fbbf9bc3d2e7f89e19c344586c724f7c337747417b3d1a220fe1dffc131bbd->enter($__internal_99fbbf9bc3d2e7f89e19c344586c724f7c337747417b3d1a220fe1dffc131bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_99fbbf9bc3d2e7f89e19c344586c724f7c337747417b3d1a220fe1dffc131bbd->leave($__internal_99fbbf9bc3d2e7f89e19c344586c724f7c337747417b3d1a220fe1dffc131bbd_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5af359a7a8b1471b16cb10d6941e1e536fee026cbc737bfe80be6cd0dbcbcef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af359a7a8b1471b16cb10d6941e1e536fee026cbc737bfe80be6cd0dbcbcef0->enter($__internal_5af359a7a8b1471b16cb10d6941e1e536fee026cbc737bfe80be6cd0dbcbcef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " data-toggle=\"select2\">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_5af359a7a8b1471b16cb10d6941e1e536fee026cbc737bfe80be6cd0dbcbcef0->leave($__internal_5af359a7a8b1471b16cb10d6941e1e536fee026cbc737bfe80be6cd0dbcbcef0_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_5c82f4d3369c0b3b7fb40d6edacf38286ff5fc1bdfc6cfbbf48cc1c5bbf146e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c82f4d3369c0b3b7fb40d6edacf38286ff5fc1bdfc6cfbbf48cc1c5bbf146e2->enter($__internal_5c82f4d3369c0b3b7fb40d6edacf38286ff5fc1bdfc6cfbbf48cc1c5bbf146e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
        ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 110
                echo "      <option
        value=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5c82f4d3369c0b3b7fb40d6edacf38286ff5fc1bdfc6cfbbf48cc1c5bbf146e2->leave($__internal_5c82f4d3369c0b3b7fb40d6edacf38286ff5fc1bdfc6cfbbf48cc1c5bbf146e2_prof);

    }

    // line 116
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ea4283b6048aa4a39fb6bfc35e485f706e525e6c3fbdca244de21d1062872850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4283b6048aa4a39fb6bfc35e485f706e525e6c3fbdca244de21d1062872850->enter($__internal_ea4283b6048aa4a39fb6bfc35e485f706e525e6c3fbdca244de21d1062872850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 117
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 118
        echo "<input type=\"checkbox\"
         ";
        // line 119
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_ea4283b6048aa4a39fb6bfc35e485f706e525e6c3fbdca244de21d1062872850->leave($__internal_ea4283b6048aa4a39fb6bfc35e485f706e525e6c3fbdca244de21d1062872850_prof);

    }

    // line 122
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1edc2ce708b3fea8124e4ae1cd693b919be1d696d9d5ebbac22a45f4f1405882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edc2ce708b3fea8124e4ae1cd693b919be1d696d9d5ebbac22a45f4f1405882->enter($__internal_1edc2ce708b3fea8124e4ae1cd693b919be1d696d9d5ebbac22a45f4f1405882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 123
        echo "<input
    type=\"radio\" ";
        // line 124
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_1edc2ce708b3fea8124e4ae1cd693b919be1d696d9d5ebbac22a45f4f1405882->leave($__internal_1edc2ce708b3fea8124e4ae1cd693b919be1d696d9d5ebbac22a45f4f1405882_prof);

    }

    // line 127
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_65c2597639792a0dfc39379edeee03376732141cd0a00fcaad957c88f8814601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c2597639792a0dfc39379edeee03376732141cd0a00fcaad957c88f8814601->enter($__internal_65c2597639792a0dfc39379edeee03376732141cd0a00fcaad957c88f8814601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 128
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 129
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 136
            echo "</div>";
        }
        
        $__internal_65c2597639792a0dfc39379edeee03376732141cd0a00fcaad957c88f8814601->leave($__internal_65c2597639792a0dfc39379edeee03376732141cd0a00fcaad957c88f8814601_prof);

    }

    // line 140
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5b97cc338e1a615b466bd7a4f96ea5edb37c4c82c47c028d16e6129557be81c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b97cc338e1a615b466bd7a4f96ea5edb37c4c82c47c028d16e6129557be81c9->enter($__internal_5b97cc338e1a615b466bd7a4f96ea5edb37c4c82c47c028d16e6129557be81c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 141
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 142
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 144
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 145
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 147
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 148
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 150
            echo "</div>";
        }
        
        $__internal_5b97cc338e1a615b466bd7a4f96ea5edb37c4c82c47c028d16e6129557be81c9->leave($__internal_5b97cc338e1a615b466bd7a4f96ea5edb37c4c82c47c028d16e6129557be81c9_prof);

    }

    // line 154
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_828719e185a092735d7768ed63532a1ce8aecc34a5becd4ae6fcebb3ed94bbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828719e185a092735d7768ed63532a1ce8aecc34a5becd4ae6fcebb3ed94bbf6->enter($__internal_828719e185a092735d7768ed63532a1ce8aecc34a5becd4ae6fcebb3ed94bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 155
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 156
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 158
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 159
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 161
            echo "    </div>";
        }
        
        $__internal_828719e185a092735d7768ed63532a1ce8aecc34a5becd4ae6fcebb3ed94bbf6->leave($__internal_828719e185a092735d7768ed63532a1ce8aecc34a5becd4ae6fcebb3ed94bbf6_prof);

    }

    // line 165
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_4d4938e3385a5fae6c2e54ba0c97f3e72bfc0d27736cbcb473fe4cc022167f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4938e3385a5fae6c2e54ba0c97f3e72bfc0d27736cbcb473fe4cc022167f6f->enter($__internal_4d4938e3385a5fae6c2e54ba0c97f3e72bfc0d27736cbcb473fe4cc022167f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4d4938e3385a5fae6c2e54ba0c97f3e72bfc0d27736cbcb473fe4cc022167f6f->leave($__internal_4d4938e3385a5fae6c2e54ba0c97f3e72bfc0d27736cbcb473fe4cc022167f6f_prof);

    }

    // line 171
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_6328dfc8ba36e75e5c19f419f489a0be8d17ce87e1ed9b18b319eca4c656ddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6328dfc8ba36e75e5c19f419f489a0be8d17ce87e1ed9b18b319eca4c656ddc3->enter($__internal_6328dfc8ba36e75e5c19f419f489a0be8d17ce87e1ed9b18b319eca4c656ddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6328dfc8ba36e75e5c19f419f489a0be8d17ce87e1ed9b18b319eca4c656ddc3->leave($__internal_6328dfc8ba36e75e5c19f419f489a0be8d17ce87e1ed9b18b319eca4c656ddc3_prof);

    }

    // line 176
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_25dd09e0a98b9d5a88c819be5a9e9d0336209ec8ae8290f72846d3976398833b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dd09e0a98b9d5a88c819be5a9e9d0336209ec8ae8290f72846d3976398833b->enter($__internal_25dd09e0a98b9d5a88c819be5a9e9d0336209ec8ae8290f72846d3976398833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 177
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_25dd09e0a98b9d5a88c819be5a9e9d0336209ec8ae8290f72846d3976398833b->leave($__internal_25dd09e0a98b9d5a88c819be5a9e9d0336209ec8ae8290f72846d3976398833b_prof);

    }

    // line 180
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_376614a633fb54851ad07e0eb3e1a3eed5f6f2f9d011f7923afb2c7b6ec6ff56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376614a633fb54851ad07e0eb3e1a3eed5f6f2f9d011f7923afb2c7b6ec6ff56->enter($__internal_376614a633fb54851ad07e0eb3e1a3eed5f6f2f9d011f7923afb2c7b6ec6ff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_376614a633fb54851ad07e0eb3e1a3eed5f6f2f9d011f7923afb2c7b6ec6ff56->leave($__internal_376614a633fb54851ad07e0eb3e1a3eed5f6f2f9d011f7923afb2c7b6ec6ff56_prof);

    }

    // line 185
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_724e9f568cc02db2fca07e781782cfed918f2b6c441457d3704f830eddbdbb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724e9f568cc02db2fca07e781782cfed918f2b6c441457d3704f830eddbdbb48->enter($__internal_724e9f568cc02db2fca07e781782cfed918f2b6c441457d3704f830eddbdbb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 186
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 187
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_724e9f568cc02db2fca07e781782cfed918f2b6c441457d3704f830eddbdbb48->leave($__internal_724e9f568cc02db2fca07e781782cfed918f2b6c441457d3704f830eddbdbb48_prof);

    }

    // line 190
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d7df28a5bdc26e9cba6a9342f22666489fd2a4ad68947bdae1d82e947ad9ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7df28a5bdc26e9cba6a9342f22666489fd2a4ad68947bdae1d82e947ad9ffac->enter($__internal_d7df28a5bdc26e9cba6a9342f22666489fd2a4ad68947bdae1d82e947ad9ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 191
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 192
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_d7df28a5bdc26e9cba6a9342f22666489fd2a4ad68947bdae1d82e947ad9ffac->leave($__internal_d7df28a5bdc26e9cba6a9342f22666489fd2a4ad68947bdae1d82e947ad9ffac_prof);

    }

    // line 195
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_b76dcace41bf0b6618caedc7c644111101ade8c9e3d068271b5544125a94eba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76dcace41bf0b6618caedc7c644111101ade8c9e3d068271b5544125a94eba1->enter($__internal_b76dcace41bf0b6618caedc7c644111101ade8c9e3d068271b5544125a94eba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 196
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 197
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b76dcace41bf0b6618caedc7c644111101ade8c9e3d068271b5544125a94eba1->leave($__internal_b76dcace41bf0b6618caedc7c644111101ade8c9e3d068271b5544125a94eba1_prof);

    }

    // line 200
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_e8c3cb31a7fb2742c7f2ccb9ffa6132bd27b4764370853cc6c128ac34f6a7b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c3cb31a7fb2742c7f2ccb9ffa6132bd27b4764370853cc6c128ac34f6a7b62->enter($__internal_e8c3cb31a7fb2742c7f2ccb9ffa6132bd27b4764370853cc6c128ac34f6a7b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 201
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 202
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e8c3cb31a7fb2742c7f2ccb9ffa6132bd27b4764370853cc6c128ac34f6a7b62->leave($__internal_e8c3cb31a7fb2742c7f2ccb9ffa6132bd27b4764370853cc6c128ac34f6a7b62_prof);

    }

    // line 205
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_90be11d53f83c32ef392fd5fb5d239bff23c507a35648ce07266e2199958b655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90be11d53f83c32ef392fd5fb5d239bff23c507a35648ce07266e2199958b655->enter($__internal_90be11d53f83c32ef392fd5fb5d239bff23c507a35648ce07266e2199958b655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 206
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 207
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_90be11d53f83c32ef392fd5fb5d239bff23c507a35648ce07266e2199958b655->leave($__internal_90be11d53f83c32ef392fd5fb5d239bff23c507a35648ce07266e2199958b655_prof);

    }

    // line 210
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8f61f24ade197165969bfbdcd245c054f14e4e398e945b9069af8497d1f01e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f61f24ade197165969bfbdcd245c054f14e4e398e945b9069af8497d1f01e63->enter($__internal_8f61f24ade197165969bfbdcd245c054f14e4e398e945b9069af8497d1f01e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 211
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 212
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 213
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 214
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 215
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 218
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 221
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_8f61f24ade197165969bfbdcd245c054f14e4e398e945b9069af8497d1f01e63->leave($__internal_8f61f24ade197165969bfbdcd245c054f14e4e398e945b9069af8497d1f01e63_prof);

    }

    // line 224
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_4f1d5cfbe79df91493070109ed7d46a6509f0bc6c425112f9f3c3fa2a93e920a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1d5cfbe79df91493070109ed7d46a6509f0bc6c425112f9f3c3fa2a93e920a->enter($__internal_4f1d5cfbe79df91493070109ed7d46a6509f0bc6c425112f9f3c3fa2a93e920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 225
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 226
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_4f1d5cfbe79df91493070109ed7d46a6509f0bc6c425112f9f3c3fa2a93e920a->leave($__internal_4f1d5cfbe79df91493070109ed7d46a6509f0bc6c425112f9f3c3fa2a93e920a_prof);

    }

    // line 229
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_2a691e6f6e7c74f157c5fc94d83625c949896334a2b91ef0aa9b4ace33caa2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a691e6f6e7c74f157c5fc94d83625c949896334a2b91ef0aa9b4ace33caa2ad->enter($__internal_2a691e6f6e7c74f157c5fc94d83625c949896334a2b91ef0aa9b4ace33caa2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 230
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 231
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_2a691e6f6e7c74f157c5fc94d83625c949896334a2b91ef0aa9b4ace33caa2ad->leave($__internal_2a691e6f6e7c74f157c5fc94d83625c949896334a2b91ef0aa9b4ace33caa2ad_prof);

    }

    // line 236
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_357ba21355e34b5fcb1e58b30bcddf8e630aa4231895cc95c83e2581e4af73af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357ba21355e34b5fcb1e58b30bcddf8e630aa4231895cc95c83e2581e4af73af->enter($__internal_357ba21355e34b5fcb1e58b30bcddf8e630aa4231895cc95c83e2581e4af73af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 237
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 238
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 239
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 241
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 242
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 244
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 245
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 246
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 247
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 248
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 251
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 254
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "</label>
    ";
            // line 255
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 256
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 257
                echo "      <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
         title=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
    ";
            }
        }
        
        $__internal_357ba21355e34b5fcb1e58b30bcddf8e630aa4231895cc95c83e2581e4af73af->leave($__internal_357ba21355e34b5fcb1e58b30bcddf8e630aa4231895cc95c83e2581e4af73af_prof);

    }

    // line 263
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_fc53a5aefcbef1b66e492bb0d549a8cc135c135d480d2b777e74963c704e1a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc53a5aefcbef1b66e492bb0d549a8cc135c135d480d2b777e74963c704e1a07->enter($__internal_fc53a5aefcbef1b66e492bb0d549a8cc135c135d480d2b777e74963c704e1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_fc53a5aefcbef1b66e492bb0d549a8cc135c135d480d2b777e74963c704e1a07->leave($__internal_fc53a5aefcbef1b66e492bb0d549a8cc135c135d480d2b777e74963c704e1a07_prof);

    }

    // line 267
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_424acc3def0a76e1213537cba6841bc5062866e5b18bd76512eebcdebaf8eb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424acc3def0a76e1213537cba6841bc5062866e5b18bd76512eebcdebaf8eb94->enter($__internal_424acc3def0a76e1213537cba6841bc5062866e5b18bd76512eebcdebaf8eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 272
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_424acc3def0a76e1213537cba6841bc5062866e5b18bd76512eebcdebaf8eb94->leave($__internal_424acc3def0a76e1213537cba6841bc5062866e5b18bd76512eebcdebaf8eb94_prof);

    }

    // line 275
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4f57d551903bd18a21d4b285d3ac5aae1842b8cb63aee354b41894dceacda20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f57d551903bd18a21d4b285d3ac5aae1842b8cb63aee354b41894dceacda20e->enter($__internal_4f57d551903bd18a21d4b285d3ac5aae1842b8cb63aee354b41894dceacda20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 276
        echo "<div>";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 280
        echo "</div>";
        
        $__internal_4f57d551903bd18a21d4b285d3ac5aae1842b8cb63aee354b41894dceacda20e->leave($__internal_4f57d551903bd18a21d4b285d3ac5aae1842b8cb63aee354b41894dceacda20e_prof);

    }

    // line 283
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a109fe23f17069c53da18bd8ec720052189892379da7a2c24f6848b4f6ed3d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a109fe23f17069c53da18bd8ec720052189892379da7a2c24f6848b4f6ed3d24->enter($__internal_a109fe23f17069c53da18bd8ec720052189892379da7a2c24f6848b4f6ed3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 284
        echo "<div>";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 286
        echo "</div>";
        
        $__internal_a109fe23f17069c53da18bd8ec720052189892379da7a2c24f6848b4f6ed3d24->leave($__internal_a109fe23f17069c53da18bd8ec720052189892379da7a2c24f6848b4f6ed3d24_prof);

    }

    // line 289
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e48ab516e72a27eeb31318948deb5fdd69082c302ef5275d10ee19e59d2bb5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48ab516e72a27eeb31318948deb5fdd69082c302ef5275d10ee19e59d2bb5f5->enter($__internal_e48ab516e72a27eeb31318948deb5fdd69082c302ef5275d10ee19e59d2bb5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_e48ab516e72a27eeb31318948deb5fdd69082c302ef5275d10ee19e59d2bb5f5->leave($__internal_e48ab516e72a27eeb31318948deb5fdd69082c302ef5275d10ee19e59d2bb5f5_prof);

    }

    // line 295
    public function block_form($context, array $blocks = array())
    {
        $__internal_1b5c73cbc0830a876ddc21755ec6188cd2668376ff36e3ffead1bec2021bc96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5c73cbc0830a876ddc21755ec6188cd2668376ff36e3ffead1bec2021bc96f->enter($__internal_1b5c73cbc0830a876ddc21755ec6188cd2668376ff36e3ffead1bec2021bc96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 296
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 298
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_1b5c73cbc0830a876ddc21755ec6188cd2668376ff36e3ffead1bec2021bc96f->leave($__internal_1b5c73cbc0830a876ddc21755ec6188cd2668376ff36e3ffead1bec2021bc96f_prof);

    }

    // line 301
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_53ae481d0b21a5b95aef4a1814158d94c75269a8e7853fbacd3542d36b6553d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ae481d0b21a5b95aef4a1814158d94c75269a8e7853fbacd3542d36b6553d4->enter($__internal_53ae481d0b21a5b95aef4a1814158d94c75269a8e7853fbacd3542d36b6553d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 302
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 303
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 304
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 306
            $context["form_method"] = "POST";
        }
        // line 308
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 309
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 310
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 311
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_53ae481d0b21a5b95aef4a1814158d94c75269a8e7853fbacd3542d36b6553d4->leave($__internal_53ae481d0b21a5b95aef4a1814158d94c75269a8e7853fbacd3542d36b6553d4_prof);

    }

    // line 315
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b2b45c0e040fbe5130903884a4cbf22fab52024382f7d437fa39cf92fc6c83b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b45c0e040fbe5130903884a4cbf22fab52024382f7d437fa39cf92fc6c83b8->enter($__internal_b2b45c0e040fbe5130903884a4cbf22fab52024382f7d437fa39cf92fc6c83b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 316
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 317
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 319
        echo "</form>";
        
        $__internal_b2b45c0e040fbe5130903884a4cbf22fab52024382f7d437fa39cf92fc6c83b8->leave($__internal_b2b45c0e040fbe5130903884a4cbf22fab52024382f7d437fa39cf92fc6c83b8_prof);

    }

    // line 322
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_6a92f5a3f8ec951bf56e2453d94727efb8b4211c9b0cd29a94545f65c91708b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a92f5a3f8ec951bf56e2453d94727efb8b4211c9b0cd29a94545f65c91708b9->enter($__internal_6a92f5a3f8ec951bf56e2453d94727efb8b4211c9b0cd29a94545f65c91708b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 323
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_6a92f5a3f8ec951bf56e2453d94727efb8b4211c9b0cd29a94545f65c91708b9->leave($__internal_6a92f5a3f8ec951bf56e2453d94727efb8b4211c9b0cd29a94545f65c91708b9_prof);

    }

    // line 326
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_888ef207c3fa7f010016cba29dd7ff446cbacc2edce0c113c74949654a82ca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888ef207c3fa7f010016cba29dd7ff446cbacc2edce0c113c74949654a82ca82->enter($__internal_888ef207c3fa7f010016cba29dd7ff446cbacc2edce0c113c74949654a82ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 327
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 328
            echo "<ul>";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 330
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "</ul>";
        }
        
        $__internal_888ef207c3fa7f010016cba29dd7ff446cbacc2edce0c113c74949654a82ca82->leave($__internal_888ef207c3fa7f010016cba29dd7ff446cbacc2edce0c113c74949654a82ca82_prof);

    }

    // line 336
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_0883da729a7b4646956ee26f61ab7075e19f58ae1b69d0a74316e4f284e0bafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0883da729a7b4646956ee26f61ab7075e19f58ae1b69d0a74316e4f284e0bafc->enter($__internal_0883da729a7b4646956ee26f61ab7075e19f58ae1b69d0a74316e4f284e0bafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 338
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 339
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0883da729a7b4646956ee26f61ab7075e19f58ae1b69d0a74316e4f284e0bafc->leave($__internal_0883da729a7b4646956ee26f61ab7075e19f58ae1b69d0a74316e4f284e0bafc_prof);

    }

    // line 346
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_055fc05701d6079d37b10766c135361e1be85569bc54a600d43f4f7cf5689bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055fc05701d6079d37b10766c135361e1be85569bc54a600d43f4f7cf5689bcb->enter($__internal_055fc05701d6079d37b10766c135361e1be85569bc54a600d43f4f7cf5689bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 348
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_055fc05701d6079d37b10766c135361e1be85569bc54a600d43f4f7cf5689bcb->leave($__internal_055fc05701d6079d37b10766c135361e1be85569bc54a600d43f4f7cf5689bcb_prof);

    }

    // line 352
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_e477e5b5c8abd1dbb2b6764315312c4e1e5269c484790d1c641bc9cdcbd88c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e477e5b5c8abd1dbb2b6764315312c4e1e5269c484790d1c641bc9cdcbd88c9b->enter($__internal_e477e5b5c8abd1dbb2b6764315312c4e1e5269c484790d1c641bc9cdcbd88c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 353
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 354
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 355
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 356
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 358
            echo " ";
            // line 359
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 361
$context["attrvalue"] === true)) {
                // line 362
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 363
$context["attrvalue"] === false)) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e477e5b5c8abd1dbb2b6764315312c4e1e5269c484790d1c641bc9cdcbd88c9b->leave($__internal_e477e5b5c8abd1dbb2b6764315312c4e1e5269c484790d1c641bc9cdcbd88c9b_prof);

    }

    // line 369
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_0e47460d4c6d875dc8451059741e610a100a21d0ab389d1af2c047581a5e59d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e47460d4c6d875dc8451059741e610a100a21d0ab389d1af2c047581a5e59d8->enter($__internal_0e47460d4c6d875dc8451059741e610a100a21d0ab389d1af2c047581a5e59d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 370
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 372
            echo " ";
            // line 373
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 374
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 375
$context["attrvalue"] === true)) {
                // line 376
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 377
$context["attrvalue"] === false)) {
                // line 378
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0e47460d4c6d875dc8451059741e610a100a21d0ab389d1af2c047581a5e59d8->leave($__internal_0e47460d4c6d875dc8451059741e610a100a21d0ab389d1af2c047581a5e59d8_prof);

    }

    // line 383
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_874043bfb3e2f2bcc5027d4fbc6db6aef6a5167e5b1bb6582cfaeca62650d578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874043bfb3e2f2bcc5027d4fbc6db6aef6a5167e5b1bb6582cfaeca62650d578->enter($__internal_874043bfb3e2f2bcc5027d4fbc6db6aef6a5167e5b1bb6582cfaeca62650d578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 384
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 386
            echo " ";
            // line 387
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 389
$context["attrvalue"] === true)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 391
$context["attrvalue"] === false)) {
                // line 392
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_874043bfb3e2f2bcc5027d4fbc6db6aef6a5167e5b1bb6582cfaeca62650d578->leave($__internal_874043bfb3e2f2bcc5027d4fbc6db6aef6a5167e5b1bb6582cfaeca62650d578_prof);

    }

    // line 397
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_44de245a309394b006571b4a1d16d4ef6645c2341e255e4b6c4f6084a4e1f517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44de245a309394b006571b4a1d16d4ef6645c2341e255e4b6c4f6084a4e1f517->enter($__internal_44de245a309394b006571b4a1d16d4ef6645c2341e255e4b6c4f6084a4e1f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 399
            echo " ";
            // line 400
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 401
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 402
$context["attrvalue"] === true)) {
                // line 403
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 404
$context["attrvalue"] === false)) {
                // line 405
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_44de245a309394b006571b4a1d16d4ef6645c2341e255e4b6c4f6084a4e1f517->leave($__internal_44de245a309394b006571b4a1d16d4ef6645c2341e255e4b6c4f6084a4e1f517_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1313 => 405,  1311 => 404,  1306 => 403,  1304 => 402,  1299 => 401,  1297 => 400,  1295 => 399,  1291 => 398,  1285 => 397,  1270 => 392,  1268 => 391,  1263 => 390,  1261 => 389,  1256 => 388,  1254 => 387,  1252 => 386,  1248 => 385,  1239 => 384,  1233 => 383,  1218 => 378,  1216 => 377,  1211 => 376,  1209 => 375,  1204 => 374,  1202 => 373,  1200 => 372,  1196 => 371,  1190 => 370,  1184 => 369,  1169 => 364,  1167 => 363,  1162 => 362,  1160 => 361,  1155 => 360,  1153 => 359,  1151 => 358,  1147 => 357,  1143 => 356,  1139 => 355,  1135 => 354,  1129 => 353,  1123 => 352,  1112 => 348,  1108 => 347,  1102 => 346,  1090 => 339,  1088 => 338,  1084 => 337,  1078 => 336,  1070 => 332,  1062 => 330,  1058 => 329,  1056 => 328,  1054 => 327,  1048 => 326,  1039 => 323,  1033 => 322,  1026 => 319,  1023 => 317,  1021 => 316,  1015 => 315,  1005 => 311,  1003 => 310,  982 => 309,  977 => 308,  974 => 306,  971 => 304,  969 => 303,  967 => 302,  961 => 301,  954 => 298,  952 => 297,  950 => 296,  944 => 295,  937 => 290,  931 => 289,  924 => 286,  922 => 285,  920 => 284,  914 => 283,  907 => 280,  905 => 279,  903 => 278,  901 => 277,  899 => 276,  893 => 275,  886 => 272,  880 => 267,  869 => 263,  858 => 258,  853 => 257,  850 => 256,  848 => 255,  830 => 254,  826 => 251,  823 => 248,  822 => 247,  821 => 246,  819 => 245,  816 => 244,  813 => 242,  810 => 241,  807 => 239,  805 => 238,  803 => 237,  797 => 236,  790 => 231,  788 => 230,  782 => 229,  775 => 226,  773 => 225,  767 => 224,  754 => 221,  750 => 218,  747 => 215,  746 => 214,  745 => 213,  743 => 212,  741 => 211,  735 => 210,  728 => 207,  726 => 206,  720 => 205,  713 => 202,  711 => 201,  705 => 200,  698 => 197,  696 => 196,  690 => 195,  682 => 192,  680 => 191,  674 => 190,  667 => 187,  665 => 186,  659 => 185,  652 => 182,  650 => 181,  644 => 180,  637 => 177,  631 => 176,  624 => 173,  622 => 172,  616 => 171,  609 => 168,  607 => 167,  601 => 165,  593 => 161,  583 => 160,  578 => 159,  576 => 158,  573 => 156,  571 => 155,  565 => 154,  557 => 150,  555 => 148,  554 => 147,  553 => 146,  552 => 145,  548 => 144,  545 => 142,  543 => 141,  537 => 140,  529 => 136,  527 => 135,  525 => 134,  523 => 133,  521 => 132,  517 => 131,  514 => 129,  512 => 128,  506 => 127,  489 => 124,  486 => 123,  480 => 122,  453 => 119,  450 => 118,  448 => 117,  442 => 116,  414 => 111,  411 => 110,  409 => 109,  406 => 107,  404 => 106,  402 => 105,  397 => 104,  395 => 103,  378 => 102,  372 => 101,  365 => 98,  363 => 97,  361 => 96,  355 => 93,  353 => 92,  351 => 91,  349 => 90,  347 => 89,  339 => 87,  336 => 86,  334 => 85,  327 => 84,  324 => 82,  322 => 81,  316 => 80,  309 => 77,  303 => 75,  301 => 74,  297 => 73,  293 => 72,  287 => 71,  279 => 67,  276 => 65,  274 => 64,  268 => 63,  257 => 60,  255 => 59,  249 => 58,  242 => 55,  239 => 53,  237 => 52,  231 => 51,  224 => 48,  222 => 47,  220 => 46,  217 => 44,  215 => 43,  211 => 42,  205 => 41,  188 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 397,  150 => 383,  148 => 369,  146 => 352,  144 => 346,  141 => 343,  139 => 336,  137 => 326,  135 => 322,  133 => 315,  131 => 301,  129 => 295,  127 => 289,  125 => 283,  123 => 275,  121 => 267,  119 => 263,  117 => 236,  115 => 229,  113 => 224,  111 => 210,  109 => 205,  107 => 200,  105 => 195,  103 => 190,  101 => 185,  99 => 180,  97 => 176,  95 => 171,  93 => 165,  91 => 154,  89 => 140,  87 => 127,  85 => 122,  83 => 116,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
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
{# Widgets #}

{%- block form_widget -%}
  {% if compound %}
    {{- block('form_widget_compound') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {%- set type = type|default('text') -%}
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
  <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
      {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
  </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
  {% if prototype is defined %}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
  {% endif %}
  {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
  <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
  {% if expanded %}
    {{- block('choice_widget_expanded') -}}
  {% else %}
    {{- block('choice_widget_collapsed') -}}
  {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      {{- form_widget(child) -}}
      {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
  </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} data-toggle=\"select2\">
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
    {%- endif -%}
    {%- if preferred_choices|length > 0 -%}
      {% set options = preferred_choices %}
      {{- block('choice_widget_options') -}}
      {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">{{ separator }}</option>
      {%- endif -%}
    {%- endif -%}
    {%- set options = choices -%}
    {{- block('choice_widget_options') -}}
  </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
  {% for group_label, choice in options %}
    {%- if choice is iterable -%}
      <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label }}\">
        {% set options = choice %}
        {{- block('choice_widget_options') -}}
      </optgroup>
    {%- else -%}
      {% set attr = choice.attr %}
      <option
        value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label }}</option>
    {%- endif -%}
  {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date) -}}
      {{- form_widget(form.time) -}}
    </div>
  {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw -}}
    </div>
  {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
    <div {{ block('widget_container_attributes') }}>
      {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
    </div>
  {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
  {# type=\"number\" doesn't work with floats #}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
  {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
  {%- set type = type|default('search') -%}
  {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
  {%- set type = type|default('hidden') -%}
  {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
        '%name%': name,
        '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}</label>
    {% if label_attr['tooltip'] is defined %}
      {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
      <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr['tooltip'] }}\"></i>
    {% endif %}
  {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
  <div>
    {{- form_label(form) -}}
    {{- form_errors(form) -}}
    {{- form_widget(form) -}}
  </div>
{%- endblock form_row -%}

{%- block button_row -%}
  <div>
    {{- form_widget(form) -}}
  </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
  {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
  {{ form_start(form) }}
  {{- form_widget(form) -}}
  {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
  {%- if errors|length > 0 -%}
    <ul>
      {%- for error in errors -%}
        <li>{{ error.message }}</li>
      {%- endfor -%}
    </ul>
  {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
  {% for child in form -%}
    {% if not child.rendered %}
      {{- form_row(child) -}}
    {% endif %}
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
