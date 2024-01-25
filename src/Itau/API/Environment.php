<?php
namespace Itau\API;

/**
 * Class Environment
 *
 * @package Itau\API
 */
class Environment
{

    private $apiPix;
    private $apiBolecode;
    private $apiAuth;
    private $apiBoleto;

    /**
     *
     * @param string $api
     *
     */
    private function __construct($apiAuth, $apiPix, $apiBolecode, $apiBoleto)
    {
        $this->apiAuth = $apiAuth;
        $this->apiPix = $apiPix;
        $this->apiBolecode = $apiBolecode;
        $this->apiBoleto = $apiBoleto;
    }

    /**
     *
     * @return Environment
     */
    public static function production()
    {
        return new Environment(
            'https://sts.itau.com.br/api/oauth/token',
            'https://secure.api.itau/pix_recebimentos/v2',
            'https://secure.api.itau/pix_recebimentos_conciliacoes/v2',
            'https://api.itau.com.br/cash_management/v2'
        );
    }

    public function getApiPixUrl(): string
    {
        return $this->apiPix;
    }

    public function getApiBoleCodeUrl(): string
    {
        return $this->apiBolecode;
    }

    public function getApiBoletoUrl(): string
    {
        return $this->apiBoleto;
    }

    public function getApiUrlAuth(): string
    {
        return $this->apiAuth;
    }
}
