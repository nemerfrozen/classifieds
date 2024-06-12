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

/* catalog/view/template/account/subscription_list.twig */
class __TwigTemplate_841ab5e962d6b10d5092d55457d68579 extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-subscription\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 11
        if (($context["subscriptions"] ?? null)) {
            // line 12
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-end\">";
            // line 16
            echo ($context["column_subscription_id"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 17
            echo ($context["column_product"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 18
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 19
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td class=\"text-end\"></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 25
                echo "                <tr>
                  <td class=\"text-end\">#";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 26);
                echo "</td>
                  <td class=\"text-start\"><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "product", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "product_name", [], "any", false, false, false, 27);
                echo "</a>
                    <br/>
                    ";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "description", [], "any", false, false, false, 29);
                echo "
                  </td>
                  <td class=\"text-start\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 31);
                echo "</td>
                  <td class=\"text-start\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 32);
                echo "</td>
                  <td class=\"text-end\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "view", [], "any", false, false, false, 33);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-eye\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-6 text-start\">";
            // line 40
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 41
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 44
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 46
        echo "      <div class=\"text-end\"><a href=\"";
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      ";
        // line 47
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 48
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 50
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/subscription_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 50,  176 => 48,  172 => 47,  165 => 46,  159 => 44,  153 => 41,  149 => 40,  143 => 36,  132 => 33,  128 => 32,  124 => 31,  119 => 29,  112 => 27,  108 => 26,  105 => 25,  101 => 24,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  75 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/subscription_list.twig", "/home/u239700068/domains/mercabarat.com/public_html/catalog/view/template/account/subscription_list.twig");
    }
}
