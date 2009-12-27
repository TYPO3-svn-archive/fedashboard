<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key,pages';


t3lib_extMgm::addPlugin(array(
	'LLL:EXT:fedashboard/locallang_db.xml:tt_content.list_type_pi1',
	$_EXTKEY . '_pi1',
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');


if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_fedashboard_pi1_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'pi1/class.tx_fedashboard_pi1_wizicon.php';
}

$columns = array (
	'tx_fedashboard_config' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:fedashboard/locallang_db.xml:fe_users.tx_fedashboard_config',
		'config' => array (
			'type' => 'none'
		)
	)
);

t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users',$columns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','tx_fedashboard_config;;;;1-1-1');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/fedashboard/', 'fedashboard');
?>
