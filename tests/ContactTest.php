<?php

/**
 * Class ContactTest
 */
final class ContactTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param string $purl
     * @param \WeiseUndStark\MarksaleConnector\Entity\Contact $expectedContact
     *
     * @dataProvider providerContacts
     */
    public function testCanReceiveContactByPurl(
        string $purl,
        \WeiseUndStark\MarksaleConnector\Entity\Contact $expectedContact
    ): void {
        $client = new \WeiseUndStark\MarksaleConnector\Client('druckpress');

        $contactUtil = new \WeiseUndStark\MarksaleConnector\Util\ContactUtil($client);

        $contact = $contactUtil->getContactByPurl($purl);

        $this->assertEquals($contact, $expectedContact);
    }

    /**
     * @return array
     */
    public function providerContacts(): array
    {
        return [
            [
                'Grazia-Garber',
                (new \WeiseUndStark\MarksaleConnector\Entity\Contact())
                    ->setFirstName('Grazia')
                    ->setLastName('Garber')
                    ->setEmail('ggarber0@bbb.org'),
            ],
            [
                'Delora-Eteen',
                (new \WeiseUndStark\MarksaleConnector\Entity\Contact())
                    ->setFirstName('Delora')
                    ->setLastName('Eteen')
                    ->setEmail('deteen1@cisco.com'),
            ],
        ];
    }
}