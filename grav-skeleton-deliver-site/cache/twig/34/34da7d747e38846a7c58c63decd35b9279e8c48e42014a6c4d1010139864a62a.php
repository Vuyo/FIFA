<?php

/* partials/search.html.twig */
class __TwigTemplate_75bb6534afd9e67b26bca79f7a3512568e2eb44d618ec136bd226fbcd8413ac0 extends Twig_Template
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
        echo "<form class=\"search-box\">
    <input type=\"search\" placeholder=\"Search...\" value=\"";
        // line 2
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
    <script>
    jQuery(document).ready(function(\$){
        var input = \$('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length > 3) {
                event.preventDefault();
                window.location.href = input.data('search-input') + ':' + input.val();
            }
        });
    });
    </script>
    <i class=\"fa fa-search\"></i>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"search-box\">
    <input type=\"search\" placeholder=\"Search...\" value=\"{{ query }}\" data-search-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
    <script>
    jQuery(document).ready(function(\$){
        var input = \$('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length > 3) {
                event.preventDefault();
                window.location.href = input.data('search-input') + ':' + input.val();
            }
        });
    });
    </script>
    <i class=\"fa fa-search\"></i>
</form>", "partials/search.html.twig", "/Applications/MAMP/htdocs/grav-skeleton-deliver-site/user/themes/deliver/templates/partials/search.html.twig");
    }
}
