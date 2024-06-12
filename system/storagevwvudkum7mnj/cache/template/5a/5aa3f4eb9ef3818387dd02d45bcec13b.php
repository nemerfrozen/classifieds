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

/* extension/opencart/catalog/view/template/module/store.twig */
class __TwigTemplate_346bdc80d14a03c3db00b73aecf0eeb0 extends Template
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
  <div class=\"card-header\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <p style=\"text-align: center;\">";
        // line 3
        echo ($context["text_store"] ?? null);
        echo "</p>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 5
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 5) == ($context["store_id"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 5);
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 5);
                echo "</b></a>
      <br/>
    ";
            } else {
                // line 7
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 7);
                echo "</a>
      <br/>
    ";
            }
            // line 10
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  <br/>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  72 => 10,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/store.twig", "/home/u239700068/domains/mercabarat.com/public_html/extension/opencart/catalog/view/template/module/store.twig");
    }
}
