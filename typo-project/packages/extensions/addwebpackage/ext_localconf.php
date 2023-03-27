

<?php
defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:addwebpackage/Configuration/TCA/Overrides/tt_content.php">');

/***************
 * Add default RTE configuration
 */
//$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage'] = 'EXT:addwebpackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:addwebpackage/Configuration/TsConfig/Page/All.tsconfig">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod {
    wizards.newContentElement.wizardItems.customCtype {
        elements {
            banner_newcontentelement {
                iconIdentifier = content-text
                title = LLL:EXT:addwebpackage/Resources/Private/Language/locallang.xlf:banner_newcontentelement_title
                description = LLL:EXT:addwebpackage/Resources/Private/Language/locallang.xlf:banner_newcontentelement_description
                tt_content_defValues {
                CType = banner_newcontentelement
                }
        }
    }
    header = Custom element
    show := addToList(banner_newcontentelement)
    }

}
');


// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
//     file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('addwebpackage') . 'Configuration/TCA/tx_slider_domain_model_slider.php')
// );

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_slider_domain_model_slider');



