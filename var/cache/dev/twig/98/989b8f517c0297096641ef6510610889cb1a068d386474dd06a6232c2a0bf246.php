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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig */
class __TwigTemplate_e27d3c527dc49a80e0d7609169f123be6c5c74882b6bb06961e9725c223ac0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_header_form' => [$this, 'block_product_header_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig"));

        // line 25
        echo "
<div class=\"product-footer\">
  ";
        // line 27
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 41
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_product_header_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header_form"));

        // line 28
        echo "    <div class=\"product-footer-container\">
      ";
        // line 30
        echo "      <div class=\"form-group product-footer-right\">
        <div id=\"product-footer-right\" class=\"footer-buttons-container\">
          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 32, $this->source); })()), "footer", [], "any", false, false, false, 32), "cancel", [], "any", false, false, false, 32), 'row');
        echo "
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 33, $this->source); })()), "footer", [], "any", false, false, false, 33), "save", [], "any", false, false, false, 33), 'row');
        echo "
        </div>
      </div>

      ";
        // line 38
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 38, $this->source); })()), "footer", [], "any", false, false, false, 38), 'row');
        echo "
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  82 => 33,  78 => 32,  74 => 30,  71 => 28,  61 => 27,  50 => 41,  48 => 27,  44 => 25,);
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

<div class=\"product-footer\">
  {% block product_header_form %}
    <div class=\"product-footer-container\">
      {# Only a few selected elements are in the right column #}
      <div class=\"form-group product-footer-right\">
        <div id=\"product-footer-right\" class=\"footer-buttons-container\">
          {{ form_row(productForm.footer.cancel) }}
          {{ form_row(productForm.footer.save) }}
        </div>
      </div>

      {# The rest is displayed in the left column, it is displayed after because it renders all that's left #}
      {{ form_row(productForm.footer) }}
    </div>
  {% endblock %}
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", "/home/lijpwpfm/domains/desabor.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/footer.html.twig");
    }
}
