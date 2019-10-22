<?php
namespace waydear\schutzkontocode;

class Issuer
{
    function __construct(Legitimation $legitimation, Contact $contact)
    {
        $this->legitimation = $legitimation;
        $this->contact = $contact;
    }
    public $name;
    public $street;
    public $streetNr;
    public $postalCode;
    public $city;
    public $contact;
    public $legitimation;
}
