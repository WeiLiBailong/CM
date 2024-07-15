<?php
class Default_action_Default_653139ff0bb6a3d965be0233e0a0d8ac91c4e9b7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'label' => '$_GET',
'data' => $renderingContext->getVariableProvider()->getByPath('get'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array4 = [
'0' => 'false',
];

$expression5 = function($context) {return FALSE;};

$arguments1 = [
'section' => NULL,
'partial' => 'Data/TableKeyValue',
'delegate' => NULL,
'arguments' => $array3,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$array8 = [
'label' => '$_POST',
'data' => $renderingContext->getVariableProvider()->getByPath('post'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array9 = [
'0' => 'false',
];

$expression10 = function($context) {return FALSE;};

$arguments6 = [
'section' => NULL,
'partial' => 'Data/TableKeyValue',
'delegate' => NULL,
'arguments' => $array8,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'label' => '$_COOKIE',
'data' => $renderingContext->getVariableProvider()->getByPath('cookie'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array14 = [
'0' => 'false',
];

$expression15 = function($context) {return FALSE;};

$arguments11 = [
'section' => NULL,
'partial' => 'Data/TableKeyValue',
'delegate' => NULL,
'arguments' => $array13,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$array18 = [
'label' => '$_SESSION',
'data' => $renderingContext->getVariableProvider()->getByPath('session'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array19 = [
'0' => 'false',
];

$expression20 = function($context) {return FALSE;};

$arguments16 = [
'section' => NULL,
'partial' => 'Data/TableKeyValue',
'delegate' => NULL,
'arguments' => $array18,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$array23 = [
'label' => '$_SERVER',
'data' => $renderingContext->getVariableProvider()->getByPath('server'),
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
];

$array24 = [
'0' => 'false',
];

$expression25 = function($context) {return FALSE;};

$arguments21 = [
'section' => NULL,
'partial' => 'Data/TableKeyValue',
'delegate' => NULL,
'arguments' => $array23,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#