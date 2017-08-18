<?php

/* modular/services.html.twig */
class __TwigTemplate_c1399618c210c0bda47a9e677c5e497fe5810c276d1268927b397d96fb37bb6c extends Twig_Template
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
        echo "<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "            <div class=\"col-md-4\">
                ";
            // line 11
            if ($this->getAttribute($context["service"], "icon", array())) {
                // line 12
                echo "                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-";
                // line 14
                echo $this->getAttribute($context["service"], "icon", array());
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                ";
            }
            // line 17
            echo "                ";
            if ($this->getAttribute($context["service"], "header", array())) {
                // line 18
                echo "                    <h4 class=\"service-heading\">";
                echo $this->getAttribute($context["service"], "header", array());
                echo "</h4>
                ";
            }
            // line 20
            echo "                ";
            if ($this->getAttribute($context["service"], "text", array())) {
                // line 21
                echo "                    <p class=\"text-muted\">";
                echo $this->getAttribute($context["service"], "text", array());
                echo "</p>
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  69 => 23,  63 => 21,  60 => 20,  54 => 18,  51 => 17,  45 => 14,  41 => 12,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row text-center\">
        {% for service in page.header.services %}
            <div class=\"col-md-4\">
                {% if service.icon %}
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-{{ service.icon }} fa-stack-1x fa-inverse\"></i>
                    </span>
                {% endif %}
                {% if service.header %}
                    <h4 class=\"service-heading\">{{ service.header }}</h4>
                {% endif %}
                {% if service.text %}
                    <p class=\"text-muted\">{{ service.text }}</p>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
</section>
", "modular/services.html.twig", "/Applications/MAMP/htdocs/test1/user/themes/agency/templates/modular/services.html.twig");
    }
}
