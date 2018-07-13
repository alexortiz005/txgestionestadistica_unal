
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

page{
    includeCSS {
        gestion-estadistica = EXT:gestionestadistica_unal/Resources/Public/Css/gestion-estadistica.scss
    }  
}