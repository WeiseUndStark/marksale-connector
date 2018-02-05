<?php

namespace WeiseUndStark\MarksaleConnector;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class Client
 * @package WeiseUndStark\MarksaleConnector
 * @since 1.0
 */
class Client
{
    private $client;

    /**
     * Client constructor.
     * @param string $clientAlias
     */
    public function __construct(string $clientAlias)
    {
        //
        $this->client = new GuzzleClient(['base_uri' => 'https://'.$clientAlias.'.marksale.de']);
    }

    /**
     * @param string $uri
     * @param array $formParams
     * @param string $method
     * @param bool $visitorBased
     * @return array
     */
    public function doRequest(
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
            $return['marksale-visitor-session'] = session_id();
            $return['marksale-visitor-ip'] = $this->_getClientIpAddress();
        }

        //
        if (isset($_COOKIE['mssvid']) && $mssvid = $_COOKIE['mssvid']) {
            $return['mssvid'] = $mssvid;
        }

        //
        return $return;
    }

    /**
     * @return null|string
     */
    private function _getClientIpAddress(): ?string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        if (!empty($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }

        return null;
    }
}