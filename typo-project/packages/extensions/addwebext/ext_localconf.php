<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage'] = 'EXT:sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage/Configuration/TsConfig/Page/All.tsconfig">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod {
        wizards.newContentElement.wizardItems.customCtype {
            elements {
                custom_element {
                    iconIdentifier = /typo3/sysext/core/Resources/Public/Icons/T3Icons/sprites/actions.svg#actions-delete
                    title = custom element
                    description = My custom element
                   
                    tt_content_defValues {
                        CType = my custom elements
                    }
                }
            }
            header = Custom Elements
            show := addToList(custom_element)
        }
    }
');
