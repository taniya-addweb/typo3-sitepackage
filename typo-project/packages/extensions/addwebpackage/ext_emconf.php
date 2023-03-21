<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'addwebpackage',
    'description' => 'Addweb Site Package',
    'category' => 'templates',
    'author' => 'Addweb  Team',
    'author_email' => 'Addweb@gmail.com',
    'author_company' => 'Addweb Company',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.4.0-11.5.99',
            'fluid_styled_content' => '11.4.0-11.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];