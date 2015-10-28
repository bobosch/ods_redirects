<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

// Global redirects
t3lib_extMgm::addToInsertRecords('tx_odsredirects_redirects');
$TCA['tx_odsredirects_redirects'] = array(
    'ctrl' => array(
        'title'             => 'LLL:EXT:ods_redirects/locallang_db.xml:tx_odsredirects_redirects',
        'label'             => 'url',
        'tstamp'            => 'tstamp',
        'crdate'            => 'crdate',
        'cruser_id'         => 'cruser_id',
        'default_sortby'    => 'ORDER BY url',
        'rootLevel'         => -1,
        'enablecolumns'     => array(
            'disabled' => 'hidden',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
        'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_odsredirects_redirects.png',
    ),
);

// Plugin redirects
t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] =
    'header,header_position,header_link,header_layout,date,spaceBefore,spaceAfter,section_frame,layout,select_key,recursive';

t3lib_extMgm::addPlugin(
    array(
        'LLL:EXT:ods_redirects/locallang_db.xml:tt_content.list_type_pi1',
        $_EXTKEY . '_pi1',
        t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif',
    ),
    'list_type'
);