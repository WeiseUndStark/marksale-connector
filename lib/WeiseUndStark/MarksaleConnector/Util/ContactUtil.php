<?php

namespace WeiseUndStark\MarksaleConnector\Util;

use WeiseUndStark\MarksaleConnector\Client;
use WeiseUndStark\MarksaleConnector\Entity\Contact;

/**
 * Class ContactUtil
 * @package WeiseUndStark\MarksaleConnector\Util
 * @since 1.0
 */
class ContactUtil
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
     * @param string $purl
     * @return Contact
     */
    public function getContactByPurl(string $purl): Contact
    {
//        $contactData = $this->connectorUtil->doRequest('/contact_api/byPurl/' . $purl);
//
//        return (new Contact())
//            ->setFirstName($contactData['firstName'])
//            ->setLastName($contactData['lastName']);

        list($firstName, $lastname) = explode('-', $purl);

        return (new Contact())
            ->setFirstName(ucfirst($firstName))
            ->setLastName(ucfirst($lastname));
    }
}