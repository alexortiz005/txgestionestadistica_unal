<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.GestionestadisticaUnal',
            'Previewgestion',
            'Preview Gestion Estadistica'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.GestionestadisticaUnal',
            'Temasgestion',
            'Temas Gestion Estadistica'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('gestionestadistica_unal', 'Configuration/TypoScript', 'Gestión Estadística UN');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gestionestadisticaunal_domain_model_tema', 'EXT:gestionestadistica_unal/Resources/Private/Language/locallang_csh_tx_gestionestadisticaunal_domain_model_tema.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gestionestadisticaunal_domain_model_tema');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gestionestadisticaunal_domain_model_recurso', 'EXT:gestionestadistica_unal/Resources/Private/Language/locallang_csh_tx_gestionestadisticaunal_domain_model_recurso.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gestionestadisticaunal_domain_model_recurso');

    }
);
