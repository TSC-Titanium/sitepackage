<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'tsc_titanium_sitepackage';

    /***************
    * Register PageTS
    */

    // BackendLayouts
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
        'TSC Titanium Package: Backend Layouts'
    );

    // TCEMAIN
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/TCEMAIN.tsconfig',
        'TSC Titanium Package: TCEMAIN'
    );

    // TCEFORM
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/TCEFORM.tsconfig',
        'TSC Titanium Package: TCEFORM'
    );

    // Content Elements
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/ContentElement/All.tsconfig',
        'TSC Titanium Package: All Content Elements'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/ContentElement/Categories.tsconfig',
        'TSC Titanium Package: Categories for Content Elements'
    );
});
