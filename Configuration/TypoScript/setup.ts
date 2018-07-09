
plugin.tx_gestionestadisticaunal_previewgestion {
    view {
        templateRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_gestionestadisticaunal_previewgestion.view.templateRootPath}
        partialRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_gestionestadisticaunal_previewgestion.view.partialRootPath}
        layoutRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_gestionestadisticaunal_previewgestion.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_gestionestadisticaunal_previewgestion.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_gestionestadisticaunal_temasgestion {
    view {
        templateRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_gestionestadisticaunal_temasgestion.view.templateRootPath}
        partialRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_gestionestadisticaunal_temasgestion.view.partialRootPath}
        layoutRootPaths.0 = EXT:gestionestadistica_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_gestionestadisticaunal_temasgestion.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_gestionestadisticaunal_temasgestion.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_gestionestadisticaunal._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-gestionestadistica-unal table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-gestionestadistica-unal table th {
        font-weight:bold;
    }

    .tx-gestionestadistica-unal table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
