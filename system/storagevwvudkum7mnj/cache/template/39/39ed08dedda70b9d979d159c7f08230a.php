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

/* qma1rloxtrjoarbc/view/template/mail/forgotten.twig */
class __TwigTemplate_c3b0eff49558e39d81d45616ad98cb7e extends Template
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
        echo ($context["text_greeting"] ?? null);
        echo "<br/>
<br/>
";
        // line 3
        echo ($context["text_change"] ?? null);
        echo "<br/>
<br/>
";
        // line 5
        echo ($context["reset"] ?? null);
        echo "<br/>
<br/>
";
        // line 7
        echo ($context["text_ip"] ?? null);
        echo " <br/>
<br/>
";
        // line 9
        echo ($context["ip"] ?? null);
        echo "<br/>
<br/>
";
        // line 11
        echo ($context["store"] ?? null);
        echo "<br/>
";
        // line 12
        echo ($context["store_url"] ?? null);
    }

    public function getTemplateName()
    {
        return "qma1rloxtrjoarbc/view/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  62 => 11,  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "qma1rloxtrjoarbc/view/template/mail/forgotten.twig", "/home/u239700068/domains/mercabarat.com/public_html/qma1rloxtrjoarbc/view/template/mail/forgotten.twig");
    }
}
