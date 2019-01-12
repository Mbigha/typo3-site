<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Bootcamp2.Bootcamp2',
            'Listtimeslots',
            'List time Slots'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('bootcamp2', 'Configuration/TypoScript', 'Bootcamp 2');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootcamp2_domain_model_timeslot', 'EXT:bootcamp2/Resources/Private/Language/locallang_csh_tx_bootcamp2_domain_model_timeslot.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootcamp2_domain_model_timeslot');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootcamp2_domain_model_session', 'EXT:bootcamp2/Resources/Private/Language/locallang_csh_tx_bootcamp2_domain_model_session.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootcamp2_domain_model_session');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootcamp2_domain_model_speaker', 'EXT:bootcamp2/Resources/Private/Language/locallang_csh_tx_bootcamp2_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootcamp2_domain_model_speaker');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootcamp2_domain_model_day', 'EXT:bootcamp2/Resources/Private/Language/locallang_csh_tx_bootcamp2_domain_model_day.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootcamp2_domain_model_day');

    }
);
