<?php
namespace waydear\schutzkontocode;

use JsonSerializable;
class Payload implements JsonSerializable
{
    public function __construct(Issuer $issuer, BankAccount $bankaccount, Calculation $calculation, $signaturePrivateKey = null)
    {
        $this->issuer = $issuer;
        $this->bankaccount = $bankaccount;
        $this->calculation = $calculation;
        if ($signaturePrivateKey != null)
            $this->signPrivateKey = $signaturePrivateKey;
        $this->issueDate = gmdate("Y-m-d H:i:s");
    }
    public $issuer;
    public $bankaccount;
    public $calculation;
    public $signature;
    public $issueDate;
    private $signPrivateKey;

    public function jsonSerialize()
    {
        if ($this->signPrivateKey != null) {
            
            $signature = json_encode($this->issuer) . json_encode($this->bankaccount) . json_encode($this->calculation);
            openssl_sign($signature, $signedString, $this->signPrivateKey, OPENSSL_ALGO_SHA512);

            $this->signature = base64_encode($signedString);
        }
        
        return $this;
    }
}
