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

/* @admin/default_frame.twig */
class __TwigTemplate_1f48a53e3af1a411edde3c78f19737df6f19e8ee24667178c0a6c1e1e77e87e6 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        $this->displayBlock("sub_title", $context, $blocks);
        echo " ";
        $this->displayBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css", "admin"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin.bundle.js", "bundle"), "html", null, true);
        echo "\"></script>
    ";
        // line 24
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 25
        echo "    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 35
        echo "    ";
        if (array_key_exists("plugin_assets", $context)) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_assets"] ?? null)]);
        }
        // line 36
        echo "</head>
<body id=\"page_";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37), "html", null, true);
        echo "\">
<header class=\"c-headerBar\">
    <div class=\"c-headerBar__container\">
        <div class=\"c-headerBar__logo\">
            <h1><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo@2x.png", "admin"), "html", null, true);
        echo "\"></h1>
        </div>
        <a class=\"c-headerBar__toggleBtn\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></a>
        <a class=\"c-headerBar__shopTitle\" href=\"";
        // line 44
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" target=\"_blank\"><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 44), "html", null, true);
        echo "</span><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        <a class=\"c-headerBar__userMenu\"
           data-bs-container=\"body\"
           data-bs-toggle=\"popover\"
           data-bs-placement=\"bottom\"
           title=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.last_login"), "html", null, true);
        echo "\"
           data-bs-content=\"&lt;p&gt;";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "login_date", [], "any", false, false, false, 50)), "html", null, true);
        echo "&lt;/p&gt;&lt;a href='";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_change_password");
        echo "' class='btn btn-ec-regular w-100 mb-2'&gt;";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.change_password"), "html", null, true);
        echo "&lt;/a&gt;";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "two_factor_auth_enabled", [], "any", false, false, false, 50)) {
            echo "&lt;a href='";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_two_factor_auth_edit");
            echo "' class='btn btn-ec-regular w-100 mb-2'&gt;";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.two_factor_auth"), "html", null, true);
            echo "&lt;/a&gt;";
        }
        echo "&lt;a href='";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_logout");
        echo "' class='btn btn-ec-sub w-100'&gt;";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.logout"), "html", null, true);
        echo "&lt;/a&gt;\"
           data-bs-html=\"true\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.header.user_name", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51)]), "html", null, true);
        echo "</span><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
    </div>
</header>
<div class=\"c-container\">
    <div class=\"c-mainNavArea\">
        ";
        // line 56
        echo twig_include($this->env, $context, "@admin/nav.twig");
        echo "
    </div>
    <div class=\"c-curtain\"></div>
    <div class=\"c-contentsArea\">
        <div class=\"c-pageTitle\">
            <div class=\"c-pageTitle__titles\">
                <h2 class=\"c-pageTitle__title\">";
        // line 62
        $this->displayBlock("title", $context, $blocks);
        echo "</h2><span class=\"c-pageTitle__subTitle\">";
        $this->displayBlock("sub_title", $context, $blocks);
        echo "</span>
            </div>
        </div>

        ";
        // line 66
        echo twig_include($this->env, $context, "@admin/alert.twig");
        echo "

        ";
        // line 68
        $this->displayBlock('main', $context, $blocks);
        // line 69
        echo "
    </div>
</div>
";
        // line 72
        $this->loadTemplate("@common/lang.twig", "@admin/default_frame.twig", 72)->display($context);
        // line 73
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "admin"), "html", null, true);
        echo "\"></script>
";
        // line 74
        $this->displayBlock('javascript', $context, $blocks);
        // line 76
        if (array_key_exists("plugin_snippets", $context)) {
            // line 77
            echo "    ";
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_snippets"] ?? null)]);
            echo "
";
        }
        // line 79
        echo "</body>
</html>
";
    }

    // line 24
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 68
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@admin/default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 74,  216 => 68,  210 => 24,  204 => 79,  198 => 77,  196 => 76,  194 => 74,  189 => 73,  187 => 72,  182 => 69,  180 => 68,  175 => 66,  166 => 62,  157 => 56,  149 => 51,  129 => 50,  125 => 49,  115 => 44,  109 => 41,  102 => 37,  99 => 36,  94 => 35,  83 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 18,  55 => 17,  51 => 16,  43 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/default_frame.twig", "/var/www/html/src/Eccube/Resource/template/admin/default_frame.twig");
    }
}
