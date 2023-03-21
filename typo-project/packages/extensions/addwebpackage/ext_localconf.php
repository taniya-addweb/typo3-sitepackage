<?php
defined('TYPO3') or die();

call_user_func(function()
{
   $extensionKey = 'addwebpackage';

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
      $extensionKey,
      'setup',
      "@import 'EXT:addwebpackage/Configuration/TypoScript/setup.typoscript'"
   );
});
?>