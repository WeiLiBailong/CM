<?php
class Default_action_Default_8ed3bfb53defd391bab2c2c57edd74e22929b9c8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<div class="typo3-adminPanel-sql">
    <div class="typo3-adminPanel-row typo3-adminPanel-row-nowrap typo3-adminPanel-sql-header">
        <div class="typo3-adminPanel-col typo3-adminPanel-col-icon"></div>
        <div class="typo3-adminPanel-col typo3-adminPanel-col-ellipsis typo3-adminPanel-col-auto">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.sqlQuery',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        </div>
        <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-count">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.queryCount',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
        </div>
        <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-time">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.queryTime',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
        </div>
    </div>
    <div class="typo3-adminPanel-row typo3-adminPanel-row-nowrap">
        <div class="typo3-adminPanel-col typo3-adminPanel-col-icon"></div>
        <div class="typo3-adminPanel-col typo3-adminPanel-col-ellipsis typo3-adminPanel-col-auto">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.total',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
        </div>
        <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-count">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('totalQueries')]);

$output0 .= '</div>
        <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-time">
            <div class="typo3-adminPanel-progress">
                <div class="typo3-adminPanel-progress-bar" style="width:';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string9 = '{100 * 0.65}';
$array10 = array (
  0 => '{100 * 0.65}',
  1 => '{100 * 0.65}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string9, $array10)]);

$output0 .= '%"></div>
                <div class="typo3-adminPanel-progress-value">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('totalTime');
};

$arguments11 = [
'decimals' => 2,
'decimalSeparator' => '.',
'thousandsSeparator' => ',',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</div>
            </div>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        <div class="typo3-adminPanel-row typo3-adminPanel-row-nowrap">
            <div class="typo3-adminPanel-col typo3-adminPanel-col-icon">
                <a href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:button.view',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '" data-typo3-zoom-target="queryCollection-';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('queryCollectionIteration.index')]);

$output15 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'identifier' => 'actions-document-view',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
'title' => NULL,
];

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '
                </a>
            </div>
            <div class="typo3-adminPanel-col typo3-adminPanel-col-ellipsis typo3-adminPanel-col-auto">
                ';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('queryCollection.sql')]);

$output15 .= '
            </div>
            <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-count">';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('queryCollection.count')]);

$output15 .= '</div>
            <div class="typo3-adminPanel-col typo3-adminPanel-sql-col-time">
                <div class="typo3-adminPanel-progress">
                    <div class="typo3-adminPanel-progress-bar" style="width:';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string20 = '{queryCollection.time / totalTime * 100 * 0.65}';
$array21 = array (
  0 => '{queryCollection.time / totalTime * 100 * 0.65}',
  1 => '{queryCollection.time / totalTime * 100 * 0.65}',
);

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string20, $array21)]);

$output15 .= '%;"></div>
                    <div class="typo3-adminPanel-progress-value">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('queryCollection.time');
};

$arguments22 = [
'decimals' => 2,
'decimalSeparator' => '.',
'thousandsSeparator' => ',',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output15 .= '</div>
                </div>
            </div>
        </div>
        <div class="typo3-adminPanel-zoom"  data-typo3-zoom-id="queryCollection-';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('queryCollectionIteration.index')]);

$output15 .= '">
            <div class="typo3-adminPanel-zoom-header">
                <button class="typo3-adminPanel-btn" data-typo3-zoom-close="true">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output15 .= '
                </button>
            </div>
            <div class="typo3-adminPanel-zoom-body">
                <h3 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.query',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output15 .= '</h3>
                <pre class="typo3-adminPanel-sql-statement">';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('queryCollection.sql')]);

$output15 .= '</pre>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('queryCollection.queries'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('queryCollection.queries.0.backtrace'),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                            <h3 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.backtrace',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '</h3>
                            <div class="typo3-adminPanel-sql-backtrace">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                                    <div class="typo3-adminPanel-sql-backtrace-item">
                                        <span class="typo3-adminPanel-sql-backtrace-item-function">
                                            ';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value.class')]);

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value.type')]);

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value.function')]);

$output44 .= '
                                        </span>
                                        <span class="typo3-adminPanel-sql-backtrace-item-file">
                                            ';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value.file')]);

$output44 .= ':';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value.line')]);

$output44 .= '
                                        </span>
                                    </div>
                                ';
return $output44;
};

$arguments42 = [
'each' => $renderingContext->getVariableProvider()->getByPath('query.backtrace'),
'as' => 'value',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output39 .= '
                            </div>
                        ';
return $output39;
};

$array38 = [
'query' => $renderingContext->getVariableProvider()->getByPath('queryCollection.queries.0'),
];

$arguments36 = [
'map' => $array38,
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                    ';
return $output35;
},
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output31 .= '
                    <h3 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.queries',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output31 .= '</h3>
                    <div class="typo3-adminPanel-table-overflow">
                        <table class="typo3-adminPanel-table typo3-adminPanel-table-debug">
                            <thead>
                                <tr>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                        <th scope="col">dcValue';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('param.cycle')]);

$output49 .= '</th>
                                    ';
return $output49;
};

$arguments47 = [
'each' => $renderingContext->getVariableProvider()->getByPath('queryCollection.queries.0.params'),
'as' => 'value',
'key' => NULL,
'reverse' => false,
'iteration' => 'param',
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output31 .= '
                                    <th scope="col" class="typo3-adminPanel-table-cell-space"></th>
                                    <th scope="col" class="typo3-adminPanel-table-cell-time">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'LLL:EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf:submodule.queryInformation.queryTime',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => $renderingContext->getVariableProvider()->getByPath('languageKey'),
'alternativeLanguageKeys' => NULL,
];

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output31 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
                                    <tr>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '
                                            <td class="typo3-adminPanel-table-cell-break">';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value')]);

$output57 .= '</td>
                                        ';
return $output57;
};

$arguments55 = [
'each' => $renderingContext->getVariableProvider()->getByPath('query.params'),
'as' => 'value',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                                        <td scope="col" class="typo3-adminPanel-table-cell-space"></td>
                                        <td class="typo3-adminPanel-table-cell-time">
                                            <div class="typo3-adminPanel-progress">
                                                <div class="typo3-adminPanel-progress-bar" style="width:';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string58 = '{query.executionMS * 1000 / totalTime * 100}';
$array59 = array (
  0 => '{query.executionMS * 1000 / totalTime * 100}',
  1 => '{query.executionMS * 1000 / totalTime * 100}',
);

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string58, $array59)]);

$output54 .= '%;"></div>
                                                <div class="typo3-adminPanel-progress-value">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string62 = '{query.executionMS * 1000}';
$array63 = array (
  0 => '{query.executionMS * 1000}',
  1 => '{query.executionMS * 1000}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string62, $array63);
};

$arguments60 = [
'decimals' => 2,
'decimalSeparator' => '.',
'thousandsSeparator' => ',',
];

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output54 .= '</div>
                                            </div>
                                        </td>
                                    </tr>
                                ';
return $output54;
};

$arguments52 = [
'each' => $renderingContext->getVariableProvider()->getByPath('queryCollection.queries'),
'as' => 'query',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output31 .= '
                            </tbody>
                        </table>
                    </div>
                ';
return $output31;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output15 .= '
            </div>
        </div>
    ';
return $output15;
};

$arguments13 = [
'each' => $renderingContext->getVariableProvider()->getByPath('queries'),
'as' => 'queryCollection',
'key' => NULL,
'reverse' => false,
'iteration' => 'queryCollectionIteration',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
</div>

';

    return $output0;
}

}

#