<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

$aModule = array('id' => 'bmnnit_sessiontime',
    'title' => '[BM] Bmnnit Session Time Modul',
    'description_de' => 'Bmnnit Session Time Modul - erlaubt das Einstellen der Session Timeouts',
    'description_en' => 'Bmnnit Session Time Modul - change the sid admin admin_sid session lifetime cookie',
    'thumbnail' => '_BmnnIT_3_65px_high.png',
    'version' => '0.0.1',
    'author' => 'Johannes Baumann',
    'email' => 'info@bmnnit.com',
    'url' => 'http://www.bmnnit.com',
    'extend'      => array(
        \OxidEsales\Eshop\Core\UtilsServer::class => Bmnnit\bmSessionTime\Core\UtilsServer::class 
    ),
    'settings' => array(
        array('group' => 'mainSessionTime', 'name' => 'sSidTTL',      'type' => 'str', 'value' => "86400" ),
        array('group' => 'mainSessionTime', 'name' => 'sAdminSidTTL', 'type' => 'str', 'value' => "86400" ),
    )
);

