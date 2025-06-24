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
    <link rel=\"stylesheet\" href=\"resources/css/style.css\">
</head>
<body>
";
        // line 10
        yield from $this->load("partials/header.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
<main>
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 14
        yield "</main>

";
        // line 16
        yield from $this->load("partials/footer.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "</body>
</html>";
        yield from [];
    }

    // line 13
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
        return array (  77 => 13,  71 => 17,  69 => 16,  65 => 14,  63 => 13,  59 => 11,  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ title }} | Сайт-визитка</title>
    <link rel=\"stylesheet\" href=\"resources/css/style.css\">
</head>
<body>
{% include 'partials/header.twig' %}

<main>
    {% block content %}{% endblock %}
</main>

{% include 'partials/footer.twig' %}
</body>
</html>", "layout.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\layout.twig");
    }
}
