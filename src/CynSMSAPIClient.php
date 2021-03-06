<?php
/*
 * CynSMSAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace CynSMSAPILib;

use CynSMSAPILib\Controllers;

/**
 * CynSMSAPILib client class
 */
class CynSMSAPIClient
{
    /**
     * Singleton access to API controller
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getClient()
    {
        return Controllers\APIController::getInstance();
    }
}
