<?php

namespace WeiseUndStark\MarksaleConnector\Util;

use GuzzleHttp\Client;
use WeiseUndStark\MarksaleConnector\Entity\Contact;

/**
 * Class Contact
 * @package WeiseUndStark\MarksaleConnector\Util
 * @since 1.0
 */
class ContactUtil
{
    private $client;

    /**
     * ContactUtil constructor.
     * @param string $clientAlias
     */
    public function __construct(string $clientAlias)
    {
        //
        session_start();

        //
        $this->client = new Client(['base_uri' => 'http://'.$clientAlias.'.marksale.de']);
    }


    /**
     * @param string $purl
     * @return Contact
     */
    public function getContactByPurl(string $purl): Contact
    {
        return (new Contact())
            ->setFirstName('Christian '.$purl);
    }

    /**
     * @param string $uri
     * @param array $formParams
     * @param string $method
     * @param bool $visitorBased
     * @return array
     */
    private function _doRequest(
        string $uri,
        array $formParams = [],
        string $method = 'GET',
        bool $visitorBased = true
    ): array {
        //
        $options = [
            'headers' => $this->_createSecuredHeader($visitorBased),
        ];

        //
        if (!empty($formParams)) {
            $options['form_params'] = $formParams;
        }

        //
        $response = $this->client->request($method, $uri, $options);

        //
        $contents = $response->getBody()->getContents();

        //
        return json_decode($contents, true);
    }

    /**
     * @param string $apiKey
     * @param bool $visitorBased
     * @return array
     */
    private function _createSecuredHeader(string $apiKey, $visitorBased = true): array
    {
        //
        $return = [
            'x-api-key' => $apiKey,
        ];

        //
        if ($visitorBased) {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            $return['marksale-visitor-session'] = session_id();
            $return['marksale-visitor-ip'] = $ip;
        }

        //
        if ($mssvid = $_COOKIE['mssvid']) {
            $return['mssvid'] = $mssvid;
        }

        //
        return $return;
    }
}