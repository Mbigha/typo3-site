<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Speakerslist',
            [
                'Speaker' => 'list'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => ''
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
                'Location' => ''
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
                'Location' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofBootCamp.HofBootcamp',
            'Location',
            [
                'Day' => 'list',
                'TimeSlot' => 'list, show',
                'Session' => 'list, show',
                'Speaker' => 'list, show',
                'Location' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Day' => '',
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Location' => ''
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
                    schedulelist {
                        iconIdentifier = hof_bootcamp-plugin-schedulelist
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_schedulelist.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_schedulelist.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_schedulelist
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
                    location {
                        iconIdentifier = hof_bootcamp-plugin-location
                        title = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_location.name
                        description = LLL:EXT:hof_bootcamp/Resources/Private/Language/locallang_db.xlf:tx_hof_bootcamp_location.description
                        tt_content_defValues {
                            CType = list
                            list_type = hofbootcamp_location
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
				'hof_bootcamp-plugin-schedulelist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_schedulelist.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-sessiondetail',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_sessiondetail.svg']
			);
		
			$iconRegistry->registerIcon(
				'hof_bootcamp-plugin-location',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hof_bootcamp/Resources/Public/Icons/user_plugin_location.svg']
			);
		
    }
);
