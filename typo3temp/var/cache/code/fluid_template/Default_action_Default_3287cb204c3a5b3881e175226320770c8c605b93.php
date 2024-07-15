<?php
class Default_action_Default_3287cb204c3a5b3881e175226320770c8c605b93 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:treeDisplay',
'name' => 'tsdebug_tree',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('tree'),
];

$array4 = [
'0' => 'false',
];

$expression5 = function($context) {return FALSE;};

$arguments1 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:displayTimes',
'name' => 'tsdebug_displayTimes',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('display.times'),
];

$array9 = [
'0' => 'false',
];

$expression10 = function($context) {return FALSE;};

$arguments6 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:displayMessages',
'name' => 'tsdebug_displayMessages',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('display.messages'),
];

$array14 = [
'0' => 'false',
];

$expression15 = function($context) {return FALSE;};

$arguments11 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:trackContentRendering',
'name' => 'tsdebug_LR',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('trackContentRendering'),
];

$array19 = [
'0' => 'false',
];

$expression20 = function($context) {return FALSE;};

$arguments16 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:displayContent',
'name' => 'tsdebug_displayContent',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('display.content'),
];

$array24 = [
'0' => 'false',
];

$expression25 = function($context) {return FALSE;};

$arguments21 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$array28 = [
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf:forceTemplateParsing',
'name' => 'tsdebug_forceTemplateParsing',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('forceTemplateParsing'),
];

$array29 = [
'0' => 'false',
];

$expression30 = function($context) {return FALSE;};

$arguments26 = [
'section' => NULL,
'partial' => 'Form/Checkbox',
'delegate' => NULL,
'arguments' => $array28,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#