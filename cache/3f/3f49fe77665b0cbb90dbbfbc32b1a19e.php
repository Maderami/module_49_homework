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

/* partials/footer.twig */
class __TwigTemplate_69f6312a0d6f86014e0b4875ce01f8c6 extends Template
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
        yield "<footer class=\"py-5 container\">
    <div class=\"row\">
        <div class=\"col-6 col-md-2 mb-3\"><h5>Section</h5>
            <ul class=\"nav flex-column\">
                <li class=\"nav-item mb-2\"><a href=\"/home\" class=\"nav-link p-0 text-body-secondary\">Главная</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/about\" class=\"nav-link p-0 text-body-secondary\">О нас</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/contacts\" class=\"nav-link p-0 text-body-secondary\">Контакты</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/generateimage\" class=\"nav-link p-0 text-body-secondary\">Генерация
                        изображения</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/phpinfo\" class=\"nav-link p-0 text-body-secondary\">Информация о
                        GD</a></li>
            </ul>
        </div>
    </div>
    <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\"><p>
            &copy; ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Сайт-визитка. Все права защищены.</p>
    </div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.twig";
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
        return array (  59 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"py-5 container\">
    <div class=\"row\">
        <div class=\"col-6 col-md-2 mb-3\"><h5>Section</h5>
            <ul class=\"nav flex-column\">
                <li class=\"nav-item mb-2\"><a href=\"/home\" class=\"nav-link p-0 text-body-secondary\">Главная</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/about\" class=\"nav-link p-0 text-body-secondary\">О нас</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/contacts\" class=\"nav-link p-0 text-body-secondary\">Контакты</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/generateimage\" class=\"nav-link p-0 text-body-secondary\">Генерация
                        изображения</a></li>
                <li class=\"nav-item mb-2\"><a href=\"/phpinfo\" class=\"nav-link p-0 text-body-secondary\">Информация о
                        GD</a></li>
            </ul>
        </div>
    </div>
    <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\"><p>
            &copy; {{ \"now\"|date(\"Y\") }} Сайт-визитка. Все права защищены.</p>
    </div>
</footer>", "partials/footer.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\partials\\footer.twig");
    }
}
