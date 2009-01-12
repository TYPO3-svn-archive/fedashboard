<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_fedashboard_widgets'] = array (
	'ctrl' => $TCA['tx_fedashboard_widgets']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden'
	),
	'feInterface' => $TCA['tx_fedashboard_widgets']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>