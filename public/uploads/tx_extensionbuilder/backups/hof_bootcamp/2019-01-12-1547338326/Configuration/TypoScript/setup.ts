
plugin.tx_hofbootcamp_speakerslist {
    view {
        templateRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_hofbootcamp_speakerslist.view.templateRootPath}
        partialRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_hofbootcamp_speakerslist.view.partialRootPath}
        layoutRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_hofbootcamp_speakerslist.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_hofbootcamp_speakerslist.persistence.storagePid}
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

plugin.tx_hofbootcamp_speakerdetails {
    view {
        templateRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_hofbootcamp_speakerdetails.view.templateRootPath}
        partialRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_hofbootcamp_speakerdetails.view.partialRootPath}
        layoutRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_hofbootcamp_speakerdetails.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_hofbootcamp_speakerdetails.persistence.storagePid}
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

plugin.tx_hofbootcamp_sessiondetail {
    view {
        templateRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_hofbootcamp_sessiondetail.view.templateRootPath}
        partialRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_hofbootcamp_sessiondetail.view.partialRootPath}
        layoutRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_hofbootcamp_sessiondetail.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_hofbootcamp_sessiondetail.persistence.storagePid}
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

plugin.tx_hofbootcamp_schedulelist {
    view {
        templateRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_hofbootcamp_schedulelist.view.templateRootPath}
        partialRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_hofbootcamp_schedulelist.view.partialRootPath}
        layoutRootPaths.0 = EXT:hof_bootcamp/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_hofbootcamp_schedulelist.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_hofbootcamp_schedulelist.persistence.storagePid}
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
plugin.tx_hofbootcamp._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-hof-bootcamp table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-hof-bootcamp table th {
        font-weight:bold;
    }

    .tx-hof-bootcamp table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
