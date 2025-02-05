<?php
return array (
  'web' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web.xlf',
    'iconIdentifier' => 'modulegroup-web',
    'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'file' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_file.xlf',
    'iconIdentifier' => 'modulegroup-file',
    'navigationComponent' => '@typo3/backend/tree/file-storage-tree-container',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'site' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_site.xlf',
    'workspaces' => 'live',
    'iconIdentifier' => 'modulegroup-site',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'user' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_usertools.xlf',
    'iconIdentifier' => 'modulegroup-user',
    'appearance' => 
    array (
      'renderInModuleMenu' => false,
    ),
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'tools' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_admintools.xlf',
    'iconIdentifier' => 'modulegroup-tools',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'system' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_system.xlf',
    'iconIdentifier' => 'modulegroup-system',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'help' => 
  array (
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_help.xlf',
    'iconIdentifier' => 'modulegroup-help',
    'appearance' => 
    array (
      'renderInModuleMenu' => false,
    ),
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/core/Classes/../',
  ),
  'media_management' => 
  array (
    'parent' => 'file',
    'access' => 'user',
    'path' => '/module/file/list',
    'iconIdentifier' => 'module-filelist',
    'labels' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf',
    'aliases' => 
    array (
      0 => 'file_FilelistList',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Filelist\\Controller\\FileListController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'displayThumbs' => true,
      'clipBoard' => true,
      'sort' => 'file',
      'reverse' => false,
      'viewMode' => 'tiles',
    ),
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/filelist/',
  ),
  'system_dbint' => 
  array (
    'parent' => 'system',
    'access' => 'admin',
    'workspaces' => 'live',
    'path' => '/module/system/dbint',
    'iconIdentifier' => 'module-dbint',
    'labels' => 
    array (
      'title' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.dbint.title',
      'shortDescription' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.dbint.shortDescription',
      'description' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.dbint.description',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Lowlevel\\Controller\\DatabaseIntegrityController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-lowlevel',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/lowlevel/',
  ),
  'system_config' => 
  array (
    'parent' => 'system',
    'access' => 'admin',
    'workspaces' => 'live',
    'path' => '/module/system/config',
    'iconIdentifier' => 'module-config',
    'labels' => 
    array (
      'title' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.configuration.title',
      'shortDescription' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.configuration.shortDescription',
      'description' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang.xlf:module.configuration.description',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Lowlevel\\Controller\\ConfigurationController::indexAction',
      ),
    ),
    'moduleData' => 
    array (
      'tree' => '',
    ),
    'packageName' => 'typo3/cms-lowlevel',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/lowlevel/',
  ),
  'web_FormFormbuilder' => 
  array (
    'parent' => 'web',
    'access' => 'user',
    'iconIdentifier' => 'module-form',
    'inheritNavigationComponentFromMainModule' => false,
    'labels' => 'LLL:EXT:form/Resources/Private/Language/locallang_module.xlf',
    'extensionName' => 'Form',
    'controllerActions' => 
    array (
      'TYPO3\\CMS\\Form\\Controller\\FormManagerController' => 
      array (
        0 => 'index',
        1 => 'show',
        2 => 'create',
        3 => 'duplicate',
        4 => 'references',
        5 => 'delete',
      ),
      'TYPO3\\CMS\\Form\\Controller\\FormEditorController' => 
      array (
        0 => 'index',
        1 => 'saveForm',
        2 => 'renderFormPage',
        3 => 'renderRenderableOptions',
      ),
    ),
    'packageName' => 'typo3/cms-form',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/form/',
  ),
  'tools_toolsmaintenance' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'path' => '/module/tools/maintenance',
    'iconIdentifier' => 'module-install-maintenance',
    'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallMaintenance.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Install\\Controller\\BackendModuleController::maintenanceAction',
      ),
    ),
    'routeOptions' => 
    array (
      'sudoMode' => 
      array (
        'group' => 'systemMaintainer',
        'lifetime' => 
        \TYPO3\CMS\Backend\Security\SudoMode\Access\AccessLifetime::medium,
      ),
    ),
    'packageName' => 'typo3/cms-install',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/install/Classes/../',
  ),
  'tools_toolssettings' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'path' => '/module/tools/settings',
    'iconIdentifier' => 'module-install-settings',
    'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallSettings.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Install\\Controller\\BackendModuleController::settingsAction',
      ),
    ),
    'routeOptions' => 
    array (
      'sudoMode' => 
      array (
        'group' => 'systemMaintainer',
        'lifetime' => 
        \TYPO3\CMS\Backend\Security\SudoMode\Access\AccessLifetime::medium,
      ),
    ),
    'packageName' => 'typo3/cms-install',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/install/Classes/../',
  ),
  'tools_toolsupgrade' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'path' => '/module/tools/upgrade',
    'iconIdentifier' => 'module-install-upgrade',
    'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallUpgrade.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Install\\Controller\\BackendModuleController::upgradeAction',
      ),
    ),
    'routeOptions' => 
    array (
      'sudoMode' => 
      array (
        'group' => 'systemMaintainer',
        'lifetime' => 
        \TYPO3\CMS\Backend\Security\SudoMode\Access\AccessLifetime::medium,
      ),
    ),
    'packageName' => 'typo3/cms-install',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/install/Classes/../',
  ),
  'tools_toolsenvironment' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'path' => '/module/tools/environment',
    'iconIdentifier' => 'module-install-environment',
    'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallEnvironment.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Install\\Controller\\BackendModuleController::environmentAction',
      ),
    ),
    'routeOptions' => 
    array (
      'sudoMode' => 
      array (
        'group' => 'systemMaintainer',
        'lifetime' => 
        \TYPO3\CMS\Backend\Security\SudoMode\Access\AccessLifetime::medium,
      ),
    ),
    'packageName' => 'typo3/cms-install',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/install/Classes/../',
  ),
  'system_reports' => 
  array (
    'parent' => 'system',
    'access' => 'admin',
    'path' => '/module/system/reports',
    'iconIdentifier' => 'module-reports',
    'labels' => 'LLL:EXT:reports/Resources/Private/Language/locallang.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Reports\\Controller\\ReportController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-reports',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/reports/',
  ),
  'site_redirects' => 
  array (
    'parent' => 'site',
    'position' => 
    array (
      'after' => 'site_configuration',
    ),
    'access' => 'user',
    'path' => '/module/site/redirects',
    'iconIdentifier' => 'module-redirects',
    'labels' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Redirects\\Controller\\ManagementController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-redirects',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/redirects/',
  ),
  'user_setup' => 
  array (
    'parent' => 'user',
    'access' => 'user',
    'path' => '/module/user/setup',
    'iconIdentifier' => 'module-setup',
    'labels' => 'LLL:EXT:setup/Resources/Private/Language/locallang_mod.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController::mainAction',
      ),
    ),
    'packageName' => 'typo3/cms-setup',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/setup/',
  ),
  'web_layout' => 
  array (
    'parent' => 'web',
    'position' => 
    array (
      'before' => '*',
    ),
    'access' => 'user',
    'path' => '/module/web/layout',
    'iconIdentifier' => 'module-page',
    'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageLayoutController::mainAction',
      ),
    ),
    'moduleData' => 
    array (
      'function' => 1,
      'language' => 0,
      'showHidden' => true,
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'web_list' => 
  array (
    'parent' => 'web',
    'position' => 
    array (
      'after' => 'page_preview',
    ),
    'access' => 'user',
    'path' => '/module/web/list',
    'iconIdentifier' => 'module-list',
    'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\RecordListController::mainAction',
      ),
    ),
    'moduleData' => 
    array (
      'clipBoard' => true,
      'searchBox' => false,
      'collapsedTables' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'site_configuration' => 
  array (
    'parent' => 'site',
    'position' => 
    array (
      'before' => '*',
    ),
    'access' => 'admin',
    'path' => '/module/site/configuration',
    'iconIdentifier' => 'module-sites',
    'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_module.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteConfigurationController::overviewAction',
      ),
      'edit' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteConfigurationController::editAction',
      ),
      'save' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteConfigurationController::saveAction',
        'methods' => 
        array (
          0 => 'POST',
        ),
      ),
      'delete' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteConfigurationController::deleteAction',
        'methods' => 
        array (
          0 => 'POST',
        ),
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'about' => 
  array (
    'parent' => 'help',
    'position' => 
    array (
      'before' => '*',
    ),
    'access' => 'user',
    'path' => '/module/help/about',
    'iconIdentifier' => 'module-about',
    'labels' => 'LLL:EXT:backend/Resources/Private/Language/Modules/about.xlf',
    'aliases' => 
    array (
      0 => 'help_AboutAbout',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\AboutController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'pagetsconfig' => 
  array (
    'parent' => 'site',
    'access' => 'admin',
    'path' => '/module/pagetsconfig',
    'iconIdentifier' => 'module-tsconfig',
    'labels' => 
    array (
      'title' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig.title',
      'description' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig.description',
      'shortDescription' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig.shortDescription',
    ),
    'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'pagetsconfig_pages' => 
  array (
    'parent' => 'pagetsconfig',
    'access' => 'admin',
    'path' => '/module/pagetsconfig/records',
    'iconIdentifier' => 'module-tsconfig',
    'labels' => 
    array (
      'title' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageTsConfig\\PageTsConfigRecordsOverviewController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'pagetsconfig_active' => 
  array (
    'parent' => 'pagetsconfig',
    'access' => 'admin',
    'path' => '/module/pagetsconfig/active',
    'iconIdentifier' => 'module-tsconfig',
    'labels' => 
    array (
      'title' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageTsConfig\\PageTsConfigActiveController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'sortAlphabetically' => true,
      'displayComments' => true,
      'displayConstantSubstitutions' => true,
      'pageTsConfigConditions' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'pagetsconfig_includes' => 
  array (
    'parent' => 'pagetsconfig',
    'access' => 'admin',
    'path' => '/module/pagetsconfig/includes',
    'iconIdentifier' => 'module-tsconfig',
    'labels' => 
    array (
      'title' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_includes',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageTsConfig\\PageTsConfigIncludesController::indexAction',
      ),
      'source' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageTsConfig\\PageTsConfigIncludesController::sourceAction',
      ),
      'sourceWithIncludes' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Controller\\PageTsConfig\\PageTsConfigIncludesController::sourceWithIncludesAction',
      ),
    ),
    'moduleData' => 
    array (
      'pageTsConfigConditions' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'tools_csp' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'iconIdentifier' => 'module-security',
    'labels' => 'LLL:EXT:backend/Resources/Private/Language/Modules/content-security-policy.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Backend\\Security\\ContentSecurityPolicy\\CspModuleController::mainAction',
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/backend/Classes/../',
  ),
  'system_BelogLog' => 
  array (
    'parent' => 'system',
    'access' => 'user',
    'iconIdentifier' => 'module-belog',
    'labels' => 'LLL:EXT:belog/Resources/Private/Language/locallang_mod.xlf',
    'extensionName' => 'Belog',
    'controllerActions' => 
    array (
      'TYPO3\\CMS\\Belog\\Controller\\BackendLogController' => 
      array (
        0 => 'list',
        1 => 'deleteMessage',
      ),
    ),
    'packageName' => 'typo3/cms-belog',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/belog/',
  ),
  'permissions_pages' => 
  array (
    'parent' => 'system',
    'position' => 
    array (
      'before' => '*',
    ),
    'access' => 'admin',
    'path' => '/module/system/permissions',
    'iconIdentifier' => 'module-permission',
    'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
    'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf',
    'aliases' => 
    array (
      0 => 'system_BeuserTxPermission',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Beuser\\Controller\\PermissionController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-beuser',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/beuser/',
  ),
  'backend_user_management' => 
  array (
    'parent' => 'system',
    'position' => 
    array (
      'after' => 'permissions_pages',
    ),
    'access' => 'admin',
    'iconIdentifier' => 'module-beuser',
    'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod.xlf',
    'extensionName' => 'Beuser',
    'aliases' => 
    array (
      0 => 'system_BeuserTxBeuser',
    ),
    'controllerActions' => 
    array (
      'TYPO3\\CMS\\Beuser\\Controller\\BackendUserController' => 
      array (
        0 => 'index',
        1 => 'show',
        2 => 'addToCompareList',
        3 => 'removeFromCompareList',
        4 => 'removeAllFromCompareList',
        5 => 'compare',
        6 => 'online',
        7 => 'terminateBackendUserSession',
        8 => 'initiatePasswordReset',
        9 => 'groups',
        10 => 'addGroupToCompareList',
        11 => 'removeGroupFromCompareList',
        12 => 'removeAllGroupsFromCompareList',
        13 => 'compareGroups',
        14 => 'filemounts',
      ),
    ),
    'packageName' => 'typo3/cms-beuser',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/beuser/',
  ),
  'dashboard' => 
  array (
    'position' => 
    array (
      'before' => '*',
    ),
    'standalone' => true,
    'access' => 'user',
    'path' => '/module/dashboard',
    'iconIdentifier' => 'module-dashboard',
    'labels' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_mod.xlf',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\DashboardController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-dashboard',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/typo3_src-12.4.14/typo3/sysext/dashboard/Classes/../',
  ),
  'tools_ExtensionmanagerExtensionmanager' => 
  array (
    'parent' => 'tools',
    'access' => 'systemMaintainer',
    'iconIdentifier' => 'module-extensionmanager',
    'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
    'extensionName' => 'Extensionmanager',
    'controllerActions' => 
    array (
      'TYPO3\\CMS\\Extensionmanager\\Controller\\ListController' => 
      array (
        0 => 'index',
        1 => 'unresolvedDependencies',
        2 => 'ter',
        3 => 'showAllVersions',
        4 => 'distributions',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\ActionController' => 
      array (
        0 => 'toggleExtensionInstallationState',
        1 => 'installExtensionWithoutSystemDependencyCheck',
        2 => 'removeExtension',
        3 => 'downloadExtensionZip',
        4 => 'reloadExtensionData',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\DownloadController' => 
      array (
        0 => 'checkDependencies',
        1 => 'installFromTer',
        2 => 'installExtensionWithoutSystemDependencyCheck',
        3 => 'installDistribution',
        4 => 'updateExtension',
        5 => 'updateCommentForUpdatableVersions',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateFromTerController' => 
      array (
        0 => 'updateExtensionListFromTer',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\UploadExtensionFileController' => 
      array (
        0 => 'form',
        1 => 'extract',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\DistributionController' => 
      array (
        0 => 'show',
      ),
      'TYPO3\\CMS\\Extensionmanager\\Controller\\ExtensionComposerStatusController' => 
      array (
        0 => 'list',
        1 => 'detail',
      ),
    ),
    'routeOptions' => 
    array (
      'sudoMode' => 
      array (
        'group' => 'systemMaintainer',
        'lifetime' => 
        \TYPO3\CMS\Backend\Security\SudoMode\Access\AccessLifetime::medium,
      ),
    ),
    'moduleData' => 
    array (
      'filter' => '',
    ),
    'packageName' => 'typo3/cms-extensionmanager',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/extensionmanager/',
  ),
  'web_IndexedSearchIsearch' => 
  array (
    'parent' => 'web',
    'access' => 'user',
    'iconIdentifier' => 'module-indexed_search',
    'labels' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_mod.xlf',
    'extensionName' => 'IndexedSearch',
    'controllerActions' => 
    array (
      'TYPO3\\CMS\\IndexedSearch\\Controller\\AdministrationController' => 
      array (
        0 => 'statistic',
        1 => 'index',
        2 => 'pages',
        3 => 'externalDocuments',
        4 => 'statisticDetails',
        5 => 'deleteIndexedItem',
        6 => 'saveStopwordsKeywords',
        7 => 'wordDetail',
      ),
    ),
    'packageName' => 'typo3/cms-indexed-search',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/indexed_search/',
  ),
  'web_info' => 
  array (
    'parent' => 'web',
    'access' => 'user',
    'path' => '/module/web/info',
    'iconIdentifier' => 'module-info',
    'labels' => 'LLL:EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf',
    'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Info\\Controller\\InfoModuleController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-info',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/info/',
  ),
  'web_info_overview' => 
  array (
    'parent' => 'web_info',
    'access' => 'user',
    'path' => '/module/web/info/overview',
    'iconIdentifier' => 'module-info',
    'labels' => 
    array (
      'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_page',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Info\\Controller\\PageInformationController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'pages' => '0',
      'depth' => 0,
    ),
    'packageName' => 'typo3/cms-info',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/info/',
  ),
  'web_info_translations' => 
  array (
    'parent' => 'web_info',
    'access' => 'user',
    'path' => '/module/web/info/translations',
    'iconIdentifier' => 'module-info',
    'labels' => 
    array (
      'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_lang',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Info\\Controller\\TranslationStatusController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'depth' => 0,
      'lang' => 0,
    ),
    'packageName' => 'typo3/cms-info',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/info/',
  ),
  'recycler' => 
  array (
    'parent' => 'web',
    'access' => 'user',
    'workspaces' => 'live',
    'path' => '/module/web/recycler',
    'iconIdentifier' => 'module-recycler',
    'labels' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_mod.xlf',
    'aliases' => 
    array (
      0 => 'web_RecyclerRecycler',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Recycler\\Controller\\RecyclerModuleController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-recycler',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/recycler/',
  ),
  'web_ts' => 
  array (
    'parent' => 'site',
    'access' => 'admin',
    'path' => '/module/web/ts',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:module.typoscript.title',
      'shortDescription' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:module.typoscript.shortDescription',
      'description' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:module.typoscript.description',
    ),
    'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'web_typoscript_recordsoverview' => 
  array (
    'parent' => 'web_ts',
    'access' => 'admin',
    'path' => '/module/web/typoscript/records-overview',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:submodules.option.templateRecordsOverview',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateRecordsOverviewController::handleRequest',
      ),
    ),
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'web_typoscript_constanteditor' => 
  array (
    'parent' => 'web_ts',
    'access' => 'admin',
    'path' => '/module/web/typoscript/constant-editor',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:submodules.option.constantEditor',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\ConstantEditorController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'selectedTemplatePerPage' => 
      array (
      ),
      'selectedCategory' => '',
    ),
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'web_typoscript_infomodify' => 
  array (
    'parent' => 'web_ts',
    'access' => 'admin',
    'path' => '/module/web/typoscript/overview',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:submodules.option.infoModify',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\InfoModifyController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'selectedTemplatePerPage' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'typoscript_active' => 
  array (
    'parent' => 'web_ts',
    'access' => 'admin',
    'path' => '/module/typoscript/active',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:submodules.option.active',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\ActiveTypoScriptController::indexAction',
      ),
      'edit' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\ActiveTypoScriptController::editAction',
      ),
      'update' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\ActiveTypoScriptController::updateAction',
      ),
    ),
    'moduleData' => 
    array (
      'sortAlphabetically' => true,
      'displayConstantSubstitutions' => true,
      'displayComments' => true,
      'selectedTemplatePerPage' => 
      array (
      ),
      'constantConditions' => 
      array (
      ),
      'setupConditions' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'web_typoscript_analyzer' => 
  array (
    'parent' => 'web_ts',
    'access' => 'admin',
    'path' => '/module/web/typoscript/analyzer',
    'iconIdentifier' => 'module-template',
    'labels' => 
    array (
      'title' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:submodules.option.templateAnalyzer',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateAnalyzerController::indexAction',
      ),
      'source' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateAnalyzerController::sourceAction',
      ),
      'sourceWithIncludes' => 
      array (
        'target' => 'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateAnalyzerController::sourceWithIncludesAction',
      ),
    ),
    'moduleData' => 
    array (
      'selectedTemplatePerPage' => 
      array (
      ),
      'constantConditions' => 
      array (
      ),
      'setupConditions' => 
      array (
      ),
    ),
    'packageName' => 'typo3/cms-tstemplate',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/tstemplate/',
  ),
  'page_preview' => 
  array (
    'parent' => 'web',
    'position' => 
    array (
      'after' => 'web_layout',
    ),
    'access' => 'user',
    'path' => '/module/web/viewpage',
    'iconIdentifier' => 'module-viewpage',
    'labels' => 'LLL:EXT:viewpage/Resources/Private/Language/locallang_mod.xlf',
    'aliases' => 
    array (
      0 => 'web_ViewpageView',
    ),
    'routes' => 
    array (
      '_default' => 
      array (
        'target' => 'TYPO3\\CMS\\Viewpage\\Controller\\ViewModuleController::handleRequest',
      ),
    ),
    'moduleData' => 
    array (
      'language' => 0,
    ),
    'packageName' => 'typo3/cms-viewpage',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3/sysext/viewpage/',
  ),
  'web_powermail' => 
  array (
    'parent' => 'web',
    'position' => 
    array (
    ),
    'access' => 'user',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_mod.xlf',
    'path' => '/module/web/powermail',
    'extensionName' => 'Powermail',
    'target' => 
    array (
      '_default' => 'In2code\\Powermail\\Controller\\ModuleController::listAction',
    ),
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'dispatch, list, exportXls, exportCsv, reportingBe, toolsBe, overviewBe, checkBe, converterBe, converterUpdateBe, reportingFormBe, reportingMarketingBe, fixUploadFolder, fixWrongLocalizedForms, fixFilledMarkersInLocalizedFields, fixWrongLocalizedPages, fixFilledMarkersInLocalizedPages',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
  'powermail_list' => 
  array (
    'parent' => 'web_powermail',
    'position' => 
    array (
    ),
    'access' => 'user',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 
    array (
      'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang.xlf:BackendSelectionList',
    ),
    'extensionName' => 'Powermail',
    'path' => '/module/powermail/list',
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'dispatch, list, exportXls, exportCsv',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
  'powermail_overview_be' => 
  array (
    'parent' => 'web_powermail',
    'position' => 
    array (
      'after' => 'powermail_list',
    ),
    'access' => 'user',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 
    array (
      'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang.xlf:BackendSelectionOverview',
    ),
    'extensionName' => 'Powermail',
    'path' => '/module/powermail/overviewbe',
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'overviewBe',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
  'powermail_reporting_form' => 
  array (
    'parent' => 'web_powermail',
    'position' => 
    array (
      'after' => 'powermail_overview_be',
    ),
    'access' => 'user',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 
    array (
      'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang.xlf:BackendSelectionReportingForm',
    ),
    'extensionName' => 'Powermail',
    'path' => '/module/powermail/reporting-form',
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'reportingFormBe',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
  'powermail_reporting_marketing' => 
  array (
    'parent' => 'web_powermail',
    'position' => 
    array (
      'after' => 'powermail_reporting_form',
    ),
    'access' => 'user',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 
    array (
      'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang.xlf:BackendSelectionReportingMarketing',
    ),
    'extensionName' => 'Powermail',
    'path' => '/module/powermail/reporting-marketing',
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'reportingMarketingBe',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
  'powermail_check_be' => 
  array (
    'parent' => 'web_powermail',
    'position' => 
    array (
      'after' => 'powermail_reporting_marketing',
    ),
    'access' => 'admin',
    'iconIdentifier' => 'extension-powermail-main',
    'labels' => 
    array (
      'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang.xlf:BackendSelectionCheck',
    ),
    'extensionName' => 'Powermail',
    'path' => '/module/powermail/check-be',
    'controllerActions' => 
    array (
      'In2code\\Powermail\\Controller\\ModuleController' => 'checkBe,fixUploadFolder, fixWrongLocalizedForms, fixFilledMarkersInLocalizedFields, fixWrongLocalizedPages, fixFilledMarkersInLocalizedPages',
    ),
    'packageName' => 'in2code/powermail',
    'absolutePackagePath' => '/var/customers/webs/wi1cm/team10/typo3conf/ext/powermail/',
  ),
);
#