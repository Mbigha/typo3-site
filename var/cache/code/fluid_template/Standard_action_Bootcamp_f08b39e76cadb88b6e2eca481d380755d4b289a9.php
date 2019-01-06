<?php

class Standard_action_Bootcamp_f08b39e76cadb88b6e2eca481d380755d4b289a9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Bootcamp';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <div class="container">
        <div class="alert alert-info">
            <dl>
                <dt>Template file</dt>
                <dd>
                    <code>typo3conf/ext/typo3bootcamp2019/Resources/Private/Templates/Page/Example.html</code>
                </dd>
                <dt>Backend Configuration</dt>
                <dd>
                    <code>typo3conf/ext/typo3bootcamp2019/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/example.tsconfig</code>
                </dd>
            </dl>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 0;
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';

$output5 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'Bootcamp';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output5 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '

    <div class="container">
        <div class="alert alert-info">
            <dl>
                <dt>Template file</dt>
                <dd>
                    <code>typo3conf/ext/typo3bootcamp2019/Resources/Private/Templates/Page/Example.html</code>
                </dd>
                <dt>Backend Configuration</dt>
                <dd>
                    <code>typo3conf/ext/typo3bootcamp2019/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts/example.tsconfig</code>
                </dd>
            </dl>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['data'] = NULL;
$arguments11['typoscriptObjectPath'] = NULL;
$arguments11['currentValueKey'] = NULL;
$arguments11['table'] = '';
$arguments11['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array14);
$array13['colPos'] = 0;
$arguments11['data'] = $array13;
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '

';
return $output10;
};
$arguments8 = array();
$arguments8['name'] = NULL;
$arguments8['name'] = 'Main';

$output5 .= NULL;

$output5 .= '

';

return $output5;
}


}
#