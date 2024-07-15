<?php
class Default_action_Default_0059bdbc7f6e2a4e7ee9027df84a77d7b760436d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.groupByComponent',
'name' => 'debug_log_groupByComponent',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('groupByComponent'),
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.groupByLevel',
'name' => 'debug_log_groupByLevel',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'value' => $renderingContext->getVariableProvider()->getByPath('groupByLevel'),
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
'label' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.log.startLevel',
'name' => 'debug_log_startLevel',
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'options' => $renderingContext->getVariableProvider()->getByPath('levels'),
'optionValue' => 'level',
'optionLabel' => 'levelName',
'value' => $renderingContext->getVariableProvider()->getByPath('startLevel'),
];

$array14 = [
'0' => 'false',
];

$expression15 = function($context) {return FALSE;};

$arguments11 = [
'section' => NULL,
'partial' => 'Form/Select',
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

    return $output0;
}

}

#