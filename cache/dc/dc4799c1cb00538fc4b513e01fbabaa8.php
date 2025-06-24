<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* layout.twig */
class __TwigTemplate_4905ed5754077c20af8ef6e668b79759 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " | Сайт-визитка</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__DIR__"] ?? null), "html", null, true);
        yield "/core/views/templates/resources/css/bootstrap.min.css\" type=\"text/css\">
    <script href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__DIR__"] ?? null), "html", null, true);
        yield "/core/views/templates/resources/js/bootstrap.min.js\" type=\"javascript\"></script>
</head>
<body class=\"d-flex flex-column min-vh-100 vh-100\">
";
        // line 11
        yield from $this->load("partials/header.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
<main role=\"main\">
    <div class=\"container\">
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 16
        yield "    </div>
</main>

";
        // line 19
        yield from $this->load("partials/footer.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "</body>
</html>";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  86 => 15,  80 => 20,  78 => 19,  73 => 16,  71 => 15,  66 => 12,  64 => 11,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ title }} | Сайт-визитка</title>
    <link rel=\"stylesheet\" href=\"{{ __DIR__ }}/core/views/templates/resources/css/bootstrap.min.css\" type=\"text/css\">
    <script href=\"{{ __DIR__ }}/core/views/templates/resources/js/bootstrap.min.js\" type=\"javascript\"></script>
</head>
<body class=\"d-flex flex-column min-vh-100 vh-100\">
{% include 'partials/header.twig' %}

<main role=\"main\">
    <div class=\"container\">
    {% block content %}{% endblock %}
    </div>
</main>

{% include 'partials/footer.twig' %}
</body>
</html>", "layout.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\layout.twig");
    }
}
