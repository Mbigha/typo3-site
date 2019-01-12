<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Bootcamp2.Bootcamp2',
            'Listtimeslots',
            [
                'TimeSlot' => 'list, show',
                'Session' => 'list, show',
                'Speaker' => 'list, show',
                'Day' => 'list, show'
            ],
            // non-cacheable actions
            [
                'TimeSlot' => '',
                'Session' => '',
                'Speaker' => '',
                'Day' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    listtimeslots {
                        iconIdentifier = bootcamp2-plugin-listtimeslots
                        title = LLL:EXT:bootcamp2/Resources/Private/Language/locallang_db.xlf:tx_bootcamp2_listtimeslots.name
                        description = LLL:EXT:bootcamp2/Resources/Private/Language/locallang_db.xlf:tx_bootcamp2_listtimeslots.description
                        tt_content_defValues {
                            CType = list
                            list_type = bootcamp2_listtimeslots
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'bootcamp2-plugin-listtimeslots',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:bootcamp2/Resources/Public/Icons/user_plugin_listtimeslots.svg']
			);
		
    }
);
