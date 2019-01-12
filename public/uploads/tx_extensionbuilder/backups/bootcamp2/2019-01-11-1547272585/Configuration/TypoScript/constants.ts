
plugin.tx_bootcamp2_listtimeslots {
    view {
        # cat=plugin.tx_bootcamp2_listtimeslots/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:bootcamp2/Resources/Private/Templates/
        # cat=plugin.tx_bootcamp2_listtimeslots/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:bootcamp2/Resources/Private/Partials/
        # cat=plugin.tx_bootcamp2_listtimeslots/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:bootcamp2/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_bootcamp2_listtimeslots//a; type=string; label=Default storage PID
        storagePid =
    }
}
