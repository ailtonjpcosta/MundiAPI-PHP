<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Response object for getting a boleto transaction
 */
class GetBoletoTransactionResponse extends GetTransactionResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @maps bar_code
     * @var string $barCode public property
     */
    public $barCode;

    /**
     * @todo Write general description for this property
     * @required
     * @maps nosso_numero
     * @var string $nossoNumero public property
     */
    public $nossoNumero;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $bank public property
     */
    public $bank;

    /**
     * @todo Write general description for this property
     * @required
     * @maps document_number
     * @var string $documentNumber public property
     */
    public $documentNumber;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $instructions public property
     */
    public $instructions;

    /**
     * @todo Write general description for this property
     * @required
     * @maps billing_address
     * @var GetBillingAddressResponse $billingAddress public property
     */
    public $billingAddress;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $url            Initialization value for $this->url
     * @param string                    $barCode        Initialization value for $this->barCode
     * @param string                    $nossoNumero    Initialization value for $this->nossoNumero
     * @param string                    $bank           Initialization value for $this->bank
     * @param string                    $documentNumber Initialization value for $this->documentNumber
     * @param string                    $instructions   Initialization value for $this->instructions
     * @param GetBillingAddressResponse $billingAddress Initialization value for $this->billingAddress
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->url            = func_get_arg(0);
            $this->barCode        = func_get_arg(1);
            $this->nossoNumero    = func_get_arg(2);
            $this->bank           = func_get_arg(3);
            $this->documentNumber = func_get_arg(4);
            $this->instructions   = func_get_arg(5);
            $this->billingAddress = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['url']             = $this->url;
        $json['bar_code']        = $this->barCode;
        $json['nosso_numero']    = $this->nossoNumero;
        $json['bank']            = $this->bank;
        $json['document_number'] = $this->documentNumber;
        $json['instructions']    = $this->instructions;
        $json['billing_address'] = $this->billingAddress;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}
