<?php
/**
 * Compiled ext_tables.php cache file
 */

/**
 * Extension: setup
 * File: /var/customers/webs/wi1cm/team10/typo3/sysext/setup/ext_tables.php
 */

namespace {




use TYPO3\CMS\Setup\Controller\SetupModuleController;

defined('TYPO3') or die();

$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [
        'realName' => [
            'type' => 'text',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
            'table' => 'be_users',
            'max' => 80,
        ],
        'email' => [
            'type' => 'email',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
            'table' => 'be_users',
            'max' => 255,
        ],
        'emailMeAtLogin' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
        ],
        'password' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
            'table' => 'be_users',
        ],
        'password2' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
            'table' => 'be_users',
        ],
        'passwordCurrent' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordCurrent',
            'table' => 'be_users',
        ],
        'avatar' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
            'type' => 'avatar',
            'table' => 'be_users',
        ],
        'lang' => [
            'type' => 'language',
            'table' => 'be_users',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
        ],
        'startModule' => [
            'type' => 'select',
            'itemsProcFunc' => SetupModuleController::class . '->renderStartModuleSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
        ],
        'titleLen' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
        ],
        'edit_docModuleUpload' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
        ],
        'showHiddenFilesAndFolders' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
        ],
        'copyLevels' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
        ],
        'resetConfiguration' => [
            'type' => 'button',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
            'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
            'confirm' => true,
            'confirmData' => [
                'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                'eventName' => 'setup:confirmation:response',
            ],
        ],
        'mfaProviders' => [
            'type' => 'mfa',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:mfaProviders',
        ],
        'backendTitleFormat' => [
            'type' => 'select',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat',
            'items' => [
                'titleFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.titleFirst',
                'sitenameFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.sitenameFirst',
            ],
        ],
    ],
    'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:accountSecurity,passwordCurrent,password,password2,mfaProviders,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,backendTitleFormat,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,titleLen,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetTab,resetConfiguration',
];
}

/**
 * Extension: bootstrap_package
 * File: /var/customers/webs/wi1cm/team10/typo3conf/ext/bootstrap_package/ext_tables.php
 */

namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Allow Custom Records on Standard Pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_accordion_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_card_group_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_carousel_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_icon_group_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_tab_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_timeline_item');
}

/**
 * Extension: ods_osm
 * File: /var/customers/webs/wi1cm/team10/typo3conf/ext/ods_osm/ext_tables.php
 */

namespace {


defined('TYPO3') || die();

/* --------------------------------------------------
	New tables
-------------------------------------------------- */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_odsosm_marker');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_odsosm_track');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_odsosm_vector');
}

/**
 * Extension: powermail
 * File: /var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/ext_tables.php
 */

namespace {

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(
    function () {

        /**
         * Table description files for localization and allowing powermail tables on pages of type default
         */
        $tables = [
            \In2code\Powermail\Domain\Model\Form::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Page::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Field::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];
        foreach ($tables as $table) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
                $table,
                'EXT:powermail/Resources/Private/Language/locallang_csh_' . $table . '.xlf'
            );
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
        }

        /**
         * Garbage Collector
         */
        $tgct = 'TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask';
        $tables = [
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];
        foreach ($tables as $table) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][$tgct]['options']['tables'][$table] = [
                'dateField' => 'tstamp',
                'expirePeriod' => 30
            ];
        }

        /**
         * Search with TYPO3 backend search
         *      search for an email: "#mail:senderemail"
         *      search for a form: "#form:contactform"
         */
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['mail'] = 'tx_powermail_domain_model_mail';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['form'] = 'tx_powermail_domain_model_form';
    }
);
}

/**
 * Extension: tt_address
 * File: /var/customers/webs/wi1cm/team10/typo3conf/ext/tt_address/ext_tables.php
 */

namespace {

defined('TYPO3') or die;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tt_address');
}

#