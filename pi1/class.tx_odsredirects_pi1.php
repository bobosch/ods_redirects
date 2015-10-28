<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Robert Heel <rheel@1drop.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib . 'class.tslib_pibase.php');

/**
 * Plugin 'Redirect' for the 'ods_redirects' extension.
 *
 * @author    Robert Heel <rheel@1drop.de>
 * @package    TYPO3
 * @subpackage    tx_odsredirects
 */
class tx_odsredirects_pi1 extends tslib_pibase
{
    /**
     * Same as class name
     *
     * @var string
     */
    var $prefixId = 'tx_odsredirects_pi1';

    /**
     * Path to this script relative to the extension dir.
     *
     * @var string
     */
    var $scriptRelPath = 'pi1/class.tx_odsredirects_pi1.php';

    /**
     * The extension key.
     *
     * @var string
     */
    var $extKey = 'ods_redirects';

    /**
     * The main method of the PlugIn
     *
     * @param string $content The PlugIn content
     * @param array $conf The PlugIn configuration
     * @return The content that is displayed on the website
     */
    function main($content, $conf)
    {
        $this->conf = $conf;

        // Configuring so caching is not expected. This value means that no cHash params are ever set. We do this, because it's a USER_INT object!
        $this->pi_USER_INT_obj = 1;

        if ($this->cObj->data['pages']) {
            $destination = $this->getLink($this->cObj->data['pages'], $GLOBALS['TSFE']->sys_language_uid);

            // Redirect
            if ($redirect['has_moved']) {
                header('HTTP/1.1 301 Moved Permanently');
            } else {
                header('HTTP/1.1 302 Moved Temporarily');
            }
            header('Location: ' . t3lib_div::locationHeaderUrl($destination));
            header('Connection: close');
            exit();
        }
    }

    /**
     * @param string $id
     * @param bool $L
     * @return mixed
     */
    function getLink($id, $L = false)
    {
        return $this->cObj->getTypoLink_URL($id, $L ? array('L' => $L) : array());
    }
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/ods_redirects/pi1/class.tx_odsredirects_pi1.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/ods_redirects/pi1/class.tx_odsredirects_pi1.php']);
}