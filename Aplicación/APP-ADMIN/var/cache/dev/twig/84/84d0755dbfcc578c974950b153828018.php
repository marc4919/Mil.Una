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

/* evento/index.html.twig */
class __TwigTemplate_e4f4e7d2f7967a75831a17d8910e8261 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html", "evento/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div class=\"container\">
<div class=\"row\">
<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\"
            role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Eventos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\"
            role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Contenidos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\"
            role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Empleos</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "TipoEvento", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "NombreEvento", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "DescripcionEvento", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_show", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_edit", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_new");
        echo "\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenidos"]) || array_key_exists("contenidos", $context) ? $context["contenidos"] : (function () { throw new RuntimeError('Variable "contenidos" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contenido"]) {
            // line 70
            echo "            <tr>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "TipoContenido", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "DescripcionContenido", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td><img style=\"width:50px\" src=\"uploads/contenido/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "EnlaceContenido", [], "any", false, false, false, 74), "html", null, true);
            echo "\"</td>
                <td>
                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_show", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_edit", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_new");
        echo "\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">IdEmpleo</th>
                <th scope=\"col\">NombreEmpleo</th>
                <th scope=\"col\">EmpresaEmpleo</th>
                <th scope=\"col\">EnlaceEmpleo</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleos"]) || array_key_exists("empleos", $context) ? $context["empleos"] : (function () { throw new RuntimeError('Variable "empleos" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empleo"]) {
            // line 104
            echo "            <tr>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "nombreEmpleo", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "empresaEmpleo", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "enlaceEmpleo", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_show", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_edit", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_new");
        echo "\">Create new</a>
        </div>
      </div>  
      </div>
      </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 122,  292 => 119,  283 => 115,  274 => 111,  270 => 110,  265 => 108,  261 => 107,  257 => 106,  253 => 105,  250 => 104,  245 => 103,  227 => 88,  222 => 85,  213 => 81,  204 => 77,  200 => 76,  195 => 74,  191 => 73,  187 => 72,  183 => 71,  180 => 70,  175 => 69,  157 => 54,  152 => 51,  143 => 47,  134 => 43,  130 => 42,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  101 => 34,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}
{% block content %}

<div class=\"container\">
<div class=\"row\">
<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\"
            role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Eventos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\"
            role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Contenidos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\"
            role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Empleos</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for evento in eventos %}
            <tr>
                <td>{{ evento.id }}</td>
                <td>{{ evento.TipoEvento }}</td>
                <td>{{ evento.NombreEvento }}</td>
                <td>{{ evento.DescripcionEvento }}</td>
                <td>{{ evento.FechaEvento ? evento.FechaEvento|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('evento_show', {'idEvento': evento.id}) }}\">show</a>
                    <a href=\"{{ path('evento_edit', {'idEvento': evento.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('evento_new') }}\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contenido in contenidos %}
            <tr>
                <td>{{ contenido.id }}</td>
                <td>{{ contenido.TipoContenido }}</td>
                <td>{{ contenido.DescripcionContenido }}</td>
                <td><img style=\"width:50px\" src=\"uploads/contenido/{{ contenido.EnlaceContenido }}\"</td>
                <td>
                    <a href=\"{{ path('contenido_show', {'idContenido': contenido.id}) }}\">show</a>
                    <a href=\"{{ path('contenido_edit', {'idContenido': contenido.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('contenido_new') }}\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">IdEmpleo</th>
                <th scope=\"col\">NombreEmpleo</th>
                <th scope=\"col\">EmpresaEmpleo</th>
                <th scope=\"col\">EnlaceEmpleo</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% for empleo in empleos %}
            <tr>
                <td>{{ empleo.id }}</td>
                <td>{{ empleo.nombreEmpleo }}</td>
                <td>{{ empleo.empresaEmpleo }}</td>
                <td>{{ empleo.enlaceEmpleo }}</td>
                <td>
                    <a href=\"{{ path('empleo_show', {'idEmpleo': empleo.id}) }}\">show</a>
                    <a href=\"{{ path('empleo_edit', {'idEmpleo': empleo.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('empleo_new') }}\">Create new</a>
        </div>
      </div>  
      </div>
      </div>
{% endblock %}
", "evento/index.html.twig", "C:\\Users\\joloca03\\Desktop\\MilUna\\Aplicación\\APP-ADMIN\\templates\\evento\\index.html.twig");
    }
}
