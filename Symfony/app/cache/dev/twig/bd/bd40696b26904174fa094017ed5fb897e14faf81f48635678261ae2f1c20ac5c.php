<?php

/* NoxIntranetCommunicationBundle:News:noxLetters.html.twig */
class __TwigTemplate_65e104a77a46c2ffaaa9f84c5def9094a68f182c3a993957099bb9eb5ba095ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:News:noxLetters.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91facfe7d28fae16b12863c27ef22f9907e9044a9de5b7089689369364621670 = $this->env->getExtension("native_profiler");
        $__internal_91facfe7d28fae16b12863c27ef22f9907e9044a9de5b7089689369364621670->enter($__internal_91facfe7d28fae16b12863c27ef22f9907e9044a9de5b7089689369364621670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:News:noxLetters.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91facfe7d28fae16b12863c27ef22f9907e9044a9de5b7089689369364621670->leave($__internal_91facfe7d28fae16b12863c27ef22f9907e9044a9de5b7089689369364621670_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8819a26b9e8d5f4bcbd2893e1ca2f1b9727e487de823f8f3d2dbf196902fb2ce = $this->env->getExtension("native_profiler");
        $__internal_8819a26b9e8d5f4bcbd2893e1ca2f1b9727e487de823f8f3d2dbf196902fb2ce->enter($__internal_8819a26b9e8d5f4bcbd2893e1ca2f1b9727e487de823f8f3d2dbf196902fb2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Nox letters
";
        
        $__internal_8819a26b9e8d5f4bcbd2893e1ca2f1b9727e487de823f8f3d2dbf196902fb2ce->leave($__internal_8819a26b9e8d5f4bcbd2893e1ca2f1b9727e487de823f8f3d2dbf196902fb2ce_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b668505145dc0c3a6158cceb258faaca3c26c9b8480dbc3363ec031d94ffd5c9 = $this->env->getExtension("native_profiler");
        $__internal_b668505145dc0c3a6158cceb258faaca3c26c9b8480dbc3363ec031d94ffd5c9->enter($__internal_b668505145dc0c3a6158cceb258faaca3c26c9b8480dbc3363ec031d94ffd5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "NoxLetters";
        
        $__internal_b668505145dc0c3a6158cceb258faaca3c26c9b8480dbc3363ec031d94ffd5c9->leave($__internal_b668505145dc0c3a6158cceb258faaca3c26c9b8480dbc3363ec031d94ffd5c9_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_59b533e57774d9f56941c1a27ddc0025b8adb2b84007fb72dbab330740594f7a = $this->env->getExtension("native_profiler");
        $__internal_59b533e57774d9f56941c1a27ddc0025b8adb2b84007fb72dbab330740594f7a->enter($__internal_59b533e57774d9f56941c1a27ddc0025b8adb2b84007fb72dbab330740594f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'Gestionnaire de fichiers - Nox letters');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 21
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "lien", array(), "array"), "html", null, true);
            echo "', 'Nox Letters');\">
                <img 
                    src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>
                
                <li> Nom du fichier : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "nom", array(), "array"), "html", null, true);
            echo " </li>

                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 37
                echo "
                    ";
                // line 38
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 39
                echo "
                    ";
                // line 40
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 43
                echo "
                    ";
                // line 44
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 45
                echo "
                    ";
                // line 46
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 47
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
                <li> Posté le : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
";
        
        $__internal_59b533e57774d9f56941c1a27ddc0025b8adb2b84007fb72dbab330740594f7a->leave($__internal_59b533e57774d9f56941c1a27ddc0025b8adb2b84007fb72dbab330740594f7a_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:News:noxLetters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 57,  180 => 50,  177 => 49,  170 => 47,  164 => 46,  161 => 45,  155 => 44,  152 => 43,  146 => 42,  143 => 41,  137 => 40,  134 => 39,  128 => 38,  125 => 37,  121 => 36,  116 => 34,  107 => 28,  103 => 27,  99 => 26,  94 => 24,  89 => 21,  85 => 20,  82 => 19,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Nox letters*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}NoxLetters{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'Gestionnaire de fichiers - Nox letters');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new['lien'] }}', 'Nox Letters');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/*                 */
/*                 <li> Nom du fichier : {{ new['nom'] }} </li>*/
/* */
/*                 {% for propriete in new['proprietes'] %}*/
/* */
/*                     {% if propriete['label'] == 'Title' %} <li> Titre : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Author' %} <li> Auteur : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Subject' %} <li> Sujet : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Keywords' %} <li> Mots clés : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Pages' %} <li> Nombre de page(s) : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                 {% endfor %}*/
/* */
/*                 <li> Posté le : {{ new['dateEnvoi'] }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
