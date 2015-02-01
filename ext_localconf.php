<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DL.' . $_EXTKEY,
	'Guests',
	array(
		'Guest' => 'new, create, thankYou',

	),
	// non-cacheable actions
	array(
		'Guest' => 'create',

	)
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DL.' . $_EXTKEY,
	'Admin',
	array(
		'Guest' => 'list, new, create',

	),
	// non-cacheable actions
	array(
		'Guest' => 'create',
	)
);
