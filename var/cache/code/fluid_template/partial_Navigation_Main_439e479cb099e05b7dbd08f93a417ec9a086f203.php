<?php

class partial_Navigation_Main_439e479cb099e05b7dbd08f93a417ec9a086f203 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments252 = array();

$output251 .= '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array260);

$expression261 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['then'] = ' active';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$arguments262['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['then'] = ' dropdown dropdown-hover';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output256 .= '">
                            <a href="';
$array267 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array267)]);

$output256 .= '" id="nav-item-';
$array268 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array268)]);

$output256 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['then'] = ' dropdown-toggle';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array277);

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$output279 = '';

$output279 .= ' target="';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array280)]);

$output279 .= '"';
$arguments274['then'] = $output279;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output256 .= ' title="';
$array281 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array281)]);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output256 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['image'] = NULL;
$arguments317['src'] = NULL;
$arguments317['width'] = NULL;
$arguments317['height'] = NULL;
$array319 = array (
);$arguments317['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array319);
$array320 = array (
);$arguments317['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array320);
$array321 = array (
);$arguments317['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array321);

$output316 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '
                                            ';
return $output316;
};
$arguments314 = array();

$output313 .= '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['alt'] = NULL;
$arguments325['ismap'] = NULL;
$arguments325['longdesc'] = NULL;
$arguments325['usemap'] = NULL;
$arguments325['src'] = NULL;
$arguments325['treatIdAsReference'] = NULL;
$arguments325['image'] = NULL;
$arguments325['crop'] = NULL;
$arguments325['cropVariant'] = 'default';
$arguments325['width'] = NULL;
$arguments325['height'] = NULL;
$arguments325['minWidth'] = NULL;
$arguments325['minHeight'] = NULL;
$arguments325['maxWidth'] = NULL;
$arguments325['maxHeight'] = NULL;
$arguments325['absolute'] = false;
$array327 = array (
);$arguments325['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array327);
$array328 = array (
);$arguments325['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array328);
$array329 = array (
);$arguments325['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array329);
$array330 = array (
);$arguments325['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array330);
$array331 = array (
);$arguments325['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array331);

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                                            ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output313 .= '';

$output313 .= '
                                        ';
return $output313;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array311);
$array310['1'] = ' === svg';

$expression312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments294['__thenClosure'] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['image'] = NULL;
$arguments297['src'] = NULL;
$arguments297['width'] = NULL;
$arguments297['height'] = NULL;
$array299 = array (
);$arguments297['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array299);
$array300 = array (
);$arguments297['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array300);
$array301 = array (
);$arguments297['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array301);

$output296 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
                                            ';
return $output296;
};
$arguments294['__elseClosures'][] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['alt'] = NULL;
$arguments303['ismap'] = NULL;
$arguments303['longdesc'] = NULL;
$arguments303['usemap'] = NULL;
$arguments303['src'] = NULL;
$arguments303['treatIdAsReference'] = NULL;
$arguments303['image'] = NULL;
$arguments303['crop'] = NULL;
$arguments303['cropVariant'] = 'default';
$arguments303['width'] = NULL;
$arguments303['height'] = NULL;
$arguments303['minWidth'] = NULL;
$arguments303['minHeight'] = NULL;
$arguments303['maxWidth'] = NULL;
$arguments303['maxHeight'] = NULL;
$arguments303['absolute'] = false;
$array305 = array (
);$arguments303['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array305);
$array306 = array (
);$arguments303['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array306);
$array307 = array (
);$arguments303['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array307);
$array308 = array (
);$arguments303['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array308);
$array309 = array (
);$arguments303['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array309);

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
                                            ';
return $output302;
};

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                                    </span>
                                ';
return $output293;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array290);
$array289['1'] = ' && ';
$array291 = array (
);$array289['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array291);

$expression292 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output256 .= '
                                <span class="nav-link-text">';
$array332 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array332)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments333 = array();
$arguments333['then'] = NULL;
$arguments333['else'] = NULL;
$arguments333['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments333['__thenClosure'] = $renderChildrenClosure334;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output256 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array344)]);

$output343 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments421 = array();

$output420 .= '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
                                                <li>
                                                    <a href="';
$array426 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array426)]);

$output425 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['then'] = ' active';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output425 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array435);

$expression436 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression436(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$output437 = '';

$output437 .= ' target="';
$array438 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array438)]);

$output437 .= '"';
$arguments432['then'] = $output437;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output425 .= ' title="';
$array439 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array439)]);

$output425 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['image'] = NULL;
$arguments470['src'] = NULL;
$arguments470['width'] = NULL;
$arguments470['height'] = NULL;
$array472 = array (
);$arguments470['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array472);
$array473 = array (
);$arguments470['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array473);
$array474 = array (
);$arguments470['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array474);

$output469 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                                                    ';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['alt'] = NULL;
$arguments478['ismap'] = NULL;
$arguments478['longdesc'] = NULL;
$arguments478['usemap'] = NULL;
$arguments478['src'] = NULL;
$arguments478['treatIdAsReference'] = NULL;
$arguments478['image'] = NULL;
$arguments478['crop'] = NULL;
$arguments478['cropVariant'] = 'default';
$arguments478['width'] = NULL;
$arguments478['height'] = NULL;
$arguments478['minWidth'] = NULL;
$arguments478['minHeight'] = NULL;
$arguments478['maxWidth'] = NULL;
$arguments478['maxHeight'] = NULL;
$arguments478['absolute'] = false;
$array480 = array (
);$arguments478['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array480);
$array481 = array (
);$arguments478['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array481);
$array482 = array (
);$arguments478['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array482);
$array483 = array (
);$arguments478['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array483);
$array484 = array (
);$arguments478['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array484);

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                                                    ';
return $output477;
};
$arguments475 = array();
$arguments475['if'] = NULL;

$output466 .= '';

$output466 .= '
                                                                ';
return $output466;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array464);
$array463['1'] = ' === svg';

$expression465 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['image'] = NULL;
$arguments450['src'] = NULL;
$arguments450['width'] = NULL;
$arguments450['height'] = NULL;
$array452 = array (
);$arguments450['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array452);
$array453 = array (
);$arguments450['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array453);
$array454 = array (
);$arguments450['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array454);

$output449 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                                                                    ';
return $output449;
};
$arguments447['__elseClosures'][] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['alt'] = NULL;
$arguments456['ismap'] = NULL;
$arguments456['longdesc'] = NULL;
$arguments456['usemap'] = NULL;
$arguments456['src'] = NULL;
$arguments456['treatIdAsReference'] = NULL;
$arguments456['image'] = NULL;
$arguments456['crop'] = NULL;
$arguments456['cropVariant'] = 'default';
$arguments456['width'] = NULL;
$arguments456['height'] = NULL;
$arguments456['minWidth'] = NULL;
$arguments456['minHeight'] = NULL;
$arguments456['maxWidth'] = NULL;
$arguments456['maxHeight'] = NULL;
$arguments456['absolute'] = false;
$array458 = array (
);$arguments456['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array458);
$array459 = array (
);$arguments456['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array459);
$array460 = array (
);$arguments456['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array460);
$array461 = array (
);$arguments456['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array461);
$array462 = array (
);$arguments456['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array462);

$output455 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
                                                                    ';
return $output455;
};

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                                            </span>
                                                        ';
return $output446;
};
$arguments440 = array();
$arguments440['then'] = NULL;
$arguments440['else'] = NULL;
$arguments440['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array442 = array();
$array443 = array (
);$array442['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array443);
$array442['1'] = ' && ';
$array444 = array (
);$array442['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array444);

$expression445 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments440['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array442)
					),
					$renderingContext
				);
$arguments440['__thenClosure'] = $renderChildrenClosure441;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output425 .= '
                                                        <span class="dropdown-text">';
$array485 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array485)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array489);

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$arguments486['__thenClosure'] = $renderChildrenClosure487;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output425 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output425;
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output420 .= '';

$output420 .= '
                                        ';
return $output420;
};
$arguments349 = array();
$arguments349['then'] = NULL;
$arguments349['else'] = NULL;
$arguments349['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments349['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments349['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments349['__elseClosures'][] = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                                                <li>
                                                    <a href="';
$array352 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array352)]);

$output351 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['then'] = ' active';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output351 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array361);

$expression362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$output363 = '';

$output363 .= ' target="';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array364)]);

$output363 .= '"';
$arguments358['then'] = $output363;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output351 .= ' title="';
$array365 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array365)]);

$output351 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['image'] = NULL;
$arguments396['src'] = NULL;
$arguments396['width'] = NULL;
$arguments396['height'] = NULL;
$array398 = array (
);$arguments396['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array398);
$array399 = array (
);$arguments396['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array399);
$array400 = array (
);$arguments396['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array400);

$output395 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                                                    ';
return $output395;
};
$arguments393 = array();

$output392 .= '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['alt'] = NULL;
$arguments404['ismap'] = NULL;
$arguments404['longdesc'] = NULL;
$arguments404['usemap'] = NULL;
$arguments404['src'] = NULL;
$arguments404['treatIdAsReference'] = NULL;
$arguments404['image'] = NULL;
$arguments404['crop'] = NULL;
$arguments404['cropVariant'] = 'default';
$arguments404['width'] = NULL;
$arguments404['height'] = NULL;
$arguments404['minWidth'] = NULL;
$arguments404['minHeight'] = NULL;
$arguments404['maxWidth'] = NULL;
$arguments404['maxHeight'] = NULL;
$arguments404['absolute'] = false;
$array406 = array (
);$arguments404['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array406);
$array407 = array (
);$arguments404['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array407);
$array408 = array (
);$arguments404['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array408);
$array409 = array (
);$arguments404['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array409);
$array410 = array (
);$arguments404['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array410);

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
                                                                    ';
return $output403;
};
$arguments401 = array();
$arguments401['if'] = NULL;

$output392 .= '';

$output392 .= '
                                                                ';
return $output392;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array390);
$array389['1'] = ' === svg';

$expression391 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments373['__thenClosure'] = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['image'] = NULL;
$arguments376['src'] = NULL;
$arguments376['width'] = NULL;
$arguments376['height'] = NULL;
$array378 = array (
);$arguments376['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array378);
$array379 = array (
);$arguments376['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array379);
$array380 = array (
);$arguments376['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array380);

$output375 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
                                                                    ';
return $output375;
};
$arguments373['__elseClosures'][] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['alt'] = NULL;
$arguments382['ismap'] = NULL;
$arguments382['longdesc'] = NULL;
$arguments382['usemap'] = NULL;
$arguments382['src'] = NULL;
$arguments382['treatIdAsReference'] = NULL;
$arguments382['image'] = NULL;
$arguments382['crop'] = NULL;
$arguments382['cropVariant'] = 'default';
$arguments382['width'] = NULL;
$arguments382['height'] = NULL;
$arguments382['minWidth'] = NULL;
$arguments382['minHeight'] = NULL;
$arguments382['maxWidth'] = NULL;
$arguments382['maxHeight'] = NULL;
$arguments382['absolute'] = false;
$array384 = array (
);$arguments382['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array384);
$array385 = array (
);$arguments382['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array385);
$array386 = array (
);$arguments382['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array386);
$array387 = array (
);$arguments382['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array387);
$array388 = array (
);$arguments382['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array388);

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
                                                                    ';
return $output381;
};

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                                                            </span>
                                                        ';
return $output372;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array369);
$array368['1'] = ' && ';
$array370 = array (
);$array368['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array370);

$expression371 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output351 .= '
                                                        <span class="dropdown-text">';
$array411 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array411)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['__thenClosure'] = $renderChildrenClosure413;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output351 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output351;
};

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
                                    ';
return $output348;
};
$arguments345 = array();
$arguments345['each'] = NULL;
$arguments345['as'] = NULL;
$arguments345['key'] = NULL;
$arguments345['reverse'] = false;
$arguments345['iteration'] = NULL;
$array347 = array (
);$arguments345['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array347);
$arguments345['as'] = 'child';

$output343 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output343 .= '
                                </ul>
                            ';
return $output343;
};
$arguments338 = array();
$arguments338['then'] = NULL;
$arguments338['else'] = NULL;
$arguments338['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array341);

$expression342 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments338['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments338['__thenClosure'] = $renderChildrenClosure339;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output256 .= '
                        </li>
                    ';
return $output256;
};
$arguments254 = array();
$arguments254['if'] = NULL;

$output251 .= '';

$output251 .= '
                ';
return $output251;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['image'] = NULL;
$arguments74['src'] = NULL;
$arguments74['width'] = NULL;
$arguments74['height'] = NULL;
$array76 = array (
);$arguments74['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array76);
$array77 = array (
);$arguments74['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array77);
$array78 = array (
);$arguments74['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array78);

$output73 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                                            ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['alt'] = NULL;
$arguments82['ismap'] = NULL;
$arguments82['longdesc'] = NULL;
$arguments82['usemap'] = NULL;
$arguments82['src'] = NULL;
$arguments82['treatIdAsReference'] = NULL;
$arguments82['image'] = NULL;
$arguments82['crop'] = NULL;
$arguments82['cropVariant'] = 'default';
$arguments82['width'] = NULL;
$arguments82['height'] = NULL;
$arguments82['minWidth'] = NULL;
$arguments82['minHeight'] = NULL;
$arguments82['maxWidth'] = NULL;
$arguments82['maxHeight'] = NULL;
$arguments82['absolute'] = false;
$array84 = array (
);$arguments82['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array84);
$array85 = array (
);$arguments82['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array85);
$array86 = array (
);$arguments82['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array86);
$array87 = array (
);$arguments82['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array87);
$array88 = array (
);$arguments82['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array88);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                            ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output70 .= '';

$output70 .= '
                                        ';
return $output70;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array68);
$array67['1'] = ' === svg';

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['image'] = NULL;
$arguments54['src'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array56);
$array57 = array (
);$arguments54['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array57);
$array58 = array (
);$arguments54['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array58);

$output53 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                                            ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['src'] = NULL;
$arguments60['treatIdAsReference'] = NULL;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$array62 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array62);
$array63 = array (
);$arguments60['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array63);
$array64 = array (
);$arguments60['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array64);
$array65 = array (
);$arguments60['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array65);
$array66 = array (
);$arguments60['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array66);

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array89 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array89)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array101)]);

$output100 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments178 = array();

$output177 .= '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                                <li>
                                                    <a href="';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array183)]);

$output182 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array187);

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['then'] = ' active';

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output182 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$output194 = '';

$output194 .= ' target="';
$array195 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array195)]);

$output194 .= '"';
$arguments189['then'] = $output194;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output182 .= ' title="';
$array196 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array196)]);

$output182 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['image'] = NULL;
$arguments227['src'] = NULL;
$arguments227['width'] = NULL;
$arguments227['height'] = NULL;
$array229 = array (
);$arguments227['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array229);
$array230 = array (
);$arguments227['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array230);
$array231 = array (
);$arguments227['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array231);

$output226 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                                                                    ';
return $output226;
};
$arguments224 = array();

$output223 .= '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['additionalAttributes'] = NULL;
$arguments235['data'] = NULL;
$arguments235['class'] = NULL;
$arguments235['dir'] = NULL;
$arguments235['id'] = NULL;
$arguments235['lang'] = NULL;
$arguments235['style'] = NULL;
$arguments235['title'] = NULL;
$arguments235['accesskey'] = NULL;
$arguments235['tabindex'] = NULL;
$arguments235['onclick'] = NULL;
$arguments235['alt'] = NULL;
$arguments235['ismap'] = NULL;
$arguments235['longdesc'] = NULL;
$arguments235['usemap'] = NULL;
$arguments235['src'] = NULL;
$arguments235['treatIdAsReference'] = NULL;
$arguments235['image'] = NULL;
$arguments235['crop'] = NULL;
$arguments235['cropVariant'] = 'default';
$arguments235['width'] = NULL;
$arguments235['height'] = NULL;
$arguments235['minWidth'] = NULL;
$arguments235['minHeight'] = NULL;
$arguments235['maxWidth'] = NULL;
$arguments235['maxHeight'] = NULL;
$arguments235['absolute'] = false;
$array237 = array (
);$arguments235['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array237);
$array238 = array (
);$arguments235['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array238);
$array239 = array (
);$arguments235['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array239);
$array240 = array (
);$arguments235['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array240);
$array241 = array (
);$arguments235['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array241);

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                                                                    ';
return $output234;
};
$arguments232 = array();
$arguments232['if'] = NULL;

$output223 .= '';

$output223 .= '
                                                                ';
return $output223;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array221);
$array220['1'] = ' === svg';

$expression222 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['image'] = NULL;
$arguments207['src'] = NULL;
$arguments207['width'] = NULL;
$arguments207['height'] = NULL;
$array209 = array (
);$arguments207['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array209);
$array210 = array (
);$arguments207['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array210);
$array211 = array (
);$arguments207['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array211);

$output206 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
                                                                    ';
return $output206;
};
$arguments204['__elseClosures'][] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['class'] = NULL;
$arguments213['dir'] = NULL;
$arguments213['id'] = NULL;
$arguments213['lang'] = NULL;
$arguments213['style'] = NULL;
$arguments213['title'] = NULL;
$arguments213['accesskey'] = NULL;
$arguments213['tabindex'] = NULL;
$arguments213['onclick'] = NULL;
$arguments213['alt'] = NULL;
$arguments213['ismap'] = NULL;
$arguments213['longdesc'] = NULL;
$arguments213['usemap'] = NULL;
$arguments213['src'] = NULL;
$arguments213['treatIdAsReference'] = NULL;
$arguments213['image'] = NULL;
$arguments213['crop'] = NULL;
$arguments213['cropVariant'] = 'default';
$arguments213['width'] = NULL;
$arguments213['height'] = NULL;
$arguments213['minWidth'] = NULL;
$arguments213['minHeight'] = NULL;
$arguments213['maxWidth'] = NULL;
$arguments213['maxHeight'] = NULL;
$arguments213['absolute'] = false;
$array215 = array (
);$arguments213['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array215);
$array216 = array (
);$arguments213['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array216);
$array217 = array (
);$arguments213['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array217);
$array218 = array (
);$arguments213['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array218);
$array219 = array (
);$arguments213['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array219);

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                                                                    ';
return $output212;
};

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
                                                            </span>
                                                        ';
return $output203;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array200);
$array199['1'] = ' && ';
$array201 = array (
);$array199['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array201);

$expression202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output182 .= '
                                                        <span class="dropdown-text">';
$array242 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array242)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['__thenClosure'] = $renderChildrenClosure244;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output182 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output182;
};
$arguments180 = array();
$arguments180['if'] = NULL;

$output177 .= '';

$output177 .= '
                                        ';
return $output177;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                                                <li>
                                                    <a href="';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array109)]);

$output108 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['then'] = ' active';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output108 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$output120 = '';

$output120 .= ' target="';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array121)]);

$output120 .= '"';
$arguments115['then'] = $output120;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= ' title="';
$array122 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array122)]);

$output108 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['image'] = NULL;
$arguments153['src'] = NULL;
$arguments153['width'] = NULL;
$arguments153['height'] = NULL;
$array155 = array (
);$arguments153['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                                                    ';
return $output152;
};
$arguments150 = array();

$output149 .= '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['alt'] = NULL;
$arguments161['ismap'] = NULL;
$arguments161['longdesc'] = NULL;
$arguments161['usemap'] = NULL;
$arguments161['src'] = NULL;
$arguments161['treatIdAsReference'] = NULL;
$arguments161['image'] = NULL;
$arguments161['crop'] = NULL;
$arguments161['cropVariant'] = 'default';
$arguments161['width'] = NULL;
$arguments161['height'] = NULL;
$arguments161['minWidth'] = NULL;
$arguments161['minHeight'] = NULL;
$arguments161['maxWidth'] = NULL;
$arguments161['maxHeight'] = NULL;
$arguments161['absolute'] = false;
$array163 = array (
);$arguments161['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array163);
$array164 = array (
);$arguments161['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array164);
$array165 = array (
);$arguments161['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array165);
$array166 = array (
);$arguments161['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array166);
$array167 = array (
);$arguments161['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array167);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                                                    ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output149 .= '';

$output149 .= '
                                                                ';
return $output149;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array147);
$array146['1'] = ' === svg';

$expression148 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['image'] = NULL;
$arguments133['src'] = NULL;
$arguments133['width'] = NULL;
$arguments133['height'] = NULL;
$array135 = array (
);$arguments133['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array135);
$array136 = array (
);$arguments133['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array136);
$array137 = array (
);$arguments133['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array137);

$output132 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                                                                    ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['alt'] = NULL;
$arguments139['ismap'] = NULL;
$arguments139['longdesc'] = NULL;
$arguments139['usemap'] = NULL;
$arguments139['src'] = NULL;
$arguments139['treatIdAsReference'] = NULL;
$arguments139['image'] = NULL;
$arguments139['crop'] = NULL;
$arguments139['cropVariant'] = 'default';
$arguments139['width'] = NULL;
$arguments139['height'] = NULL;
$arguments139['minWidth'] = NULL;
$arguments139['minHeight'] = NULL;
$arguments139['maxWidth'] = NULL;
$arguments139['maxHeight'] = NULL;
$arguments139['absolute'] = false;
$array141 = array (
);$arguments139['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array141);
$array142 = array (
);$arguments139['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array142);
$array143 = array (
);$arguments139['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array143);
$array144 = array (
);$arguments139['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array144);
$array145 = array (
);$arguments139['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array145);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                                                    ';
return $output138;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                                                            </span>
                                                        ';
return $output129;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array126);
$array125['1'] = ' && ';
$array127 = array (
);$array125['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array127);

$expression128 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output108 .= '
                                                        <span class="dropdown-text">';
$array168 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array168)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output108 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output108;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                    ';
return $output105;
};
$arguments102 = array();
$arguments102['each'] = NULL;
$arguments102['as'] = NULL;
$arguments102['key'] = NULL;
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$array104 = array (
);$arguments102['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array104);
$arguments102['as'] = 'child';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output100 .= '
                                </ul>
                            ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output491 = '';

$output491 .= '

<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
        	<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['src'] = NULL;
$arguments497['treatIdAsReference'] = false;
$arguments497['image'] = NULL;
$arguments497['crop'] = NULL;
$arguments497['cropVariant'] = 'default';
$arguments497['width'] = NULL;
$arguments497['height'] = NULL;
$arguments497['minWidth'] = NULL;
$arguments497['minHeight'] = NULL;
$arguments497['maxWidth'] = NULL;
$arguments497['maxHeight'] = NULL;
$arguments497['absolute'] = false;
$array499 = array (
);$arguments497['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array499);

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output496 .= '" alt="';
$array500 = array (
);
$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array500)]);

$output496 .= '" height="';
$array501 = array (
);
$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array501)]);

$output496 .= '" width="';
$array502 = array (
);
$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array502)]);

$output496 .= '">
        ';
return $output496;
};
$arguments492 = array();
$arguments492['additionalAttributes'] = NULL;
$arguments492['data'] = NULL;
$arguments492['class'] = NULL;
$arguments492['dir'] = NULL;
$arguments492['id'] = NULL;
$arguments492['lang'] = NULL;
$arguments492['style'] = NULL;
$arguments492['title'] = NULL;
$arguments492['accesskey'] = NULL;
$arguments492['tabindex'] = NULL;
$arguments492['onclick'] = NULL;
$arguments492['target'] = NULL;
$arguments492['rel'] = NULL;
$arguments492['pageUid'] = NULL;
$arguments492['pageType'] = NULL;
$arguments492['noCache'] = NULL;
$arguments492['noCacheHash'] = NULL;
$arguments492['section'] = NULL;
$arguments492['linkAccessRestrictedPages'] = NULL;
$arguments492['additionalParams'] = NULL;
$arguments492['absolute'] = NULL;
$arguments492['addQueryString'] = NULL;
$arguments492['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments492['addQueryStringMethod'] = NULL;
$array494 = array (
);$arguments492['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array494);
$arguments492['class'] = 'scrollto';
$array495 = array (
);$arguments492['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array495);

$output491 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output491 .= '
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#sponsors">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<header id="page-header" class="bp-page-header navbar navbar-mainnavigation navbar-';
$array503 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array503)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['then'] = NULL;
$arguments504['else'] = NULL;
$arguments504['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments504['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$arguments504['then'] = ' navbar-has-image';

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['then'] = NULL;
$arguments509['else'] = NULL;
$arguments509['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array511 = array();
$array512 = array (
);$array511['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array512);

$expression513 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments509['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression513(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array511)
					),
					$renderingContext
				);
$arguments509['else'] = ' navbar-top';
$output514 = '';

$output514 .= ' navbar-';
$array515 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array515)]);

$output514 .= ' navbar-fixed-';
$array516 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array516)]);
$arguments509['then'] = $output514;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output491 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return '
                
            ';
};
$arguments529 = array();

$output528 .= '';

$output528 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$output533 = '';

$output533 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$array538 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array538)]);
};
$arguments534 = array();
$arguments534['additionalAttributes'] = NULL;
$arguments534['data'] = NULL;
$arguments534['class'] = NULL;
$arguments534['dir'] = NULL;
$arguments534['id'] = NULL;
$arguments534['lang'] = NULL;
$arguments534['style'] = NULL;
$arguments534['title'] = NULL;
$arguments534['accesskey'] = NULL;
$arguments534['tabindex'] = NULL;
$arguments534['onclick'] = NULL;
$arguments534['target'] = NULL;
$arguments534['rel'] = NULL;
$arguments534['pageUid'] = NULL;
$arguments534['pageType'] = NULL;
$arguments534['noCache'] = NULL;
$arguments534['noCacheHash'] = NULL;
$arguments534['section'] = NULL;
$arguments534['linkAccessRestrictedPages'] = NULL;
$arguments534['additionalParams'] = NULL;
$arguments534['absolute'] = NULL;
$arguments534['addQueryString'] = NULL;
$arguments534['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments534['addQueryStringMethod'] = NULL;
$array536 = array (
);$arguments534['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array536);
$arguments534['class'] = 'navbar-brand navbar-brand-text';
$array537 = array (
);$arguments534['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array537);

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output533 .= '
            ';
return $output533;
};
$arguments531 = array();
$arguments531['if'] = NULL;

$output528 .= '';

$output528 .= '
        ';
return $output528;
};
$arguments517 = array();
$arguments517['then'] = NULL;
$arguments517['else'] = NULL;
$arguments517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array525 = array();
$array526 = array (
);$array525['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array526);

$expression527 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression527(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array525)
					),
					$renderingContext
				);
$arguments517['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                
            ';
};
$arguments517['__elseClosures'][] = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$array524 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array524)]);
};
$arguments520 = array();
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['title'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$arguments520['target'] = NULL;
$arguments520['rel'] = NULL;
$arguments520['pageUid'] = NULL;
$arguments520['pageType'] = NULL;
$arguments520['noCache'] = NULL;
$arguments520['noCacheHash'] = NULL;
$arguments520['section'] = NULL;
$arguments520['linkAccessRestrictedPages'] = NULL;
$arguments520['additionalParams'] = NULL;
$arguments520['absolute'] = NULL;
$arguments520['addQueryString'] = NULL;
$arguments520['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments520['addQueryStringMethod'] = NULL;
$array522 = array (
);$arguments520['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array522);
$arguments520['class'] = 'navbar-brand navbar-brand-text';
$array523 = array (
);$arguments520['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array523);

$output519 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output519 .= '
            ';
return $output519;
};

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output491 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainnavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['section'] = NULL;
$arguments545['partial'] = NULL;
$arguments545['delegate'] = NULL;
$arguments545['renderable'] = NULL;
$arguments545['arguments'] = array (
);
$arguments545['optional'] = false;
$arguments545['default'] = NULL;
$arguments545['contentAs'] = NULL;
$arguments545['debug'] = true;
$arguments545['partial'] = 'DropIn/Navigation/MainBefore';
$arguments545['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['section'] = NULL;
$arguments548['partial'] = NULL;
$arguments548['delegate'] = NULL;
$arguments548['renderable'] = NULL;
$arguments548['arguments'] = array (
);
$arguments548['optional'] = false;
$arguments548['default'] = NULL;
$arguments548['contentAs'] = NULL;
$arguments548['debug'] = true;
$arguments548['section'] = 'MainNavigation';
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array551);
$array552 = array (
);$array550['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array552);
$arguments548['arguments'] = $array550;

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);

$output544 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['section'] = NULL;
$arguments553['partial'] = NULL;
$arguments553['delegate'] = NULL;
$arguments553['renderable'] = NULL;
$arguments553['arguments'] = array (
);
$arguments553['optional'] = false;
$arguments553['default'] = NULL;
$arguments553['contentAs'] = NULL;
$arguments553['debug'] = true;
$arguments553['partial'] = 'DropIn/Navigation/MainAfter';
$arguments553['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output544 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output544 .= '
            </nav>
        ';
return $output544;
};
$arguments539 = array();
$arguments539['then'] = NULL;
$arguments539['else'] = NULL;
$arguments539['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array541 = array();
$array542 = array (
);$array541['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array542);

$expression543 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments539['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array541)
					),
					$renderingContext
				);
$arguments539['__thenClosure'] = $renderChildrenClosure540;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output491 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$output564 = '';

$output564 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments810 = array();

$output809 .= '';

$output809 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
$output814 = '';

$output814 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments815 = array();
$arguments815['then'] = NULL;
$arguments815['else'] = NULL;
$arguments815['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array817 = array();
$array818 = array (
);$array817['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array818);

$expression819 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments815['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression819(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array817)
					),
					$renderingContext
				);
$arguments815['then'] = ' active';

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments820 = array();
$arguments820['then'] = NULL;
$arguments820['else'] = NULL;
$arguments820['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array822 = array();
$array823 = array (
);$array822['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array823);

$expression824 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments820['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression824(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array822)
					),
					$renderingContext
				);
$arguments820['then'] = ' dropdown dropdown-hover';

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);

$output814 .= '">
                            <a href="';
$array825 = array (
);
$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array825)]);

$output814 .= '" id="nav-item-';
$array826 = array (
);
$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array826)]);

$output814 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure828 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments827 = array();
$arguments827['then'] = NULL;
$arguments827['else'] = NULL;
$arguments827['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array829 = array();
$array830 = array (
);$array829['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array830);

$expression831 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments827['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression831(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array829)
					),
					$renderingContext
				);
$arguments827['then'] = ' dropdown-toggle';

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments827, $renderChildrenClosure828, $renderingContext);

$output814 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments832 = array();
$arguments832['then'] = NULL;
$arguments832['else'] = NULL;
$arguments832['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array834 = array();
$array835 = array (
);$array834['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array835);

$expression836 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments832['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array834)
					),
					$renderingContext
				);
$output837 = '';

$output837 .= ' target="';
$array838 = array (
);
$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array838)]);

$output837 .= '"';
$arguments832['then'] = $output837;

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output814 .= ' title="';
$array839 = array (
);
$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array839)]);

$output814 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure841 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments840 = array();
$arguments840['then'] = NULL;
$arguments840['else'] = NULL;
$arguments840['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array842 = array();
$array843 = array (
);$array842['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array843);

$expression844 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments840['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression844(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array842)
					),
					$renderingContext
				);
$arguments840['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext);

$output814 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$output851 = '';

$output851 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure853 = function() use ($renderingContext, $self) {
$output871 = '';

$output871 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$output874 = '';

$output874 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments875 = array();
$arguments875['image'] = NULL;
$arguments875['src'] = NULL;
$arguments875['width'] = NULL;
$arguments875['height'] = NULL;
$array877 = array (
);$arguments875['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array877);
$array878 = array (
);$arguments875['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array878);
$array879 = array (
);$arguments875['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array879);

$output874 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments875, $renderChildrenClosure876, $renderingContext);

$output874 .= '
                                            ';
return $output874;
};
$arguments872 = array();

$output871 .= '';

$output871 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
$output882 = '';

$output882 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments883 = array();
$arguments883['additionalAttributes'] = NULL;
$arguments883['data'] = NULL;
$arguments883['class'] = NULL;
$arguments883['dir'] = NULL;
$arguments883['id'] = NULL;
$arguments883['lang'] = NULL;
$arguments883['style'] = NULL;
$arguments883['title'] = NULL;
$arguments883['accesskey'] = NULL;
$arguments883['tabindex'] = NULL;
$arguments883['onclick'] = NULL;
$arguments883['alt'] = NULL;
$arguments883['ismap'] = NULL;
$arguments883['longdesc'] = NULL;
$arguments883['usemap'] = NULL;
$arguments883['src'] = NULL;
$arguments883['treatIdAsReference'] = NULL;
$arguments883['image'] = NULL;
$arguments883['crop'] = NULL;
$arguments883['cropVariant'] = 'default';
$arguments883['width'] = NULL;
$arguments883['height'] = NULL;
$arguments883['minWidth'] = NULL;
$arguments883['minHeight'] = NULL;
$arguments883['maxWidth'] = NULL;
$arguments883['maxHeight'] = NULL;
$arguments883['absolute'] = false;
$array885 = array (
);$arguments883['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array885);
$array886 = array (
);$arguments883['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array886);
$array887 = array (
);$arguments883['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array887);
$array888 = array (
);$arguments883['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array888);
$array889 = array (
);$arguments883['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array889);

$output882 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext);

$output882 .= '
                                            ';
return $output882;
};
$arguments880 = array();
$arguments880['if'] = NULL;

$output871 .= '';

$output871 .= '
                                        ';
return $output871;
};
$arguments852 = array();
$arguments852['then'] = NULL;
$arguments852['else'] = NULL;
$arguments852['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array868 = array();
$array869 = array (
);$array868['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array869);
$array868['1'] = ' === svg';

$expression870 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments852['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression870(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array868)
					),
					$renderingContext
				);
$arguments852['__thenClosure'] = function() use ($renderingContext, $self) {
$output854 = '';

$output854 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments855 = array();
$arguments855['image'] = NULL;
$arguments855['src'] = NULL;
$arguments855['width'] = NULL;
$arguments855['height'] = NULL;
$array857 = array (
);$arguments855['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array857);
$array858 = array (
);$arguments855['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array858);
$array859 = array (
);$arguments855['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array859);

$output854 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments855, $renderChildrenClosure856, $renderingContext);

$output854 .= '
                                            ';
return $output854;
};
$arguments852['__elseClosures'][] = function() use ($renderingContext, $self) {
$output860 = '';

$output860 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure862 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments861 = array();
$arguments861['additionalAttributes'] = NULL;
$arguments861['data'] = NULL;
$arguments861['class'] = NULL;
$arguments861['dir'] = NULL;
$arguments861['id'] = NULL;
$arguments861['lang'] = NULL;
$arguments861['style'] = NULL;
$arguments861['title'] = NULL;
$arguments861['accesskey'] = NULL;
$arguments861['tabindex'] = NULL;
$arguments861['onclick'] = NULL;
$arguments861['alt'] = NULL;
$arguments861['ismap'] = NULL;
$arguments861['longdesc'] = NULL;
$arguments861['usemap'] = NULL;
$arguments861['src'] = NULL;
$arguments861['treatIdAsReference'] = NULL;
$arguments861['image'] = NULL;
$arguments861['crop'] = NULL;
$arguments861['cropVariant'] = 'default';
$arguments861['width'] = NULL;
$arguments861['height'] = NULL;
$arguments861['minWidth'] = NULL;
$arguments861['minHeight'] = NULL;
$arguments861['maxWidth'] = NULL;
$arguments861['maxHeight'] = NULL;
$arguments861['absolute'] = false;
$array863 = array (
);$arguments861['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array863);
$array864 = array (
);$arguments861['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array864);
$array865 = array (
);$arguments861['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array865);
$array866 = array (
);$arguments861['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array866);
$array867 = array (
);$arguments861['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array867);

$output860 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments861, $renderChildrenClosure862, $renderingContext);

$output860 .= '
                                            ';
return $output860;
};

$output851 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments852, $renderChildrenClosure853, $renderingContext);

$output851 .= '
                                    </span>
                                ';
return $output851;
};
$arguments845 = array();
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$arguments845['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array847 = array();
$array848 = array (
);$array847['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array848);
$array847['1'] = ' && ';
$array849 = array (
);$array847['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array849);

$expression850 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments845['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression850(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array847)
					),
					$renderingContext
				);
$arguments845['__thenClosure'] = $renderChildrenClosure846;

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output814 .= '
                                <span class="nav-link-text">';
$array890 = array (
);
$output814 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array890)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments891 = array();
$arguments891['then'] = NULL;
$arguments891['else'] = NULL;
$arguments891['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array894 = array (
);$array893['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array894);

$expression895 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments891['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments891['__thenClosure'] = $renderChildrenClosure892;

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext);

$output814 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$output901 = '';

$output901 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array902 = array (
);
$output901 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array902)]);

$output901 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure904 = function() use ($renderingContext, $self) {
$output906 = '';

$output906 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
$output978 = '';

$output978 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments979 = array();

$output978 .= '';

$output978 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
$output983 = '';

$output983 .= '
                                                <li>
                                                    <a href="';
$array984 = array (
);
$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array984)]);

$output983 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments985 = array();
$arguments985['then'] = NULL;
$arguments985['else'] = NULL;
$arguments985['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array987 = array();
$array988 = array (
);$array987['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array988);

$expression989 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments985['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression989(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array987)
					),
					$renderingContext
				);
$arguments985['then'] = ' active';

$output983 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments985, $renderChildrenClosure986, $renderingContext);

$output983 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure991 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments990 = array();
$arguments990['then'] = NULL;
$arguments990['else'] = NULL;
$arguments990['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array992 = array();
$array993 = array (
);$array992['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array993);

$expression994 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments990['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression994(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array992)
					),
					$renderingContext
				);
$output995 = '';

$output995 .= ' target="';
$array996 = array (
);
$output995 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array996)]);

$output995 .= '"';
$arguments990['then'] = $output995;

$output983 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments990, $renderChildrenClosure991, $renderingContext);

$output983 .= ' title="';
$array997 = array (
);
$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array997)]);

$output983 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
$output1004 = '';

$output1004 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
$output1024 = '';

$output1024 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
$output1027 = '';

$output1027 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1029 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1028 = array();
$arguments1028['image'] = NULL;
$arguments1028['src'] = NULL;
$arguments1028['width'] = NULL;
$arguments1028['height'] = NULL;
$array1030 = array (
);$arguments1028['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1030);
$array1031 = array (
);$arguments1028['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1031);
$array1032 = array (
);$arguments1028['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1032);

$output1027 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1028, $renderChildrenClosure1029, $renderingContext);

$output1027 .= '
                                                                    ';
return $output1027;
};
$arguments1025 = array();

$output1024 .= '';

$output1024 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1034 = function() use ($renderingContext, $self) {
$output1035 = '';

$output1035 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['additionalAttributes'] = NULL;
$arguments1036['data'] = NULL;
$arguments1036['class'] = NULL;
$arguments1036['dir'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['lang'] = NULL;
$arguments1036['style'] = NULL;
$arguments1036['title'] = NULL;
$arguments1036['accesskey'] = NULL;
$arguments1036['tabindex'] = NULL;
$arguments1036['onclick'] = NULL;
$arguments1036['alt'] = NULL;
$arguments1036['ismap'] = NULL;
$arguments1036['longdesc'] = NULL;
$arguments1036['usemap'] = NULL;
$arguments1036['src'] = NULL;
$arguments1036['treatIdAsReference'] = NULL;
$arguments1036['image'] = NULL;
$arguments1036['crop'] = NULL;
$arguments1036['cropVariant'] = 'default';
$arguments1036['width'] = NULL;
$arguments1036['height'] = NULL;
$arguments1036['minWidth'] = NULL;
$arguments1036['minHeight'] = NULL;
$arguments1036['maxWidth'] = NULL;
$arguments1036['maxHeight'] = NULL;
$arguments1036['absolute'] = false;
$array1038 = array (
);$arguments1036['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1038);
$array1039 = array (
);$arguments1036['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1039);
$array1040 = array (
);$arguments1036['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1040);
$array1041 = array (
);$arguments1036['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1041);
$array1042 = array (
);$arguments1036['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1042);

$output1035 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1035 .= '
                                                                    ';
return $output1035;
};
$arguments1033 = array();
$arguments1033['if'] = NULL;

$output1024 .= '';

$output1024 .= '
                                                                ';
return $output1024;
};
$arguments1005 = array();
$arguments1005['then'] = NULL;
$arguments1005['else'] = NULL;
$arguments1005['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1021 = array();
$array1022 = array (
);$array1021['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1022);
$array1021['1'] = ' === svg';

$expression1023 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments1005['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1023(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1021)
					),
					$renderingContext
				);
$arguments1005['__thenClosure'] = function() use ($renderingContext, $self) {
$output1007 = '';

$output1007 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1008 = array();
$arguments1008['image'] = NULL;
$arguments1008['src'] = NULL;
$arguments1008['width'] = NULL;
$arguments1008['height'] = NULL;
$array1010 = array (
);$arguments1008['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1010);
$array1011 = array (
);$arguments1008['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1011);
$array1012 = array (
);$arguments1008['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1012);

$output1007 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1008, $renderChildrenClosure1009, $renderingContext);

$output1007 .= '
                                                                    ';
return $output1007;
};
$arguments1005['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1013 = '';

$output1013 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1014 = array();
$arguments1014['additionalAttributes'] = NULL;
$arguments1014['data'] = NULL;
$arguments1014['class'] = NULL;
$arguments1014['dir'] = NULL;
$arguments1014['id'] = NULL;
$arguments1014['lang'] = NULL;
$arguments1014['style'] = NULL;
$arguments1014['title'] = NULL;
$arguments1014['accesskey'] = NULL;
$arguments1014['tabindex'] = NULL;
$arguments1014['onclick'] = NULL;
$arguments1014['alt'] = NULL;
$arguments1014['ismap'] = NULL;
$arguments1014['longdesc'] = NULL;
$arguments1014['usemap'] = NULL;
$arguments1014['src'] = NULL;
$arguments1014['treatIdAsReference'] = NULL;
$arguments1014['image'] = NULL;
$arguments1014['crop'] = NULL;
$arguments1014['cropVariant'] = 'default';
$arguments1014['width'] = NULL;
$arguments1014['height'] = NULL;
$arguments1014['minWidth'] = NULL;
$arguments1014['minHeight'] = NULL;
$arguments1014['maxWidth'] = NULL;
$arguments1014['maxHeight'] = NULL;
$arguments1014['absolute'] = false;
$array1016 = array (
);$arguments1014['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1016);
$array1017 = array (
);$arguments1014['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1017);
$array1018 = array (
);$arguments1014['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1018);
$array1019 = array (
);$arguments1014['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1019);
$array1020 = array (
);$arguments1014['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1020);

$output1013 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1014, $renderChildrenClosure1015, $renderingContext);

$output1013 .= '
                                                                    ';
return $output1013;
};

$output1004 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext);

$output1004 .= '
                                                            </span>
                                                        ';
return $output1004;
};
$arguments998 = array();
$arguments998['then'] = NULL;
$arguments998['else'] = NULL;
$arguments998['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1000 = array();
$array1001 = array (
);$array1000['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array1001);
$array1000['1'] = ' && ';
$array1002 = array (
);$array1000['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array1002);

$expression1003 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments998['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1003(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1000)
					),
					$renderingContext
				);
$arguments998['__thenClosure'] = $renderChildrenClosure999;

$output983 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments998, $renderChildrenClosure999, $renderingContext);

$output983 .= '
                                                        <span class="dropdown-text">';
$array1043 = array (
);
$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1043)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1044 = array();
$arguments1044['then'] = NULL;
$arguments1044['else'] = NULL;
$arguments1044['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1046 = array();
$array1047 = array (
);$array1046['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1047);

$expression1048 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1044['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1048(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1046)
					),
					$renderingContext
				);
$arguments1044['__thenClosure'] = $renderChildrenClosure1045;

$output983 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1044, $renderChildrenClosure1045, $renderingContext);

$output983 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output983;
};
$arguments981 = array();
$arguments981['if'] = NULL;

$output978 .= '';

$output978 .= '
                                        ';
return $output978;
};
$arguments907 = array();
$arguments907['then'] = NULL;
$arguments907['else'] = NULL;
$arguments907['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array975 = array();
$array976 = array (
);$array975['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array976);

$expression977 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments907['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression977(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array975)
					),
					$renderingContext
				);
$arguments907['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments907['__elseClosures'][] = function() use ($renderingContext, $self) {
$output909 = '';

$output909 .= '
                                                <li>
                                                    <a href="';
$array910 = array (
);
$output909 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array910)]);

$output909 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments911 = array();
$arguments911['then'] = NULL;
$arguments911['else'] = NULL;
$arguments911['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array913 = array();
$array914 = array (
);$array913['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array914);

$expression915 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments911['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression915(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array913)
					),
					$renderingContext
				);
$arguments911['then'] = ' active';

$output909 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext);

$output909 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure917 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments916 = array();
$arguments916['then'] = NULL;
$arguments916['else'] = NULL;
$arguments916['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array918 = array();
$array919 = array (
);$array918['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array919);

$expression920 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments916['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression920(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array918)
					),
					$renderingContext
				);
$output921 = '';

$output921 .= ' target="';
$array922 = array (
);
$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array922)]);

$output921 .= '"';
$arguments916['then'] = $output921;

$output909 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments916, $renderChildrenClosure917, $renderingContext);

$output909 .= ' title="';
$array923 = array (
);
$output909 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array923)]);

$output909 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output930 = '';

$output930 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure932 = function() use ($renderingContext, $self) {
$output950 = '';

$output950 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
$output953 = '';

$output953 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments954 = array();
$arguments954['image'] = NULL;
$arguments954['src'] = NULL;
$arguments954['width'] = NULL;
$arguments954['height'] = NULL;
$array956 = array (
);$arguments954['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array956);
$array957 = array (
);$arguments954['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array957);
$array958 = array (
);$arguments954['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array958);

$output953 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext);

$output953 .= '
                                                                    ';
return $output953;
};
$arguments951 = array();

$output950 .= '';

$output950 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
$output961 = '';

$output961 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments962 = array();
$arguments962['additionalAttributes'] = NULL;
$arguments962['data'] = NULL;
$arguments962['class'] = NULL;
$arguments962['dir'] = NULL;
$arguments962['id'] = NULL;
$arguments962['lang'] = NULL;
$arguments962['style'] = NULL;
$arguments962['title'] = NULL;
$arguments962['accesskey'] = NULL;
$arguments962['tabindex'] = NULL;
$arguments962['onclick'] = NULL;
$arguments962['alt'] = NULL;
$arguments962['ismap'] = NULL;
$arguments962['longdesc'] = NULL;
$arguments962['usemap'] = NULL;
$arguments962['src'] = NULL;
$arguments962['treatIdAsReference'] = NULL;
$arguments962['image'] = NULL;
$arguments962['crop'] = NULL;
$arguments962['cropVariant'] = 'default';
$arguments962['width'] = NULL;
$arguments962['height'] = NULL;
$arguments962['minWidth'] = NULL;
$arguments962['minHeight'] = NULL;
$arguments962['maxWidth'] = NULL;
$arguments962['maxHeight'] = NULL;
$arguments962['absolute'] = false;
$array964 = array (
);$arguments962['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array964);
$array965 = array (
);$arguments962['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array965);
$array966 = array (
);$arguments962['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array966);
$array967 = array (
);$arguments962['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array967);
$array968 = array (
);$arguments962['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array968);

$output961 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments962, $renderChildrenClosure963, $renderingContext);

$output961 .= '
                                                                    ';
return $output961;
};
$arguments959 = array();
$arguments959['if'] = NULL;

$output950 .= '';

$output950 .= '
                                                                ';
return $output950;
};
$arguments931 = array();
$arguments931['then'] = NULL;
$arguments931['else'] = NULL;
$arguments931['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array947 = array();
$array948 = array (
);$array947['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array948);
$array947['1'] = ' === svg';

$expression949 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments931['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression949(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array947)
					),
					$renderingContext
				);
$arguments931['__thenClosure'] = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments934 = array();
$arguments934['image'] = NULL;
$arguments934['src'] = NULL;
$arguments934['width'] = NULL;
$arguments934['height'] = NULL;
$array936 = array (
);$arguments934['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array936);
$array937 = array (
);$arguments934['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array937);
$array938 = array (
);$arguments934['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array938);

$output933 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output933 .= '
                                                                    ';
return $output933;
};
$arguments931['__elseClosures'][] = function() use ($renderingContext, $self) {
$output939 = '';

$output939 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure941 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments940 = array();
$arguments940['additionalAttributes'] = NULL;
$arguments940['data'] = NULL;
$arguments940['class'] = NULL;
$arguments940['dir'] = NULL;
$arguments940['id'] = NULL;
$arguments940['lang'] = NULL;
$arguments940['style'] = NULL;
$arguments940['title'] = NULL;
$arguments940['accesskey'] = NULL;
$arguments940['tabindex'] = NULL;
$arguments940['onclick'] = NULL;
$arguments940['alt'] = NULL;
$arguments940['ismap'] = NULL;
$arguments940['longdesc'] = NULL;
$arguments940['usemap'] = NULL;
$arguments940['src'] = NULL;
$arguments940['treatIdAsReference'] = NULL;
$arguments940['image'] = NULL;
$arguments940['crop'] = NULL;
$arguments940['cropVariant'] = 'default';
$arguments940['width'] = NULL;
$arguments940['height'] = NULL;
$arguments940['minWidth'] = NULL;
$arguments940['minHeight'] = NULL;
$arguments940['maxWidth'] = NULL;
$arguments940['maxHeight'] = NULL;
$arguments940['absolute'] = false;
$array942 = array (
);$arguments940['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array942);
$array943 = array (
);$arguments940['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array943);
$array944 = array (
);$arguments940['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array944);
$array945 = array (
);$arguments940['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array945);
$array946 = array (
);$arguments940['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array946);

$output939 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments940, $renderChildrenClosure941, $renderingContext);

$output939 .= '
                                                                    ';
return $output939;
};

$output930 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments931, $renderChildrenClosure932, $renderingContext);

$output930 .= '
                                                            </span>
                                                        ';
return $output930;
};
$arguments924 = array();
$arguments924['then'] = NULL;
$arguments924['else'] = NULL;
$arguments924['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array926 = array();
$array927 = array (
);$array926['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array927);
$array926['1'] = ' && ';
$array928 = array (
);$array926['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array928);

$expression929 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments924['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression929(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array926)
					),
					$renderingContext
				);
$arguments924['__thenClosure'] = $renderChildrenClosure925;

$output909 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext);

$output909 .= '
                                                        <span class="dropdown-text">';
$array969 = array (
);
$output909 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array969)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure971 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments970 = array();
$arguments970['then'] = NULL;
$arguments970['else'] = NULL;
$arguments970['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array972 = array();
$array973 = array (
);$array972['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array973);

$expression974 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments970['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression974(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array972)
					),
					$renderingContext
				);
$arguments970['__thenClosure'] = $renderChildrenClosure971;

$output909 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments970, $renderChildrenClosure971, $renderingContext);

$output909 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output909;
};

$output906 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext);

$output906 .= '
                                    ';
return $output906;
};
$arguments903 = array();
$arguments903['each'] = NULL;
$arguments903['as'] = NULL;
$arguments903['key'] = NULL;
$arguments903['reverse'] = false;
$arguments903['iteration'] = NULL;
$array905 = array (
);$arguments903['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array905);
$arguments903['as'] = 'child';

$output901 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments903, $renderChildrenClosure904, $renderingContext);

$output901 .= '
                                </ul>
                            ';
return $output901;
};
$arguments896 = array();
$arguments896['then'] = NULL;
$arguments896['else'] = NULL;
$arguments896['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array898 = array();
$array899 = array (
);$array898['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array899);

$expression900 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments896['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression900(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array898)
					),
					$renderingContext
				);
$arguments896['__thenClosure'] = $renderChildrenClosure897;

$output814 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output814 .= '
                        </li>
                    ';
return $output814;
};
$arguments812 = array();
$arguments812['if'] = NULL;

$output809 .= '';

$output809 .= '
                ';
return $output809;
};
$arguments569 = array();
$arguments569['then'] = NULL;
$arguments569['else'] = NULL;
$arguments569['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
$array807 = array (
);$array806['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array807);

$expression808 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments569['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$arguments569['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments569['__elseClosures'][] = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$arguments572['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array575);

$expression576 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments572['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments572['then'] = ' active';

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['then'] = NULL;
$arguments577['else'] = NULL;
$arguments577['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array579 = array();
$array580 = array (
);$array579['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array580);

$expression581 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments577['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression581(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array579)
					),
					$renderingContext
				);
$arguments577['then'] = ' dropdown dropdown-hover';

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output571 .= '">
                            <a href="';
$array582 = array (
);
$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array582)]);

$output571 .= '" id="nav-item-';
$array583 = array (
);
$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array583)]);

$output571 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array586 = array();
$array587 = array (
);$array586['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array587);

$expression588 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array586)
					),
					$renderingContext
				);
$arguments584['then'] = ' dropdown-toggle';

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output571 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['then'] = NULL;
$arguments589['else'] = NULL;
$arguments589['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array591 = array();
$array592 = array (
);$array591['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array592);

$expression593 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments589['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression593(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array591)
					),
					$renderingContext
				);
$output594 = '';

$output594 .= ' target="';
$array595 = array (
);
$output594 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array595)]);

$output594 .= '"';
$arguments589['then'] = $output594;

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);

$output571 .= ' title="';
$array596 = array (
);
$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array596)]);

$output571 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$arguments597['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array599 = array();
$array600 = array (
);$array599['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array600);

$expression601 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments597['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression601(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array599)
					),
					$renderingContext
				);
$arguments597['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output571 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['image'] = NULL;
$arguments632['src'] = NULL;
$arguments632['width'] = NULL;
$arguments632['height'] = NULL;
$array634 = array (
);$arguments632['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array634);
$array635 = array (
);$arguments632['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array635);
$array636 = array (
);$arguments632['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array636);

$output631 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext);

$output631 .= '
                                            ';
return $output631;
};
$arguments629 = array();

$output628 .= '';

$output628 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['additionalAttributes'] = NULL;
$arguments640['data'] = NULL;
$arguments640['class'] = NULL;
$arguments640['dir'] = NULL;
$arguments640['id'] = NULL;
$arguments640['lang'] = NULL;
$arguments640['style'] = NULL;
$arguments640['title'] = NULL;
$arguments640['accesskey'] = NULL;
$arguments640['tabindex'] = NULL;
$arguments640['onclick'] = NULL;
$arguments640['alt'] = NULL;
$arguments640['ismap'] = NULL;
$arguments640['longdesc'] = NULL;
$arguments640['usemap'] = NULL;
$arguments640['src'] = NULL;
$arguments640['treatIdAsReference'] = NULL;
$arguments640['image'] = NULL;
$arguments640['crop'] = NULL;
$arguments640['cropVariant'] = 'default';
$arguments640['width'] = NULL;
$arguments640['height'] = NULL;
$arguments640['minWidth'] = NULL;
$arguments640['minHeight'] = NULL;
$arguments640['maxWidth'] = NULL;
$arguments640['maxHeight'] = NULL;
$arguments640['absolute'] = false;
$array642 = array (
);$arguments640['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array642);
$array643 = array (
);$arguments640['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array643);
$array644 = array (
);$arguments640['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array644);
$array645 = array (
);$arguments640['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array645);
$array646 = array (
);$arguments640['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array646);

$output639 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output639 .= '
                                            ';
return $output639;
};
$arguments637 = array();
$arguments637['if'] = NULL;

$output628 .= '';

$output628 .= '
                                        ';
return $output628;
};
$arguments609 = array();
$arguments609['then'] = NULL;
$arguments609['else'] = NULL;
$arguments609['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array625 = array();
$array626 = array (
);$array625['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array626);
$array625['1'] = ' === svg';

$expression627 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments609['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression627(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array625)
					),
					$renderingContext
				);
$arguments609['__thenClosure'] = function() use ($renderingContext, $self) {
$output611 = '';

$output611 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['image'] = NULL;
$arguments612['src'] = NULL;
$arguments612['width'] = NULL;
$arguments612['height'] = NULL;
$array614 = array (
);$arguments612['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array614);
$array615 = array (
);$arguments612['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array615);
$array616 = array (
);$arguments612['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array616);

$output611 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output611 .= '
                                            ';
return $output611;
};
$arguments609['__elseClosures'][] = function() use ($renderingContext, $self) {
$output617 = '';

$output617 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['additionalAttributes'] = NULL;
$arguments618['data'] = NULL;
$arguments618['class'] = NULL;
$arguments618['dir'] = NULL;
$arguments618['id'] = NULL;
$arguments618['lang'] = NULL;
$arguments618['style'] = NULL;
$arguments618['title'] = NULL;
$arguments618['accesskey'] = NULL;
$arguments618['tabindex'] = NULL;
$arguments618['onclick'] = NULL;
$arguments618['alt'] = NULL;
$arguments618['ismap'] = NULL;
$arguments618['longdesc'] = NULL;
$arguments618['usemap'] = NULL;
$arguments618['src'] = NULL;
$arguments618['treatIdAsReference'] = NULL;
$arguments618['image'] = NULL;
$arguments618['crop'] = NULL;
$arguments618['cropVariant'] = 'default';
$arguments618['width'] = NULL;
$arguments618['height'] = NULL;
$arguments618['minWidth'] = NULL;
$arguments618['minHeight'] = NULL;
$arguments618['maxWidth'] = NULL;
$arguments618['maxHeight'] = NULL;
$arguments618['absolute'] = false;
$array620 = array (
);$arguments618['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array620);
$array621 = array (
);$arguments618['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array621);
$array622 = array (
);$arguments618['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array622);
$array623 = array (
);$arguments618['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array623);
$array624 = array (
);$arguments618['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array624);

$output617 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output617 .= '
                                            ';
return $output617;
};

$output608 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '
                                    </span>
                                ';
return $output608;
};
$arguments602 = array();
$arguments602['then'] = NULL;
$arguments602['else'] = NULL;
$arguments602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array604 = array();
$array605 = array (
);$array604['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array605);
$array604['1'] = ' && ';
$array606 = array (
);$array604['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array606);

$expression607 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression607(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array604)
					),
					$renderingContext
				);
$arguments602['__thenClosure'] = $renderChildrenClosure603;

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output571 .= '
                                <span class="nav-link-text">';
$array647 = array (
);
$output571 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array647)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments648 = array();
$arguments648['then'] = NULL;
$arguments648['else'] = NULL;
$arguments648['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array651);

$expression652 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments648['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression652(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array650)
					),
					$renderingContext
				);
$arguments648['__thenClosure'] = $renderChildrenClosure649;

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output571 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
$output658 = '';

$output658 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array659 = array (
);
$output658 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array659)]);

$output658 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output663 = '';

$output663 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments736 = array();

$output735 .= '';

$output735 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
$output740 = '';

$output740 .= '
                                                <li>
                                                    <a href="';
$array741 = array (
);
$output740 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array741)]);

$output740 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments742 = array();
$arguments742['then'] = NULL;
$arguments742['else'] = NULL;
$arguments742['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array744 = array();
$array745 = array (
);$array744['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array745);

$expression746 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments742['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression746(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array744)
					),
					$renderingContext
				);
$arguments742['then'] = ' active';

$output740 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments742, $renderChildrenClosure743, $renderingContext);

$output740 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments747 = array();
$arguments747['then'] = NULL;
$arguments747['else'] = NULL;
$arguments747['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array749 = array();
$array750 = array (
);$array749['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array750);

$expression751 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments747['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression751(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array749)
					),
					$renderingContext
				);
$output752 = '';

$output752 .= ' target="';
$array753 = array (
);
$output752 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array753)]);

$output752 .= '"';
$arguments747['then'] = $output752;

$output740 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext);

$output740 .= ' title="';
$array754 = array (
);
$output740 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array754)]);

$output740 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$output781 = '';

$output781 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
$output784 = '';

$output784 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments785 = array();
$arguments785['image'] = NULL;
$arguments785['src'] = NULL;
$arguments785['width'] = NULL;
$arguments785['height'] = NULL;
$array787 = array (
);$arguments785['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array787);
$array788 = array (
);$arguments785['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array788);
$array789 = array (
);$arguments785['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array789);

$output784 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext);

$output784 .= '
                                                                    ';
return $output784;
};
$arguments782 = array();

$output781 .= '';

$output781 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
$output792 = '';

$output792 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments793 = array();
$arguments793['additionalAttributes'] = NULL;
$arguments793['data'] = NULL;
$arguments793['class'] = NULL;
$arguments793['dir'] = NULL;
$arguments793['id'] = NULL;
$arguments793['lang'] = NULL;
$arguments793['style'] = NULL;
$arguments793['title'] = NULL;
$arguments793['accesskey'] = NULL;
$arguments793['tabindex'] = NULL;
$arguments793['onclick'] = NULL;
$arguments793['alt'] = NULL;
$arguments793['ismap'] = NULL;
$arguments793['longdesc'] = NULL;
$arguments793['usemap'] = NULL;
$arguments793['src'] = NULL;
$arguments793['treatIdAsReference'] = NULL;
$arguments793['image'] = NULL;
$arguments793['crop'] = NULL;
$arguments793['cropVariant'] = 'default';
$arguments793['width'] = NULL;
$arguments793['height'] = NULL;
$arguments793['minWidth'] = NULL;
$arguments793['minHeight'] = NULL;
$arguments793['maxWidth'] = NULL;
$arguments793['maxHeight'] = NULL;
$arguments793['absolute'] = false;
$array795 = array (
);$arguments793['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array795);
$array796 = array (
);$arguments793['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array796);
$array797 = array (
);$arguments793['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array797);
$array798 = array (
);$arguments793['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array798);
$array799 = array (
);$arguments793['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array799);

$output792 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments793, $renderChildrenClosure794, $renderingContext);

$output792 .= '
                                                                    ';
return $output792;
};
$arguments790 = array();
$arguments790['if'] = NULL;

$output781 .= '';

$output781 .= '
                                                                ';
return $output781;
};
$arguments762 = array();
$arguments762['then'] = NULL;
$arguments762['else'] = NULL;
$arguments762['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array778 = array();
$array779 = array (
);$array778['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array779);
$array778['1'] = ' === svg';

$expression780 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments762['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression780(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array778)
					),
					$renderingContext
				);
$arguments762['__thenClosure'] = function() use ($renderingContext, $self) {
$output764 = '';

$output764 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments765 = array();
$arguments765['image'] = NULL;
$arguments765['src'] = NULL;
$arguments765['width'] = NULL;
$arguments765['height'] = NULL;
$array767 = array (
);$arguments765['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array767);
$array768 = array (
);$arguments765['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array768);
$array769 = array (
);$arguments765['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array769);

$output764 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext);

$output764 .= '
                                                                    ';
return $output764;
};
$arguments762['__elseClosures'][] = function() use ($renderingContext, $self) {
$output770 = '';

$output770 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments771 = array();
$arguments771['additionalAttributes'] = NULL;
$arguments771['data'] = NULL;
$arguments771['class'] = NULL;
$arguments771['dir'] = NULL;
$arguments771['id'] = NULL;
$arguments771['lang'] = NULL;
$arguments771['style'] = NULL;
$arguments771['title'] = NULL;
$arguments771['accesskey'] = NULL;
$arguments771['tabindex'] = NULL;
$arguments771['onclick'] = NULL;
$arguments771['alt'] = NULL;
$arguments771['ismap'] = NULL;
$arguments771['longdesc'] = NULL;
$arguments771['usemap'] = NULL;
$arguments771['src'] = NULL;
$arguments771['treatIdAsReference'] = NULL;
$arguments771['image'] = NULL;
$arguments771['crop'] = NULL;
$arguments771['cropVariant'] = 'default';
$arguments771['width'] = NULL;
$arguments771['height'] = NULL;
$arguments771['minWidth'] = NULL;
$arguments771['minHeight'] = NULL;
$arguments771['maxWidth'] = NULL;
$arguments771['maxHeight'] = NULL;
$arguments771['absolute'] = false;
$array773 = array (
);$arguments771['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array773);
$array774 = array (
);$arguments771['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array774);
$array775 = array (
);$arguments771['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array775);
$array776 = array (
);$arguments771['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array776);
$array777 = array (
);$arguments771['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array777);

$output770 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output770 .= '
                                                                    ';
return $output770;
};

$output761 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext);

$output761 .= '
                                                            </span>
                                                        ';
return $output761;
};
$arguments755 = array();
$arguments755['then'] = NULL;
$arguments755['else'] = NULL;
$arguments755['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array757 = array();
$array758 = array (
);$array757['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array758);
$array757['1'] = ' && ';
$array759 = array (
);$array757['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array759);

$expression760 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments755['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression760(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array757)
					),
					$renderingContext
				);
$arguments755['__thenClosure'] = $renderChildrenClosure756;

$output740 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

$output740 .= '
                                                        <span class="dropdown-text">';
$array800 = array (
);
$output740 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array800)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure802 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments801 = array();
$arguments801['then'] = NULL;
$arguments801['else'] = NULL;
$arguments801['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array803 = array();
$array804 = array (
);$array803['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array804);

$expression805 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments801['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression805(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array803)
					),
					$renderingContext
				);
$arguments801['__thenClosure'] = $renderChildrenClosure802;

$output740 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments801, $renderChildrenClosure802, $renderingContext);

$output740 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output740;
};
$arguments738 = array();
$arguments738['if'] = NULL;

$output735 .= '';

$output735 .= '
                                        ';
return $output735;
};
$arguments664 = array();
$arguments664['then'] = NULL;
$arguments664['else'] = NULL;
$arguments664['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array732 = array();
$array733 = array (
);$array732['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array733);

$expression734 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments664['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression734(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array732)
					),
					$renderingContext
				);
$arguments664['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments664['__elseClosures'][] = function() use ($renderingContext, $self) {
$output666 = '';

$output666 .= '
                                                <li>
                                                    <a href="';
$array667 = array (
);
$output666 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array667)]);

$output666 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments668 = array();
$arguments668['then'] = NULL;
$arguments668['else'] = NULL;
$arguments668['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array670 = array();
$array671 = array (
);$array670['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array671);

$expression672 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments668['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression672(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array670)
					),
					$renderingContext
				);
$arguments668['then'] = ' active';

$output666 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output666 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments673 = array();
$arguments673['then'] = NULL;
$arguments673['else'] = NULL;
$arguments673['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array675 = array();
$array676 = array (
);$array675['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array676);

$expression677 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments673['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression677(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array675)
					),
					$renderingContext
				);
$output678 = '';

$output678 .= ' target="';
$array679 = array (
);
$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array679)]);

$output678 .= '"';
$arguments673['then'] = $output678;

$output666 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output666 .= ' title="';
$array680 = array (
);
$output666 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array680)]);

$output666 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$output687 = '';

$output687 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
$output707 = '';

$output707 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['image'] = NULL;
$arguments711['src'] = NULL;
$arguments711['width'] = NULL;
$arguments711['height'] = NULL;
$array713 = array (
);$arguments711['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array713);
$array714 = array (
);$arguments711['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array714);
$array715 = array (
);$arguments711['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array715);

$output710 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '
                                                                    ';
return $output710;
};
$arguments708 = array();

$output707 .= '';

$output707 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
$output718 = '';

$output718 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['additionalAttributes'] = NULL;
$arguments719['data'] = NULL;
$arguments719['class'] = NULL;
$arguments719['dir'] = NULL;
$arguments719['id'] = NULL;
$arguments719['lang'] = NULL;
$arguments719['style'] = NULL;
$arguments719['title'] = NULL;
$arguments719['accesskey'] = NULL;
$arguments719['tabindex'] = NULL;
$arguments719['onclick'] = NULL;
$arguments719['alt'] = NULL;
$arguments719['ismap'] = NULL;
$arguments719['longdesc'] = NULL;
$arguments719['usemap'] = NULL;
$arguments719['src'] = NULL;
$arguments719['treatIdAsReference'] = NULL;
$arguments719['image'] = NULL;
$arguments719['crop'] = NULL;
$arguments719['cropVariant'] = 'default';
$arguments719['width'] = NULL;
$arguments719['height'] = NULL;
$arguments719['minWidth'] = NULL;
$arguments719['minHeight'] = NULL;
$arguments719['maxWidth'] = NULL;
$arguments719['maxHeight'] = NULL;
$arguments719['absolute'] = false;
$array721 = array (
);$arguments719['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array721);
$array722 = array (
);$arguments719['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array722);
$array723 = array (
);$arguments719['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array723);
$array724 = array (
);$arguments719['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array724);
$array725 = array (
);$arguments719['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array725);

$output718 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output718 .= '
                                                                    ';
return $output718;
};
$arguments716 = array();
$arguments716['if'] = NULL;

$output707 .= '';

$output707 .= '
                                                                ';
return $output707;
};
$arguments688 = array();
$arguments688['then'] = NULL;
$arguments688['else'] = NULL;
$arguments688['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array704 = array();
$array705 = array (
);$array704['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array705);
$array704['1'] = ' === svg';

$expression706 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments688['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression706(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array704)
					),
					$renderingContext
				);
$arguments688['__thenClosure'] = function() use ($renderingContext, $self) {
$output690 = '';

$output690 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['image'] = NULL;
$arguments691['src'] = NULL;
$arguments691['width'] = NULL;
$arguments691['height'] = NULL;
$array693 = array (
);$arguments691['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array693);
$array694 = array (
);$arguments691['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array694);
$array695 = array (
);$arguments691['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array695);

$output690 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output690 .= '
                                                                    ';
return $output690;
};
$arguments688['__elseClosures'][] = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['additionalAttributes'] = NULL;
$arguments697['data'] = NULL;
$arguments697['class'] = NULL;
$arguments697['dir'] = NULL;
$arguments697['id'] = NULL;
$arguments697['lang'] = NULL;
$arguments697['style'] = NULL;
$arguments697['title'] = NULL;
$arguments697['accesskey'] = NULL;
$arguments697['tabindex'] = NULL;
$arguments697['onclick'] = NULL;
$arguments697['alt'] = NULL;
$arguments697['ismap'] = NULL;
$arguments697['longdesc'] = NULL;
$arguments697['usemap'] = NULL;
$arguments697['src'] = NULL;
$arguments697['treatIdAsReference'] = NULL;
$arguments697['image'] = NULL;
$arguments697['crop'] = NULL;
$arguments697['cropVariant'] = 'default';
$arguments697['width'] = NULL;
$arguments697['height'] = NULL;
$arguments697['minWidth'] = NULL;
$arguments697['minHeight'] = NULL;
$arguments697['maxWidth'] = NULL;
$arguments697['maxHeight'] = NULL;
$arguments697['absolute'] = false;
$array699 = array (
);$arguments697['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array699);
$array700 = array (
);$arguments697['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array700);
$array701 = array (
);$arguments697['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array701);
$array702 = array (
);$arguments697['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array702);
$array703 = array (
);$arguments697['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array703);

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
                                                                    ';
return $output696;
};

$output687 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);

$output687 .= '
                                                            </span>
                                                        ';
return $output687;
};
$arguments681 = array();
$arguments681['then'] = NULL;
$arguments681['else'] = NULL;
$arguments681['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array683 = array();
$array684 = array (
);$array683['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array684);
$array683['1'] = ' && ';
$array685 = array (
);$array683['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array685);

$expression686 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments681['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression686(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array683)
					),
					$renderingContext
				);
$arguments681['__thenClosure'] = $renderChildrenClosure682;

$output666 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output666 .= '
                                                        <span class="dropdown-text">';
$array726 = array (
);
$output666 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array726)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments727 = array();
$arguments727['then'] = NULL;
$arguments727['else'] = NULL;
$arguments727['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array729 = array();
$array730 = array (
);$array729['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array730);

$expression731 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments727['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression731(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array729)
					),
					$renderingContext
				);
$arguments727['__thenClosure'] = $renderChildrenClosure728;

$output666 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);

$output666 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output666;
};

$output663 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);

$output663 .= '
                                    ';
return $output663;
};
$arguments660 = array();
$arguments660['each'] = NULL;
$arguments660['as'] = NULL;
$arguments660['key'] = NULL;
$arguments660['reverse'] = false;
$arguments660['iteration'] = NULL;
$array662 = array (
);$arguments660['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array662);
$arguments660['as'] = 'child';

$output658 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output658 .= '
                                </ul>
                            ';
return $output658;
};
$arguments653 = array();
$arguments653['then'] = NULL;
$arguments653['else'] = NULL;
$arguments653['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array655 = array();
$array656 = array (
);$array655['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array656);

$expression657 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments653['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression657(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array655)
					),
					$renderingContext
				);
$arguments653['__thenClosure'] = $renderChildrenClosure654;

$output571 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output571 .= '
                        </li>
                    ';
return $output571;
};

$output568 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output568 .= '
            ';
return $output568;
};
$arguments565 = array();
$arguments565['each'] = NULL;
$arguments565['as'] = NULL;
$arguments565['key'] = NULL;
$arguments565['reverse'] = false;
$arguments565['iteration'] = NULL;
$array567 = array (
);$arguments565['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array567);
$arguments565['as'] = 'item';

$output564 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output564 .= '
        </ul>
    ';
return $output564;
};
$arguments559 = array();
$arguments559['then'] = NULL;
$arguments559['else'] = NULL;
$arguments559['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array561 = array();
$array562 = array (
);$array561['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array562);

$expression563 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments559['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression563(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array561)
					),
					$renderingContext
				);
$arguments559['__thenClosure'] = $renderChildrenClosure560;

$output558 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
';
return $output558;
};
$arguments556 = array();
$arguments556['name'] = NULL;
$arguments556['name'] = 'MainNavigation';

$output491 .= NULL;

$output491 .= '

';

return $output491;
}


}
#