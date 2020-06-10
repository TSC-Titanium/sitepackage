<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['tsc_titanium_sitepackage'] = 'EXT:tsc_titanium_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */

// Add Content Elements
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsc_titanium_sitepackage/Configuration/TsConfig/Page/ContentElement/All.tsconfig">');

// Add BackendLayouts for the BackendLayout DataProvider
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsc_titanium_sitepackage/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">');

// RTE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsc_titanium_sitepackage/Configuration/TsConfig/Page/RTE.tsconfig">');

// TCEMAIN
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsc_titanium_sitepackage/Configuration/TsConfig/Page/TCEMAIN.tsconfig">');

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsc_titanium_sitepackage/Configuration/TsConfig/Page/TCEFORM.tsconfig">');


/***************
 * Register Icons
 */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$icons = [
    'board-members'
];
foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'titanium-package-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:tsc_titanium_sitepackage/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
    );
}