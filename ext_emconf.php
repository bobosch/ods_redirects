<?php

########################################################################
# Extension Manager/Repository config file for ext "ods_redirects".
#
# Auto generated 15-03-2012 09:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title'                         => 'Static redirects',
    'description'                   => 'Simply manage (permanent 301) redirects in the list view. The extension supports multidomain sites, count the redirect usage and shows the last referer. UPDATE! imports the records from realurl.',
    'category'                      => 'fe',
    'author'                        => 'Robert Heel, Andreas Heling',
    'author_email'                  => 'aheling@1drop.de',
    'shy'                           => '',
    'dependencies'                  => '',
    'conflicts'                     => '',
    'priority'                      => '',
    'module'                        => '',
    'state'                         => 'stable',
    'internal'                      => '',
    'uploadfolder'                  => 0,
    'createDirs'                    => '',
    'modify_tables'                 => '',
    'clearCacheOnLoad'              => 0,
    'lockType'                      => '',
    'author_company'                => 'http://www.1drop.de/',
    'version'                       => '1.2.0',
    'constraints'                   => array(
        'depends'   => array(
            'typo3' => '4.5.0-6.2.99',
        ),
        'conflicts' => array(),
        'suggests'  => array(),
    ),
    '_md5_values_when_last_written' => 'a:13:{s:9:"ChangeLog";s:4:"a5de";s:20:"class.ext_update.php";s:4:"fb83";s:25:"class.tx_odsredirects.php";s:4:"70ea";s:21:"ext_conf_template.txt";s:4:"a385";s:12:"ext_icon.gif";s:4:"1cfa";s:17:"ext_localconf.php";s:4:"34bb";s:14:"ext_tables.php";s:4:"ff8f";s:14:"ext_tables.sql";s:4:"b74e";s:34:"icon_tx_odsredirects_redirects.png";s:4:"55cb";s:16:"locallang_db.xml";s:4:"560a";s:7:"tca.php";s:4:"81d8";s:14:"doc/manual.sxw";s:4:"b026";s:33:"pi1/class.tx_odsredirects_pi1.php";s:4:"be00";}',
    'suggests'                      => array(),
);