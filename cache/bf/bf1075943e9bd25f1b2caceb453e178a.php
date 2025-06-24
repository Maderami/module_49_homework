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

/* main.twig */
class __TwigTemplate_acff68ef614525081b9babed181896d5 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layout.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "        <div class=\"row px-2\">
            <div class=\"col-sm-12 col-md-6 col-lg-6 col-12 pt-5\">
                        <div class=\"carousel-item active\">
                            <h1 class=\"animated fadeInDown\" style=\"animation-delay: 1s\">Сайт в <span class=\"text-info\">разработке</span></h1>
                            <p class=\"animated fadeInUp\" style=\"animation-delay: 2s\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, temporibus harum necessitatibus ipsum aut obcaecati.</p><button class=\"btn btn-info text-white\" type=\"button\">Подробнее</button> <button class=\"btn btn-info text-white\" type=\"button\">Наши контакты</button>
                        </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-6 col-12\"><img alt=\"\" class=\"img-fluid \" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__DIR__"] ?? null), "html", null, true);
        yield "core/views/templates/resources/images/forcontacts.jpg\"></div>
        </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main.twig";
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
        return array (  67 => 11,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}
        <div class=\"row px-2\">
            <div class=\"col-sm-12 col-md-6 col-lg-6 col-12 pt-5\">
                        <div class=\"carousel-item active\">
                            <h1 class=\"animated fadeInDown\" style=\"animation-delay: 1s\">Сайт в <span class=\"text-info\">разработке</span></h1>
                            <p class=\"animated fadeInUp\" style=\"animation-delay: 2s\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, temporibus harum necessitatibus ipsum aut obcaecati.</p><button class=\"btn btn-info text-white\" type=\"button\">Подробнее</button> <button class=\"btn btn-info text-white\" type=\"button\">Наши контакты</button>
                        </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-6 col-12\"><img alt=\"\" class=\"img-fluid \" src=\"{{ __DIR__ }}core/views/templates/resources/images/forcontacts.jpg\"></div>
        </div>
{% endblock %}", "main.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\main.twig");
    }
}
