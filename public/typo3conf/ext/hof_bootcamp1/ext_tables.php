<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofBootCamp.HofBootcamp',
            'Speakerslist',
            'The Speakers List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofBootCamp.HofBootcamp',
            'Speakerdetail',
            'Speaker Detail'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofBootCamp.HofBootcamp',
            'Schedulelist',
            'The Event Schedule List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofBootCamp.HofBootcamp',
            'Sessiondetail',
            'Session Detail'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('hof_bootcamp', 'Configuration/TypoScript', 'Hof Typo3 Bootcamp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofbootcamp_domain_model_day', 'EXT:hof_bootcamp/Resources/Private/Language/locallang_csh_tx_hofbootcamp_domain_model_day.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofbootcamp_domain_model_day');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofbootcamp_domain_model_timeslot', 'EXT:hof_bootcamp/Resources/Private/Language/locallang_csh_tx_hofbootcamp_domain_model_timeslot.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofbootcamp_domain_model_timeslot');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofbootcamp_domain_model_session', 'EXT:hof_bootcamp/Resources/Private/Language/locallang_csh_tx_hofbootcamp_domain_model_session.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofbootcamp_domain_model_session');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofbootcamp_domain_model_speaker', 'EXT:hof_bootcamp/Resources/Private/Language/locallang_csh_tx_hofbootcamp_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofbootcamp_domain_model_speaker');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofbootcamp_domain_model_location', 'EXT:hof_bootcamp/Resources/Private/Language/locallang_csh_tx_hofbootcamp_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofbootcamp_domain_model_location');

    }
);
