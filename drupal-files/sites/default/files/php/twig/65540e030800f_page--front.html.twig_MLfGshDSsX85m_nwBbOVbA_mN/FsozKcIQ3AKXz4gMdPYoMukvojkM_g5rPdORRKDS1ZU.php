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

/* themes/edux/templates/layout/page--front.html.twig */
class __TwigTemplate_9a5f7b417bb1a4cde2f1dd34511b1ec216451ad0069949880ac5fa08df64cda5 extends \Twig\Template
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
        $this->loadTemplate("@edux/template-parts/header/header.html.twig", "themes/edux/templates/layout/page--front.html.twig", 1)->display($context);
        // line 2
        if (($context["slider_show"] ?? null)) {
            // line 3
            echo "  ";
            $this->loadTemplate("@edux/template-parts/slider.html.twig", "themes/edux/templates/layout/page--front.html.twig", 3)->display($context);
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 5)) {
            // line 6
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/edux/templates/layout/page--front.html.twig", 6)->display($context);
        }
        // line 8
        echo "<div class=\"main-wrapper\">
  ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 9)) {
            // line 10
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/edux/templates/layout/page--front.html.twig", 10)->display($context);
            // line 11
            echo "  ";
        }
        // line 12
        echo "  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content front-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 16)) {
            // line 17
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/edux/templates/layout/page--front.html.twig", 17)->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"node-content\">
          ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 22)) {
            // line 23
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/edux/templates/layout/page--front.html.twig", 23)->display($context);
            // line 24
            echo "        ";
        }
        // line 25
        echo "      </main>
    ";
        // line 26
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 26))) {
            // line 27
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/edux/templates/layout/page--front.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 29))) {
            // line 30
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/edux/templates/layout/page--front.html.twig", 30)->display($context);
            // line 31
            echo "    ";
        }
        // line 32
        echo "    </div><!--/main-container -->
  </div><!--/container -->
  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 34)) {
            // line 35
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/edux/templates/layout/page--front.html.twig", 35)->display($context);
            // line 36
            echo "  ";
        }
        // line 37
        echo "</div><!--/main-wrapper -->
";
        // line 38
        $this->loadTemplate("@edux/template-parts/footer.html.twig", "themes/edux/templates/layout/page--front.html.twig", 38)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/edux/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  126 => 37,  123 => 36,  120 => 35,  118 => 34,  114 => 32,  111 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  86 => 22,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  70 => 16,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  49 => 6,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/edux/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\drupal-9.5.7\\drupal-9.5.7\\themes\\edux\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
