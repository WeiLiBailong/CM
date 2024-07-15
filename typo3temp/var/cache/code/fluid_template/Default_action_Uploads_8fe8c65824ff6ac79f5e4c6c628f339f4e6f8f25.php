<?php
class Default_action_Uploads_8fe8c65824ff6ac79f5e4c6c628f339f4e6f8f25 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('files'),
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
        <ul class="filelink-list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                <li class="filelink-item">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_type'),
'1' => ' == 2',
];

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};

$arguments14 = [
];
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};

$arguments16 = [
];

$array13 = [
'0' => BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext),
'1' => ' || ',
'2' => BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext),
];

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};
$output24 = '';

$output24 .= 'file:';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output26 = '';

$output26 .= 'file:';

$output26 .= $renderingContext->getVariableProvider()->getByPath('file.originalFile.uid');
$output27 = '';

$output27 .= 'file:';

$output27 .= $renderingContext->getVariableProvider()->getByPath('file.uid');

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.originalFile'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => $output26,
'else' => $output27,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
];

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$arguments22 = [
'src' => $output24,
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$array21 = [
'0' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext),
'1' => ' != \'/\'',
];

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '/');};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                <div class="filelink-media">
                                    <a href="';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl')]);

$output31 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output33 = '';

$output33 .= ' title="';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title')]);

$output33 .= '"';

$array34 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
];

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'then' => $output33,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression35(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)),
    $renderingContext
),
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output37 = '';

$output37 .= ' target="';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target')]);

$output37 .= '"';

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.target'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'then' => $output37,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;

$output31 .= '>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'alt' => $renderingContext->getVariableProvider()->getByPath('file.properties.alternative'),
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'additionalConfig' => [],
'width' => $renderingContext->getVariableProvider()->getByPath('settings.uploads.preview.width'),
'height' => $renderingContext->getVariableProvider()->getByPath('settings.uploads.preview.height'),
'cropVariant' => 'default',
'fileExtension' => NULL,
'loading' => NULL,
'decoding' => NULL,
];

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output31 .= '
                                    </a>
                                </div>
                            ';
return $output31;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output19 .= '
                        ';
return $output19;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output11 .= '
                    ';
return $output11;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '
                    <div class="filelink-body">
                        <h4 class="filelink-heading">
                            <a href="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl')]);

$output7 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output43 = '';

$output43 .= ' title="';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title')]);

$output43 .= '"';

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
];

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments42 = [
'then' => $output43,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output47 = '';

$output47 .= ' target="';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target')]);

$output47 .= '"';

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.target'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'then' => $output47,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, static fn() => '', $renderingContext)
;

$output7 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array51 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_type'),
'1' => ' == 1',
];

$expression52 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments50 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression52(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output53 = '';

$output53 .= '
                                    <span class="filelink-fileicon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-audio"></span>';
};

$arguments59 = [
'value' => 'mp3',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
};

$arguments61 = [
'value' => 'avi',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
};

$arguments63 = [
'value' => 'mov',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
};

$arguments65 = [
'value' => 'mpg',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
};

$arguments67 = [
'value' => 'mpeg',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
};

$arguments69 = [
'value' => 'mkv',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments71 = [
'value' => 'jpg',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments73 = [
'value' => 'gif',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments75 = [
'value' => 'png',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments77 = [
'value' => 'bmp',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments79 = [
'value' => 'ai',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments81 = [
'value' => 'eps',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments83 = [
'value' => 'ico',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments85 = [
'value' => 'tga',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
};

$arguments87 = [
'value' => 'tif',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-youtube"></span>';
};

$arguments89 = [
'value' => 'youtube',
];

$output58 .= '';

$output58 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file"></span>';
};

$arguments91 = [
];

$output58 .= '';

$output58 .= '
                                        ';
return $output58;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'value' => $renderingContext->getVariableProvider()->getByPath('file.properties.extension'),
'mode' => 'lower',
];

$arguments54 = [
'expression' => TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext),
];

$output53 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'mp3';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-audio"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'avi';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'mov';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'mpg';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'mpeg';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'mkv';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-video"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'jpg';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'gif';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'png';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'bmp';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'ai';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'eps';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'ico';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'tga';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'tif';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file-image"></span>';
});
case call_user_func(function() use ($renderingContext) {

return 'youtube';
}): return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-youtube"></span>';
});
default: return call_user_func(function() use ($renderingContext) {
return '<span class="bootstrappackageicon bootstrappackageicon-file"></span>';
});
}
}, array($arguments54));

$output53 .= '
                                    </span>
                                ';
return $output53;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, static fn() => '', $renderingContext)
;

$output7 .= '
                                <span class="filelink-filename">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array94 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
];

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments93 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title')]),
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.name')]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression95(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, static fn() => '', $renderingContext)
;

$output7 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array97 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.filelink_size'),
];

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments96 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression98(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output99 = '';

$output99 .= '
                                <span class="filelink-filesize">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};

$arguments100 = [
'value' => $renderingContext->getVariableProvider()->getByPath('file.properties.size'),
'decimals' => 0,
'decimalSeparator' => '.',
'thousandsSeparator' => ',',
'units' => NULL,
];
$renderChildrenClosure101 = ($arguments100['value'] !== null) ? function() use ($arguments100) { return $arguments100['value']; } : $renderChildrenClosure101;
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '</span>
                            ';
return $output99;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, static fn() => '', $renderingContext)
;

$output7 .= '
                        </h4>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array103 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uploads_description'),
];

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments102 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression104(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array107 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.description'),
];

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments106 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression108(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output109 = '';

$output109 .= '
                                <p class="filelink-filedescription">';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description')]);

$output109 .= '</p>
                            ';
return $output109;
},
];

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, static fn() => '', $renderingContext)
;

$output105 .= '
                        ';
return $output105;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, static fn() => '', $renderingContext)
;

$output7 .= '
                    </div>
                </li>
            ';
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('files'),
'as' => 'file',
'key' => NULL,
'reverse' => false,
'iteration' => 'fileIterator',
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        </ul>
    ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output110 = '';

$output110 .= '
';

$output110 .= '';

$output110 .= '
';

$output110 .= '';

$output110 .= '

';

    return $output110;
}

}

#