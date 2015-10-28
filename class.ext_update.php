<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Robert Heel (rheel@1drop.de)
 *  All rights reserved
 *
 *  This script is part of the Typo3 project. The Typo3 project is
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
class ext_update
{
    function main()
    {
        $GLOBALS['TYPO3_DB']->sql_query(
            'REPLACE INTO tx_odsredirects_redirects(mode,url,destination,last_referer,counter,tstamp,has_moved) SELECT 1,url,destination,last_referer,counter,tstamp,has_moved FROM tx_realurl_redirects'
        );
        $content = 'Imported realurl redirect table.';

        return $content;
    }

    function access()
    {
        return true;
    }
}

if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ods_redirects/class.ext_update.php']) {
    include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ods_redirects/class.ext_update.php']);
}
