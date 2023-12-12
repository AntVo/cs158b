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

/* @edux/template-parts/header/header.html.twig */
class __TwigTemplate_065414f0f5cfe289ace1f59d84442403ad52501fbf187782234f07dcfc60f83c extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 1) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 1)) || ($context["header_login_links"] ?? null))) {
            // line 2
            echo "  <div class=\"header-top\">
    <div class=\"container\">
      <div class=\"header-top-container\">
        ";
            // line 5
            $this->loadTemplate("@thex/template-parts/header/header-top-left.html.twig", "@edux/template-parts/header/header.html.twig", 5)->display($context);
            // line 6
            echo "        ";
            $this->loadTemplate("@thex/template-parts/header/header-top-right.html.twig", "@edux/template-parts/header/header.html.twig", 6)->display($context);
            // line 7
            echo "        ";
            if (($context["header_login_links"] ?? null)) {
                // line 8
                echo "          ";
                $this->loadTemplate("@edux/template-parts/header/header-login.html.twig", "@edux/template-parts/header/header.html.twig", 8)->display($context);
                // line 9
                echo "        ";
            }
            // line 10
            echo "      </div><!-- /header-top-container -->
    </div><!-- /container -->
  </div><!-- /header-top -->
";
        }
        // line 14
        echo "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17)) {
            // line 18
            echo "        <div class=\"site-brand\">
          ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
        </div> <!--/.site-branding -->
      ";
        }
        // line 22
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 22))) {
            // line 23
            echo "      <div class=\"header-right\">
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24)) {
                // line 25
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/header-primary-menu.html.twig", "@edux/template-parts/header/header.html.twig", 25)->display($context);
                // line 26
                echo "        ";
            }
            // line 27
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 27)) {
                // line 28
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@edux/template-parts/header/header.html.twig", 28)->display($context);
                // line 29
                echo "        ";
            }
            // line 30
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 32
        echo "    </div><!-- /header-container -->
  </div><!-- /container -->
</header><!-- /header -->";
    }

    public function getTemplateName()
    {
        return "@edux/template-parts/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  88 => 24,  85 => 23,  82 => 22,  76 => 19,  73 => 18,  71 => 17,  66 => 14,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/header/header.html.twig", "C:\\xampp\\htdocs\\drupal-9.5.7\\drupal-9.5.7\\themes\\edux\\templates\\template-parts\\header\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 5);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
