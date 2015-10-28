<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

// Global redirects
if (!is_array($TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['checkAlternativeIdMethods-PostProc'])) {
    $TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['checkAlternativeIdMethods-PostProc'] = array();
}

array_unshift(
    $TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['checkAlternativeIdMethods-PostProc'],
    'EXT:ods_redirects/class.tx_odsredirects.php:&tx_odsredirects->checkRedirect'
);

// Plugin redirects
t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_odsredirects_pi1.php', '_pi1', 'list_type', 0);
