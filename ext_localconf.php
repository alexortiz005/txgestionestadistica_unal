<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:gestionestadistica_unal/Configuration/RTE/Default.yaml';

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.GestionestadisticaUnal',
            'Previewgestion',
            [
                'Tema' => 'preview,list, show'
            ],
            // non-cacheable actions
            [
                'Tema' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.GestionestadisticaUnal',
            'Temasgestion',
            [
                'Tema' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Tema' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    previewgestion {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gestionestadistica_unal') . 'Resources/Public/Icons/user_plugin_previewgestion.svg
                        title = LLL:EXT:gestionestadistica_unal/Resources/Private/Language/locallang_db.xlf:tx_gestionestadistica_unal_domain_model_previewgestion
                        description = LLL:EXT:gestionestadistica_unal/Resources/Private/Language/locallang_db.xlf:tx_gestionestadistica_unal_domain_model_previewgestion.description
                        tt_content_defValues {
                            CType = list
                            list_type = gestionestadisticaunal_previewgestion
                        }
                    }
                    temasgestion {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gestionestadistica_unal') . 'Resources/Public/Icons/user_plugin_temasgestion.svg
                        title = LLL:EXT:gestionestadistica_unal/Resources/Private/Language/locallang_db.xlf:tx_gestionestadistica_unal_domain_model_temasgestion
                        description = LLL:EXT:gestionestadistica_unal/Resources/Private/Language/locallang_db.xlf:tx_gestionestadistica_unal_domain_model_temasgestion.description
                        tt_content_defValues {
                            CType = list
                            list_type = gestionestadisticaunal_temasgestion
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
