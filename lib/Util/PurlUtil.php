<?php

namespace WeiseUndStark\MarksaleConnector\Util;

use WeiseUndStark\MarksaleConnector\Client;

/**
 * Class PurlUtil
 * @package WeiseUndStark\MarksaleConnector\Util
 * @since 1.1
 */
class PurlUtil
{
    private $connectorUtil;

    /**
     * ContactUtil constructor.
     * @param Client $connectorUtil
     */
    public function __construct(Client $connectorUtil)
    {
        $this->connectorUtil = $connectorUtil;
    }

    /**
     * @return bool
     */
    public function setConverted()
    {
        $hash = $_COOKIE['msph'];

        if (!$hash) {
            return false;
        }

        $this->connectorUtil->doRequest('/contact_api/setConvertedByPurlHash/'.$hash);

        return true;
    }
}