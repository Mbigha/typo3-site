<?php

class Standard_action_Bootcamp_a764468738f0ef91b783e09520af2270ea106a41 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Intro
 */
public function section_b4e6a310890f62289340d7802703b8c2586c6d86(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		<!--==========================
		    Intro Section
		  ============================-->
		  <section id="intro" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['src'] = NULL;
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ')">
		    <div class="intro-container wow fadeIn">
		      <h1 class="mb-4 pb-0">';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subtitle', $array4)]);

$output0 .= '</h1>
		      <p class="mb-4 pb-0">';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.abstract', $array5)]);

$output0 .= '</p>
		      
		      <a href="#about" class="about-btn scrollto">About The Event</a>
		    </div>
		  </section>
	';

return $output0;
}
/**
 * section About
 */
public function section_6b21fb791ac05170893860c248401cd24a59b732(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
		<!--==========================
	      About Section
	    ============================-->
	    <section id="about" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['src'] = NULL;
$arguments7['treatIdAsReference'] = false;
$arguments7['image'] = NULL;
$arguments7['crop'] = NULL;
$arguments7['cropVariant'] = 'default';
$arguments7['width'] = NULL;
$arguments7['height'] = NULL;
$arguments7['minWidth'] = NULL;
$arguments7['minHeight'] = NULL;
$arguments7['maxWidth'] = NULL;
$arguments7['maxHeight'] = NULL;
$arguments7['absolute'] = false;
$array9 = array (
);$arguments7['image'] = $renderingContext->getVariableProvider()->getByPath('files.1', $array9);

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= ')">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-6">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['data'] = NULL;
$arguments10['typoscriptObjectPath'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$arguments10['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array12 = array();
$array12['colPos'] = 0;
$arguments10['data'] = $array12;
$renderChildrenClosure11 = ($arguments10['data'] !== null) ? function() use ($arguments10) { return $arguments10['data']; } : $renderChildrenClosure11;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
	          </div>
	          <div class="col-lg-3">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['data'] = NULL;
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array15 = array();
$array15['colPos'] = 1;
$arguments13['data'] = $array15;
$renderChildrenClosure14 = ($arguments13['data'] !== null) ? function() use ($arguments13) { return $arguments13['data']; } : $renderChildrenClosure14;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
	          </div>
	          <div class="col-lg-3">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['data'] = NULL;
$arguments16['typoscriptObjectPath'] = NULL;
$arguments16['currentValueKey'] = NULL;
$arguments16['table'] = '';
$arguments16['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array18 = array();
$array18['colPos'] = 2;
$arguments16['data'] = $array18;
$renderChildrenClosure17 = ($arguments16['data'] !== null) ? function() use ($arguments16) { return $arguments16['data']; } : $renderChildrenClosure17;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '
	          </div>
	        </div>
	      </div>
	    </section>
	';

return $output6;
}
/**
 * section Speakers
 */
public function section_e10d3eee7065ce7105aeb4d27f45c71161e7ac41(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '
		<!--==========================
	      Speakers Section
	    ============================-->
	    <section id="speakers" class="wow fadeInUp">
	      <div class="container">
	        <div class="section-header">
	          <h2>Event Speakers</h2>
	          <p>Here are some of our speakers</p>
	        </div>
	
	        <div class="row">
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['src'] = NULL;
$arguments20['treatIdAsReference'] = false;
$arguments20['image'] = NULL;
$arguments20['crop'] = NULL;
$arguments20['cropVariant'] = 'default';
$arguments20['width'] = NULL;
$arguments20['height'] = NULL;
$arguments20['minWidth'] = NULL;
$arguments20['minHeight'] = NULL;
$arguments20['maxWidth'] = NULL;
$arguments20['maxHeight'] = NULL;
$arguments20['absolute'] = false;
$array22 = array (
);$arguments20['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array22);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '" alt="Speaker 1" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'Hubert Hirthe';
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['target'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = NULL;
$arguments23['noCache'] = NULL;
$arguments23['noCacheHash'] = NULL;
$arguments23['section'] = NULL;
$arguments23['linkAccessRestrictedPages'] = NULL;
$arguments23['additionalParams'] = NULL;
$arguments23['absolute'] = NULL;
$arguments23['addQueryString'] = NULL;
$arguments23['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '</h3>
	                <p>Quas alias incidunt</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['src'] = NULL;
$arguments25['treatIdAsReference'] = false;
$arguments25['image'] = NULL;
$arguments25['crop'] = NULL;
$arguments25['cropVariant'] = 'default';
$arguments25['width'] = NULL;
$arguments25['height'] = NULL;
$arguments25['minWidth'] = NULL;
$arguments25['minHeight'] = NULL;
$arguments25['maxWidth'] = NULL;
$arguments25['maxHeight'] = NULL;
$arguments25['absolute'] = false;
$array27 = array (
);$arguments25['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array27);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output19 .= '" alt="Speaker 2" class="img-fluid">
	              <div class="details">
	                <h3>
	                	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return 'Hubert Hirthe';
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['target'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = NULL;
$arguments28['noCache'] = NULL;
$arguments28['noCacheHash'] = NULL;
$arguments28['section'] = NULL;
$arguments28['linkAccessRestrictedPages'] = NULL;
$arguments28['additionalParams'] = NULL;
$arguments28['absolute'] = NULL;
$arguments28['addQueryString'] = NULL;
$arguments28['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments28['addQueryStringMethod'] = NULL;
$arguments28['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output19 .= '
	                </h3>
	                <p>Consequuntur odio aut</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['src'] = NULL;
$arguments30['treatIdAsReference'] = false;
$arguments30['image'] = NULL;
$arguments30['crop'] = NULL;
$arguments30['cropVariant'] = 'default';
$arguments30['width'] = NULL;
$arguments30['height'] = NULL;
$arguments30['minWidth'] = NULL;
$arguments30['minHeight'] = NULL;
$arguments30['maxWidth'] = NULL;
$arguments30['maxHeight'] = NULL;
$arguments30['absolute'] = false;
$array32 = array (
);$arguments30['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array32);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output19 .= '" alt="Speaker 3" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return 'Cole Emmerich';
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['target'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['pageType'] = NULL;
$arguments33['noCache'] = NULL;
$arguments33['noCacheHash'] = NULL;
$arguments33['section'] = NULL;
$arguments33['linkAccessRestrictedPages'] = NULL;
$arguments33['additionalParams'] = NULL;
$arguments33['absolute'] = NULL;
$arguments33['addQueryString'] = NULL;
$arguments33['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments33['addQueryStringMethod'] = NULL;
$arguments33['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output19 .= '</h3>
	                <p>Fugiat laborum et</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['src'] = NULL;
$arguments35['treatIdAsReference'] = false;
$arguments35['image'] = NULL;
$arguments35['crop'] = NULL;
$arguments35['cropVariant'] = 'default';
$arguments35['width'] = NULL;
$arguments35['height'] = NULL;
$arguments35['minWidth'] = NULL;
$arguments35['minHeight'] = NULL;
$arguments35['maxWidth'] = NULL;
$arguments35['maxHeight'] = NULL;
$arguments35['absolute'] = false;
$array37 = array (
);$arguments35['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array37);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output19 .= '" alt="Speaker 4" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return 'Jack Christiansen';
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['target'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = NULL;
$arguments38['noCache'] = NULL;
$arguments38['noCacheHash'] = NULL;
$arguments38['section'] = NULL;
$arguments38['linkAccessRestrictedPages'] = NULL;
$arguments38['additionalParams'] = NULL;
$arguments38['absolute'] = NULL;
$arguments38['addQueryString'] = NULL;
$arguments38['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output19 .= '</h3>
	                <p>Debitis iure vero</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['src'] = NULL;
$arguments40['treatIdAsReference'] = false;
$arguments40['image'] = NULL;
$arguments40['crop'] = NULL;
$arguments40['cropVariant'] = 'default';
$arguments40['width'] = NULL;
$arguments40['height'] = NULL;
$arguments40['minWidth'] = NULL;
$arguments40['minHeight'] = NULL;
$arguments40['maxWidth'] = NULL;
$arguments40['maxHeight'] = NULL;
$arguments40['absolute'] = false;
$array42 = array (
);$arguments40['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array42);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output19 .= '" alt="Speaker 5" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return 'Alejandrin Littel';
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['target'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['pageUid'] = NULL;
$arguments43['pageType'] = NULL;
$arguments43['noCache'] = NULL;
$arguments43['noCacheHash'] = NULL;
$arguments43['section'] = NULL;
$arguments43['linkAccessRestrictedPages'] = NULL;
$arguments43['additionalParams'] = NULL;
$arguments43['absolute'] = NULL;
$arguments43['addQueryString'] = NULL;
$arguments43['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output19 .= '</h3>
	                <p>Qui molestiae natus</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['src'] = NULL;
$arguments45['treatIdAsReference'] = false;
$arguments45['image'] = NULL;
$arguments45['crop'] = NULL;
$arguments45['cropVariant'] = 'default';
$arguments45['width'] = NULL;
$arguments45['height'] = NULL;
$arguments45['minWidth'] = NULL;
$arguments45['minHeight'] = NULL;
$arguments45['maxWidth'] = NULL;
$arguments45['maxHeight'] = NULL;
$arguments45['absolute'] = false;
$array47 = array (
);$arguments45['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array47);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output19 .= '" alt="Speaker 6" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return 'Willow Trantow';
};
$arguments48 = array();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['target'] = NULL;
$arguments48['rel'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = NULL;
$arguments48['noCache'] = NULL;
$arguments48['noCacheHash'] = NULL;
$arguments48['section'] = NULL;
$arguments48['linkAccessRestrictedPages'] = NULL;
$arguments48['additionalParams'] = NULL;
$arguments48['absolute'] = NULL;
$arguments48['addQueryString'] = NULL;
$arguments48['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['pageUid'] = 17;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output19 .= '</h3>
	                <p>Non autem dicta</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	
	    </section>
	';

return $output19;
}
/**
 * section Schedule
 */
public function section_0a8adac9d6d5f4d14ee887d196cd8618f0f3391a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output50 = '';

$output50 .= '
		<!--==========================
	      Schedule Section
	    ============================-->
	    <section id="schedule" class="section-with-bg">
	      <div class="container wow fadeInUp">
	        <div class="section-header">
	          <h2>Event Schedule</h2>
	          <p>Here is our event schedule</p>
	        </div>
	
	        <ul class="nav nav-tabs" role="tablist">
	          <li class="nav-item">
	            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
	          </li>
	        </ul>
	
	        <div class="row">
	        	<div class="col-md-2"></div>
	        	<div class="col-md-5">
	        		<h4>Room 1</h4>
	        	</div>
	        	<div class="col-md-5">
	        		<h4>Room 2</h4>
	        	</div>
	        </div>
	
	        <div class="tab-content row justify-content-center">
	
	          <!-- Schdule Day 1 -->
	          <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>09:30 AM</time></div>
	              <div class="col-md-5">
	                <h4>
	                	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'Registration';
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['target'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = NULL;
$arguments51['noCache'] = NULL;
$arguments51['noCacheHash'] = NULL;
$arguments51['section'] = NULL;
$arguments51['linkAccessRestrictedPages'] = NULL;
$arguments51['additionalParams'] = NULL;
$arguments51['absolute'] = NULL;
$arguments51['addQueryString'] = NULL;
$arguments51['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['pageUid'] = 18;

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
	                </h4>
	                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
	              </div>
	              <div class="col-md-5">
	                <h4>Registration</h4>
	                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Keynote <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 1 -->
	
	          <!-- Schdule Day 2 -->
	          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
	                </div>
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
	                </div>
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
	                </div>
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
	                </div>
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
	                </div>
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 2 -->
	
	          <!-- Schdule Day 3 -->
	          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 2 -->
	
	        </div>
	      </div>
	
	    </section>
	';

return $output50;
}
/**
 * section Venue
 */
public function section_67cd4061d5a84a7e058be3ef6e6184f562ca0b0f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output53 = '';

$output53 .= '
		<!--==========================
	      Venue Section
	    ============================-->
	    <section id="venue" class="wow fadeInUp">
	
	      <div class="container-fluid">
	
	        <div class="section-header">
	          <h2>Event Venue</h2>
	          <p>Event venue location info</p>
	        </div>
	
	        <div class="row no-gutters">
	          <div class="col-lg-6 venue-map">
	            <iframe src="https://maps.google.com/maps?q=Hof%20university&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
	          </div>
	
	          <div class="col-lg-6 venue-info" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['src'] = NULL;
$arguments54['treatIdAsReference'] = false;
$arguments54['image'] = NULL;
$arguments54['crop'] = NULL;
$arguments54['cropVariant'] = 'default';
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$arguments54['minWidth'] = NULL;
$arguments54['minHeight'] = NULL;
$arguments54['maxWidth'] = NULL;
$arguments54['maxHeight'] = NULL;
$arguments54['absolute'] = false;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('files.4', $array56);

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= ')">
	            <div class="row justify-content-center">
	              <div class="col-11 col-lg-8">
	              	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['data'] = NULL;
$arguments57['typoscriptObjectPath'] = NULL;
$arguments57['currentValueKey'] = NULL;
$arguments57['table'] = '';
$arguments57['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array59 = array();
$array59['colPos'] = 4;
$arguments57['data'] = $array59;
$renderChildrenClosure58 = ($arguments57['data'] !== null) ? function() use ($arguments57) { return $arguments57['data']; } : $renderChildrenClosure58;
$output53 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output53 .= '
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      
	    </section>
	';

return $output53;
}
/**
 * section Contact
 */
public function section_b37456c4530be810dc040f50da72eda09addfb0a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output60 = '';

$output60 .= '
		<!--==========================
	      Contact Section
	    ============================-->
	    <section id="contact" class="section-bg wow fadeInUp">
	
	      <div class="container">
	
	        <div class="section-header">
	          <h2>Contact Us</h2>
	        </div>
	
	        <div class="row contact-info">
	
	          <div class="col-md-4">
	            <div class="contact-address">
	              <i class="ion-ios-location-outline"></i>
	              <h3>Address</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['data'] = NULL;
$arguments61['typoscriptObjectPath'] = NULL;
$arguments61['currentValueKey'] = NULL;
$arguments61['table'] = '';
$arguments61['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array63 = array();
$array63['colPos'] = 5;
$arguments61['data'] = $array63;
$renderChildrenClosure62 = ($arguments61['data'] !== null) ? function() use ($arguments61) { return $arguments61['data']; } : $renderChildrenClosure62;
$output60 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
	            </div>
	          </div>
	
	          <div class="col-md-4">
	            <div class="contact-phone">
	              <i class="ion-ios-telephone-outline"></i>
	              <h3>Phone Number</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['data'] = NULL;
$arguments64['typoscriptObjectPath'] = NULL;
$arguments64['currentValueKey'] = NULL;
$arguments64['table'] = '';
$arguments64['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array66 = array();
$array66['colPos'] = 6;
$arguments64['data'] = $array66;
$renderChildrenClosure65 = ($arguments64['data'] !== null) ? function() use ($arguments64) { return $arguments64['data']; } : $renderChildrenClosure65;
$output60 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output60 .= '
	            </div>
	          </div>
	
	          <div class="col-md-4">
	            <div class="contact-email">
	              <i class="ion-ios-email-outline"></i>
	              <h3>Email</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['data'] = NULL;
$arguments67['typoscriptObjectPath'] = NULL;
$arguments67['currentValueKey'] = NULL;
$arguments67['table'] = '';
$arguments67['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array69 = array();
$array69['colPos'] = 7;
$arguments67['data'] = $array69;
$renderChildrenClosure68 = ($arguments67['data'] !== null) ? function() use ($arguments67) { return $arguments67['data']; } : $renderChildrenClosure68;
$output60 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output60 .= '
	            </div>
	          </div>
	
	        </div>
	
	        <div class="form">
	          <div id="sendmessage">Your message has been sent. Thank you!</div>
	          <div id="errormessage"></div>
	          <form action="" method="post" role="form" class="contactForm">
	            <div class="form-row">
	              <div class="form-group col-md-6">
	                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
	                <div class="validation"></div>
	              </div>
	              <div class="form-group col-md-6">
	                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
	                <div class="validation"></div>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
	              <div class="validation"></div>
	            </div>
	            <div class="form-group">
	              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
	              <div class="validation"></div>
	            </div>
	            <div class="text-center"><button type="submit">Send Message</button></div>
	          </form>
	        </div>
	
	      </div>
	    </section><!-- #contact -->
	';

return $output60;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output70 = '';

$output70 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['name'] = NULL;
$arguments71['name'] = 'Bootcamp';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
		<!--==========================
		    Intro Section
		  ============================-->
		  <section id="intro" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['src'] = NULL;
$arguments76['treatIdAsReference'] = false;
$arguments76['image'] = NULL;
$arguments76['crop'] = NULL;
$arguments76['cropVariant'] = 'default';
$arguments76['width'] = NULL;
$arguments76['height'] = NULL;
$arguments76['minWidth'] = NULL;
$arguments76['minHeight'] = NULL;
$arguments76['maxWidth'] = NULL;
$arguments76['maxHeight'] = NULL;
$arguments76['absolute'] = false;
$array78 = array (
);$arguments76['image'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array78);

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= ')">
		    <div class="intro-container wow fadeIn">
		      <h1 class="mb-4 pb-0">';
$array79 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.subtitle', $array79)]);

$output75 .= '</h1>
		      <p class="mb-4 pb-0">';
$array80 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.abstract', $array80)]);

$output75 .= '</p>
		      
		      <a href="#about" class="about-btn scrollto">About The Event</a>
		    </div>
		  </section>
	';
return $output75;
};
$arguments73 = array();
$arguments73['name'] = NULL;
$arguments73['name'] = 'Intro';

$output70 .= NULL;

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
		<!--==========================
	      About Section
	    ============================-->
	    <section id="about" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['src'] = NULL;
$arguments84['treatIdAsReference'] = false;
$arguments84['image'] = NULL;
$arguments84['crop'] = NULL;
$arguments84['cropVariant'] = 'default';
$arguments84['width'] = NULL;
$arguments84['height'] = NULL;
$arguments84['minWidth'] = NULL;
$arguments84['minHeight'] = NULL;
$arguments84['maxWidth'] = NULL;
$arguments84['maxHeight'] = NULL;
$arguments84['absolute'] = false;
$array86 = array (
);$arguments84['image'] = $renderingContext->getVariableProvider()->getByPath('files.1', $array86);

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= ')">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-6">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['data'] = NULL;
$arguments87['typoscriptObjectPath'] = NULL;
$arguments87['currentValueKey'] = NULL;
$arguments87['table'] = '';
$arguments87['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array89 = array();
$array89['colPos'] = 0;
$arguments87['data'] = $array89;
$renderChildrenClosure88 = ($arguments87['data'] !== null) ? function() use ($arguments87) { return $arguments87['data']; } : $renderChildrenClosure88;
$output83 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output83 .= '
	          </div>
	          <div class="col-lg-3">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['data'] = NULL;
$arguments90['typoscriptObjectPath'] = NULL;
$arguments90['currentValueKey'] = NULL;
$arguments90['table'] = '';
$arguments90['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array92 = array();
$array92['colPos'] = 1;
$arguments90['data'] = $array92;
$renderChildrenClosure91 = ($arguments90['data'] !== null) ? function() use ($arguments90) { return $arguments90['data']; } : $renderChildrenClosure91;
$output83 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output83 .= '
	          </div>
	          <div class="col-lg-3">
	            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['data'] = NULL;
$arguments93['typoscriptObjectPath'] = NULL;
$arguments93['currentValueKey'] = NULL;
$arguments93['table'] = '';
$arguments93['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array95 = array();
$array95['colPos'] = 2;
$arguments93['data'] = $array95;
$renderChildrenClosure94 = ($arguments93['data'] !== null) ? function() use ($arguments93) { return $arguments93['data']; } : $renderChildrenClosure94;
$output83 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output83 .= '
	          </div>
	        </div>
	      </div>
	    </section>
	';
return $output83;
};
$arguments81 = array();
$arguments81['name'] = NULL;
$arguments81['name'] = 'About';

$output70 .= NULL;

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
		<!--==========================
	      Speakers Section
	    ============================-->
	    <section id="speakers" class="wow fadeInUp">
	      <div class="container">
	        <div class="section-header">
	          <h2>Event Speakers</h2>
	          <p>Here are some of our speakers</p>
	        </div>
	
	        <div class="row">
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['src'] = NULL;
$arguments99['treatIdAsReference'] = false;
$arguments99['image'] = NULL;
$arguments99['crop'] = NULL;
$arguments99['cropVariant'] = 'default';
$arguments99['width'] = NULL;
$arguments99['height'] = NULL;
$arguments99['minWidth'] = NULL;
$arguments99['minHeight'] = NULL;
$arguments99['maxWidth'] = NULL;
$arguments99['maxHeight'] = NULL;
$arguments99['absolute'] = false;
$array101 = array (
);$arguments99['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array101);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output98 .= '" alt="Speaker 1" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return 'Hubert Hirthe';
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['target'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['pageType'] = NULL;
$arguments102['noCache'] = NULL;
$arguments102['noCacheHash'] = NULL;
$arguments102['section'] = NULL;
$arguments102['linkAccessRestrictedPages'] = NULL;
$arguments102['additionalParams'] = NULL;
$arguments102['absolute'] = NULL;
$arguments102['addQueryString'] = NULL;
$arguments102['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments102['addQueryStringMethod'] = NULL;
$arguments102['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output98 .= '</h3>
	                <p>Quas alias incidunt</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['src'] = NULL;
$arguments104['treatIdAsReference'] = false;
$arguments104['image'] = NULL;
$arguments104['crop'] = NULL;
$arguments104['cropVariant'] = 'default';
$arguments104['width'] = NULL;
$arguments104['height'] = NULL;
$arguments104['minWidth'] = NULL;
$arguments104['minHeight'] = NULL;
$arguments104['maxWidth'] = NULL;
$arguments104['maxHeight'] = NULL;
$arguments104['absolute'] = false;
$array106 = array (
);$arguments104['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array106);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output98 .= '" alt="Speaker 2" class="img-fluid">
	              <div class="details">
	                <h3>
	                	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return 'Hubert Hirthe';
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['target'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output98 .= '
	                </h3>
	                <p>Consequuntur odio aut</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['src'] = NULL;
$arguments109['treatIdAsReference'] = false;
$arguments109['image'] = NULL;
$arguments109['crop'] = NULL;
$arguments109['cropVariant'] = 'default';
$arguments109['width'] = NULL;
$arguments109['height'] = NULL;
$arguments109['minWidth'] = NULL;
$arguments109['minHeight'] = NULL;
$arguments109['maxWidth'] = NULL;
$arguments109['maxHeight'] = NULL;
$arguments109['absolute'] = false;
$array111 = array (
);$arguments109['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array111);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output98 .= '" alt="Speaker 3" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return 'Cole Emmerich';
};
$arguments112 = array();
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['target'] = NULL;
$arguments112['rel'] = NULL;
$arguments112['pageUid'] = NULL;
$arguments112['pageType'] = NULL;
$arguments112['noCache'] = NULL;
$arguments112['noCacheHash'] = NULL;
$arguments112['section'] = NULL;
$arguments112['linkAccessRestrictedPages'] = NULL;
$arguments112['additionalParams'] = NULL;
$arguments112['absolute'] = NULL;
$arguments112['addQueryString'] = NULL;
$arguments112['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments112['addQueryStringMethod'] = NULL;
$arguments112['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output98 .= '</h3>
	                <p>Fugiat laborum et</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['src'] = NULL;
$arguments114['treatIdAsReference'] = false;
$arguments114['image'] = NULL;
$arguments114['crop'] = NULL;
$arguments114['cropVariant'] = 'default';
$arguments114['width'] = NULL;
$arguments114['height'] = NULL;
$arguments114['minWidth'] = NULL;
$arguments114['minHeight'] = NULL;
$arguments114['maxWidth'] = NULL;
$arguments114['maxHeight'] = NULL;
$arguments114['absolute'] = false;
$array116 = array (
);$arguments114['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array116);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output98 .= '" alt="Speaker 4" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return 'Jack Christiansen';
};
$arguments117 = array();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['target'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = NULL;
$arguments117['noCache'] = NULL;
$arguments117['noCacheHash'] = NULL;
$arguments117['section'] = NULL;
$arguments117['linkAccessRestrictedPages'] = NULL;
$arguments117['additionalParams'] = NULL;
$arguments117['absolute'] = NULL;
$arguments117['addQueryString'] = NULL;
$arguments117['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output98 .= '</h3>
	                <p>Debitis iure vero</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['src'] = NULL;
$arguments119['treatIdAsReference'] = false;
$arguments119['image'] = NULL;
$arguments119['crop'] = NULL;
$arguments119['cropVariant'] = 'default';
$arguments119['width'] = NULL;
$arguments119['height'] = NULL;
$arguments119['minWidth'] = NULL;
$arguments119['minHeight'] = NULL;
$arguments119['maxWidth'] = NULL;
$arguments119['maxHeight'] = NULL;
$arguments119['absolute'] = false;
$array121 = array (
);$arguments119['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array121);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output98 .= '" alt="Speaker 5" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return 'Alejandrin Littel';
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['target'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['pageUid'] = NULL;
$arguments122['pageType'] = NULL;
$arguments122['noCache'] = NULL;
$arguments122['noCacheHash'] = NULL;
$arguments122['section'] = NULL;
$arguments122['linkAccessRestrictedPages'] = NULL;
$arguments122['additionalParams'] = NULL;
$arguments122['absolute'] = NULL;
$arguments122['addQueryString'] = NULL;
$arguments122['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output98 .= '</h3>
	                <p>Qui molestiae natus</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6">
	            <div class="speaker">
	              <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['src'] = NULL;
$arguments124['treatIdAsReference'] = false;
$arguments124['image'] = NULL;
$arguments124['crop'] = NULL;
$arguments124['cropVariant'] = 'default';
$arguments124['width'] = NULL;
$arguments124['height'] = NULL;
$arguments124['minWidth'] = NULL;
$arguments124['minHeight'] = NULL;
$arguments124['maxWidth'] = NULL;
$arguments124['maxHeight'] = NULL;
$arguments124['absolute'] = false;
$array126 = array (
);$arguments124['image'] = $renderingContext->getVariableProvider()->getByPath('files.3', $array126);

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output98 .= '" alt="Speaker 6" class="img-fluid">
	              <div class="details">
	                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return 'Willow Trantow';
};
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['target'] = NULL;
$arguments127['rel'] = NULL;
$arguments127['pageUid'] = NULL;
$arguments127['pageType'] = NULL;
$arguments127['noCache'] = NULL;
$arguments127['noCacheHash'] = NULL;
$arguments127['section'] = NULL;
$arguments127['linkAccessRestrictedPages'] = NULL;
$arguments127['additionalParams'] = NULL;
$arguments127['absolute'] = NULL;
$arguments127['addQueryString'] = NULL;
$arguments127['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments127['addQueryStringMethod'] = NULL;
$arguments127['pageUid'] = 17;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output98 .= '</h3>
	                <p>Non autem dicta</p>
	                <div class="social">
	                  <a href=""><i class="fa fa-twitter"></i></a>
	                  <a href=""><i class="fa fa-facebook"></i></a>
	                  <a href=""><i class="fa fa-google-plus"></i></a>
	                  <a href=""><i class="fa fa-linkedin"></i></a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	
	    </section>
	';
return $output98;
};
$arguments96 = array();
$arguments96['name'] = NULL;
$arguments96['name'] = 'Speakers';

$output70 .= NULL;

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
		<!--==========================
	      Schedule Section
	    ============================-->
	    <section id="schedule" class="section-with-bg">
	      <div class="container wow fadeInUp">
	        <div class="section-header">
	          <h2>Event Schedule</h2>
	          <p>Here is our event schedule</p>
	        </div>
	
	        <ul class="nav nav-tabs" role="tablist">
	          <li class="nav-item">
	            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
	          </li>
	        </ul>
	
	        <div class="row">
	        	<div class="col-md-2"></div>
	        	<div class="col-md-5">
	        		<h4>Room 1</h4>
	        	</div>
	        	<div class="col-md-5">
	        		<h4>Room 2</h4>
	        	</div>
	        </div>
	
	        <div class="tab-content row justify-content-center">
	
	          <!-- Schdule Day 1 -->
	          <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>09:30 AM</time></div>
	              <div class="col-md-5">
	                <h4>
	                	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return 'Registration';
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['target'] = NULL;
$arguments132['rel'] = NULL;
$arguments132['pageUid'] = NULL;
$arguments132['pageType'] = NULL;
$arguments132['noCache'] = NULL;
$arguments132['noCacheHash'] = NULL;
$arguments132['section'] = NULL;
$arguments132['linkAccessRestrictedPages'] = NULL;
$arguments132['additionalParams'] = NULL;
$arguments132['absolute'] = NULL;
$arguments132['addQueryString'] = NULL;
$arguments132['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments132['addQueryStringMethod'] = NULL;
$arguments132['pageUid'] = 18;

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
	                </h4>
	                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
	              </div>
	              <div class="col-md-5">
	                <h4>Registration</h4>
	                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Keynote <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-5">
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 1 -->
	
	          <!-- Schdule Day 2 -->
	          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-5">
	                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
	                </div>
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
	                </div>
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
	                </div>
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
	                </div>
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-5">
	                <div class="speaker">
	                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
	                </div>
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 2 -->
	
	          <!-- Schdule Day 3 -->
	          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>10:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
	                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>11:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
	                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>12:00 AM</time></div>
	              <div class="col-md-10">
	                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
	                <p>Facere provident incidunt quos voluptas.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>02:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
	                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>03:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
	                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
	              </div>
	            </div>
	
	            <div class="row schedule-item">
	              <div class="col-md-2"><time>04:00 PM</time></div>
	              <div class="col-md-10">
	                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
	                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
	              </div>
	            </div>
	
	          </div>
	          <!-- End Schdule Day 2 -->
	
	        </div>
	      </div>
	
	    </section>
	';
return $output131;
};
$arguments129 = array();
$arguments129['name'] = NULL;
$arguments129['name'] = 'Schedule';

$output70 .= NULL;

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
		<!--==========================
	      Venue Section
	    ============================-->
	    <section id="venue" class="wow fadeInUp">
	
	      <div class="container-fluid">
	
	        <div class="section-header">
	          <h2>Event Venue</h2>
	          <p>Event venue location info</p>
	        </div>
	
	        <div class="row no-gutters">
	          <div class="col-lg-6 venue-map">
	            <iframe src="https://maps.google.com/maps?q=Hof%20university&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
	          </div>
	
	          <div class="col-lg-6 venue-info" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['src'] = NULL;
$arguments137['treatIdAsReference'] = false;
$arguments137['image'] = NULL;
$arguments137['crop'] = NULL;
$arguments137['cropVariant'] = 'default';
$arguments137['width'] = NULL;
$arguments137['height'] = NULL;
$arguments137['minWidth'] = NULL;
$arguments137['minHeight'] = NULL;
$arguments137['maxWidth'] = NULL;
$arguments137['maxHeight'] = NULL;
$arguments137['absolute'] = false;
$array139 = array (
);$arguments137['image'] = $renderingContext->getVariableProvider()->getByPath('files.4', $array139);

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= ')">
	            <div class="row justify-content-center">
	              <div class="col-11 col-lg-8">
	              	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['data'] = NULL;
$arguments140['typoscriptObjectPath'] = NULL;
$arguments140['currentValueKey'] = NULL;
$arguments140['table'] = '';
$arguments140['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array142 = array();
$array142['colPos'] = 4;
$arguments140['data'] = $array142;
$renderChildrenClosure141 = ($arguments140['data'] !== null) ? function() use ($arguments140) { return $arguments140['data']; } : $renderChildrenClosure141;
$output136 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output136 .= '
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      
	    </section>
	';
return $output136;
};
$arguments134 = array();
$arguments134['name'] = NULL;
$arguments134['name'] = 'Venue';

$output70 .= NULL;

$output70 .= '
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
		<!--==========================
	      Contact Section
	    ============================-->
	    <section id="contact" class="section-bg wow fadeInUp">
	
	      <div class="container">
	
	        <div class="section-header">
	          <h2>Contact Us</h2>
	        </div>
	
	        <div class="row contact-info">
	
	          <div class="col-md-4">
	            <div class="contact-address">
	              <i class="ion-ios-location-outline"></i>
	              <h3>Address</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['data'] = NULL;
$arguments146['typoscriptObjectPath'] = NULL;
$arguments146['currentValueKey'] = NULL;
$arguments146['table'] = '';
$arguments146['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array148 = array();
$array148['colPos'] = 5;
$arguments146['data'] = $array148;
$renderChildrenClosure147 = ($arguments146['data'] !== null) ? function() use ($arguments146) { return $arguments146['data']; } : $renderChildrenClosure147;
$output145 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
	            </div>
	          </div>
	
	          <div class="col-md-4">
	            <div class="contact-phone">
	              <i class="ion-ios-telephone-outline"></i>
	              <h3>Phone Number</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['data'] = NULL;
$arguments149['typoscriptObjectPath'] = NULL;
$arguments149['currentValueKey'] = NULL;
$arguments149['table'] = '';
$arguments149['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array151 = array();
$array151['colPos'] = 6;
$arguments149['data'] = $array151;
$renderChildrenClosure150 = ($arguments149['data'] !== null) ? function() use ($arguments149) { return $arguments149['data']; } : $renderChildrenClosure150;
$output145 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output145 .= '
	            </div>
	          </div>
	
	          <div class="col-md-4">
	            <div class="contact-email">
	              <i class="ion-ios-email-outline"></i>
	              <h3>Email</h3>
	              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['data'] = NULL;
$arguments152['typoscriptObjectPath'] = NULL;
$arguments152['currentValueKey'] = NULL;
$arguments152['table'] = '';
$arguments152['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array154 = array();
$array154['colPos'] = 7;
$arguments152['data'] = $array154;
$renderChildrenClosure153 = ($arguments152['data'] !== null) ? function() use ($arguments152) { return $arguments152['data']; } : $renderChildrenClosure153;
$output145 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output145 .= '
	            </div>
	          </div>
	
	        </div>
	
	        <div class="form">
	          <div id="sendmessage">Your message has been sent. Thank you!</div>
	          <div id="errormessage"></div>
	          <form action="" method="post" role="form" class="contactForm">
	            <div class="form-row">
	              <div class="form-group col-md-6">
	                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
	                <div class="validation"></div>
	              </div>
	              <div class="form-group col-md-6">
	                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
	                <div class="validation"></div>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
	              <div class="validation"></div>
	            </div>
	            <div class="form-group">
	              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
	              <div class="validation"></div>
	            </div>
	            <div class="text-center"><button type="submit">Send Message</button></div>
	          </form>
	        </div>
	
	      </div>
	    </section><!-- #contact -->
	';
return $output145;
};
$arguments143 = array();
$arguments143['name'] = NULL;
$arguments143['name'] = 'Contact';

$output70 .= NULL;

$output70 .= '

';

return $output70;
}


}
#