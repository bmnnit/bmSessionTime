<?php
/**
 * bmSessionTime - erlaubt das Einstellen der Session Timeouts
 * @author Johannes Baumann <info@bmnnit.com>
 */

namespace Bmnnit\bmSessionTime\Core;

class UtilsServer extends UtilsServer_parent {

    public function setOxCookie($sName, $sValue = "", $iExpire = 0, $sPath = '/', $sDomain = null, $blToSession = true, $blSecure = false, $blHttpOnly = true) {
        
        $config = $this->getConfig();
        
        $sSidTTL = (int) $config->getConfigParam('sSidTTL');
        $sSidAdminTTL = (int) $config->getConfigParam('sAdminSidTTL');
         
        if ($sName == "sid" && $sSidTTL > 1800) {
            $iExpire = $sSidTTL + time();
        }
        
        if ($sName == "admin_sid" && $sSidAdminTTL > 1800) {
            $iExpire = $sSidAdminTTL + time();
        }

        return parent::setOxCookie($sName, $sValue, $iExpire, $sPath, $sDomain, $blToSession, $blSecure, $blHttpOnly);
    }
}
