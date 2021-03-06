<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Speakerslist',
            [
                'Speaker' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Sessiondetail',
            [
                'Session' => 'show'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Schedulelist',
            [
                'Day' => 'list'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Displaysessions',
            [
                'Session' => 'registration'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Createstudent',
            [
                'Student' => 'list, show, new, create, edit, update'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Displaytest',
            [
                'Test' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => '',
                'Student' => 'create, update, delete',
                'Participant' => 'create, update'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    speakerslist {
                        iconIdentifier = hof_bootcamp-plugin-speakerslist
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_speakerslist.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_speakerslist.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_speakerslist
                        }
                    }
                    sessiondetail {
                        iconIdentifier = hof_bootcamp-plugin-sessiondetail
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_sessiondetail.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_sessiondetail.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_sessiondetail
                        }
                    }
                    schedulelist {
                        iconIdentifier = hof_bootcamp-plugin-schedulelist
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_schedulelist.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_schedulelist.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_schedulelist
                        }
                    }
                    displaysessions {
                        iconIdentifier = hof_bootcamp-plugin-displaysessions
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_displaysessions.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_displaysessions.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_displaysessions
                        }
                    }
                    createstudent {
                        iconIdentifier = hof_bootcamp-plugin-createstudent
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_createstudent.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_createstudent.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_createstudent
                        }
                    }
                    displaytest {
                        iconIdentifier = hof_bootcamp-plugin-displaytest
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_displaytest.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_displaytest.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_displaytest
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-speakerslist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_speakerslist.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-sessiondetail',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_sessiondetail.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-schedulelist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_schedulelist.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-displaysessions',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_displaysessions.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-createstudent',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_createstudent.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-displaytest',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_displaytest.svg']
			);
		
    }
);
