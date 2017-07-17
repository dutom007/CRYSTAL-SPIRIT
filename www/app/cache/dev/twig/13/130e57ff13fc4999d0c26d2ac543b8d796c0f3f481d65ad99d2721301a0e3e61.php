<?php

/* PrestaShopBundle:Admin\Product:form.html.twig */
class __TwigTemplate_768413cad03dfc5318d5687ae141dcdd25bd21d52f34217ac740fa464c7fa867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:form.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            '__internal_37911238d052a378f52365963647e6d63f6aae86369d443051bdaf9f8c7d8ae7' => array($this, 'block___internal_37911238d052a378f52365963647e6d63f6aae86369d443051bdaf9f8c7d8ae7'),
            '__internal_1ca1b23fa4bbe4f882910e431976f462e7101a93b19de6db3438acf9ce220d9c' => array($this, 'block___internal_1ca1b23fa4bbe4f882910e431976f462e7101a93b19de6db3438acf9ce220d9c'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d87c5a754602e3fd10a74c35a026b74cb02811d838828f4a2b0437bbb2921b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d87c5a754602e3fd10a74c35a026b74cb02811d838828f4a2b0437bbb2921b->enter($__internal_67d87c5a754602e3fd10a74c35a026b74cb02811d838828f4a2b0437bbb2921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:form.html.twig"));

        // line 1223
        $context["js_translatable"] = twig_array_merge(array("Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", array(), "Admin.Catalog.Notification")),         // line 1225
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 1227
        $context["js_translatable"] = twig_array_merge(array("Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", array(), "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", array(), "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", array(), "Admin.Notifications.Error"), array("[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}")), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", array(), "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", array(), "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", array(), "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", array(), "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", array(), "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", array(), "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", array(), "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", array(), "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", array(), "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1244
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1245
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array"))),         // line 1246
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d87c5a754602e3fd10a74c35a026b74cb02811d838828f4a2b0437bbb2921b->leave($__internal_67d87c5a754602e3fd10a74c35a026b74cb02811d838828f4a2b0437bbb2921b_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_db58169da2fee69beeb0cbf2c9e89b6d5ecb4e6b44a8d4547b603a839275fa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db58169da2fee69beeb0cbf2c9e89b6d5ecb4e6b44a8d4547b603a839275fa14->enter($__internal_db58169da2fee69beeb0cbf2c9e89b6d5ecb4e6b44a8d4547b603a839275fa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row\" novalidate=\"novalidate\">

    ";
        // line 31
        if ( !($context["editable"] ?? $this->getContext($context, "editable"))) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 32
        echo "    ";
        // line 33
        echo "    <div class=\"product-header\">
      ";
        // line 34
        if (($context["is_multishop_context"] ?? $this->getContext($context, "is_multishop_context"))) {
            // line 35
            echo "        <div class=\"col-md-12\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
          </div>
        </div>
      ";
        }
        // line 41
        echo "
      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input ";
        // line 44
        echo ((($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) ? ("friendly-url-force-update") : (""));
        echo "\" id=\"form_step1_names\">
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "name", array()), 'widget');
        echo "
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), 'widget');
        echo "
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"";
        // line 53
        echo (((twig_length_filter($this->env, ($context["languages"] ?? $this->getContext($context, "languages"))) == 1)) ? ("hide") : (""));
        echo "\">
              <select id=\"form_switch_language\" class=\"form-control\" data-toggle=\"select2\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 56
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "\" ";
            if ((($context["default_language_iso"] ?? $this->getContext($context, "default_language_iso")) == $this->getAttribute($context["language"], "iso_code", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "              </select>
            </div>
          </div>
          <div class=\"toolbar col-lg-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["stats_link"] ?? $this->getContext($context, "stats_link")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", array(), "Admin.Global"), "html", null, true);
        echo "\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", array("limit" => "last", "offset" => "last", "view" => "quicknav")), "html", null, true);
        echo "\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["help_link"] ?? $this->getContext($context, "help_link")), "html", null, true);
        echo "\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "name", array()), 'errors');
        echo "
            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), 'errors');
        echo "
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
    </div>

    <div class=\"col-md-10 col-md-offset-1\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
      </div>
    </div>

    ";
        // line 110
        echo "    <div id=\"form-loading\" class=\"col-md-10 col-md-offset-1\">
      <div class=\"tabs js-tabs\">
        <div class=\"arrow js-arrow left-arrow pull-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic settings", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pricing", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Options", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
          ";
        // line 122
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 123
            echo "            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</a></li>
          ";
        }
        // line 125
        echo "        </ul>
        <div class=\"arrow js-arrow right-arrow visible pull-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 133
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 140
        echo "                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "inputPackItems", array()), 'errors');
        echo "
                      ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "inputPackItems", array()), 'widget');
        echo "
                    </div>

                    <div id=\"product-images-container\" class=\"m-b-2\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_upload", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\"
                           url-position=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_positions");
        echo "\"
                           data-max-size=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ATTACHMENT_MAXIMUM_SIZE"), "html", null, true);
        echo "\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Drop images here", array(), "array"), "html", null, true);
        echo "<br/>
                            <a>";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "or select files", array(), "array"), "html", null, true);
        echo "</a><br/>
                            <small>
                                ";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "files recommandations", array(), "array"), "html", null, true);
        echo "<br/>
                                ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "files recommandations2", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </div>
                        ";
        // line 163
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "images", array(), "any", true, true)) {
            // line 164
            echo "                            ";
            if (($context["editable"] ?? $this->getContext($context, "editable"))) {
                // line 165
                echo "                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            ";
            }
            // line 169
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 170
                echo "                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\"
                                 url-delete=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_delete", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                                 url-update=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_form", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "base_image_url", array()), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "format", array()), "html", null, true);
                echo "');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              ";
                // line 184
                if ($this->getAttribute($context["image"], "cover", array())) {
                    // line 185
                    echo "                                <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>
                              ";
                }
                // line 187
                echo "                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                        ";
        }
        // line 190
        echo "                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-xs-center col-md-12\">
                        <span class=\"expand\">";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                        <span class=\"compress\">";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View less", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                      </div>

                    </div>

                    <ul class=\"nav nav-tabs bordered\">
                      <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
                      <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
                    </ul>

                    <div class=\"tab-content bordered\">
                      <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                        ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "description_short", array()), 'widget');
        echo "
                      </div>
                      <div class=\"tab-pane panel panel-default \" id=\"description\">
                        ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "description", array()), 'widget');
        echo "
                      </div>
                    </div>
\t\t\t\t\t\t<!-- CUSTOM FIELD  -->
\t\t\t\t\t<div class=\"m-b-1 m-t-1\">
\t\t\t\t\t\t<h2>Custom TVA</h2>
\t\t\t\t\t\t";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "custom_field", array()), 'widget');
        echo "
\t\t\t\t\t</div>
                    <div id=\"features\" class=\"m-b-1 m-t-1\">
                      <div id=\"features-content\" class=\"content ";
        // line 220
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array())) == 0)) ? ("hide") : (""));
        echo "\">
                        <h2>";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()), 'errors');
        echo "
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"";
        // line 225
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_37911238d052a378f52365963647e6d63f6aae86369d443051bdaf9f8c7d8ae7", $context, $blocks));
        // line 227
        echo "\"
                        >
                          ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 230
            echo "                            ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $context["feature"]));
            echo "
                          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-primary-outline sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> ";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a feature", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"m-b-1\">
                      ";
        // line 242
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "id_manufacturer", array())));
        echo "
                    </div>

                    <div id=\"related-product\" class=\"m-b-1\">
                      ";
        // line 246
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "related_products", array())));
        echo "
                    </div>

                  </div>

                  ";
        // line 252
        echo "                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          ";
        // line 257
        if (($context["is_combination_active"] ?? $this->getContext($context, "is_combination_active"))) {
            // line 258
            echo "                            <div class=\"form-group\" id=\"show_variations_selector\">
                              <h2>
                                ";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" ";
            // line 266
            if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Simple product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" ";
            // line 272
            if (($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product with combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    ";
            // line 278
            echo "                                    ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Combinations[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive p-x-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                                  </span>
                                </div>
                              </div>
                            </div>
                          ";
        }
        // line 284
        echo "
                          <div class=\"form-group\">
                            <h2>
                              ";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your reference code for this product. Allowed special characters: .-_#.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            ";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "reference", array()), 'errors');
        echo "
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "reference", array()), 'widget');
        echo "
                              </div>
                            </div>
                          </div>

                          ";
        // line 299
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 300
            echo "                            <div class=\"form-group\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                ";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many products should be available for sale?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              ";
            // line 306
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "qty_0_shortcut", array()), 'errors');
            echo "
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  ";
            // line 309
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "qty_0_shortcut", array()), 'widget');
            echo "
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                ";
            // line 314
            echo "                                ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Quantities[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive p-x-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                              </span>
                            </div>
                          ";
        }
        // line 318
        echo "
                          <div class=\"form-group\">
                            <h2>
                              ";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 328
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_shortcut", array()), 'widget');
        echo "
                                ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_ttc_shortcut", array()), 'widget');
        echo "
                                ";
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_ttc_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-12 m-t-1\">
                                <label class=\"form-control-label\">";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin/Product:renderField", array("productId" => ($context["id_product"] ?? $this->getContext($context, "id_product")), "step" => "step2", "fieldName" => "id_tax_rules_group")));
        echo "
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  ";
        // line 343
        echo "                                  ";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Pricing[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').tab('show');\" class=\"btn sensitive p-x-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
        echo "
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group\">
                            ";
        // line 359
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form-categories.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "productId" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 371
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"";
        // line 379
        if ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), "vars", array()), "value", array()) != "0"))) {
            echo "display: none;";
        }
        echo "\">
                      <h2>";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          ";
        // line 383
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 384
            echo "                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">";
            // line 385
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                              ";
            // line 386
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), 'errors');
            echo "
                              ";
            // line 387
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), 'widget');
            echo "
                            </div>
                          ";
        }
        // line 390
        echo "                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">";
        // line 391
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 394
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), 'errors');
        echo "
                            ";
        // line 395
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", array("idProduct" => 1));
        echo "\" data-action-remove=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", array("idProduct" => 1));
        echo "\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            ";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "is_virtual_file", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        ";
        // line 415
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), 'errors');
        echo "
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "file", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", array("%maxUploadSize%" => ($context["max_upload_size"] ?? $this->getContext($context, "max_upload_size"))), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 421
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("hide") : ("show"));
        echo "\">
                              ";
        // line 422
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "file", array()), 'widget');
        echo "
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 424
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                              <a href=\"";
        // line 425
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "file_download_link", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "vars", array()), "value", array()), "file_download_link", array())) : ("")), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                              <a href=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 432
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 435
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), 'errors');
        echo "
                            ";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 441
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 444
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'errors');
        echo "
                            ";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'errors');
        echo "
                            ";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 459
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 462
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), 'errors');
        echo "
                            ";
        // line 463
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          ";
        // line 467
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "save", array()), 'widget');
        echo "
                        </div>
                      </div>
                    </div>

                    ";
        // line 472
        if ((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"))) {
            // line 473
            echo "                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 476
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), 'errors');
            echo "
                          ";
            // line 477
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), 'widget');
            echo "
                          ";
            // line 478
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) == "1")) {
                // line 479
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", array(), "Admin.Catalog.Notification"), "html", null, true);
                echo "
                          ";
            }
            // line 481
            echo "                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 483
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array())) {
                echo "display: none;";
            }
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 486
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), 'errors');
            echo "
                          ";
            // line 487
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), 'widget');
            echo "
                        </div>
                      </div>
                    ";
        }
        // line 491
        echo "                    ";
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 492
            echo "                      <div id=\"pack_stock_type\">
                        <h2>";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            ";
            // line 496
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), 'errors');
            echo "
                            ";
            // line 497
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), 'widget');
            echo "
                          </fieldset>
                        </div>
                      </div>
                    ";
        }
        // line 502
        echo "                    ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "form_combination_bulk" => ($context["formCombinations"] ?? $this->getContext($context, "formCombinations"))));
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 512
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  ";
        // line 517
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", array("form" => $this->getAttribute(        // line 518
($context["form"] ?? $this->getContext($context, "form")), "step4", array()), "asm_globally_activated" =>         // line 519
($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 520
($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 521
($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array()), "warehouses" =>         // line 522
($context["warehouses"] ?? $this->getContext($context, "warehouses"))));
        // line 523
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 531
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retail price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 548
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 549
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), 'errors');
        echo "
                        ";
        // line 550
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 553
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 554
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), 'errors');
        echo "
                        ";
        // line 555
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), 'widget');
        echo "
                      </div>

                      <div class=\"col-xl-4 col-lg-6 col-xl-offset-1 col-lg-offset-0\">
                        <label class=\"form-control-label\">
                          ";
        // line 560
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            ";
        // line 566
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), 'errors');
        echo "
                            ";
        // line 567
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), 'widget');
        echo "
                          </div>
                          <div class=\"col-md-6\">
                            ";
        // line 570
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unity", array()), 'errors');
        echo "
                            ";
        // line 571
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 ";
        // line 575
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <label class=\"form-control-label\">";
        // line 576
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 577
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), 'errors');
        echo "
                        ";
        // line 578
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">";
        // line 586
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 587
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), 'errors');
        echo "
                        ";
        // line 588
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\">
                          <i class=\"material-icons\">open_in_new</i> ";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage tax rules", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                      </div>
                      <div class=\"col-md-12 p-t-1\">
                        ";
        // line 597
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "on_sale", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info\" role=\"alert\">
                              <i class=\"material-icons\">help</i>
                              <p class=\"alert-text\">
                                ";
        // line 605
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", array(), "Admin.Catalog.Feature"), array("[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"));
        echo "
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cost price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">";
        // line 624
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), "vars", array()), "label", array());
        echo "</label>
                        ";
        // line 625
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), 'errors');
        echo "
                        ";
        // line 626
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific prices", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"m-b-2\">
                          <a class=\"btn btn-action m-b-2\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a specific price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table table-striped hide seo-table\" data=\"";
        // line 646
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_list", array("idProduct" => 1));
        echo "\" data-action-delete=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_specific_price", array("idSpecificPrice" => 1));
        echo "\">
                            <thead>
                            <tr>
                              <th>";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixed price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Period", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 665
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_add");
        echo "\">
                          ";
        // line 666
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specific_price", array()), "is_multishop_context" => ($context["is_multishop_context"] ?? $this->getContext($context, "is_multishop_context"))));
        echo "
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priority management", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                          ";
        // line 684
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_0", array()), 'errors');
        echo "
                          ";
        // line 685
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_0", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_1", array()), 'errors');
        echo "
                          ";
        // line 692
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_1", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 698
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_2", array()), 'errors');
        echo "
                          ";
        // line 699
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_2", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 705
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_3", array()), 'errors');
        echo "
                          ";
        // line 706
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_3", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        ";
        // line 710
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriorityToAll", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 722
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 728
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step5", array())));
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 737
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visibility", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where do you want your product to appear?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        ";
        // line 754
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "visibility", array()), 'errors');
        echo "
                        ";
        // line 755
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "visibility", array()), 'widget');
        echo "
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          ";
        // line 761
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), 'errors');
        echo "
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              ";
        // line 764
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "available_for_order", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              ";
        // line 767
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "show_price", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-5\">
                              ";
        // line 770
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "online_only", array()), 'widget');
        echo "
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 778
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "tags", array()), 'errors');
        echo "
                        ";
        // line 779
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "tags", array()), 'widget');
        echo "
                        <div class=\"alert alert-info alert-drop m-t-1\" role=\"alert\">
                          <i class=\"material-icons\">help</i>
                          <p class=\"alert-text\" data-title=\"";
        // line 782
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
        echo "\">
                            ";
        // line 783
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags are meant to help your customers find your products via the search bar.", array(), "Admin.Catalog.Help");
        echo "
                            <strong>";
        // line 784
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
        echo "</strong>
                          </p>
                        </div>
                        <div class=\"alert alert-info alert-down\" role=\"alert\">
                          <p class=\"alert-down-text\">
                            ";
        // line 789
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", array(), "Admin.Catalog.Help");
        echo "<br>
                            ";
        // line 790
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can manage tag aliases in the [1]Search section[/1].", array(), "Admin.Catalog.Help"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"));
        // line 795
        echo "
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 803
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Condition & References", array(), "Admin.Catalog.Feature");
        echo "</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 810
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 814
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), 'errors');
        echo "
                        ";
        // line 815
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        ";
        // line 819
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "show_condition", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 825
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISBN is used internationally to identify books and their various editions.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 829
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), 'errors');
        echo "
                        ";
        // line 830
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 834
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 838
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), 'errors');
        echo "
                        ";
        // line 839
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 845
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 849
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), 'errors');
        echo "
                        ";
        // line 850
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), 'widget');
        echo "
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"m-b-2\">
                          <h2>";
        // line 857
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                          <p class=\"subtitle\">";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customers can personalize the product by entering some text or by providing custom image files.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                          ";
        // line 859
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), 'errors');
        echo "
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      ";
        // line 861
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_1ca1b23fa4bbe4f882910e431976f462e7101a93b19de6db3438acf9ce220d9c", $context, $blocks));
        // line 863
        echo "\">
                            ";
        // line 864
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 865
            echo "                              <li>
                                ";
            // line 866
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $context["field"]));
            echo "
                              </li>
                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        echo "                          </ul>
                          <a href=\"#\" class=\"btn btn-action add\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a customization field", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <h2>";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attached files", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                        ";
        // line 882
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachments", array()), 'widget');
        echo "
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-action add m-b-1\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          ";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach a new file", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          ";
        // line 898
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), 'errors');
        echo "
                          <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 899
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "vars", array()), "attr", array()), "data-action", array(), "array"), "html", null, true);
        echo "\">
                            <div class=\"form-group\">";
        // line 900
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "file", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 901
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "name", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 902
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "description", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">
                              ";
        // line 904
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "add", array()), 'widget');
        echo "
                              ";
        // line 905
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "cancel", array()), 'widget');
        echo "
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        ";
        // line 914
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array())));
        echo "
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"";
        // line 918
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_supplier_refresh_product_supplier_combination_form", array("idProduct" => 1, "supplierIds" => 1)), "html", null, true);
        echo "\">
                        ";
        // line 919
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig", array("suppliers" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "suppliers", array()), "vars", array()), "value", array()), "form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array())));
        echo "
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 931
        echo "        ";
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 932
            echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    ";
            // line 939
            echo "                    <div class=\"col-md-12\">
                      ";
            // line 940
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
            // line 941
            echo "
                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          ";
            // line 944
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 945
                echo "                            <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">
                              <div>
                                <img class=\"top-logo\" src=\"";
                // line 947
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  ";
                // line 949
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                </h2>
                                <div class=\"text-ellipsis xsmall module-version\">
                                  ";
                // line 952
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                ";
                // line 956
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 960
            echo "                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>";
            // line 962
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            ";
            // line 964
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 965
                echo "                              <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 967
            echo "                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>";
            // line 973
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          ";
            // line 974
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                          ";
            // line 975
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"));
            echo "
                        </p>
                        <div class=\"row\">
                          ";
            // line 978
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 979
                echo "                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"";
                // line 982
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 984
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                  </h3>
                                  <div class=\"text-ellipsis xsmall module-version-author-grid\">
                                    ";
                // line 987
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  ";
                // line 991
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-primary-outline pull-xs-right\" data-target=\"module-";
                // line 995
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\">
                                      ";
                // line 996
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
                echo "
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1003
            echo "                        </div>
                      </div>

                      ";
            // line 1006
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 1007
                echo "                        <div
                          id=\"module_";
                // line 1008
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\"
                          class=\"module-render-container module-";
                // line 1009
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\"
                          style=\"display: none;\"
                        >
                          <div>
                            ";
                // line 1013
                echo $this->getAttribute($context["module"], "content", array());
                echo "
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1017
            echo "                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 1025
        echo "
      </div>

      ";
        // line 1028
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_product", array()), 'widget');
        echo "
      ";
        // line 1029
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    </div>
    ";
        // line 1033
        echo "    <div class=\"product-footer\">
      <div class=\"col-lg-5\">
        <a
          href=\"";
        // line 1036
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "delete", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\"
          class=\"btn btn-invisible btn-lg delete\"
          data-toggle=\"tooltip\"
          id=\"product_form_delete_btn\"
          title=\"";
        // line 1040
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          data-redirect=\"";
        // line 1045
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? $this->getContext($context, "preview_link")), "html", null, true);
        echo "\"
          data-url_deactive=\"";
        // line 1046
        echo twig_escape_filter($this->env, ($context["preview_link_deactivate"] ?? $this->getContext($context, "preview_link_deactivate")), "html", null, true);
        echo "\"
          target=\"_blank\"
          class=\"btn btn-tertiary btn-submit preview\"
          data-toggle=\"tooltip\"
          id=\"product_form_preview_btn\"
          title=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
         >
          ";
        // line 1053
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions"), "html", null, true);
        echo "
        </a>
        ";
        // line 1055
        if (($context["editable"] ?? $this->getContext($context, "editable"))) {
            // line 1056
            echo "        <h2 class=\"for-switch online-title\" ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"tooltip\"
            title=\"";
            // line 1057
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <h2 class=\"for-switch offline-title\" ";
            // line 1058
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"tooltip\"
            title=\"";
            // line 1059
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+0", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <input
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          ";
            // line 1066
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) ? ("checked=\"checked\"") : (""));
            echo "
        />
        ";
        }
        // line 1069
        echo "      </div>
      <div class=\"col-lg-6 text-lg-right\">
        ";
        // line 1071
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 1072
            echo "          <button
            type=\"button\"
            class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase duplicate\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"";
            // line 1076
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
            echo "\"
            data-toggle=\"tooltip\"
            title=\"";
            // line 1078
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\"
            >
            ";
            // line 1080
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
          </button>
        ";
        }
        // line 1083
        echo "        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase go-catalog\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1091
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase new-product\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"";
        // line 1097
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase\"
          value=\"";
        // line 1107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "\"
          data-toggle=\"tooltip\"
          title=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          />

          <div class=\"btn-group hide dropdown pull-right\">
            <div class=\"js-spinner spinner hide btn-primary-reverse onclick pull-left m-r-1\"></div>
            <button
             class=\"btn btn-primary js-btn-save\"
             type=\"submit\"
             >
              <span>";
        // line 1118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
            </button>
            <button
              class=\"btn btn-primary dropdown-toggle\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >

            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              ";
        // line 1130
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 1131
            echo "                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"";
            // line 1133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
            echo "\"
                >
                ";
            // line 1135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
                </a>
              ";
        }
        // line 1138
        echo "             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"";
        // line 1140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
              >
              ";
        // line 1142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"";
        // line 1146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
              >
              ";
        // line 1148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
            </a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 1154
        if ( !($context["editable"] ?? $this->getContext($context, "editable"))) {
            echo " </fieldset> ";
        }
        // line 1155
        echo "  </form>


  ";
        // line 1158
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:form.html.twig", "PrestaShopBundle:Admin\\Product:form.html.twig", 1158, "1081453043")->display(array_merge($context, array("id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Notifications.Warning"), "closable" => false, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", array(), "Admin.Global"), "class" => "btn btn-tertiary-outline btn-lg cancel"), 1 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", array(), "Admin.Global"), "class" => "btn btn-primary btn-lg continue")))));
        // line 1179
        echo "
";
        
        $__internal_db58169da2fee69beeb0cbf2c9e89b6d5ecb4e6b44a8d4547b603a839275fa14->leave($__internal_db58169da2fee69beeb0cbf2c9e89b6d5ecb4e6b44a8d4547b603a839275fa14_prof);

    }

    // line 225
    public function block___internal_37911238d052a378f52365963647e6d63f6aae86369d443051bdaf9f8c7d8ae7($context, array $blocks = array())
    {
        $__internal_aa38b7571bcd1869f3604227d9875b89a9525acd7586ce18dd862fdc917274db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa38b7571bcd1869f3604227d9875b89a9525acd7586ce18dd862fdc917274db->enter($__internal_aa38b7571bcd1869f3604227d9875b89a9525acd7586ce18dd862fdc917274db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_37911238d052a378f52365963647e6d63f6aae86369d443051bdaf9f8c7d8ae7"));

        // line 226
        echo "                            ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()), "vars", array()), "prototype", array())));
        echo "
                          ";
        
        $__internal_aa38b7571bcd1869f3604227d9875b89a9525acd7586ce18dd862fdc917274db->leave($__internal_aa38b7571bcd1869f3604227d9875b89a9525acd7586ce18dd862fdc917274db_prof);

    }

    // line 861
    public function block___internal_1ca1b23fa4bbe4f882910e431976f462e7101a93b19de6db3438acf9ce220d9c($context, array $blocks = array())
    {
        $__internal_98409e9cbf0fd89fed920eb3776c2be9804f62f6b194a6a25bf3e94860280b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98409e9cbf0fd89fed920eb3776c2be9804f62f6b194a6a25bf3e94860280b9d->enter($__internal_98409e9cbf0fd89fed920eb3776c2be9804f62f6b194a6a25bf3e94860280b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_1ca1b23fa4bbe4f882910e431976f462e7101a93b19de6db3438acf9ce220d9c"));

        // line 862
        echo "                                      ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), "vars", array()), "prototype", array())));
        echo "
                                      ";
        
        $__internal_98409e9cbf0fd89fed920eb3776c2be9804f62f6b194a6a25bf3e94860280b9d->leave($__internal_98409e9cbf0fd89fed920eb3776c2be9804f62f6b194a6a25bf3e94860280b9d_prof);

    }

    // line 1182
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2088a818c1cce9891d27da61bc283e67108a2eddd6957898fdd993df7083dfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2088a818c1cce9891d27da61bc283e67108a2eddd6957898fdd993df7083dfe1->enter($__internal_2088a818c1cce9891d27da61bc283e67108a2eddd6957898fdd993df7083dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1183
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2088a818c1cce9891d27da61bc283e67108a2eddd6957898fdd993df7083dfe1->leave($__internal_2088a818c1cce9891d27da61bc283e67108a2eddd6957898fdd993df7083dfe1_prof);

    }

    // line 1186
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47523e958edc7badca07bb45d1457adce02832f5d95bd9c4e46aafa8ff771937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47523e958edc7badca07bb45d1457adce02832f5d95bd9c4e46aafa8ff771937->enter($__internal_47523e958edc7badca07bb45d1457adce02832f5d95bd9c4e46aafa8ff771937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1187
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 1188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 1190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 1204
        echo twig_escape_filter($this->env, ($context["editable"] ?? $this->getContext($context, "editable")), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
        
        $__internal_47523e958edc7badca07bb45d1457adce02832f5d95bd9c4e46aafa8ff771937->leave($__internal_47523e958edc7badca07bb45d1457adce02832f5d95bd9c4e46aafa8ff771937_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2438 => 1204,  2431 => 1200,  2427 => 1199,  2423 => 1198,  2419 => 1197,  2415 => 1196,  2411 => 1195,  2407 => 1194,  2403 => 1193,  2399 => 1192,  2395 => 1191,  2391 => 1190,  2386 => 1188,  2381 => 1187,  2375 => 1186,  2365 => 1183,  2359 => 1182,  2349 => 862,  2343 => 861,  2333 => 226,  2327 => 225,  2319 => 1179,  2317 => 1158,  2312 => 1155,  2308 => 1154,  2299 => 1148,  2294 => 1146,  2287 => 1142,  2282 => 1140,  2278 => 1138,  2272 => 1135,  2267 => 1133,  2263 => 1131,  2261 => 1130,  2246 => 1118,  2234 => 1109,  2229 => 1107,  2220 => 1101,  2215 => 1099,  2210 => 1097,  2201 => 1091,  2196 => 1089,  2191 => 1087,  2185 => 1083,  2179 => 1080,  2174 => 1078,  2169 => 1076,  2163 => 1072,  2161 => 1071,  2157 => 1069,  2151 => 1066,  2139 => 1059,  2133 => 1058,  2127 => 1057,  2120 => 1056,  2118 => 1055,  2113 => 1053,  2108 => 1051,  2100 => 1046,  2096 => 1045,  2088 => 1040,  2081 => 1036,  2076 => 1033,  2070 => 1029,  2066 => 1028,  2061 => 1025,  2051 => 1017,  2041 => 1013,  2034 => 1009,  2030 => 1008,  2027 => 1007,  2023 => 1006,  2018 => 1003,  2005 => 996,  2001 => 995,  1994 => 991,  1985 => 987,  1979 => 984,  1972 => 982,  1967 => 979,  1963 => 978,  1957 => 975,  1953 => 974,  1949 => 973,  1941 => 967,  1930 => 965,  1926 => 964,  1921 => 962,  1917 => 960,  1907 => 956,  1898 => 952,  1892 => 949,  1885 => 947,  1879 => 945,  1875 => 944,  1870 => 941,  1868 => 940,  1865 => 939,  1857 => 932,  1854 => 931,  1840 => 919,  1836 => 918,  1829 => 914,  1817 => 905,  1813 => 904,  1808 => 902,  1804 => 901,  1800 => 900,  1796 => 899,  1792 => 898,  1786 => 895,  1770 => 882,  1766 => 881,  1762 => 880,  1751 => 872,  1746 => 869,  1729 => 866,  1726 => 865,  1709 => 864,  1706 => 863,  1704 => 861,  1699 => 859,  1695 => 858,  1691 => 857,  1681 => 850,  1677 => 849,  1672 => 847,  1667 => 845,  1658 => 839,  1654 => 838,  1649 => 836,  1644 => 834,  1637 => 830,  1633 => 829,  1628 => 827,  1623 => 825,  1614 => 819,  1607 => 815,  1603 => 814,  1598 => 812,  1593 => 810,  1583 => 803,  1573 => 795,  1571 => 790,  1567 => 789,  1559 => 784,  1555 => 783,  1551 => 782,  1545 => 779,  1541 => 778,  1537 => 777,  1527 => 770,  1521 => 767,  1515 => 764,  1509 => 761,  1500 => 755,  1496 => 754,  1487 => 748,  1483 => 747,  1471 => 737,  1460 => 728,  1452 => 722,  1438 => 710,  1431 => 706,  1427 => 705,  1418 => 699,  1414 => 698,  1405 => 692,  1401 => 691,  1392 => 685,  1388 => 684,  1384 => 683,  1376 => 678,  1371 => 676,  1358 => 666,  1354 => 665,  1344 => 658,  1340 => 657,  1336 => 656,  1332 => 655,  1328 => 654,  1324 => 653,  1320 => 652,  1316 => 651,  1312 => 650,  1308 => 649,  1300 => 646,  1295 => 644,  1285 => 637,  1280 => 635,  1268 => 626,  1264 => 625,  1260 => 624,  1253 => 620,  1248 => 618,  1232 => 605,  1221 => 597,  1214 => 593,  1210 => 592,  1203 => 588,  1199 => 587,  1195 => 586,  1184 => 578,  1180 => 577,  1176 => 576,  1170 => 575,  1163 => 571,  1159 => 570,  1153 => 567,  1149 => 566,  1142 => 562,  1137 => 560,  1129 => 555,  1125 => 554,  1121 => 553,  1115 => 550,  1111 => 549,  1107 => 548,  1096 => 540,  1091 => 538,  1082 => 531,  1073 => 523,  1071 => 522,  1070 => 521,  1069 => 520,  1068 => 519,  1067 => 518,  1066 => 517,  1059 => 512,  1046 => 502,  1038 => 497,  1034 => 496,  1028 => 493,  1025 => 492,  1022 => 491,  1015 => 487,  1011 => 486,  1003 => 483,  999 => 481,  993 => 479,  991 => 478,  987 => 477,  983 => 476,  978 => 473,  976 => 472,  968 => 467,  961 => 463,  957 => 462,  953 => 461,  948 => 459,  940 => 454,  936 => 453,  932 => 452,  927 => 450,  919 => 445,  915 => 444,  911 => 443,  906 => 441,  898 => 436,  894 => 435,  890 => 434,  885 => 432,  874 => 426,  868 => 425,  864 => 424,  859 => 422,  855 => 421,  851 => 420,  846 => 418,  840 => 415,  831 => 409,  824 => 405,  815 => 401,  806 => 395,  802 => 394,  798 => 393,  793 => 391,  790 => 390,  784 => 387,  780 => 386,  776 => 385,  773 => 384,  771 => 383,  765 => 380,  759 => 379,  749 => 371,  735 => 359,  722 => 349,  712 => 343,  705 => 338,  701 => 337,  695 => 334,  691 => 333,  687 => 332,  681 => 329,  677 => 328,  673 => 327,  666 => 323,  661 => 321,  656 => 318,  648 => 314,  641 => 309,  635 => 306,  630 => 304,  625 => 302,  621 => 300,  619 => 299,  611 => 294,  605 => 291,  600 => 289,  595 => 287,  590 => 284,  580 => 278,  573 => 273,  567 => 272,  559 => 267,  553 => 266,  546 => 262,  541 => 260,  537 => 258,  535 => 257,  528 => 252,  520 => 246,  513 => 242,  504 => 236,  498 => 232,  481 => 230,  464 => 229,  460 => 227,  458 => 225,  452 => 222,  448 => 221,  444 => 220,  438 => 217,  429 => 211,  423 => 208,  415 => 203,  411 => 202,  402 => 196,  398 => 195,  391 => 190,  388 => 189,  381 => 187,  375 => 185,  373 => 184,  359 => 175,  354 => 173,  350 => 172,  346 => 171,  343 => 170,  338 => 169,  332 => 165,  329 => 164,  327 => 163,  321 => 160,  317 => 159,  312 => 157,  308 => 156,  300 => 151,  296 => 150,  292 => 149,  284 => 144,  280 => 143,  275 => 140,  267 => 133,  258 => 125,  252 => 123,  250 => 122,  246 => 121,  242 => 120,  238 => 119,  234 => 118,  230 => 117,  226 => 116,  218 => 110,  211 => 105,  199 => 96,  195 => 95,  186 => 89,  179 => 85,  173 => 82,  166 => 78,  159 => 74,  153 => 71,  144 => 65,  136 => 62,  130 => 58,  115 => 56,  111 => 55,  106 => 53,  100 => 50,  95 => 48,  89 => 45,  85 => 44,  80 => 41,  73 => 37,  69 => 35,  67 => 34,  64 => 33,  62 => 32,  58 => 31,  53 => 28,  47 => 27,  40 => 25,  38 => 1246,  37 => 1245,  36 => 1244,  35 => 1227,  33 => 1225,  32 => 1223,  11 => 25,);
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

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    <div class=\"product-header\">
      {% if is_multishop_context %}
        <div class=\"col-md-12\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
          </div>
        </div>
      {% endif %}

      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input {{ 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
            {{ form_widget(form.step1.name) }}
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            {{ form_widget(form.step1.type_product) }}
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
              <select id=\"form_switch_language\" class=\"form-control\" data-toggle=\"select2\">
                {% for language in languages %}
                  <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %}selected=\"selected\"{% endif %}>{{ language.iso_code }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"toolbar col-lg-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"{{ help_link }}\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ form_errors(form.step1.name) }}
            {{ form_errors(form.step1.type_product) }}
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
    </div>

    <div class=\"col-md-10 col-md-offset-1\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    {# FORM TABS CONTAINER #}
    <div id=\"form-loading\" class=\"col-md-10 col-md-offset-1\">
      <div class=\"tabs js-tabs\">
        <div class=\"arrow js-arrow left-arrow pull-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">{{ 'Basic settings'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Pricing'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'SEO'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Options'|trans({}, 'Admin.Global') }}</a></li>
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Modules'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          {% endif %}
        </ul>
        <div class=\"arrow js-arrow right-arrow visible pull-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        {# STEP 1 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {# LEFT #}
                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      {{ form_errors(form.step1.inputPackItems) }}
                      {{ form_widget(form.step1.inputPackItems) }}
                    </div>

                    <div id=\"product-images-container\" class=\"m-b-2\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"{{ path('admin_product_image_upload', {'idProduct': id_product}) }}\"
                           url-position=\"{{ path('admin_product_image_positions') }}\"
                           data-max-size=\"{{ 'PS_ATTACHMENT_MAXIMUM_SIZE'|configuration }}\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            {{js_translatable['Drop images here']}}<br/>
                            <a>{{js_translatable['or select files']}}</a><br/>
                            <small>
                                {{js_translatable['files recommandations']}}<br/>
                                {{js_translatable['files recommandations2']}}
                            </small>
                        </div>
                        {% if form.step1.vars.value.images is defined %}
                            {% if editable %}
                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            {% endif %}
                          {% for image in form.step1.vars.value.images %}
                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"{{ image.id }}\"
                                 url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\"
                                 url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              {% if image.cover %}
                                <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                              {% endif %}
                            </div>
                          {% endfor %}
                        {% endif %}
                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-xs-center col-md-12\">
                        <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
                        <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
                      </div>

                    </div>

                    <ul class=\"nav nav-tabs bordered\">
                      <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
                      <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">{{ 'Description'|trans({}, 'Admin.Global') }}</a></li>
                    </ul>

                    <div class=\"tab-content bordered\">
                      <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                        {{ form_widget(form.step1.description_short) }}
                      </div>
                      <div class=\"tab-pane panel panel-default \" id=\"description\">
                        {{ form_widget(form.step1.description) }}
                      </div>
                    </div>
\t\t\t\t\t\t<!-- CUSTOM FIELD  -->
\t\t\t\t\t<div class=\"m-b-1 m-t-1\">
\t\t\t\t\t\t<h2>Custom TVA</h2>
\t\t\t\t\t\t{{ form_widget(form.step1.custom_field) }}
\t\t\t\t\t</div>
                    <div id=\"features\" class=\"m-b-1 m-t-1\">
                      <div id=\"features-content\" class=\"content {{ form.step1.features|length == 0 ? 'hide':'' }}\">
                        <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        {{ form_errors(form.step1.features) }}
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"{% filter escape %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': form.step1.features.vars.prototype }) }}
                          {% endfilter %}\"
                        >
                          {% for feature in form.step1.features %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': feature }) }}
                          {% endfor %}
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-primary-outline sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"m-b-1\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig', { 'form':form.step1.id_manufacturer }) }}
                    </div>

                    <div id=\"related-product\" class=\"m-b-1\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig', { 'form':form.step1.related_products }) }}
                    </div>

                  </div>

                  {# RIGHT #}
                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          {% if is_combination_active %}
                            <div class=\"form-group\" id=\"show_variations_selector\">
                              <h2>
                                {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                    {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                  </span>
                                </div>
                              </div>
                            </div>
                          {% endif %}

                          <div class=\"form-group\">
                            <h2>
                              {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            {{ form_errors(form.step6.reference) }}
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  {{ form_widget(form.step6.reference) }}
                              </div>
                            </div>
                          </div>

                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"form-group\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              {{ form_errors(form.step1.qty_0_shortcut) }}
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  {{ form_widget(form.step1.qty_0_shortcut) }}
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                              </span>
                            </div>
                          {% endif %}

                          <div class=\"form-group\">
                            <h2>
                              {{ \"Price\"|trans({}, 'Admin.Global') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_shortcut) }}
                                {{ form_errors(form.step1.price_shortcut) }}
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_ttc_shortcut) }}
                                {{ form_errors(form.step1.price_ttc_shortcut) }}
                              </div>
                              <div class=\"col-md-12 m-t-1\">
                                <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ render(controller('PrestaShopBundle:Admin/Product:renderField', {'productId': id_product, 'step': 'step2', 'fieldName': 'id_tax_rules_group' })) }}
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                  {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group\">
                            {{ include('PrestaShopBundle:Admin/Product/Include:form-categories.html.twig', { 'form': form.step1, 'productId': id_product }) }}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 2 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"{% if has_combinations or form.step3.depends_on_stock.vars.value != \"0\" %}display: none;{% endif %}\">
                      <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">{{ form.step3.qty_0.vars.label }}</label>
                              {{ form_errors(form.step3.qty_0) }}
                              {{ form_widget(form.step3.qty_0) }}
                            </div>
                          {% endif %}
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.minimal_quantity.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.minimal_quantity) }}
                            {{ form_widget(form.step3.minimal_quantity) }}
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': 1 }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': 1}) }}\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>{{ form.step3.virtual_product.vars.label }}</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            {{ form_widget(form.step3.virtual_product.is_virtual_file) }}
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        {{ form_errors(form.step3.virtual_product) }}
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.file.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'hide' : 'show' }}\">
                              {{ form_widget(form.step3.virtual_product.file) }}
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'show' : 'hide' }}\">
                              <a href=\"{{ form.step3.virtual_product.vars.value.file_download_link is defined ? form.step3.virtual_product.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                              <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': id_product}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.name.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.name) }}
                            {{ form_widget(form.step3.virtual_product.name) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_downloadable.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_downloadable) }}
                            {{ form_widget(form.step3.virtual_product.nb_downloadable) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.expiration_date.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.expiration_date) }}
                            {{ form_widget(form.step3.virtual_product.expiration_date) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_days.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_days) }}
                            {{ form_widget(form.step3.virtual_product.nb_days) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          {{ form_widget(form.step3.virtual_product.save) }}
                        </div>
                      </div>
                    </div>

                    {% if asm_globally_activated and form.step1.type_product.vars.value != \"2\" %}
                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.advanced_stock_management) }}
                          {{ form_widget(form.step3.advanced_stock_management) }}
                          {% if form.step1.type_product.vars.value == \"1\" %}
                            {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(form.step3.advanced_stock_management.vars.checked) %}display: none;{% endif %}\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.depends_on_stock) }}
                          {{ form_widget(form.step3.depends_on_stock) }}
                        </div>
                      </div>
                    {% endif %}
                    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                      <div id=\"pack_stock_type\">
                        <h2>{{ form.step3.pack_stock_type.vars.label }}</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            {{ form_errors(form.step3.pack_stock_type) }}
                            {{ form_widget(form.step3.pack_stock_type) }}
                          </fieldset>
                        </div>
                      </div>
                    {% endif %}
                    {{ include('PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig', {'form': form.step3, 'form_combination_bulk': formCombinations}) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 3 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  {{ include('PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig', {
                    'form' : form.step4,
                    'asm_globally_activated': asm_globally_activated,
                    'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                    'isChecked': form.step3.advanced_stock_management.vars.checked,
                    'warehouses': warehouses
                  }) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 4 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price.vars.label }}</label>
                        {{ form_errors(form.step2.price) }}
                        {{ form_widget(form.step2.price) }}
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price_ttc.vars.label }}</label>
                        {{ form_errors(form.step2.price_ttc) }}
                        {{ form_widget(form.step2.price_ttc) }}
                      </div>

                      <div class=\"col-xl-4 col-lg-6 col-xl-offset-1 col-lg-offset-0\">
                        <label class=\"form-control-label\">
                          {{ form.step2.unit_price.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unit_price) }}
                            {{ form_widget(form.step2.unit_price) }}
                          </div>
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unity) }}
                            {{ form_widget(form.step2.unity) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <label class=\"form-control-label\">{{ form.step2.ecotax.vars.label }}</label>
                        {{ form_errors(form.step2.ecotax) }}
                        {{ form_widget(form.step2.ecotax) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">{{ form.step2.id_tax_rules_group.vars.label }}</label>
                        {{ form_errors(form.step2.id_tax_rules_group) }}
                        {{ form_widget(form.step2.id_tax_rules_group) }}
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                          <i class=\"material-icons\">open_in_new</i> {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                      </div>
                      <div class=\"col-md-12 p-t-1\">
                        {{ form_widget(form.step2.on_sale) }}
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info\" role=\"alert\">
                              <i class=\"material-icons\">help</i>
                              <p class=\"alert-text\">
                                {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">{{ form.step2.wholesale_price.vars.label|raw }}</label>
                        {{ form_errors(form.step2.wholesale_price) }}
                        {{ form_widget(form.step2.wholesale_price) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"m-b-2\">
                          <a class=\"btn btn-action m-b-2\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table table-striped hide seo-table\" data=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\">
                            <thead>
                            <tr>
                              <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                          {{ include('PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig', {'form': form.step2.specific_price, 'is_multishop_context': is_multishop_context}) }}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                          {{ form_errors(form.step2.specificPricePriority_0) }}
                          {{ form_widget(form.step2.specificPricePriority_0) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_1) }}
                          {{ form_widget(form.step2.specificPricePriority_1) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_2) }}
                          {{ form_widget(form.step2.specificPricePriority_2) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_3) }}
                          {{ form_widget(form.step2.specificPricePriority_3) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        {{ form_widget(form.step2.specificPricePriorityToAll) }}
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 5 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {{ include('PrestaShopBundle:Admin/Product/Include:form_seo.html.twig', {'form' : form.step5}) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 6 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        {{ form_errors(form.step6.visibility) }}
                        {{ form_widget(form.step6.visibility) }}
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          {{ form_errors(form.step6.display_options) }}
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              {{ form_widget(form.step6.display_options.available_for_order) }}
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              {{ form_widget(form.step6.display_options.show_price) }}
                            </div>
                            <div class=\"col-md-5\">
                              {{ form_widget(form.step6.display_options.online_only) }}
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_errors(form.step6.tags) }}
                        {{ form_widget(form.step6.tags) }}
                        <div class=\"alert alert-info alert-drop m-t-1\" role=\"alert\">
                          <i class=\"material-icons\">help</i>
                          <p class=\"alert-text\" data-title=\"{{ 'Read more'|trans({}, 'Admin.Actions')|raw }}\">
                            {{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}
                            <strong>{{ 'Read more'|trans({}, 'Admin.Actions')|raw }}</strong>
                          </p>
                        </div>
                        <div class=\"alert alert-info alert-down\" role=\"alert\">
                          <p class=\"alert-down-text\">
                            {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                            {{ 'You can manage tag aliases in the [1]Search section[/1].'|trans({}, 'Admin.Catalog.Help')|
                              replace({
                                '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                                '[/1]' : '</a>'
                              })|raw
                            }}
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.condition.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.condition) }}
                        {{ form_widget(form.step6.condition) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        {{ form_widget(form.step6.show_condition) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.isbn.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.isbn) }}
                        {{ form_widget(form.step6.isbn) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.ean13.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.ean13) }}
                        {{ form_widget(form.step6.ean13) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.upc.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.upc) }}
                        {{ form_widget(form.step6.upc) }}
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"m-b-2\">
                          <h2>{{ form.step6.custom_fields.vars.label }}</h2>
                          <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                          {{ form_errors(form.step6.custom_fields) }}
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      {% filter escape %}
                                      {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': form.step6.custom_fields.vars.prototype }) }}
                                      {% endfilter %}\">
                            {% for field in form.step6.custom_fields %}
                              <li>
                                {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': field }) }}
                              </li>
                            {% endfor %}
                          </ul>
                          <a href=\"#\" class=\"btn btn-action add\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                        {{ form_widget(form.step6.attachments) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-action add m-b-1\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          {{ form_errors(form.step6.attachment_product) }}
                          <div id=\"form_step6_attachment_product\" data-action=\"{{ form.step6.attachment_product.vars.attr['data-action'] }}\">
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.file) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.name) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.description) }}</div>
                            <div class=\"form-group\">
                              {{ form_widget(form.step6.attachment_product.add) }}
                              {{ form_widget(form.step6.attachment_product.cancel) }}
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig', { 'form': form.step6 }) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': 1, 'supplierIds': 1}) }}\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig', { 'suppliers': form.step6.suppliers.vars.value, 'form': form.step6 }) }}
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# OTHER STEPS #}
        {% if hookcount('displayAdminProductsExtra') > 0 %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    {# LEFT #}
                    <div class=\"col-md-12\">
                      {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          {% for module in hooks %}
                            <div class=\"module-render-container module-{{ module.attributes.name }}\">
                              <div>
                                <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  {{ module.attributes.displayName }}
                                </h2>
                                <div class=\"text-ellipsis xsmall module-version\">
                                  {{ module.attributes.version }} by {{ module.attributes.author }}
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                {{ module.attributes.description }}
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            {% for module in hooks %}
                              <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                          {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                        </p>
                        <div class=\"row\">
                          {% for module in hooks %}
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h3>
                                  <div class=\"text-ellipsis xsmall module-version-author-grid\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-primary-outline pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                      {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                      </div>

                      {% for module in hooks %}
                        <div
                          id=\"module_{{ module.id }}\"
                          class=\"module-render-container module-{{ module.attributes.name }}\"
                          style=\"display: none;\"
                        >
                          <div>
                            {{ module.content|raw }}
                          </div>
                        </div>
                      {% endfor %}
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    <div class=\"product-footer\">
      <div class=\"col-lg-5\">
        <a
          href=\"{{ path('admin_product_unit_action', {action: 'delete', id: id_product}) }}\"
          class=\"btn btn-invisible btn-lg delete\"
          data-toggle=\"tooltip\"
          id=\"product_form_delete_btn\"
          title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          data-redirect=\"{{ preview_link }}\"
          data-url_deactive=\"{{ preview_link_deactivate }}\"
          target=\"_blank\"
          class=\"btn btn-tertiary btn-submit preview\"
          data-toggle=\"tooltip\"
          id=\"product_form_preview_btn\"
          title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
         >
          {{ 'Preview'|trans({}, 'Admin.Actions')}}
        </a>
        {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"tooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"tooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+0'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ form.step1.vars.value.active ? 'checked=\"checked\"' : '' }}
        />
        {% endif %}
      </div>
      <div class=\"col-lg-6 text-lg-right\">
        {% if is_shop_context %}
          <button
            type=\"button\"
            class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase duplicate\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
            data-toggle=\"tooltip\"
            title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
            >
            {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
          </button>
        {% endif %}
        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase go-catalog\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase new-product\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"{{ path('admin_product_new') }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase\"
          value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
          />

          <div class=\"btn-group hide dropdown pull-right\">
            <div class=\"js-spinner spinner hide btn-primary-reverse onclick pull-left m-r-1\"></div>
            <button
             class=\"btn btn-primary js-btn-save\"
             type=\"submit\"
             >
              <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
            </button>
            <button
              class=\"btn btn-primary dropdown-toggle\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >

            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              {% if is_shop_context %}
                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
                >
                {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
                </a>
              {% endif %}
             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
              >
              {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"{{ path('admin_product_new') }}\"
              >
              {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
            </a>
          </div>
        </div>
      </div>
    </div>
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-tertiary-outline btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin\\Product:form.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Product/form.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:form.html.twig */
class __TwigTemplate_768413cad03dfc5318d5687ae141dcdd25bd21d52f34217ac740fa464c7fa867_1081453043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1158
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:form.html.twig", 1158);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329741448cf047b3ba3d155c2955547b937a544429eb01f36f2805feea2bffc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329741448cf047b3ba3d155c2955547b937a544429eb01f36f2805feea2bffc4->enter($__internal_329741448cf047b3ba3d155c2955547b937a544429eb01f36f2805feea2bffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329741448cf047b3ba3d155c2955547b937a544429eb01f36f2805feea2bffc4->leave($__internal_329741448cf047b3ba3d155c2955547b937a544429eb01f36f2805feea2bffc4_prof);

    }

    // line 1175
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1e11f8dfd23b26b4c0f6e863243037d5fd2cefd81c2391802f52a3293a3eac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e11f8dfd23b26b4c0f6e863243037d5fd2cefd81c2391802f52a3293a3eac4->enter($__internal_f1e11f8dfd23b26b4c0f6e863243037d5fd2cefd81c2391802f52a3293a3eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 1176
        echo "      <div class=\"modal-body\"></div>
    ";
        
        $__internal_f1e11f8dfd23b26b4c0f6e863243037d5fd2cefd81c2391802f52a3293a3eac4->leave($__internal_f1e11f8dfd23b26b4c0f6e863243037d5fd2cefd81c2391802f52a3293a3eac4_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3775 => 1176,  3769 => 1175,  3746 => 1158,  2438 => 1204,  2431 => 1200,  2427 => 1199,  2423 => 1198,  2419 => 1197,  2415 => 1196,  2411 => 1195,  2407 => 1194,  2403 => 1193,  2399 => 1192,  2395 => 1191,  2391 => 1190,  2386 => 1188,  2381 => 1187,  2375 => 1186,  2365 => 1183,  2359 => 1182,  2349 => 862,  2343 => 861,  2333 => 226,  2327 => 225,  2319 => 1179,  2317 => 1158,  2312 => 1155,  2308 => 1154,  2299 => 1148,  2294 => 1146,  2287 => 1142,  2282 => 1140,  2278 => 1138,  2272 => 1135,  2267 => 1133,  2263 => 1131,  2261 => 1130,  2246 => 1118,  2234 => 1109,  2229 => 1107,  2220 => 1101,  2215 => 1099,  2210 => 1097,  2201 => 1091,  2196 => 1089,  2191 => 1087,  2185 => 1083,  2179 => 1080,  2174 => 1078,  2169 => 1076,  2163 => 1072,  2161 => 1071,  2157 => 1069,  2151 => 1066,  2139 => 1059,  2133 => 1058,  2127 => 1057,  2120 => 1056,  2118 => 1055,  2113 => 1053,  2108 => 1051,  2100 => 1046,  2096 => 1045,  2088 => 1040,  2081 => 1036,  2076 => 1033,  2070 => 1029,  2066 => 1028,  2061 => 1025,  2051 => 1017,  2041 => 1013,  2034 => 1009,  2030 => 1008,  2027 => 1007,  2023 => 1006,  2018 => 1003,  2005 => 996,  2001 => 995,  1994 => 991,  1985 => 987,  1979 => 984,  1972 => 982,  1967 => 979,  1963 => 978,  1957 => 975,  1953 => 974,  1949 => 973,  1941 => 967,  1930 => 965,  1926 => 964,  1921 => 962,  1917 => 960,  1907 => 956,  1898 => 952,  1892 => 949,  1885 => 947,  1879 => 945,  1875 => 944,  1870 => 941,  1868 => 940,  1865 => 939,  1857 => 932,  1854 => 931,  1840 => 919,  1836 => 918,  1829 => 914,  1817 => 905,  1813 => 904,  1808 => 902,  1804 => 901,  1800 => 900,  1796 => 899,  1792 => 898,  1786 => 895,  1770 => 882,  1766 => 881,  1762 => 880,  1751 => 872,  1746 => 869,  1729 => 866,  1726 => 865,  1709 => 864,  1706 => 863,  1704 => 861,  1699 => 859,  1695 => 858,  1691 => 857,  1681 => 850,  1677 => 849,  1672 => 847,  1667 => 845,  1658 => 839,  1654 => 838,  1649 => 836,  1644 => 834,  1637 => 830,  1633 => 829,  1628 => 827,  1623 => 825,  1614 => 819,  1607 => 815,  1603 => 814,  1598 => 812,  1593 => 810,  1583 => 803,  1573 => 795,  1571 => 790,  1567 => 789,  1559 => 784,  1555 => 783,  1551 => 782,  1545 => 779,  1541 => 778,  1537 => 777,  1527 => 770,  1521 => 767,  1515 => 764,  1509 => 761,  1500 => 755,  1496 => 754,  1487 => 748,  1483 => 747,  1471 => 737,  1460 => 728,  1452 => 722,  1438 => 710,  1431 => 706,  1427 => 705,  1418 => 699,  1414 => 698,  1405 => 692,  1401 => 691,  1392 => 685,  1388 => 684,  1384 => 683,  1376 => 678,  1371 => 676,  1358 => 666,  1354 => 665,  1344 => 658,  1340 => 657,  1336 => 656,  1332 => 655,  1328 => 654,  1324 => 653,  1320 => 652,  1316 => 651,  1312 => 650,  1308 => 649,  1300 => 646,  1295 => 644,  1285 => 637,  1280 => 635,  1268 => 626,  1264 => 625,  1260 => 624,  1253 => 620,  1248 => 618,  1232 => 605,  1221 => 597,  1214 => 593,  1210 => 592,  1203 => 588,  1199 => 587,  1195 => 586,  1184 => 578,  1180 => 577,  1176 => 576,  1170 => 575,  1163 => 571,  1159 => 570,  1153 => 567,  1149 => 566,  1142 => 562,  1137 => 560,  1129 => 555,  1125 => 554,  1121 => 553,  1115 => 550,  1111 => 549,  1107 => 548,  1096 => 540,  1091 => 538,  1082 => 531,  1073 => 523,  1071 => 522,  1070 => 521,  1069 => 520,  1068 => 519,  1067 => 518,  1066 => 517,  1059 => 512,  1046 => 502,  1038 => 497,  1034 => 496,  1028 => 493,  1025 => 492,  1022 => 491,  1015 => 487,  1011 => 486,  1003 => 483,  999 => 481,  993 => 479,  991 => 478,  987 => 477,  983 => 476,  978 => 473,  976 => 472,  968 => 467,  961 => 463,  957 => 462,  953 => 461,  948 => 459,  940 => 454,  936 => 453,  932 => 452,  927 => 450,  919 => 445,  915 => 444,  911 => 443,  906 => 441,  898 => 436,  894 => 435,  890 => 434,  885 => 432,  874 => 426,  868 => 425,  864 => 424,  859 => 422,  855 => 421,  851 => 420,  846 => 418,  840 => 415,  831 => 409,  824 => 405,  815 => 401,  806 => 395,  802 => 394,  798 => 393,  793 => 391,  790 => 390,  784 => 387,  780 => 386,  776 => 385,  773 => 384,  771 => 383,  765 => 380,  759 => 379,  749 => 371,  735 => 359,  722 => 349,  712 => 343,  705 => 338,  701 => 337,  695 => 334,  691 => 333,  687 => 332,  681 => 329,  677 => 328,  673 => 327,  666 => 323,  661 => 321,  656 => 318,  648 => 314,  641 => 309,  635 => 306,  630 => 304,  625 => 302,  621 => 300,  619 => 299,  611 => 294,  605 => 291,  600 => 289,  595 => 287,  590 => 284,  580 => 278,  573 => 273,  567 => 272,  559 => 267,  553 => 266,  546 => 262,  541 => 260,  537 => 258,  535 => 257,  528 => 252,  520 => 246,  513 => 242,  504 => 236,  498 => 232,  481 => 230,  464 => 229,  460 => 227,  458 => 225,  452 => 222,  448 => 221,  444 => 220,  438 => 217,  429 => 211,  423 => 208,  415 => 203,  411 => 202,  402 => 196,  398 => 195,  391 => 190,  388 => 189,  381 => 187,  375 => 185,  373 => 184,  359 => 175,  354 => 173,  350 => 172,  346 => 171,  343 => 170,  338 => 169,  332 => 165,  329 => 164,  327 => 163,  321 => 160,  317 => 159,  312 => 157,  308 => 156,  300 => 151,  296 => 150,  292 => 149,  284 => 144,  280 => 143,  275 => 140,  267 => 133,  258 => 125,  252 => 123,  250 => 122,  246 => 121,  242 => 120,  238 => 119,  234 => 118,  230 => 117,  226 => 116,  218 => 110,  211 => 105,  199 => 96,  195 => 95,  186 => 89,  179 => 85,  173 => 82,  166 => 78,  159 => 74,  153 => 71,  144 => 65,  136 => 62,  130 => 58,  115 => 56,  111 => 55,  106 => 53,  100 => 50,  95 => 48,  89 => 45,  85 => 44,  80 => 41,  73 => 37,  69 => 35,  67 => 34,  64 => 33,  62 => 32,  58 => 31,  53 => 28,  47 => 27,  40 => 25,  38 => 1246,  37 => 1245,  36 => 1244,  35 => 1227,  33 => 1225,  32 => 1223,  11 => 25,);
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

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    <div class=\"product-header\">
      {% if is_multishop_context %}
        <div class=\"col-md-12\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
          </div>
        </div>
      {% endif %}

      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input {{ 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
            {{ form_widget(form.step1.name) }}
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            {{ form_widget(form.step1.type_product) }}
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
              <select id=\"form_switch_language\" class=\"form-control\" data-toggle=\"select2\">
                {% for language in languages %}
                  <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %}selected=\"selected\"{% endif %}>{{ language.iso_code }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"toolbar col-lg-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"{{ help_link }}\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ form_errors(form.step1.name) }}
            {{ form_errors(form.step1.type_product) }}
          </div>
        </div>
      </div>
      <div class=\"clearfix\"></div>
    </div>

    <div class=\"col-md-10 col-md-offset-1\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    {# FORM TABS CONTAINER #}
    <div id=\"form-loading\" class=\"col-md-10 col-md-offset-1\">
      <div class=\"tabs js-tabs\">
        <div class=\"arrow js-arrow left-arrow pull-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">{{ 'Basic settings'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Pricing'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'SEO'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Options'|trans({}, 'Admin.Global') }}</a></li>
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Modules'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          {% endif %}
        </ul>
        <div class=\"arrow js-arrow right-arrow visible pull-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        {# STEP 1 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {# LEFT #}
                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      {{ form_errors(form.step1.inputPackItems) }}
                      {{ form_widget(form.step1.inputPackItems) }}
                    </div>

                    <div id=\"product-images-container\" class=\"m-b-2\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"{{ path('admin_product_image_upload', {'idProduct': id_product}) }}\"
                           url-position=\"{{ path('admin_product_image_positions') }}\"
                           data-max-size=\"{{ 'PS_ATTACHMENT_MAXIMUM_SIZE'|configuration }}\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            {{js_translatable['Drop images here']}}<br/>
                            <a>{{js_translatable['or select files']}}</a><br/>
                            <small>
                                {{js_translatable['files recommandations']}}<br/>
                                {{js_translatable['files recommandations2']}}
                            </small>
                        </div>
                        {% if form.step1.vars.value.images is defined %}
                            {% if editable %}
                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            {% endif %}
                          {% for image in form.step1.vars.value.images %}
                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"{{ image.id }}\"
                                 url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\"
                                 url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              {% if image.cover %}
                                <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                              {% endif %}
                            </div>
                          {% endfor %}
                        {% endif %}
                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-xs-center col-md-12\">
                        <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
                        <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
                      </div>

                    </div>

                    <ul class=\"nav nav-tabs bordered\">
                      <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
                      <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">{{ 'Description'|trans({}, 'Admin.Global') }}</a></li>
                    </ul>

                    <div class=\"tab-content bordered\">
                      <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                        {{ form_widget(form.step1.description_short) }}
                      </div>
                      <div class=\"tab-pane panel panel-default \" id=\"description\">
                        {{ form_widget(form.step1.description) }}
                      </div>
                    </div>
\t\t\t\t\t\t<!-- CUSTOM FIELD  -->
\t\t\t\t\t<div class=\"m-b-1 m-t-1\">
\t\t\t\t\t\t<h2>Custom TVA</h2>
\t\t\t\t\t\t{{ form_widget(form.step1.custom_field) }}
\t\t\t\t\t</div>
                    <div id=\"features\" class=\"m-b-1 m-t-1\">
                      <div id=\"features-content\" class=\"content {{ form.step1.features|length == 0 ? 'hide':'' }}\">
                        <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        {{ form_errors(form.step1.features) }}
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"{% filter escape %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': form.step1.features.vars.prototype }) }}
                          {% endfilter %}\"
                        >
                          {% for feature in form.step1.features %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': feature }) }}
                          {% endfor %}
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-primary-outline sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"m-b-1\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig', { 'form':form.step1.id_manufacturer }) }}
                    </div>

                    <div id=\"related-product\" class=\"m-b-1\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig', { 'form':form.step1.related_products }) }}
                    </div>

                  </div>

                  {# RIGHT #}
                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          {% if is_combination_active %}
                            <div class=\"form-group\" id=\"show_variations_selector\">
                              <h2>
                                {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                    {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                  </span>
                                </div>
                              </div>
                            </div>
                          {% endif %}

                          <div class=\"form-group\">
                            <h2>
                              {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            {{ form_errors(form.step6.reference) }}
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  {{ form_widget(form.step6.reference) }}
                              </div>
                            </div>
                          </div>

                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"form-group\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              {{ form_errors(form.step1.qty_0_shortcut) }}
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  {{ form_widget(form.step1.qty_0_shortcut) }}
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                              </span>
                            </div>
                          {% endif %}

                          <div class=\"form-group\">
                            <h2>
                              {{ \"Price\"|trans({}, 'Admin.Global') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_shortcut) }}
                                {{ form_errors(form.step1.price_shortcut) }}
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_ttc_shortcut) }}
                                {{ form_errors(form.step1.price_ttc_shortcut) }}
                              </div>
                              <div class=\"col-md-12 m-t-1\">
                                <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ render(controller('PrestaShopBundle:Admin/Product:renderField', {'productId': id_product, 'step': 'step2', 'fieldName': 'id_tax_rules_group' })) }}
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                  {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive p-x-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group\">
                            {{ include('PrestaShopBundle:Admin/Product/Include:form-categories.html.twig', { 'form': form.step1, 'productId': id_product }) }}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 2 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"{% if has_combinations or form.step3.depends_on_stock.vars.value != \"0\" %}display: none;{% endif %}\">
                      <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">{{ form.step3.qty_0.vars.label }}</label>
                              {{ form_errors(form.step3.qty_0) }}
                              {{ form_widget(form.step3.qty_0) }}
                            </div>
                          {% endif %}
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.minimal_quantity.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.minimal_quantity) }}
                            {{ form_widget(form.step3.minimal_quantity) }}
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': 1 }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': 1}) }}\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>{{ form.step3.virtual_product.vars.label }}</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            {{ form_widget(form.step3.virtual_product.is_virtual_file) }}
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        {{ form_errors(form.step3.virtual_product) }}
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.file.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'hide' : 'show' }}\">
                              {{ form_widget(form.step3.virtual_product.file) }}
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'show' : 'hide' }}\">
                              <a href=\"{{ form.step3.virtual_product.vars.value.file_download_link is defined ? form.step3.virtual_product.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                              <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': id_product}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.name.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.name) }}
                            {{ form_widget(form.step3.virtual_product.name) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_downloadable.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_downloadable) }}
                            {{ form_widget(form.step3.virtual_product.nb_downloadable) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.expiration_date.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.expiration_date) }}
                            {{ form_widget(form.step3.virtual_product.expiration_date) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_days.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_days) }}
                            {{ form_widget(form.step3.virtual_product.nb_days) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          {{ form_widget(form.step3.virtual_product.save) }}
                        </div>
                      </div>
                    </div>

                    {% if asm_globally_activated and form.step1.type_product.vars.value != \"2\" %}
                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.advanced_stock_management) }}
                          {{ form_widget(form.step3.advanced_stock_management) }}
                          {% if form.step1.type_product.vars.value == \"1\" %}
                            {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(form.step3.advanced_stock_management.vars.checked) %}display: none;{% endif %}\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.depends_on_stock) }}
                          {{ form_widget(form.step3.depends_on_stock) }}
                        </div>
                      </div>
                    {% endif %}
                    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                      <div id=\"pack_stock_type\">
                        <h2>{{ form.step3.pack_stock_type.vars.label }}</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            {{ form_errors(form.step3.pack_stock_type) }}
                            {{ form_widget(form.step3.pack_stock_type) }}
                          </fieldset>
                        </div>
                      </div>
                    {% endif %}
                    {{ include('PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig', {'form': form.step3, 'form_combination_bulk': formCombinations}) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 3 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  {{ include('PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig', {
                    'form' : form.step4,
                    'asm_globally_activated': asm_globally_activated,
                    'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                    'isChecked': form.step3.advanced_stock_management.vars.checked,
                    'warehouses': warehouses
                  }) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 4 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price.vars.label }}</label>
                        {{ form_errors(form.step2.price) }}
                        {{ form_widget(form.step2.price) }}
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price_ttc.vars.label }}</label>
                        {{ form_errors(form.step2.price_ttc) }}
                        {{ form_widget(form.step2.price_ttc) }}
                      </div>

                      <div class=\"col-xl-4 col-lg-6 col-xl-offset-1 col-lg-offset-0\">
                        <label class=\"form-control-label\">
                          {{ form.step2.unit_price.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unit_price) }}
                            {{ form_widget(form.step2.unit_price) }}
                          </div>
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unity) }}
                            {{ form_widget(form.step2.unity) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <label class=\"form-control-label\">{{ form.step2.ecotax.vars.label }}</label>
                        {{ form_errors(form.step2.ecotax) }}
                        {{ form_widget(form.step2.ecotax) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">{{ form.step2.id_tax_rules_group.vars.label }}</label>
                        {{ form_errors(form.step2.id_tax_rules_group) }}
                        {{ form_widget(form.step2.id_tax_rules_group) }}
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                          <i class=\"material-icons\">open_in_new</i> {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                      </div>
                      <div class=\"col-md-12 p-t-1\">
                        {{ form_widget(form.step2.on_sale) }}
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info\" role=\"alert\">
                              <i class=\"material-icons\">help</i>
                              <p class=\"alert-text\">
                                {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">{{ form.step2.wholesale_price.vars.label|raw }}</label>
                        {{ form_errors(form.step2.wholesale_price) }}
                        {{ form_widget(form.step2.wholesale_price) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"m-b-2\">
                          <a class=\"btn btn-action m-b-2\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table table-striped hide seo-table\" data=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\">
                            <thead>
                            <tr>
                              <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                          {{ include('PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig', {'form': form.step2.specific_price, 'is_multishop_context': is_multishop_context}) }}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                          {{ form_errors(form.step2.specificPricePriority_0) }}
                          {{ form_widget(form.step2.specificPricePriority_0) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_1) }}
                          {{ form_widget(form.step2.specificPricePriority_1) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_2) }}
                          {{ form_widget(form.step2.specificPricePriority_2) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_3) }}
                          {{ form_widget(form.step2.specificPricePriority_3) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        {{ form_widget(form.step2.specificPricePriorityToAll) }}
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 5 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {{ include('PrestaShopBundle:Admin/Product/Include:form_seo.html.twig', {'form' : form.step5}) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 6 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        {{ form_errors(form.step6.visibility) }}
                        {{ form_widget(form.step6.visibility) }}
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          {{ form_errors(form.step6.display_options) }}
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              {{ form_widget(form.step6.display_options.available_for_order) }}
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              {{ form_widget(form.step6.display_options.show_price) }}
                            </div>
                            <div class=\"col-md-5\">
                              {{ form_widget(form.step6.display_options.online_only) }}
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_errors(form.step6.tags) }}
                        {{ form_widget(form.step6.tags) }}
                        <div class=\"alert alert-info alert-drop m-t-1\" role=\"alert\">
                          <i class=\"material-icons\">help</i>
                          <p class=\"alert-text\" data-title=\"{{ 'Read more'|trans({}, 'Admin.Actions')|raw }}\">
                            {{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}
                            <strong>{{ 'Read more'|trans({}, 'Admin.Actions')|raw }}</strong>
                          </p>
                        </div>
                        <div class=\"alert alert-info alert-down\" role=\"alert\">
                          <p class=\"alert-down-text\">
                            {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                            {{ 'You can manage tag aliases in the [1]Search section[/1].'|trans({}, 'Admin.Catalog.Help')|
                              replace({
                                '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                                '[/1]' : '</a>'
                              })|raw
                            }}
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.condition.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.condition) }}
                        {{ form_widget(form.step6.condition) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        {{ form_widget(form.step6.show_condition) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.isbn.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.isbn) }}
                        {{ form_widget(form.step6.isbn) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.ean13.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.ean13) }}
                        {{ form_widget(form.step6.ean13) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.upc.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.upc) }}
                        {{ form_widget(form.step6.upc) }}
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"m-b-2\">
                          <h2>{{ form.step6.custom_fields.vars.label }}</h2>
                          <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                          {{ form_errors(form.step6.custom_fields) }}
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      {% filter escape %}
                                      {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': form.step6.custom_fields.vars.prototype }) }}
                                      {% endfilter %}\">
                            {% for field in form.step6.custom_fields %}
                              <li>
                                {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': field }) }}
                              </li>
                            {% endfor %}
                          </ul>
                          <a href=\"#\" class=\"btn btn-action add\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                        {{ form_widget(form.step6.attachments) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-action add m-b-1\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          {{ form_errors(form.step6.attachment_product) }}
                          <div id=\"form_step6_attachment_product\" data-action=\"{{ form.step6.attachment_product.vars.attr['data-action'] }}\">
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.file) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.name) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.description) }}</div>
                            <div class=\"form-group\">
                              {{ form_widget(form.step6.attachment_product.add) }}
                              {{ form_widget(form.step6.attachment_product.cancel) }}
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig', { 'form': form.step6 }) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': 1, 'supplierIds': 1}) }}\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig', { 'suppliers': form.step6.suppliers.vars.value, 'form': form.step6 }) }}
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# OTHER STEPS #}
        {% if hookcount('displayAdminProductsExtra') > 0 %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    {# LEFT #}
                    <div class=\"col-md-12\">
                      {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          {% for module in hooks %}
                            <div class=\"module-render-container module-{{ module.attributes.name }}\">
                              <div>
                                <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  {{ module.attributes.displayName }}
                                </h2>
                                <div class=\"text-ellipsis xsmall module-version\">
                                  {{ module.attributes.version }} by {{ module.attributes.author }}
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                {{ module.attributes.description }}
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            {% for module in hooks %}
                              <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                          {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                        </p>
                        <div class=\"row\">
                          {% for module in hooks %}
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h3>
                                  <div class=\"text-ellipsis xsmall module-version-author-grid\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-primary-outline pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                      {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                      </div>

                      {% for module in hooks %}
                        <div
                          id=\"module_{{ module.id }}\"
                          class=\"module-render-container module-{{ module.attributes.name }}\"
                          style=\"display: none;\"
                        >
                          <div>
                            {{ module.content|raw }}
                          </div>
                        </div>
                      {% endfor %}
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    <div class=\"product-footer\">
      <div class=\"col-lg-5\">
        <a
          href=\"{{ path('admin_product_unit_action', {action: 'delete', id: id_product}) }}\"
          class=\"btn btn-invisible btn-lg delete\"
          data-toggle=\"tooltip\"
          id=\"product_form_delete_btn\"
          title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          data-redirect=\"{{ preview_link }}\"
          data-url_deactive=\"{{ preview_link_deactivate }}\"
          target=\"_blank\"
          class=\"btn btn-tertiary btn-submit preview\"
          data-toggle=\"tooltip\"
          id=\"product_form_preview_btn\"
          title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
         >
          {{ 'Preview'|trans({}, 'Admin.Actions')}}
        </a>
        {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"tooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"tooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+0'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ form.step1.vars.value.active ? 'checked=\"checked\"' : '' }}
        />
        {% endif %}
      </div>
      <div class=\"col-lg-6 text-lg-right\">
        {% if is_shop_context %}
          <button
            type=\"button\"
            class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase duplicate\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
            data-toggle=\"tooltip\"
            title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
            >
            {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
          </button>
        {% endif %}
        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase go-catalog\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <button
          type=\"button\"
          class=\"btn btn-tertiary-outline btn-submit hidden-xs uppercase new-product\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"{{ path('admin_product_new') }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase\"
          value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
          data-toggle=\"tooltip\"
          title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
          />

          <div class=\"btn-group hide dropdown pull-right\">
            <div class=\"js-spinner spinner hide btn-primary-reverse onclick pull-left m-r-1\"></div>
            <button
             class=\"btn btn-primary js-btn-save\"
             type=\"submit\"
             >
              <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
            </button>
            <button
              class=\"btn btn-primary dropdown-toggle\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >

            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              {% if is_shop_context %}
                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
                >
                {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
                </a>
              {% endif %}
             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
              >
              {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"{{ path('admin_product_new') }}\"
              >
              {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
            </a>
          </div>
        </div>
      </div>
    </div>
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-tertiary-outline btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin\\Product:form.html.twig", "/home/crystalsdx/www/src/PrestaShopBundle/Resources/views/Admin/Product/form.html.twig");
    }
}
