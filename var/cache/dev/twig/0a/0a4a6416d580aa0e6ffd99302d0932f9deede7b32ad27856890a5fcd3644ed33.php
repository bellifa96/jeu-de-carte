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

/* race/new.html.twig */
class __TwigTemplate_d3822a328006cd720c7ebf0627c6484a91e8bfa96b25790dc6a5a614cdef7d4f extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "race/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "race/new.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<style>
  .card {
    width: 320px;
    height: 452px;
    background-color: #211799;
    background-image: url(https://images.pokemontcg.io/xy2/12_hires.png);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 8px;
    box-shadow: -3px -3px 3px 0 rgba(#26e6f7, 0.6), 3px 3px 3px 0 rgba(#f759e4, 0.6), 0 0 6px 2px rgba(#ffe759, 0.6),
    0 35px 25px -15px rgba(0, 0, 0, 0.5);
    position: relative;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    margin: 20px 10px;
  }

  .card > span {
    position: relative;
    top: 45%;
  }

  .card:before,
  .card:after {
    content: \"\";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background-image: linear-gradient(
      115deg,
      transparent 0%,
      rgb(0, 231, 255) 30%,
      rgb(255, 0, 231) 70%,
      transparent 100%
    );
    background-position: 0% 0%;
    background-repeat: no-repeat;
    background-size: 300% 300%;
    mix-blend-mode: color-dodge;
    opacity: 0.2;
    z-index: 1;
  // animation: holoGradient 15s ease infinite;
  }
  .card:after {
    background-image: url(\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/13471/sparkles.gif\");
    background-position: center;
    background-size: 180%;
    mix-blend-mode: color-dodge;
    opacity: 1;
    z-index: 2;
  // animation: holoSparkle 20s ease infinite;
  }

  .card.active:before {
    opacity: 1;
    animation: none;
    transition: none;
    background-image: linear-gradient(
      115deg,
      transparent 0%,
      transparent 25%,
      rgba(0, 231, 255,0.7) 45%,
      rgba(255, 0, 231,0.7) 55%,
      transparent 70%,
      transparent 100%
    );
  }
  .card:nth-of-type(1),
  .card:nth-of-type(2),
  .card:nth-of-type(3) {
    width: 160px;
    height: 226px;
    box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  }

  .card:nth-of-type(1),
  .card:nth-of-type(2),
  .card:nth-of-type(3) {
  &:before, &:after {
               animation: none;
               opacity: 1;
             }
  }
  .card:nth-of-type(1) {
  &:before, &:after { display: none; }
  }
  .card:nth-of-type(2) {
    background: none;
  &:before { display: none; }
  }
  .card:nth-of-type(3) {
    background: none;
  &:before { background-position: center; }
  &:after { display: none; }
  }

  .operator {
    display: inline-block;
    vertical-align: middle;
    font-size: 45px;
  }
  @keyframes holoSparkle {
    0% {
      opacity: 0;
    }
    12% {
      opacity: 1;
    }
    70% {
      opacity: 0.5;
    }
    95% {
      opacity: 0.2;
    }
  }

  @keyframes holoGradient {
    3% {
      opacity: 0;
    }
    5% {
      background-position: 0% 0%;
    }
    7% {
      opacity: 0.5;
    }
    9% {
      background-position: 100% 100%;
    }
    11% {
      opacity: 0;
    }
    50% {
      opacity: 0;
      background-position: 100% 100%;
    }
    55% {
      opacity: 0.3;
    }
    70% {
      opacity: 0;
      background-position: 0% 0%;
    }
  }

  body {
    color: white;
    background: #333844;
    font-family: \"Heebo\", sans-serif;
    display: flex;
    justify-content: center;
    vertical-align: middle;
    height: 100%;
    text-align: center;
  }
  html {
    height: 100%;
  }

  h1 {
    display: block;
    margin-top: 30px;
    margin-bottom: 5px;
  }

  p {
    margin-top: 5px;
    font-weight: 200;
  }
</style>
<script>
  /*

  using
    - an animated gif of sparkles.
    - an animated gradient as a holo effect.
    - color-dodge blend mode

  this could be enhanced with some 3d effects
  which change the background positions

*/

  var \$cards = \$(\".card\");
  var \$style = \$(\".hover\");
  \$cards.on(\"mousemove\", function(e) {
    var \$card = \$(this);
    var l = e.offsetX;
    var t = e.offsetY;
    var h = \$card.height();
    var w = \$card.width();
    var lp = Math.abs(Math.floor(100 / w * l)-100);
    var tp = Math.abs(Math.floor(100 / h * t)-100);
    var bg = `background-position: \${lp}% \${tp}%;`
    var style = `.card.active:before { \${bg} }`
    \$cards.removeClass(\"active\");
    \$card.addClass(\"active\");
    \$style.html(style);
  }).on(\"mouseout\", function() {
    \$cards.removeClass(\"active\");
  });
</script>
<body>

<main id=app>

  <h1>Pokemon Card, Holo Effect</h1>
  <p>I've had to disable animation effect, as it seems there's a bug in Chromium with animations and mix-blend-mode rendering conflicts</p>



  <div class=\"card\"></div>

  <style class=\"hover\"></style>

</main>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "race/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>

</head>
<style>
  .card {
    width: 320px;
    height: 452px;
    background-color: #211799;
    background-image: url(https://images.pokemontcg.io/xy2/12_hires.png);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 8px;
    box-shadow: -3px -3px 3px 0 rgba(#26e6f7, 0.6), 3px 3px 3px 0 rgba(#f759e4, 0.6), 0 0 6px 2px rgba(#ffe759, 0.6),
    0 35px 25px -15px rgba(0, 0, 0, 0.5);
    position: relative;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    margin: 20px 10px;
  }

  .card > span {
    position: relative;
    top: 45%;
  }

  .card:before,
  .card:after {
    content: \"\";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background-image: linear-gradient(
      115deg,
      transparent 0%,
      rgb(0, 231, 255) 30%,
      rgb(255, 0, 231) 70%,
      transparent 100%
    );
    background-position: 0% 0%;
    background-repeat: no-repeat;
    background-size: 300% 300%;
    mix-blend-mode: color-dodge;
    opacity: 0.2;
    z-index: 1;
  // animation: holoGradient 15s ease infinite;
  }
  .card:after {
    background-image: url(\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/13471/sparkles.gif\");
    background-position: center;
    background-size: 180%;
    mix-blend-mode: color-dodge;
    opacity: 1;
    z-index: 2;
  // animation: holoSparkle 20s ease infinite;
  }

  .card.active:before {
    opacity: 1;
    animation: none;
    transition: none;
    background-image: linear-gradient(
      115deg,
      transparent 0%,
      transparent 25%,
      rgba(0, 231, 255,0.7) 45%,
      rgba(255, 0, 231,0.7) 55%,
      transparent 70%,
      transparent 100%
    );
  }
  .card:nth-of-type(1),
  .card:nth-of-type(2),
  .card:nth-of-type(3) {
    width: 160px;
    height: 226px;
    box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  }

  .card:nth-of-type(1),
  .card:nth-of-type(2),
  .card:nth-of-type(3) {
  &:before, &:after {
               animation: none;
               opacity: 1;
             }
  }
  .card:nth-of-type(1) {
  &:before, &:after { display: none; }
  }
  .card:nth-of-type(2) {
    background: none;
  &:before { display: none; }
  }
  .card:nth-of-type(3) {
    background: none;
  &:before { background-position: center; }
  &:after { display: none; }
  }

  .operator {
    display: inline-block;
    vertical-align: middle;
    font-size: 45px;
  }
  @keyframes holoSparkle {
    0% {
      opacity: 0;
    }
    12% {
      opacity: 1;
    }
    70% {
      opacity: 0.5;
    }
    95% {
      opacity: 0.2;
    }
  }

  @keyframes holoGradient {
    3% {
      opacity: 0;
    }
    5% {
      background-position: 0% 0%;
    }
    7% {
      opacity: 0.5;
    }
    9% {
      background-position: 100% 100%;
    }
    11% {
      opacity: 0;
    }
    50% {
      opacity: 0;
      background-position: 100% 100%;
    }
    55% {
      opacity: 0.3;
    }
    70% {
      opacity: 0;
      background-position: 0% 0%;
    }
  }

  body {
    color: white;
    background: #333844;
    font-family: \"Heebo\", sans-serif;
    display: flex;
    justify-content: center;
    vertical-align: middle;
    height: 100%;
    text-align: center;
  }
  html {
    height: 100%;
  }

  h1 {
    display: block;
    margin-top: 30px;
    margin-bottom: 5px;
  }

  p {
    margin-top: 5px;
    font-weight: 200;
  }
</style>
<script>
  /*

  using
    - an animated gif of sparkles.
    - an animated gradient as a holo effect.
    - color-dodge blend mode

  this could be enhanced with some 3d effects
  which change the background positions

*/

  var \$cards = \$(\".card\");
  var \$style = \$(\".hover\");
  \$cards.on(\"mousemove\", function(e) {
    var \$card = \$(this);
    var l = e.offsetX;
    var t = e.offsetY;
    var h = \$card.height();
    var w = \$card.width();
    var lp = Math.abs(Math.floor(100 / w * l)-100);
    var tp = Math.abs(Math.floor(100 / h * t)-100);
    var bg = `background-position: \${lp}% \${tp}%;`
    var style = `.card.active:before { \${bg} }`
    \$cards.removeClass(\"active\");
    \$card.addClass(\"active\");
    \$style.html(style);
  }).on(\"mouseout\", function() {
    \$cards.removeClass(\"active\");
  });
</script>
<body>

<main id=app>

  <h1>Pokemon Card, Holo Effect</h1>
  <p>I've had to disable animation effect, as it seems there's a bug in Chromium with animations and mix-blend-mode rendering conflicts</p>



  <div class=\"card\"></div>

  <style class=\"hover\"></style>

</main>

</body>
</html>
", "race/new.html.twig", "/home/ouss/SymfonyMars/templates/race/new.html.twig");
    }
}
