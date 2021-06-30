<?php

namespace waydear\schutzkontocode;

class Constants
{
    public static function getBaseAmount()
    {
        return 1252.64;
    }

    public static function getFirstPersonAllowance()
    {
        return 471.44;
    }

    public static function getSecondPersonAllowance()
    {
        return 262.65;
    }

    public static function getKnownCareAmounts()
    {
        return array(0, 316, 545, 728, 901);
    }


}