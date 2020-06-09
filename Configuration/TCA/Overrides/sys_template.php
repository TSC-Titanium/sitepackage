<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'tsc_titanium_sitepackage';
    
    /***************
    * TypoScript: Full Package
    * This includes the full setup including all configurations
    */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'TSC Titanium Package: Full Package'
    );

    /***************
    * TypoScript: Content Elements
    * Include only the configuration for content elements
    */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/ContentElement',
        'TSC Titanium Package: Content Elements'
    );
});
