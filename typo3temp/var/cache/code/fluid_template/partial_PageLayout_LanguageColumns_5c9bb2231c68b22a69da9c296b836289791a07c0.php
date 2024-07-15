<?php
class partial_PageLayout_LanguageColumns_5c9bb2231c68b22a69da9c296b836289791a07c0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('context.newLanguageOptions'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
    <div class="form-row">
        <div class="form-group">
            <select class="form-select" name="createNewLanguage" data-global-event="change" data-action-navigate="$value">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                    <option value="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url')]);

$output7 .= '">';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageName')]);

$output7 .= '</option>
                ';
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('context.newLanguageOptions'),
'as' => 'languageName',
'key' => 'url',
'reverse' => false,
'iteration' => NULL,
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
            </select>
        </div>
    </div>
';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
<div class="t3-grid-container" data-default-language-binding="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.defaultLanguageBinding'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output0 .= '">
    <div class="t3-grid-container-inner">
        <table class="t3-page-columns t3-grid-table t3js-page-columns">
            <tr>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                    <td valign="top"
                        class="t3-page-column t3-page-column-lang-name"
                        data-language-uid="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId')]);

$output13 .= '"
                        data-language-title="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title')]);

$output13 .= '"
                        data-flag-identifier="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.flagIdentifier')]);

$output13 .= '"
                    >
                        <h2>';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title')]);

$output13 .= '</h2>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageMode'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                            <span class="badge badge-';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageModeLabelClass')]);

$output17 .= '">';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageMode')]);

$output17 .= '</span>
                        ';
return $output17;
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output13 .= '
                    </td>
                ';
return $output13;
};

$arguments11 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
            </tr>
            <tr>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                    <td class="t3-page-column t3-page-lang-label nowrap">
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.allowViewPage'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                                <button class="btn btn-default btn-sm" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageColumn.previewUrlAttributes');
};

$arguments26 = [
'value' => NULL,
];

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.previewUrlAttributes'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27(),
'else' => 'disabled="true"',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
];

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output24 .= ' title="';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.viewPageLinkTitle')]);

$output24 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'identifier' => 'actions-view',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output24 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output24 .= '
                                </button>
                            ';
return $output24;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output20 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.allowEditPage'),
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
                                <a href="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.pageEditUrl')]);

$output35 .= '" class="btn btn-default btn-sm" title="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.pageEditTitle')]);

$output35 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output35 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                                </a>
                            ';
return $output35;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output20 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('allowEditContent'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId'),
'3' => ' && ',
'4' => $renderingContext->getVariableProvider()->getByPath('languageColumn.translationData.untranslatedRecordUids'),
];

$expression40 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};

$arguments38 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                                <a href="#" class="btn btn-default btn-sm t3js-localize disabled"
                                    title="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.translatePageTitle')]);

$output41 .= '"
                                    data-page="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.localizedPageRecord.title')]);

$output41 .= '"
                                    data-has-elements="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string42 = '{languageColumn.translationData.hasTranslations as integer}';
$array43 = array (
  0 => '{languageColumn.translationData.hasTranslations as integer}',
  1 => '{languageColumn.translationData.hasTranslations as integer}',
);

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string42, $array43)]);

$output41 .= '"
                                    data-allow-copy="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string44 = '{languageColumn.allowTranslateCopy as integer}';
$array45 = array (
  0 => '{languageColumn.allowTranslateCopy as integer}',
  1 => '{languageColumn.allowTranslateCopy as integer}',
);

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string44, $array45)]);

$output41 .= '"
                                    data-allow-translate="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string46 = '{languageColumn.allowTranslate as integer}';
$array47 = array (
  0 => '{languageColumn.allowTranslate as integer}',
  1 => '{languageColumn.allowTranslate as integer}',
);

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string46, $array47)]);

$output41 .= '"
                                    data-table="tt_content"
                                    data-page-id="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('context.pageId')]);

$output41 .= '"
                                    data-language-id="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId')]);

$output41 .= '"
                                    data-language-name="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title')]);

$output41 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'identifier' => 'actions-localize',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output41 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output41 .= '
                                    ';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.translatePageTitle')]);

$output41 .= '
                                </a>
                            ';
return $output41;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, static fn() => '', $renderingContext)
;

$output20 .= '
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageColumn.pageIcon');
};

$arguments50 = [
'value' => NULL,
];

$output20 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output20 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.localizedPageTitle')]);
};

$arguments52 = [
'maxCharacters' => $renderingContext->getVariableProvider()->getByPath('maxTitleLength'),
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output20 .= '
                    </td>
                ';
return $output20;
};

$arguments18 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
            </tr>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array55 = [
'0' => $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.defaultLanguageBinding'),
];

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output57 = '';

$output57 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'value' => $renderingContext->getVariableProvider()->getByPath('languageColumns.0.grid'),
'name' => 'grid',
];
$renderChildrenClosure59 = ($arguments58['value'] !== null) ? function() use ($arguments58) { return $arguments58['value']; } : $renderChildrenClosure59;
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                        <tr>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumn'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments66 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure67 = ($arguments66['value'] !== null) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
                                <td valign="top"
                                    data-colpos="';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber')]);

$output65 .= '" data-language-uid="';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.siteLanguage.languageId')]);

$output65 .= '"
                                    class="t3-grid-cell t3-page-column t3js-page-column">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'section' => NULL,
'partial' => 'PageLayout/Grid/ColumnHeader',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output65 .= '
                                </td>
                            ';
return $output65;
};

$arguments63 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                        </tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumns.0'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments72 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure73 = ($arguments72['value'] !== null) ? function() use ($arguments72) { return $arguments72['value']; } : $renderChildrenClosure73;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
                            <tr>
                                <td class="t3-grid-cell t3js-page-column" valign="top" data-colpos="';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber')]);

$output78 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumns.0'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments79 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure80 = ($arguments79['value'] !== null) ? function() use ($arguments79) { return $arguments79['value']; } : $renderChildrenClosure80;
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$arguments83 = [
'value' => $renderingContext->getVariableProvider()->getByPath('gridItem'),
'name' => 'item',
];
$renderChildrenClosure84 = ($arguments83['value'] !== null) ? function() use ($arguments83) { return $arguments83['value']; } : $renderChildrenClosure84;
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output78 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'section' => NULL,
'partial' => 'PageLayout/Record',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output78 .= '
                                </td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
$output89 = '';

$output89 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array91 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId'),
'1' => ' > 0',
];

$expression92 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments90 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output93 = '';

$output93 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumn'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments94 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure95 = ($arguments94['value'] !== null) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95;
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '
                                        <td class="t3-grid-cell t3js-page-column" valign="top" data-colpos="';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber')]);

$output93 .= '">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};

$arguments98 = [
'value' => $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId'),
'name' => 'languageId',
];
$renderChildrenClosure99 = ($arguments98['value'] !== null) ? function() use ($arguments98) { return $arguments98['value']; } : $renderChildrenClosure99;
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output93 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array101 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.translationData.mode'),
'1' => ' == \'connected\'',
];

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'connected');};

$arguments100 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression102(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output103 = '';

$output103 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array105 = [
'0' => $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}'),
];

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments104 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression106(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output107 = '';

$output107 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'value' => $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}'),
'name' => 'item',
];
$renderChildrenClosure109 = ($arguments108['value'] !== null) ? function() use ($arguments108) { return $arguments108['value']; } : $renderChildrenClosure109;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};

$arguments110 = [
'section' => NULL,
'partial' => 'PageLayout/Record',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output107 .= '
                                                    ';
return $output107;
},
];

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, static fn() => '', $renderingContext)
;

$output103 .= '
                                                ';
return $output103;
},
'__else' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array114 = [
'0' => $renderingContext->getVariableProvider()->getByPath('itemIterator.isFirst'),
];

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments113 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression115(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output116 = '';

$output116 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageColumns.{languageId}');
};

$arguments117 = [
'value' => NULL,
'name' => 'languageColumnNonConnected',
];
$renderChildrenClosure118 = ($arguments117['value'] !== null) ? function() use ($arguments117) { return $arguments117['value']; } : $renderChildrenClosure118;
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
return NULL;
};

$arguments121 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumnNonConnected'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments119 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure120 = ($arguments119['value'] !== null) ? function() use ($arguments119) { return $arguments119['value']; } : $renderChildrenClosure120;
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output116 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
$output125 = '';

$output125 .= '
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'section' => NULL,
'partial' => 'PageLayout/Record',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
                                                        ';
return $output125;
};

$arguments123 = [
'each' => $renderingContext->getVariableProvider()->getByPath('column.items'),
'as' => 'item',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= '
                                                    ';
return $output116;
},
];

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, static fn() => '', $renderingContext)
;

$output112 .= '
                                                ';
return $output112;
},
];

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, static fn() => '', $renderingContext)
;

$output93 .= '
                                        </td>
                                    ';
return $output93;
},
];

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, static fn() => '', $renderingContext)
;

$output89 .= '
                                ';
return $output89;
};

$arguments87 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output78 .= '
                            </tr>
                        ';
return $output78;
};

$arguments76 = [
'each' => $renderingContext->getVariableProvider()->getByPath('column.items'),
'as' => 'gridItem',
'key' => NULL,
'reverse' => false,
'iteration' => 'itemIterator',
];

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output62 .= '
                        <tr>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure129 = function() use ($renderingContext) {
$output130 = '';

$output130 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumn'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments131 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure132 = ($arguments131['value'] !== null) ? function() use ($arguments131) { return $arguments131['value']; } : $renderChildrenClosure132;
$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '
                                <td data-colpos="';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber')]);

$output130 .= '" valign="top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('column.afterSectionMarkup');
};

$arguments135 = [
'value' => NULL,
];

$output130 .= isset($arguments135['value']) ? $arguments135['value'] : $renderChildrenClosure136();

$output130 .= '
                                </td>
                            ';
return $output130;
};

$arguments128 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output62 .= '
                        </tr>
                    ';
return $output62;
};

$arguments60 = [
'each' => $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns'),
'as' => 'columnNumber',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output57 .= '
                ';
return $output57;
},
'__else' => function() use ($renderingContext) {
$output137 = '';

$output137 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure139 = function() use ($renderingContext) {
$output140 = '';

$output140 .= '
                        <tr>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
$output143 = '';

$output143 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array145 = [
'0' => $renderingContext->getVariableProvider()->getByPath('languageColumn.grid.columns'),
];

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments144 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression146(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output147 = '';

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$arguments148 = [
'value' => $renderingContext->getVariableProvider()->getByPath('languageColumn.grid'),
'name' => 'grid',
];
$renderChildrenClosure149 = ($arguments148['value'] !== null) ? function() use ($arguments148) { return $arguments148['value']; } : $renderChildrenClosure149;
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure153 = function() use ($renderingContext) {
return NULL;
};

$arguments152 = [
'languageColumn' => $renderingContext->getVariableProvider()->getByPath('languageColumn'),
'columnNumber' => $renderingContext->getVariableProvider()->getByPath('columnNumber'),
];

$arguments150 = [
'value' => TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext),
'name' => 'column',
];
$renderChildrenClosure151 = ($arguments150['value'] !== null) ? function() use ($arguments150) { return $arguments150['value']; } : $renderChildrenClosure151;
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};

$arguments154 = [
'section' => NULL,
'partial' => 'PageLayout/Grid/Column',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output147 .= '
                                ';
return $output147;
},
];

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, static fn() => '', $renderingContext)
;

$output143 .= '
                            ';
return $output143;
};

$arguments141 = [
'each' => $renderingContext->getVariableProvider()->getByPath('languageColumns'),
'as' => 'languageColumn',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                        </tr>
                    ';
return $output140;
};

$arguments138 = [
'each' => $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns'),
'as' => 'columnNumber',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                ';
return $output137;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, static fn() => '', $renderingContext)
;

$output0 .= '
        </table>
    </div>
</div>
';

    return $output0;
}

}

#