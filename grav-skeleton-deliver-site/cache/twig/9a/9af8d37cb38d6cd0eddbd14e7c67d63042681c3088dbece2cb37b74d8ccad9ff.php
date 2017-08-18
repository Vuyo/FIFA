<?php

/* modular/footer.html.twig */
class __TwigTemplate_2d1416e8723ce399ac42b0ed2918c9bcdcdacb16179aa59fc6d0f15e197c40b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'social' => array($this, 'block_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modular-row footer ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"";
        // line 5
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a></h3>
                ";
        // line 6
        $this->displayBlock('social', $context, $blocks);
        // line 9
        echo "
            </div>
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "description", array())) {
            // line 12
            echo "                <p>";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "description", array());
            echo "</p>
            ";
        }
        // line 14
        echo "        </div>
        <div class=\"footer-module\"><h4>";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "contact_title", array());
        echo "</h4>
            <p>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", array()), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                    <span>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </p>
            <p>";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "email", array());
        echo "</p>
            <p><strong>";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", array()), "gps", array());
        echo "</strong></p>
        </div>
        <div class=\"footer-module\"><h4>";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "links_title", array());
        echo "</h4>
         <ul class=\"quickmenu\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "quicklinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 27
            echo "                <li><i class=\"fa fa-chevron-right\"></i><a href=\"";
            if (twig_in_filter("base_url:", $this->getAttribute($context["module"], "url", array()))) {
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["module"], "url", array()), array("base_url:" => ""));
            } else {
                echo $this->getAttribute($context["module"], "url", array());
            }
            echo "\">";
            echo $this->getAttribute($context["module"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </div>
    <div class=\"footer-module\">
        <h4>";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "newsletter_title", array());
        echo "</h4>
        <p>";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "newsletter_description", array());
        echo "</p>

        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('https://feedburner.google.com/fb/a/mailverify?uri=";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "feedburner", array());
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\" class=\"newsletter\">
        <input type=\"text\" name=\"email\" value=\"Email\" onclick=\"if(this.value=='Email')this.value='';\" onblur=\"if(this.value=='')this.value='Email';\"/>
        <input type=\"hidden\" value=\"karolorzel\" name=\"uri\"/>
        <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
        <input type=\"submit\" value=\"OK\" />
        </form>
    </div>
</div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        ";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "copyright", array());
        echo "
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "othermenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 51
            echo "       <li><a href=\"";
            echo $this->getAttribute($context["module"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["module"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </ul>
    </div>
</div>
</div>";
    }

    // line 6
    public function block_social($context, array $blocks = array())
    {
        // line 7
        echo "                    ";
        $this->loadTemplate("partials/social.html.twig", "modular/footer.html.twig", 7)->display($context);
        // line 8
        echo "                ";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 8,  167 => 7,  164 => 6,  157 => 53,  146 => 51,  142 => 50,  135 => 46,  121 => 35,  116 => 33,  112 => 32,  107 => 29,  90 => 27,  86 => 26,  81 => 24,  76 => 22,  72 => 21,  69 => 20,  60 => 18,  56 => 17,  51 => 15,  48 => 14,  42 => 12,  40 => 11,  36 => 9,  34 => 6,  28 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row footer {{ page.header.class}}\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
                {% block social %}
                    {% include 'partials/social.html.twig' %}
                {% endblock %}

            </div>
            {% if site.footer.description %}
                <p>{{ site.footer.description }}</p>
            {% endif %}
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.contact_title }}</h4>
            <p>
                {% for item in site.contact.address %}
                    <span>{{ item.line }}</span>
                {% endfor %}
            </p>
            <p>{{ site.author.email }}</p>
            <p><strong>{{ site.contact.gps }}</strong></p>
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.links_title }}</h4>
         <ul class=\"quickmenu\">
            {% for module in site.quicklinks %}
                <li><i class=\"fa fa-chevron-right\"></i><a href=\"{% if \"base_url:\" in module.url %}{{ base_url_absolute }}/{{ module.url|replace({\"base_url:\": \"\"}) }}{% else %}{{ module.url }}{% endif %}\">{{  module.text }}</a></li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"footer-module\">
        <h4>{{ site.footer.newsletter_title }}</h4>
        <p>{{ site.footer.newsletter_description }}</p>

        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('https://feedburner.google.com/fb/a/mailverify?uri={{ site.footer.feedburner }}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\" class=\"newsletter\">
        <input type=\"text\" name=\"email\" value=\"Email\" onclick=\"if(this.value=='Email')this.value='';\" onblur=\"if(this.value=='')this.value='Email';\"/>
        <input type=\"hidden\" value=\"karolorzel\" name=\"uri\"/>
        <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
        <input type=\"submit\" value=\"OK\" />
        </form>
    </div>
</div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        {{ site.author.copyright }}
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    {% for module in site.othermenu %}
       <li><a href=\"{{ module.url }}\">{{  module.text }}</a></li>
    {% endfor %}
    </ul>
    </div>
</div>
</div>", "modular/footer.html.twig", "/Applications/MAMP/htdocs/grav-skeleton-deliver-site/user/themes/deliver/templates/modular/footer.html.twig");
    }
}
