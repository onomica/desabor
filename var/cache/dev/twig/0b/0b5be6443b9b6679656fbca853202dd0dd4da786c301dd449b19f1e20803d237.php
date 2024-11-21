<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig */
class __TwigTemplate_312a1d19cf044f322f56a81e398a09571e401eaf2f1e3c62d31349c0bc4d5647 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "query", [], "any", false, false, false, 26), "has", [0 => "id_category"], "method", false, false, false, 26) &&  !twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 26, $this->source); })()), "is_home_category", [], "any", false, false, false, 26))) {
            // line 27
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 27, $this->source); })()), "id_parent", [], "any", false, false, false, 27)) {
                // line 28
                echo "    ";
                $context["params"] = ["id_category" => twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 28, $this->source); })()), "id_parent", [], "any", false, false, false, 28)];
                // line 29
                echo "  ";
            }
            // line 30
            echo "
  <div class=\"card-footer\">
    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index", ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 32, $this->source); })()), [])) : ([]))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
      <i class=\"material-icons rtl-flip\">arrow_back</i>
      ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 34,  61 => 32,  57 => 30,  54 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% if app.request.query.has('id_category') and not currentCategoryView.is_home_category %}
  {% if currentCategoryView.id_parent %}
    {% set params = {'id_category': currentCategoryView.id_parent} %}
  {% endif %}

  <div class=\"card-footer\">
    <a href=\"{{ path('admin_categories_index', params|default({})) }}\" class=\"btn btn-outline-secondary\">
      <i class=\"material-icons rtl-flip\">arrow_back</i>
      {{ 'Back to list'|trans({}, 'Admin.Actions') }}
    </a>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig", "/home/lijpwpfm/domains/desabor.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig");
    }
}
