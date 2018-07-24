<?php

/* modules/contrib/geolocation/templates/geolocation-common-map-display.html.twig */
class __TwigTemplate_80a33ec6834d301684a2df02565d56af03da5e284ec9a49af3c76a077bcdd623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "for" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" class=\"geolocation-common-map\"  ";
        if (((( !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lat_north_east", array())) &&  !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lng_north_east", array()))) &&  !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lat_south_west", array()))) &&  !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lng_south_west", array())))) {
            echo " data-centre-lat-north-east=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lat_north_east", array()), "html", null, true));
            echo "\" data-centre-lng-north-east=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lng_north_east", array()), "html", null, true));
            echo "\" data-centre-lat-south-west=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lat_south_west", array()), "html", null, true));
            echo "\" data-centre-lng-south-west=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lng_south_west", array()), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if (( !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lat", array())) &&  !twig_test_empty($this->getAttribute(($context["centre"] ?? null), "lng", array())))) {
            echo " data-centre-lat=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lat", array()), "html", null, true));
            echo "\" data-centre-lng=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["centre"] ?? null), "lng", array()), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty(($context["fitbounds"] ?? null))) {
            echo " data-fitbounds=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fitbounds"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty(($context["clientlocation"] ?? null))) {
            echo " data-clientlocation=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["clientlocation"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <div class=\"geolocation-common-map-locations\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["location"], "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </div>
    <div class=\"geolocation-common-map-container\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-common-map-display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 6,  85 => 4,  81 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/geolocation/templates/geolocation-common-map-display.html.twig", "/var/www/html/web/modules/contrib/geolocation/templates/geolocation-common-map-display.html.twig");
    }
}
