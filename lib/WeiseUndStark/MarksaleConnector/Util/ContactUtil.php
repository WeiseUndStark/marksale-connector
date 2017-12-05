<?php

namespace WeiseUndStark\MarksaleConnector\Util;

use WeiseUndStark\MarksaleConnector\Entity\Contact;

/**
 * Class Contact
 * @package WeiseUndStark\MarksaleConnector\Util
 * @since 1.0
 */
class ContactUtil
{
    /**
     * @param string $purl
     * @return Contact
     */
    public function getContactByPurl(string $purl): Contact
    {
        return new Contact();
    }
}