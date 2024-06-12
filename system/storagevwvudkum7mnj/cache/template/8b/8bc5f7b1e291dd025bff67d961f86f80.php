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

/* catalog/view/template/account/returns_form.twig */
class __TwigTemplate_f1280ec0438c66910e00498beb208f96 extends Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\"> ";
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
      <p>";
        // line 11
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form id=\"form-return\" action=\"";
        // line 12
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 14
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 16
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 18
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 23
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 25
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 32
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 37
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 39
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 46
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
              <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-ordered\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 col-md-4\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 54
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" id=\"input-date-ordered\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 61
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-product\" class=\"col-sm-2 col-form-label\">";
        // line 63
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 65
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 72
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
              <div id=\"error-model\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"1\" placeholder=\"";
        // line 79
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 83
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-reason\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 87
            echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 88);
            echo "\" id=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 88);
            echo "\" class=\"form-check-input\"/> <label for=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 88);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 88);
            echo "</label>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </div>
              <div id=\"error-reason\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 100
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 104
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 111
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
            </div>
          </div>
          ";
        // line 114
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"row\">
          <div class=\"col-3\"><a href=\"";
        // line 117
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"col text-end\">
            ";
        // line 119
        if (($context["text_agree"] ?? null)) {
            // line 120
            echo "              <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
                <label class=\"form-check-label\">";
            // line 121
            echo ($context["text_agree"] ?? null);
            echo "</label>
                <input type=\"hidden\" name=\"agree\" value=\"0\"/>
                <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
              </div>
            ";
        }
        // line 126
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 131
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/returns_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 133,  335 => 131,  331 => 130,  323 => 126,  315 => 121,  312 => 120,  310 => 119,  303 => 117,  297 => 114,  291 => 111,  286 => 109,  278 => 104,  271 => 100,  264 => 96,  257 => 91,  242 => 88,  239 => 87,  235 => 86,  229 => 83,  222 => 79,  217 => 77,  207 => 72,  202 => 70,  190 => 65,  185 => 63,  180 => 61,  168 => 54,  162 => 51,  152 => 46,  147 => 44,  137 => 39,  132 => 37,  122 => 32,  117 => 30,  107 => 25,  102 => 23,  92 => 18,  87 => 16,  82 => 14,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/returns_form.twig", "/home/u239700068/domains/mercabarat.com/public_html/catalog/view/template/account/returns_form.twig");
    }
}
