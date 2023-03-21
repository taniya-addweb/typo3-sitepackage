<?php
 
 
 defined('TYPO3') or die('Access denied.');
 call_user_func(function()
 {
     /**
      * Temporary variables
      */
     $extensionKey = 'addwebpackage';
 
     /**
      * Default TypoScript for Sitepackage
      */
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
         $extensionKey,
         'Configuration/TypoScript',
         'addwebpackage'
     );
     
    
 });
 