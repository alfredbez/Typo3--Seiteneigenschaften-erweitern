<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Adding fields to pages TCA
$tmpCol = array(
    'tx_bkmfooternewsswitch_showfooternews' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:tx_bkmfooternewsswitch/Resources/Private/Language/db.xml:sys_file_storage.tx_bkmfooternewsswitch_showfooternews',
        "config" => Array (
            "type" => "check",
            "default" => "1"
        )
    ),

);
t3lib_extMgm::addTCAcolumns('pages', $tmpCol, 1);
t3lib_extMgm::addTCAcolumns('pages_language_overlay', $tmpCol, 1);

t3lib_extMgm::addToAllTCAtypes('pages', '--div--;Erweitert,tx_bkmfooternewsswitch_showfooternews,tx_bkmfooternewsswitch_showfooternews', 1);
//t3lib_extMgm::addToAllTCAtypes('pages_language_overlay', 'tx_logo1, tx_logo2, tx_logo3, tx_logo4,tx_logo5', "4,5", 'after:subtitle');

$TCA['pages_language_overlay']['interface']['showRecordFieldList'] .= ',tx_bkmfooternewsswitch_showfooternews';


?>