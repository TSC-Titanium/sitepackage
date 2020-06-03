<?php

/**
 * Extension Manager/Repository config file for ext "tsc_titanium_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'tsc-titanium-sitepackage',
    'description' => 'Sitepackage for TSC Titanium',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ItSystemeRehren\\TscTitaniumSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Friedrich Rehren',
    'author_email' => 'support@it-systeme-rehren.de',
    'author_company' => 'IT-Systeme Rehren',
    'version' => '1.0.0',
];
