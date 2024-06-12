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

/* qma1rloxtrjoarbc/view/template/common/footer.twig */
class __TwigTemplate_660b551200d4a9ca0959ffd9926314bef45526f7af85cab3212e4a54c64eef45 extends Template
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
        echo "<footer id=\"footer\">Creado por guillermo guzman<br/></footer></div>
<script src=\"";
        // line 2
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "qma1rloxtrjoarbc/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "qma1rloxtrjoarbc/view/template/common/footer.twig", "C:\\xampp\\htdocs\\opencart\\qma1rloxtrjoarbc\\view\\template\\common\\footer.twig");
    }
}
