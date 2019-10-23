<?php
namespace waydear\schutzkontocode;

class Legitimation
{
    const LEGITIMATION_TYPE_ELIGABLE_ENTITY = 1;
    const LEGITIMATION_TYPE_ELIGABLE_PERSON = 2;
    const LEGITIMATION_TYPE_EMPLOYER = 3;
    const LEGITIMATION_TYPE_SOCIAL_SECURITY = 4;
    const LEGITIMATION_TYPE_FAMILIENKASSE = 5;

    public $type;
    public $authorityName;
    public $validFrom;
    public $validUntil;
    public $referenceNumber;
}