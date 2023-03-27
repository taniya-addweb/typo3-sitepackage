<?php
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        // title
        'LLL:EXT:addwebpackage/Resources/Private/Language/locallang.xlf:banner_newcontentelement_title',
        // plugin signature: extkey_identifier
        'banner_newcontentelement',
        // icon identifier
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['banner_newcontentelement'] = [  
     'showitem' => '
        --palette--;;general,
        header;Internal title (not displayed),
        bodytext;Bodytext,
        --div--;Media,
        image;Image,
        --palette--;;imagelinks,
        --palette--;;media,
    ',   
     'palettes' => [      
        'general' => [         
            'showitem' => '
                --palette--;;visible,
                --palette--;;categories,
            ',        ],
        'visible' => [      
               'showitem' => '
                --palette--;;visibility,
                --palette--;;access,
            ',        ],
        'visibility' => [     
                'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden_formlabel,
            ',        ],
        'categories' => [       
              'showitem' => '
                categories,
            ',        ],
        'access' => [    
               'showitem' =>
               'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,' ,        
         ],
    ],
    'columnsOverrides' => [  
            'bodytext' => [   
                        'config' => [  
                                       'enableRichtext' => true,        
                                       'richtextConfiguration' => 'default',    
                                    ],
        ],
    ],
];



?>