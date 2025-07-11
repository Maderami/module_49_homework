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

/* about.twig */
class __TwigTemplate_8e3948af90b3ae86de1adca61fd7a7a3 extends Template
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
        yield "    <section class=\"py-3 py-md-5\">
        <div class=\"container\">
            <div class=\"row gy-3 gy-md-4 gy-lg-0 align-items-lg-center\">
                <div class=\"col-12 col-lg-6 col-xl-5\">
                    <img class=\"img-fluid rounded\" loading=\"lazy\"
                         src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__DIR__"] ?? null), "html", null, true);
        yield "/core/views/templates/resources/images/iconforabout.png\" alt=\"About 1\">
                </div>
                <div class=\"col-12 col-lg-6 col-xl-7\">
                    <div class=\"row justify-content-xl-center\">
                        <div class=\"col-12 col-xl-11\">
                            <h2 class=\"mb-3\">Кто я?</h2>
                            <p class=\"lead fs-4 text-secondary mb-3\">Сейчас работаю, учусь и еще раз учусь.</p>
                            <p class=\"mb-5\">Навыков много и еще раз много</p>
                            <div class=\"row gy-4 gy-md-0 gx-xxl-5X\">
                                <div class=\"col-12 col-md-6\">
                                    <div class=\"d-flex\">
                                        <div class=\"me-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\"
                                                 fill=\"currentColor\" class=\"bi bi-gear-fill\" viewBox=\"0 0 16 16\">
                                                <path d=\"M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z\"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class=\"h4 mb-3\">HardSkill</h2>
                                            <p class=\"text-secondary mb-0\">
                                            <ul>
                                            <li>PHP</li>
                                            <li>JS</li>
                                            <li>NGINX</li>
                                            <li>APACHE</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-6\">
                                    <div class=\"d-flex\">
                                        <div class=\"me-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\"
                                                 fill=\"currentColor\" class=\"bi bi-fire\" viewBox=\"0 0 16 16\">
                                                <path d=\"M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z\"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class=\"h4 mb-3\">SoftSkills</h2>
                                            <p class=\"text-secondary mb-0\">
                                            <ul>
                                                <li>Aris Express</li>
                                                <li>PGAdmin</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about.twig";
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
        return array (  65 => 9,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}
    <section class=\"py-3 py-md-5\">
        <div class=\"container\">
            <div class=\"row gy-3 gy-md-4 gy-lg-0 align-items-lg-center\">
                <div class=\"col-12 col-lg-6 col-xl-5\">
                    <img class=\"img-fluid rounded\" loading=\"lazy\"
                         src=\"{{ __DIR__ }}/core/views/templates/resources/images/iconforabout.png\" alt=\"About 1\">
                </div>
                <div class=\"col-12 col-lg-6 col-xl-7\">
                    <div class=\"row justify-content-xl-center\">
                        <div class=\"col-12 col-xl-11\">
                            <h2 class=\"mb-3\">Кто я?</h2>
                            <p class=\"lead fs-4 text-secondary mb-3\">Сейчас работаю, учусь и еще раз учусь.</p>
                            <p class=\"mb-5\">Навыков много и еще раз много</p>
                            <div class=\"row gy-4 gy-md-0 gx-xxl-5X\">
                                <div class=\"col-12 col-md-6\">
                                    <div class=\"d-flex\">
                                        <div class=\"me-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\"
                                                 fill=\"currentColor\" class=\"bi bi-gear-fill\" viewBox=\"0 0 16 16\">
                                                <path d=\"M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z\"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class=\"h4 mb-3\">HardSkill</h2>
                                            <p class=\"text-secondary mb-0\">
                                            <ul>
                                            <li>PHP</li>
                                            <li>JS</li>
                                            <li>NGINX</li>
                                            <li>APACHE</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-6\">
                                    <div class=\"d-flex\">
                                        <div class=\"me-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\"
                                                 fill=\"currentColor\" class=\"bi bi-fire\" viewBox=\"0 0 16 16\">
                                                <path d=\"M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z\"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class=\"h4 mb-3\">SoftSkills</h2>
                                            <p class=\"text-secondary mb-0\">
                                            <ul>
                                                <li>Aris Express</li>
                                                <li>PGAdmin</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "about.twig", "C:\\Users\\Yaroslav Stadnik\\Desktop\\Ярик\\SkillFactory\\module_49_homework\\core\\views\\templates\\about.twig");
    }
}
