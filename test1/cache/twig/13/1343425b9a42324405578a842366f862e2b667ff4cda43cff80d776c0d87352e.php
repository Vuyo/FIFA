<?php

/* modular/form.html.twig */
class __TwigTemplate_ba91af51ba62856286a5aa324480a83f0e2c5296875e1a532c02d5b5d3ffa0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"contact\">
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
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
            echo "<div class=\"alert notices ";
            echo (($this->getAttribute(($context["form"] ?? null), "message_color", array())) ? ($this->getAttribute(($context["form"] ?? null), "message_color", array())) : ("green"));
            echo "\"><p>";
            echo $this->getAttribute(($context["form"] ?? null), "message", array());
            echo "</p></div>";
        }
        // line 11
        $context["multipart"] = "";
        // line 12
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 15
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 16
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 17
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        // line 20
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 24
        echo "
<form name=\"";
        // line 25
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\"
      method=\"";
        // line 27
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 28
        $this->displayBlock('form_classes', $context, $blocks);
        // line 31
        echo ">

  <div class=\"col-md-6\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            echo "      ";
            if (($this->getAttribute($context["field"], "position", array()) == "left")) {
                // line 36
                echo "        ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 37
                echo "        <div class=\"form-group\">
          ";
                // line 38
                try {
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "modular/form.html.twig", 38)->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 39
                echo "        </div>
      ";
            }
            // line 40
            echo "  
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </div>
  <div class=\"col-md-6\">
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 45
            echo "      ";
            if (($this->getAttribute($context["field"], "position", array()) == "right")) {
                // line 46
                echo "        ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 47
                echo "        <div class=\"form-group\">
          ";
                // line 48
                try {
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "modular/form.html.twig", 48)->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 49
                echo "        </div>
      ";
            }
            // line 50
            echo "  
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </div>

  <div class=\"col-lg-12 text-center\">
      <div class=\"form-group\">
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 57
            echo "          <button 
            ";
            // line 58
            $this->displayBlock('button_classes', $context, $blocks);
            // line 61
            echo "            type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"
            >";
            // line 62
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "</button>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      </div>
  </div>

  ";
        // line 67
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 28
    public function block_form_classes($context, array $blocks = array())
    {
        // line 29
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "classes", array());
            echo "\"";
        }
        // line 30
        echo "      ";
    }

    // line 58
    public function block_button_classes($context, array $blocks = array())
    {
        // line 59
        echo "            class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", array()), "button")) : ("button"));
        echo "\"
            ";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 59,  285 => 58,  281 => 30,  274 => 29,  271 => 28,  264 => 67,  259 => 64,  243 => 62,  238 => 61,  236 => 58,  233 => 57,  216 => 56,  210 => 52,  195 => 50,  191 => 49,  184 => 48,  181 => 47,  178 => 46,  175 => 45,  158 => 44,  154 => 42,  139 => 40,  135 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  102 => 34,  97 => 31,  95 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 22,  72 => 21,  70 => 20,  67 => 19,  60 => 17,  57 => 16,  54 => 15,  50 => 14,  47 => 13,  45 => 12,  43 => 11,  35 => 10,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        {{ content }}
      </div>
    </div>
    <div class=\"row\">

{% if form.message %}<div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message }}</p></div>{% endif %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : page.url %}
{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  <div class=\"col-md-6\">
    {% for field in form.fields %}
      {% if field.position == 'left' %}
        {% set value = form.value(field.name) %}
        <div class=\"form-group\">
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        </div>
      {% endif %}  
    {% endfor %}
  </div>
  <div class=\"col-md-6\">
    {% for field in form.fields %}
      {% if field.position == 'right' %}
        {% set value = form.value(field.name) %}
        <div class=\"form-group\">
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        </div>
      {% endif %}  
    {% endfor %}
  </div>

  <div class=\"col-lg-12 text-center\">
      <div class=\"form-group\">
        {% for button in form.buttons %}
          <button 
            {% block button_classes %}
            class=\"{{ button.classes|default('button') }}\"
            {% endblock %}
            type=\"{{ button.type|default('submit') }}\"
            >{{ button.value|t|default('Submit') }}</button>
        {% endfor %}
      </div>
  </div>

  {{ nonce_field('form', 'form-nonce') }}
</form>
", "modular/form.html.twig", "/Applications/MAMP/htdocs/test1/user/themes/agency/templates/modular/form.html.twig");
    }
}
