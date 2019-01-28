<?php
if (!getenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS')) {
    putenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS=' . 'adminpanel,backend,core,extbase,extensionmanager,filelist,fluid,fluid_styled_content,form,frontend,install,recordlist,recycler,redirects,reports,rte_ckeditor,scheduler,setup,t3editor,tstemplate,viewpage');
}
