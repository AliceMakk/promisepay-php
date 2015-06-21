<?php
namespace PromisePay\DataObjects;
/**
 * Class Card
 * @package PromisePay\DataObjects
 */
class Card
{
    /**
     * @var
     */
    private $_type;
    /**
     * @var
     */
    private $_fullName;
    /**
     * @var
     */
    private $_number;
    /**
     * @var
     */
    private $_expMonth;
    /**
     * @var
     */
    private $_expYear;
    /**
     * @var
     */
    private $_CVV;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getCVV()
    {
        return $this->_CVV;
    }

    /**
     * @param mixed $CVV
     */
    public function setCVV($CVV)
    {
        $this->_CVV = $CVV;
    }

    /**
     * @return mixed
     */
    public function getExpMonth()
    {
        return $this->_expMonth;
    }

    /**
     * @param mixed $expMonth
     */
    public function setExpMonth($expMonth)
    {
        $this->_expMonth = $expMonth;
    }

    /**
     * @return mixed
     */
    public function getExpYear()
    {
        return $this->_expYear;
    }

    /**
     * @param mixed $expYear
     */
    public function setExpYear($expYear)
    {
        $this->_expYear = $expYear;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->_fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->_fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->_number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->_number = $number;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }


}