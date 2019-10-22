<?php
namespace waydear\schutzkontocode;

class Envelope
{
    public $id;

    function __construct(Payload $payload)
    {
        $this->id = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
        $this->payload = $payload;
    }
    public $payload;
}
