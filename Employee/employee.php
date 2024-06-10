<?php

class Employee{

    private $fullname;
    private $civil;
    private $position;
    private $employment;
    private $regular_hour;
    private $over_time;
    private $gross;
    private $net;
    private $deduction


    public function __construct($fullname, $civil, $position, $employment, $regular_hour, $over_time){
        $this->fullname = $fullname;
        $this->civil = $civil;
        $this->position = $position;
        $this->employment = $employment;
        $this->regular_hour = $regular_hour;
        $this->over_time = $over_time;
        
    }

    // getter
    public function getFullname()
    {
        return $this->fullname;
    }

    public function getCivil()
    {
        return $this->civil;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getEmployment()
    {
        return $this->employment;
    }

    public function getGross()
    {
        return $this->gross;
    }

    public function getNet()
    {
        return $this->net;
    }

    public function getDeduction()
    {
        return $this->deduction;
    }
    public function calRegular($fullname,$civil,$position,$employment,$regular_hour,$over_time){
        $rPay = $regular_hour / 8;
        if($position = "admin"){
            if($employment = "contractual"){
                $rPay = $rPay * 350;
            }elseif($employment = "probationary"){
                $rPay = $rPay * 400;
            }
            elseif($employment = "regular"){
                $rPay = $rPay * 500;
            }
        }elseif($position = "staff"){
            if($employment = "contractual"){
                $rPay = $rPay * 300;
            }elseif($employment = "probationary"){
                $rPay = $rPay * 350;
            }
            elseif($employment = "regular"){
                $rPay = $rPay * 400;
            }
    
        }

        $this->rpay = $rpay;
        return $rpay;

    }

    public function calOT($fullname,$civil,$position,$employment,$regular_hour,$over_time){
        $otPay = 0;
        if($position = "admin"){
            if($employment = "contractual"){
                $otPay = $over_time * 15;
            }elseif($employment = "probationary"){
                $otPay = $over_time * 30;
            }
            elseif($employment = "regular"){
                $otPay = $over_time * 40;
            }
        }elseif($position = "staff"){
            if($employment = "contractual"){
                $otPay = $over_time * 10;
            }elseif($employment = "probationary"){
                $otPay = $over_time * 25;
            }
            elseif($employment = "regular"){
                $otPay = $over_time * 30;
            }
    
        }
        $this->otPay = $otPay;
        return $otpay;
    }

    public function grossIncome($rPay,$otPay){
        $this->gross = $gross;

        $gross = $rPay + $otPay;

        return $gross;
    }

    

    public function calDetactions($fullname,$civil,$position,$employment,$regular_hour,$over_time){
        $deductions = 0;
        if($civil = "single"){
            if($gross>1000){
                $deductions = ($gross * 0.05) + 200;
            }elseif($gross<=1000){
                $deductions = ($gross * 0.05) + 200;
            }
        }elseif($civil = "married"){
            if($gross>1500){
                $deductions = ($gross * 0.03) + 75;
            }elseif($gross<=1500){
                $deductions = ($gross * 0.05) + 75;
            }
    
        }
        $this->deducation = $deducation;
        return $deductions;
    }

    
    public function netIncome($gross,$deductions){
        
        $net = $gross - $deductions;

        return $net;
    }






}



?>