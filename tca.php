<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TCA['tx_odsredirects_redirects'] = array (
	'ctrl' => $TCA['tx_odsredirects_redirects']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,domain_id,url,mode,destination,append,has_moved,last_referer,counter'
	),
	'feInterface' => $TCA['tx_odsredirects_redirects']['feInterface'],
	'columns' => array (
		'hidden' => array (
			'exclude' => 0,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'domain_id' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.domain_id',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('',0),
				),
				'foreign_table' => 'sys_domain',
				'foreign_table_where' => 'ORDER BY sys_domain.domainName',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'url' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.url',
			'config' => array (
				'type' => 'input',
				'size' => 30,
			)
		),
		'mode' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode',
			'config' => array (
				'type' => 'select',
				'items' => array (
				array('LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode.I.0', '0'),
				array('LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode.I.1', '1'),
				array('LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode.I.2', '2'),
// 				array('LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode.I.3', '3'),
 				array('LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.mode.I.4', '4'),
			),
			'size' => 1,
			'maxitems' => 1,
			)
		),
		'destination' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.destination',
			'config' => array (
				'type'     => 'input',
				'size'     => 15,
				'max'      => 255,
				'checkbox' => '',
				'eval'     => 'trim',
				'wizards'  => array(
					'_PADDING' => 2,
					'link'     => array(
						'type'         => 'popup',
						'title'        => 'Link',
						'icon'         => 'link_popup.gif',
						'script'       => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			)
		),
		'append' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.append',
			'config' => array (
				'type' => 'check',
				'default' => 0,
			)
		),
		'has_moved' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.has_moved',
			'config' => array (
				'type' => 'check',
				'default' => 1,
			)
		),
		'last_referer' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.last_referer',
			'config' => array (
				'type' => 'none',
			)
		),
		'counter' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects.counter',
			'config' => array (
				'type' => 'none',
				'size' => 10,
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;;;1-1-1, domain_id;;;;2-2-2, url, mode, destination;;1;;3-3-3, last_referer;;;;4-4-4, counter')
	),
	'palettes' => array (
		'1' => array('showitem' => 'append, has_moved')
	)
);