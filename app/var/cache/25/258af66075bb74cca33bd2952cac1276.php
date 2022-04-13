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

/* contact.php */
class __TwigTemplate_f8a2113877e6c075803f660fa9d3138d extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>contact</title>
</head>
<body>

    ";
        // line 11
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "

    <form action=\"/contact-us\" method=\"post\">
    <div>
        <label for=\"name\">Nom :</label>
        <input type=\"text\" id=\"name\" name=\"name\">
    </div>
    <div>
        <label for=\"email\">e-mail&nbsp;:</label>
        <input type=\"email\" id=\"email\" name=\"email\">
    </div>
    <div><input type=\"submit\" value=\"create\"></div>
</form>

    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "contact.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>contact</title>
</head>
<body>

    {{ name }}

    <form action=\"/contact-us\" method=\"post\">
    <div>
        <label for=\"name\">Nom :</label>
        <input type=\"text\" id=\"name\" name=\"name\">
    </div>
    <div>
        <label for=\"email\">e-mail&nbsp;:</label>
        <input type=\"email\" id=\"email\" name=\"email\">
    </div>
    <div><input type=\"submit\" value=\"create\"></div>
</form>

    
</body>
</html>", "contact.php", "/var/www/html/src/Resources/views/contact.php");
    }
}
