<?php
namespace waydear\schutzkontocode;

class CalcMonthly
{
    public $baseAmount = 0;
    public $additionalAmount = 0;
    public $firstAllowanceCount = 0;
    public $secondAllowanceCount = 0;
    public $careAllowanceAmount = 0;
    public $additionalChildrenAllowanceAmount = 0;
    public $finalAmount = 0;
    public $children = array();

    public function addPerson(){

        $sum = $this->firstAllowanceCount + $this->secondAllowanceCount;
        if($sum >= 5)
            return;

        if($this->firstAllowanceCount > 0)
            $this->secondAllowanceCount++;
        else
            $this->firstAllowanceCount = 1;

    }
}