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
        yield "<header class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/home\">Module 49</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/home\">Главная</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">О нас</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/contacts\">Контакты</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/generateimage\">Генерация изображения</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/phpinfo\">Информация о GD</a></li>
                </ul>
            </div>
        </div>
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
        return new Source("<header class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/home\">Module 49</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/home\">Главная</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/about\">О нас</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/contacts\">Контакты</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/generateimage\">Генерация изображения</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/phpinfo\">Информация о GD</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>", "partials/header.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\partials\\header.twig");
    }
}
