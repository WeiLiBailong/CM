<?php
class Default_action_SpecialFeature_48b14837bc8f6d63742ac4b50014fb473c19d25f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 3,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide'),
];

$arguments1 = [
'data' => $array3,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output4 = '';

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 8,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide'),
];

$arguments5 = [
'data' => $array7,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '

    <div class="section section-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 0,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide'),
];

$arguments8 = [
'data' => $array10,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure9 = ($arguments8['data'] !== null) ? function() use ($arguments8) { return $arguments8['data']; } : $renderChildrenClosure9;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '
    </div>

    <div class="section section-primary">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 30,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.30.slide'),
];

$arguments11 = [
'data' => $array13,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
                </div>
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 31,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.31.slide'),
];

$arguments14 = [
'data' => $array16,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure15 = ($arguments14['data'] !== null) ? function() use ($arguments14) { return $arguments14['data']; } : $renderChildrenClosure15;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-primary">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$array19 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 32,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.32.slide'),
];

$arguments17 = [
'data' => $array19,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure18 = ($arguments17['data'] !== null) ? function() use ($arguments17) { return $arguments17['data']; } : $renderChildrenClosure18;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output4 .= '
                </div>
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$array22 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 33,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.33.slide'),
];

$arguments20 = [
'data' => $array22,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure21 = ($arguments20['data'] !== null) ? function() use ($arguments20) { return $arguments20['data']; } : $renderChildrenClosure21;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output4 .= '
                </div>
            </div>
        </div>
    </div>

    <div class="section section-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$array25 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 4,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.4.slide'),
];

$arguments23 = [
'data' => $array25,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure24 = ($arguments23['data'] !== null) ? function() use ($arguments23) { return $arguments23['data']; } : $renderChildrenClosure24;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output4 .= '
    </div>

    <div class="section section-light">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$array28 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 34,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.34.slide'),
];

$arguments26 = [
'data' => $array28,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure27 = ($arguments26['data'] !== null) ? function() use ($arguments26) { return $arguments26['data']; } : $renderChildrenClosure27;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output4 .= '
                </div>
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$array31 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 35,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.35.slide'),
];

$arguments29 = [
'data' => $array31,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure30 = ($arguments29['data'] !== null) ? function() use ($arguments29) { return $arguments29['data']; } : $renderChildrenClosure30;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output4 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$array34 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 36,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.36.slide'),
];

$arguments32 = [
'data' => $array34,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure33 = ($arguments32['data'] !== null) ? function() use ($arguments32) { return $arguments32['data']; } : $renderChildrenClosure33;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output4 .= '
                </div>
                <div class="section-column section-column-half">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$array37 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 37,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.37.slide'),
];

$arguments35 = [
'data' => $array37,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure36 = ($arguments35['data'] !== null) ? function() use ($arguments35) { return $arguments35['data']; } : $renderChildrenClosure36;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output4 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$array40 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 9,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide'),
];

$arguments38 = [
'data' => $array40,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure39 = ($arguments38['data'] !== null) ? function() use ($arguments38) { return $arguments38['data']; } : $renderChildrenClosure39;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output4 .= '

';

    return $output4;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output41 = '';

$output41 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'section' => NULL,
'partial' => 'Structure/FooterContent',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '

';

    return $output41;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output44 = '';

$output44 .= '
';

$output44 .= '';

$output44 .= '
';

$output44 .= '';

$output44 .= '
';

$output44 .= '';

$output44 .= '
';

$output44 .= '';

$output44 .= '

';

    return $output44;
}

}

#