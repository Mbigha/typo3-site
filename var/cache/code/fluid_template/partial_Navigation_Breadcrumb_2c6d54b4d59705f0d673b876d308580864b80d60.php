<?php

class partial_Navigation_Breadcrumb_2c6d54b4d59705f0d673b876d308580864b80d60 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section BreadcrumbTitle
 */
public function section_a63f4c38be1ff3ab1413e02ed6d0bb4cb075ea0d(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
        <span class="breadcrumb-icon">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['image'] = NULL;
$arguments31['src'] = NULL;
$arguments31['width'] = NULL;
$arguments31['height'] = NULL;
$array33 = array (
);$arguments31['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array33);
$array34 = array (
);$arguments31['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array34);
$array35 = array (
);$arguments31['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array35);

$output30 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                ';
return $output30;
};
$arguments28 = array();

$output27 .= '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['alt'] = NULL;
$arguments39['ismap'] = NULL;
$arguments39['longdesc'] = NULL;
$arguments39['usemap'] = NULL;
$arguments39['src'] = NULL;
$arguments39['treatIdAsReference'] = NULL;
$arguments39['image'] = NULL;
$arguments39['crop'] = NULL;
$arguments39['cropVariant'] = 'default';
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['minWidth'] = NULL;
$arguments39['minHeight'] = NULL;
$arguments39['maxWidth'] = NULL;
$arguments39['maxHeight'] = NULL;
$arguments39['absolute'] = false;
$array41 = array (
);$arguments39['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array41);
$array42 = array (
);$arguments39['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array42);
$array43 = array (
);$arguments39['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array43);
$array44 = array (
);$arguments39['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array44);
$array45 = array (
);$arguments39['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array45);

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                ';
return $output38;
};
$arguments36 = array();
$arguments36['if'] = NULL;

$output27 .= '';

$output27 .= '
            ';
return $output27;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array25);
$array24['1'] = ' === svg';

$expression26 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['image'] = NULL;
$arguments11['src'] = NULL;
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$array13 = array (
);$arguments11['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array13);
$array14 = array (
);$arguments11['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array14);
$array15 = array (
);$arguments11['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array15);

$output10 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['alt'] = NULL;
$arguments17['ismap'] = NULL;
$arguments17['longdesc'] = NULL;
$arguments17['usemap'] = NULL;
$arguments17['src'] = NULL;
$arguments17['treatIdAsReference'] = NULL;
$arguments17['image'] = NULL;
$arguments17['crop'] = NULL;
$arguments17['cropVariant'] = 'default';
$arguments17['width'] = NULL;
$arguments17['height'] = NULL;
$arguments17['minWidth'] = NULL;
$arguments17['minHeight'] = NULL;
$arguments17['maxWidth'] = NULL;
$arguments17['maxHeight'] = NULL;
$arguments17['absolute'] = false;
$array19 = array (
);$arguments17['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array19);
$array20 = array (
);$arguments17['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array20);
$array21 = array (
);$arguments17['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array21);
$array22 = array (
);$arguments17['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array22);
$array23 = array (
);$arguments17['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array23);

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                ';
return $output16;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        </span>
    ';
return $output7;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.enable', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array5);

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <span class="breadcrumb-text">';
$array46 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array46)]);

$output0 .= '</span>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output47 = '';

$output47 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
        <nav class="breadcrumb-section" aria-label="breadcrumb">
            <div class="container">
                <p class="sr-only" id="breadcrumb">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'breadcrumb';
$arguments60['extensionName'] = 'bootstrap_package';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '</p>
                <ol class="breadcrumb">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                        <li class="breadcrumb-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['then'] = ' active';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['then'] = ' aria-current="page"';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output65 .= '>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['section'] = 'BreadcrumbTitle';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array110);
$array111 = array (
);$array109['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array111);
$arguments107['arguments'] = $array109;

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                                    <a class="breadcrumb-link" href="';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array115)]);

$output114 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$output121 = '';

$output121 .= ' target="';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array122)]);

$output121 .= '"';
$arguments116['then'] = $output121;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output114 .= ' title="';
$array123 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array123)]);

$output114 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['section'] = NULL;
$arguments124['partial'] = NULL;
$arguments124['delegate'] = NULL;
$arguments124['renderable'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$arguments124['default'] = NULL;
$arguments124['contentAs'] = NULL;
$arguments124['debug'] = true;
$arguments124['section'] = 'BreadcrumbTitle';
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array127);
$array128 = array (
);$array126['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array128);
$arguments124['arguments'] = $array126;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output114 .= '
                                    </a>
                                ';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output103 .= '';

$output103 .= '
                            ';
return $output103;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array100);
$array99['1'] = ' && ';
$array101 = array (
);$array99['2'] = $renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array101);
$array99['3'] = ' == \'\'';

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == ''));};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['debug'] = true;
$arguments79['section'] = 'BreadcrumbTitle';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array82);
$array83 = array (
);$array81['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array83);
$arguments79['arguments'] = $array81;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                                ';
return $output78;
};
$arguments76['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                    <a class="breadcrumb-link" href="';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array85)]);

$output84 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array89);

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$output91 = '';

$output91 .= ' target="';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array92)]);

$output91 .= '"';
$arguments86['then'] = $output91;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output84 .= ' title="';
$array93 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array93)]);

$output84 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['section'] = 'BreadcrumbTitle';
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array97);
$array98 = array (
);$array96['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array98);
$arguments94['arguments'] = $array96;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output84 .= '
                                    </a>
                                ';
return $output84;
};

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output65 .= '
                        </li>
                    ';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('breadcrumb', $array64);
$arguments62['as'] = 'item';

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="breadcrumb-text">';
$array135 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array135)]);

$output134 .= '</span>
                        </li>
                    ';
return $output134;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('breadcrumbExtendedValue', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output59 .= '
                </ol>
            </div>
        </nav>
    ';
return $output59;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('breadcrumb', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.enable', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
        <span class="breadcrumb-icon">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['image'] = NULL;
$arguments169['src'] = NULL;
$arguments169['width'] = NULL;
$arguments169['height'] = NULL;
$array171 = array (
);$arguments169['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array171);
$array172 = array (
);$arguments169['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array172);
$array173 = array (
);$arguments169['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array173);

$output168 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                ';
return $output168;
};
$arguments166 = array();

$output165 .= '';

$output165 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['alt'] = NULL;
$arguments177['ismap'] = NULL;
$arguments177['longdesc'] = NULL;
$arguments177['usemap'] = NULL;
$arguments177['src'] = NULL;
$arguments177['treatIdAsReference'] = NULL;
$arguments177['image'] = NULL;
$arguments177['crop'] = NULL;
$arguments177['cropVariant'] = 'default';
$arguments177['width'] = NULL;
$arguments177['height'] = NULL;
$arguments177['minWidth'] = NULL;
$arguments177['minHeight'] = NULL;
$arguments177['maxWidth'] = NULL;
$arguments177['maxHeight'] = NULL;
$arguments177['absolute'] = false;
$array179 = array (
);$arguments177['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array179);
$array180 = array (
);$arguments177['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array180);
$array181 = array (
);$arguments177['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array181);
$array182 = array (
);$arguments177['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array182);
$array183 = array (
);$arguments177['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array183);

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                ';
return $output176;
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output165 .= '';

$output165 .= '
            ';
return $output165;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array163);
$array162['1'] = ' === svg';

$expression164 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['image'] = NULL;
$arguments149['src'] = NULL;
$arguments149['width'] = NULL;
$arguments149['height'] = NULL;
$array151 = array (
);$arguments149['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array151);
$array152 = array (
);$arguments149['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array152);
$array153 = array (
);$arguments149['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array153);

$output148 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
                ';
return $output148;
};
$arguments146['__elseClosures'][] = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['alt'] = NULL;
$arguments155['ismap'] = NULL;
$arguments155['longdesc'] = NULL;
$arguments155['usemap'] = NULL;
$arguments155['src'] = NULL;
$arguments155['treatIdAsReference'] = NULL;
$arguments155['image'] = NULL;
$arguments155['crop'] = NULL;
$arguments155['cropVariant'] = 'default';
$arguments155['width'] = NULL;
$arguments155['height'] = NULL;
$arguments155['minWidth'] = NULL;
$arguments155['minHeight'] = NULL;
$arguments155['maxWidth'] = NULL;
$arguments155['maxHeight'] = NULL;
$arguments155['absolute'] = false;
$array157 = array (
);$arguments155['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array157);
$array158 = array (
);$arguments155['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array158);
$array159 = array (
);$arguments155['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array159);
$array160 = array (
);$arguments155['width'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.width', $array160);
$array161 = array (
);$arguments155['height'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.height', $array161);

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
                ';
return $output154;
};

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
        </span>
    ';
return $output145;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('theme.breadcrumb.icon.enable', $array142);
$array141['1'] = ' && ';
$array143 = array (
);$array141['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array143);

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
    <span class="breadcrumb-text">';
$array184 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array184)]);

$output138 .= '</span>
';
return $output138;
};
$arguments136 = array();
$arguments136['name'] = NULL;
$arguments136['name'] = 'BreadcrumbTitle';

$output47 .= NULL;

$output47 .= '

';

return $output47;
}


}
#