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

/* partials/header.twig */
class __TwigTemplate_c8d7848c10c8b9231c367d3379b34f9d extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header>
    <nav>
        <ul>
            <li><a href=\"/home\">Главная</a></li>
            <li><a href=\"/about\">О нас</a></li>
            <li><a href=\"/contacts\">Контакты</a></li>
            <li><a href=\"/generateimage\">Генерация изображения</a></li>
            <li><a href=\"/phpinfo\">Информация о GD</a></li>
        </ul>
    </nav>
</header>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header>
    <nav>
        <ul>
            <li><a href=\"/home\">Главная</a></li>
            <li><a href=\"/about\">О нас</a></li>
            <li><a href=\"/contacts\">Контакты</a></li>
            <li><a href=\"/generateimage\">Генерация изображения</a></li>
            <li><a href=\"/phpinfo\">Информация о GD</a></li>
        </ul>
    </nav>
</header>", "partials/header.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\partials\\header.twig");
    }
}
