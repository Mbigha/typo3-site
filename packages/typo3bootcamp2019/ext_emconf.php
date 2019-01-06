<?php

/**
 * Extension Manager/Repository config file for ext "typo3bootcamp2019".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Typo3BootCamp2019',
    'description' => 'Typo3 Boot Camp 2019, an event hosted by Hof University.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\Typo3bootcamp2019\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'HofUniversityBootcamp',
    'author_email' => 'pratik.8400@gmail.com',
    'author_company' => 'Hof University',
    'version' => '1.0.0',
];
