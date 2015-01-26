<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_bpwedding_domain_model_guest'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_bpwedding_domain_model_guest']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, name, email, phone, person_count, person_names, meal1, meal2, meal3',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, name, email, phone, person_count, person_names, meal1, meal2, meal3, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'person_count' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.person_count',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'person_names' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.person_names',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'meal1' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.meal1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'meal2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.meal2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'meal3' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:bp_wedding/Resources/Private/Language/locallang_db.xlf:tx_bpwedding_domain_model_guest.meal3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		
	),
);
