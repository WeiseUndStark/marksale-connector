<?php

namespace WeiseUndStark\MarksaleConnector\Util;

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
        list($firstName, $lastname) = explode('-', $purl);

        return (new Contact())
            ->setFirstName(ucfirst($firstName))
            ->setLastName(ucfirst($lastname));
    }
}