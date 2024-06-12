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

/* extension/opencart/catalog/view/template/module/filter.twig */
class __TwigTemplate_bde8a3dd14e830741cc5bd95dae623a8 extends Template
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
        echo "<div class=\"card\">
  <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"list-group list-group-flush\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 5
            echo "      <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 5);
            echo "</a>
      <div class=\"list-group-item\">
        <div id=\"filter-group-";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 7);
            echo "\">
          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 9
                echo "            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 10);
                echo "\" id=\"input-filter-";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 10);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 10), ($context["filter_category"] ?? null))) {
                    echo " checked";
                }
                echo "/>
              <label for=\"input-filter-";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 11);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 11);
                echo "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <div class=\"card-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 19
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function () {
    filter = [];

    \$('input[name^=\\'filter\\']:checked').each(function (element) {
        filter.push(this.value);
    });

    location = '";
        // line 30
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  99 => 19,  95 => 17,  87 => 14,  76 => 11,  66 => 10,  63 => 9,  59 => 8,  55 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/filter.twig", "/home/u239700068/domains/mercabarat.com/public_html/extension/opencart/catalog/view/template/module/filter.twig");
    }
}
