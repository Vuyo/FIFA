<?php

/* modular/bottom.html.twig */
class __TwigTemplate_0de6a68cfe5db12a3eeb46ff2a6026047afeffacc4f066b1437d35ed35bcf4e1 extends Twig_Template
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
        // line 1
        echo "<div class=\"modular-row bottom ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "    <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array()) == "borderbottom")) {
            // line 7
            echo "    <hr>
    ";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array())) {
            // line 10
            echo "    <div class=\"services\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 12
                echo "        <div class=\"service\">
            <i class=\"fa fa-";
                // line 13
                echo $this->getAttribute($context["service"], "icon", array());
                echo "\"></i>
            <h4>";
                // line 14
                echo $this->getAttribute($context["service"], "title", array());
                echo "</h4>
            <p>";
                // line 15
                echo $this->getAttribute($context["service"], "desc", array());
                echo "</p>
        </div>    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>  
    ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  84 => 18,  75 => 15,  71 => 14,  67 => 13,  64 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 7,  47 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row bottom {{ page.header.class }}\">
    {{ content }}
    {% for button in page.header.buttons %}
    <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    {% if page.header.class == 'borderbottom' %}
    <hr>
    {% endif %}
    {% if page.header.services %}
    <div class=\"services\">
        {% for service in page.header.services %}
        <div class=\"service\">
            <i class=\"fa fa-{{ service.icon }}\"></i>
            <h4>{{ service.title }}</h4>
            <p>{{ service.desc }}</p>
        </div>    
        {% endfor %}
    </div>  
    {% endif %}
</div>
", "modular/bottom.html.twig", "/Applications/MAMP/htdocs/grav-skeleton-deliver-site/user/themes/deliver/templates/modular/bottom.html.twig");
    }
}
