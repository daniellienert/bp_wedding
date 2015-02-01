<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Guests',
	'Guest Management'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'BP Wedding');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bpwedding_domain_model_guest', 'EXT:bp_wedding/Resources/Private/Language/locallang_csh_tx_bpwedding_domain_model_guest.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bpwedding_domain_model_guest');
$GLOBALS['TCA']['tx_bpwedding_domain_model_guest'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,email,phone,person_count,person_names,meal1,meal2,meal3,message,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Guest.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_bpwedding_domain_model_guest.gif'
	),
);
