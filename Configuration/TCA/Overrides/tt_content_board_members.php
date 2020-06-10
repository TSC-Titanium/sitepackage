<?php

defined('TYPO3_MODE') || die();

/**
 * Temporary variables
 */
$extensionKey = 'tsc_titanium_sitepackage';

/***************
 * Add Content Element
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['board_members'])) {
    $GLOBALS['TCA']['tt_content']['types']['board_members'] = [];
}

/***************
 * Add content element PageTSConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/ContentElement/Element/BoardMembers.tsconfig',
    'TSC Titanium Package Content Element: Board Members'
);

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:tsc_titanium_sitepackage/Resources/Private/Language/Backend.xlf:content_element.board-members',
        'board_members',
        'titanium-package-board-members'
    ],
    'accordion',
    'before'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['board_members'] = 'titanium-package-board-members';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['board_members'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['board_members'],
    [
        'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                    --palette--;;tableconfiguration,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        'columnsOverrides' => [
            'media' => [
                'config' => [
                    'filter' => [
                        0 => [
                            'parameters' => [
                                'allowedFileExtensions' => 'csv'
                            ]
                        ]
                    ],
                    'minitems' => 0,
                    'maxitems' => 1,
                    'overrideChildTca' => [
                        'columns' => [
                            'uid_local' => [
                                'config' => [
                                    'appearance' => [
                                        'elementBrowserAllowed' => 'csv'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
);
