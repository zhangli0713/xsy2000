<?php

/* TopxiaWebBundle:Group:new-group-list.html.twig */
class __TwigTemplate_c91937a0554389e9f1385cbf771b0bd2cac351e2a0bd76ce3c032bf04da3f7e0 extends Twig_Template
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
        if (isset($context["newGroups"])) { $_newGroups_ = $context["newGroups"]; } else { $_newGroups_ = null; }
        if ($_newGroups_) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新晋小组"), "html", null, true);
            echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
        ";
            // line 6
            if (isset($context["newGroups"])) { $_newGroups_ = $context["newGroups"]; } else { $_newGroups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_newGroups_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 7
                echo "          ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) <= 3)) {
                    // line 8
                    echo "          <div class=\"media media-group\">
            <div class=\"media-left\">
              <a href=\"";
                    // line 10
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 11
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_group_, "logo", array()), "group.png"), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\" class=\"avatar-square-md\">
              </a>
            </div>
            <div class=\"media-body\">
              <div class=\"title\">
                <a class=\"gray-darker\" href=\"";
                    // line 16
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_group_, "title", array()), 9);
                    echo "</a>
              </div>
              <div class=\"metas\">
                <span><i class=\"es-icon es-icon-people\"></i>";
                    // line 19
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum", array()), "html", null, true);
                    echo "</span>
                <span><i class=\"es-icon es-icon-textsms\"></i>";
                    // line 20
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum", array()), "html", null, true);
                    echo "</span>
              </div>
            </div>
          </div>
          ";
                }
                // line 25
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:new-group-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  104 => 25,  95 => 20,  90 => 19,  77 => 16,  65 => 11,  57 => 10,  53 => 8,  49 => 7,  31 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
