<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Blog Extension',
    'description' => 'This blog extension uses TYPO3s core concepts and elements to provide a full-blown blog that users of TYPO3 can instantly understand and use.',
    'category' => 'fe',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 GmbH',
    'author_email' => 'info@typo3.com',
    'version' => '9.0.x-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-9.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
