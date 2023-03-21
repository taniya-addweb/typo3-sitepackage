<?php
 defined('TYPO3') || die();
 
 all_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'addwebpackage';

   /**
     * Add default TypoScript (constants and setup)
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Site Package'
    );
});