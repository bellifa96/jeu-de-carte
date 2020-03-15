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

/* card/index.html.twig */
class __TwigTemplate_c0aa08f75ce6566485fc637abb8a96ab729191d5ffa65754774ed14067e2391d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CardController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
  .humain{
    border-color: #218BC3;
  }
    body{
        background-color: #28535e;
    }
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .card {
        width:300px;
        height:400px;
        background-color:rgb(100,100,100);
        border-radius:20px;
        border:1px solid black;
        box-shadow:0px 0px 10px #ccc;
        text-align:center;
        color:white;
    }
    .cardHeader {
        height:50px;
    }
    .cardHeader span {
        line-height:50px;
    }
    .cardImage {
        width:250px;
        height:250px;
        background-position:center center;
        background-size:cover;
        margin:20px auto;
    }
    .cardFooter {
        display:flex;
        flex-direction:row;
        justify-content: space-around;
    }
    .cardNumber {
        background-color:white;
        border-radius:50%;
        width:50px;
        height:50px;
        text-align:center;
        line-height:50px;
        float:left;
    }
</style>
<div class=\"example-wrapper\">
    <h1>Hello ✅ 😜</h1>

    This friendly message is coming from:
</div>
    <tr class=\"table-secondary\">ppppppppppppppppppppppppppppppppppppppppp</tr>

    <div class=\"container\">
        <div class=\"row\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 63
            echo "
        <div class=\"card ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["card"], "race", [], "any", false, false, false, 64), "getTitle", [], "any", false, false, false, 64), "html", null, true);
            echo "\"  style=\"margin:3% 3% 3% 3%;\">

            <form method=\"post\" action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 68))), "html", null, true);
            echo "\">
                <button class=\"btn fa\">Delete</button>
            </form>
            <div class=\"cardHeader\">
                <span> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>
                <span>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["card"], "race", [], "any", false, false, false, 73), "getTitle", [], "any", false, false, false, 73), "html", null, true);
            echo "  </span>
            </div>
            <div class=\"cardImage\" style=\"background-image: url('uploads/cards/";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 75), "html", null, true);
            echo "') ;background-repeat: no-repeat;background-position: center;background-size: cover;\">
            </div>
            <div class=\"cardFooter\">
                <div class=\"cardNumber\" style=\"color:blue\">  ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "mana", [], "any", false, false, false, 78), "html", null, true);
            echo " </div>
                <div class=\"cardNumber\" style=\"color:red\">  ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "damage", [], "any", false, false, false, 79), "html", null, true);
            echo " </div>
                <div class=\"cardNumber\" style=\"color:green\">  ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "hp", [], "any", false, false, false, 80), "html", null, true);
            echo " </div>
            </div>
        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  193 => 80,  189 => 79,  185 => 78,  179 => 75,  174 => 73,  170 => 72,  163 => 68,  158 => 66,  153 => 64,  150 => 63,  146 => 62,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CardController!{% endblock %}

{% block body %}
<style>
  .humain{
    border-color: #218BC3;
  }
    body{
        background-color: #28535e;
    }
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .card {
        width:300px;
        height:400px;
        background-color:rgb(100,100,100);
        border-radius:20px;
        border:1px solid black;
        box-shadow:0px 0px 10px #ccc;
        text-align:center;
        color:white;
    }
    .cardHeader {
        height:50px;
    }
    .cardHeader span {
        line-height:50px;
    }
    .cardImage {
        width:250px;
        height:250px;
        background-position:center center;
        background-size:cover;
        margin:20px auto;
    }
    .cardFooter {
        display:flex;
        flex-direction:row;
        justify-content: space-around;
    }
    .cardNumber {
        background-color:white;
        border-radius:50%;
        width:50px;
        height:50px;
        text-align:center;
        line-height:50px;
        float:left;
    }
</style>
<div class=\"example-wrapper\">
    <h1>Hello ✅ 😜</h1>

    This friendly message is coming from:
</div>
    <tr class=\"table-secondary\">ppppppppppppppppppppppppppppppppppppppppp</tr>

    <div class=\"container\">
        <div class=\"row\">
        {% for card in cards %}

        <div class=\"card {{card.race.getTitle}}\"  style=\"margin:3% 3% 3% 3%;\">

            <form method=\"post\" action=\"{{ path('card_delete', {'id': card.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ card.id) }}\">
                <button class=\"btn fa\">Delete</button>
            </form>
            <div class=\"cardHeader\">
                <span> {{ card.title }}</span>
                <span>{{card.race.getTitle}}  </span>
            </div>
            <div class=\"cardImage\" style=\"background-image: url('uploads/cards/{{card.image }}') ;background-repeat: no-repeat;background-position: center;background-size: cover;\">
            </div>
            <div class=\"cardFooter\">
                <div class=\"cardNumber\" style=\"color:blue\">  {{ card.mana }} </div>
                <div class=\"cardNumber\" style=\"color:red\">  {{ card.damage }} </div>
                <div class=\"cardNumber\" style=\"color:green\">  {{ card.hp }} </div>
            </div>
        </div>
            {% endfor %}
        </div></div>
{#
        {% for card in cards %}
            <tr style=\"\">
              Nom de la carte : {{ card.title }} <br>
              Race :  {{ card.race.getTitle }} <br>
              HP de la carte  :  {{ card.hp }}<br>
               dégat de la carte : {{ card.damage }}<br>
                cout en mana de la carte : {{ card.mana }}<br>
                {{ card.image }}
                <img src=\"/uploads/cards/{{card.image }}\">

            </tr>
        <br>
     {% endfor %}
        </ul>
        #}
{% endblock %}
", "card/index.html.twig", "/home/ouss/SymfonyMars/templates/card/index.html.twig");
    }
}
