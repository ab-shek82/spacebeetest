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

/* __string_template__3efd23053d32862a8e97106e19c209aadcf2346c2d40b062cec6ecf9b37aef20 */
class __TwigTemplate_52ae1d7c76ab3838e196591a9e7aa24e7496ec66422647629460b5fc07528ecb extends \Twig\Template
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
        echo "<div class=\"conf-card\">
  <div class=\"conf-img\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 2, $this->source), "html", null, true);
        echo "</div>
  <div class=\"conf-info\">
   <div class=\"conf-info-det\">
   <h3>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
        echo "</h3>
   <div class=\"conf-tag\"><i class=\"fas fa-tags\"></i> ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conf_tags"] ?? null), 6, $this->source), "html", null, true);
        echo "</div>
   <div class=\"conf-tag\"><i class=\"fas fa-calendar-alt\"></i> ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_date"] ?? null), 7, $this->source), "html", null, true);
        echo "</div>
   <div class=\"conf-address\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_address"] ?? null), 8, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"conf-info-cta\">
  <div><a href=\"\"><i class=\"far fa-heart\"></i></a></div>
  <div><a href=\"\"><i class=\"fas fa-cloud-download\"></i></a></div>
  <div><a href=\"\"><i class=\"fas fa-share-alt\"></i></a></div>
  <div>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null), 14, $this->source), "html", null, true);
        echo "</div>
  </div>
  </div>
<div class=\"conf-price\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_price"] ?? null), 17, $this->source), "html", null, true);
        echo "</div>
<div class=\"conf-fturd\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_is_featured"] ?? null), 18, $this->source), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3efd23053d32862a8e97106e19c209aadcf2346c2d40b062cec6ecf9b37aef20";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  75 => 17,  69 => 14,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3efd23053d32862a8e97106e19c209aadcf2346c2d40b062cec6ecf9b37aef20", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
