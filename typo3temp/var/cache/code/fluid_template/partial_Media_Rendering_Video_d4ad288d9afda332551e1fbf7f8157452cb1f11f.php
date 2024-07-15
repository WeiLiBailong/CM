<?php
class partial_Media_Rendering_Video_d4ad288d9afda332551e1fbf7f8157452cb1f11f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'embed-responsive-item',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'alt' => $renderingContext->getVariableProvider()->getByPath('file.properties.alternative'),
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'additionalConfig' => $renderingContext->getVariableProvider()->getByPath('settings.media.additionalConfig'),
'width' => NULL,
'height' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#