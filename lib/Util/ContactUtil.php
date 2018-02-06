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
        //
        $purlData = $this->connectorUtil->doRequest('/contact_api/byPurl/'.trim(strtolower($purl)));

        //
        setcookie("msph", $purlData['hash']);

        //
        $contactData = $purlData['contact'];

        //
        $contact = new Contact();

        if (isset($contactData['company_name'])) {
            $contact->setCompanyName($contactData['company_name']);
        }

        if (isset($contactData['first_name'])) {
            $contact->setFirstName($contactData['first_name']);
        }

        if (isset($contactData['last_name'])) {
            $contact->setLastName($contactData['last_name']);
        }

        if (isset($contactData['customer_number'])) {
            $contact->setCustomerNumber($contactData['customer_number']);
        }

        if (isset($contactData['birthday'])) {
            $contact->setBirthday($contactData['birthday']);
        }

        if (isset($contactData['email'])) {
            $contact->setEmail($contactData['email']);
        }

        if (isset($contactData['salutation'])) {
            $contact->setSalutation($contactData['salutation']);
        }

        if (isset($contactData['street'])) {
            $contact->setStreet($contactData['street']);
        }

        if (isset($contactData['house_number'])) {
            $contact->setHouseNumber($contactData['house_number']);
        }

        if (isset($contactData['zip_code'])) {
            $contact->setZipCode($contactData['zip_code']);
        }

        if (isset($contactData['city'])) {
            $contact->setCity($contactData['city']);
        }

        if (isset($contactData['phone_number'])) {
            $contact->setPhoneNumber($contactData['phone_number']);
        }

        //
        return $contact;
    }
}