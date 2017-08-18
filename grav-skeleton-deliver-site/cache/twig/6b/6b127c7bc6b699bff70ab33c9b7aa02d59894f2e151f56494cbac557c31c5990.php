<?php

/* modular/text.html.twig */
class __TwigTemplate_2fbdad47a26ca8c5bc52eaca79fc5c1282dd2ff1fa6d078875c644233f22d2b8 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
 ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
 ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "pricing", array())) {
            // line 4
            echo "    <div class=\"pricing-container\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "pricing", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "            <div class=\"pricing-item\">
                <div class=\"name\">";
                // line 7
                echo $this->getAttribute($context["item"], "name", array());
                echo "</div>
                <div class=\"price\">";
                // line 8
                echo $this->getAttribute($context["item"], "price", array());
                echo "</div>
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 10
                    echo "                    <div class=\"info\">
                        ";
                    // line 11
                    echo $this->getAttribute($context["line"], "line", array());
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                <div class=\"foot\">
                    <a class=\"button\" href=\"";
                // line 15
                echo $this->getAttribute($context["item"], "button_url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "button_text", array());
                echo "</a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>    
";
        }
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array())) {
            // line 22
            echo "    <div class=\"notebooks\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                // line 24
                echo "            <div class=\"notebook\">
                <a href=\"#portfolioModal";
                // line 25
                echo $this->getAttribute($context["portfolio"], "modalid", array());
                echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class='screen'><div class=\"screen-content\" style=\"background-image: url(";
                // line 26
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
                echo ")\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                </a>
                <div class='keyboard'></div>
                <h4>";
                // line 29
                echo $this->getAttribute($context["portfolio"], "title", array());
                echo "</h4>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
";
        }
        // line 34
        echo "

<div class=\"callout-line\"></div>
</div>

";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 40
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 44
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h1>
                <a href=\"";
            // line 45
            echo $this->getAttribute($context["portfolio"], "url", array());
            echo "\">
                    <img src=\"";
            // line 46
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", array());
            echo "\">
                </a>
                <p>";
            // line 48
            echo $this->getAttribute($context["portfolio"], "desc", array());
            echo "</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"";
            // line 52
            echo $this->getAttribute($context["portfolio"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["portfolio"], "client", array());
            echo "</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            ";
            // line 57
            echo $this->getAttribute($context["portfolio"], "date", array());
            echo "
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            ";
            // line 62
            echo $this->getAttribute($context["portfolio"], "category", array());
            echo "
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  167 => 57,  157 => 52,  150 => 48,  143 => 46,  139 => 45,  135 => 44,  127 => 40,  123 => 39,  116 => 34,  112 => 32,  103 => 29,  97 => 26,  93 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 21,  77 => 19,  65 => 15,  62 => 14,  53 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row callout\">
 {{ content }}
 {% if page.header.pricing %}
    <div class=\"pricing-container\">
        {% for item in page.header.pricing %}
            <div class=\"pricing-item\">
                <div class=\"name\">{{ item.name }}</div>
                <div class=\"price\">{{ item.price }}</div>
                {% for line in item.options %}
                    <div class=\"info\">
                        {{ line.line }}
                    </div>
                {% endfor %}
                <div class=\"foot\">
                    <a class=\"button\" href=\"{{ item.button_url }}\">{{ item.button_text }}</a>
                </div>
            </div>
        {% endfor %}
    </div>    
{% endif %}
{% if page.header.portfolio %}
    <div class=\"notebooks\">
        {% for portfolio in page.header.portfolio %}
            <div class=\"notebook\">
                <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class='screen'><div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].url }})\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                </a>
                <div class='keyboard'></div>
                <h4>{{ portfolio.title }}</h4>
            </div>
        {% endfor %}
    </div>
{% endif %}


<div class=\"callout-line\"></div>
</div>

{% for portfolio in page.header.portfolio %}
    <div class=\"portfolio-modal modal\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>{{ portfolio.title }}</h1>
                <a href=\"{{ portfolio.url }}\">
                    <img src=\"{{ page.media[portfolio.image].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                </a>
                <p>{{ portfolio.desc }}</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"{{ portfolio.url }}\">{{ portfolio.client }}</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            {{ portfolio.date }}
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            {{ portfolio.category }}
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
{% endfor %}", "modular/text.html.twig", "/Applications/MAMP/htdocs/grav-skeleton-deliver-site/user/themes/deliver/templates/modular/text.html.twig");
    }
}
