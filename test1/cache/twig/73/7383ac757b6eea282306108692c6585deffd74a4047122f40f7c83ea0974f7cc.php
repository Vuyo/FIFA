<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_003c6ac6a153013d984b92a41a1a3f3deafe9eafa0c436f99d4bd5e1b4150c7e extends Twig_Template
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
        echo " <section id=\"portfolio\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 10
            echo "            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal";
            // line 11
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "thumbnail", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>";
            // line 20
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 21
            echo $this->getAttribute($context["portfolio"], "subtitle", array());
            echo "</p>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>
</section>


 ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 32
            echo "    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>";
            // line 44
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
            // line 46
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "img", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", array());
            echo "\">
                            <p>";
            // line 47
            echo $this->getAttribute($context["portfolio"], "description", array());
            echo "</p>
                            <ul class=\"list-inline item-details\">
                                <li>Client:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 50
            echo $this->getAttribute($context["portfolio"], "client", array());
            echo "</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 54
            echo $this->getAttribute($context["portfolio"], "projectdate", array());
            echo "</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href=\"http://startbootstrap.com\">";
            // line 58
            echo $this->getAttribute($context["portfolio"], "category", array());
            echo "</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                        </div>
                    </div>
                </div>
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
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 58,  120 => 54,  113 => 50,  107 => 47,  101 => 46,  96 => 44,  80 => 32,  76 => 31,  69 => 26,  58 => 21,  54 => 20,  48 => 17,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <section id=\"portfolio\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for portfolio in page.header.portfolios %}
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"{{ page.media[portfolio.thumbnail].url }}\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>{{ portfolio.title }}</h4>
                    <p class=\"text-muted\">{{ portfolio.subtitle }}</p>
                </div>
            </div>

        {% endfor %}
    </div>
</div>
</section>


 {% for portfolio in page.header.portfolios %}
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>{{ portfolio.title }}</h2>
                            <hr class=\"star-primary\">
                            <img src=\"{{ page.media[portfolio.img].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                            <p>{{ portfolio.description }}</p>
                            <ul class=\"list-inline item-details\">
                                <li>Client:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.client }}</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.projectdate }}</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.category }}</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "modular/portfolio.html.twig", "/Applications/MAMP/htdocs/test1/user/themes/agency/templates/modular/portfolio.html.twig");
    }
}
