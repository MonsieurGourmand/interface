<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Bill extends Master
{
    /**
     * @var integer
     */
    private $idBill;

    /**
     * @var string
     */
    private $idFacturationPro;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Bill\BillDetails
     */
    public $billDetails;

    /**
     * @return int
     */
    public function getIdBill()
    {
        return $this->idBill;
    }

    /**
     * @param int $idBill
     * @return Bill
     */
    public function setIdBill($idBill)
    {
        $this->idBill = $idBill;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdFacturationPro()
    {
        return $this->idFacturationPro;
    }

    /**
     * @param string $idFacturationPro
     * @return Bill
     */
    public function setIdFacturationPro($idFacturationPro)
    {
        $this->idFacturationPro = $idFacturationPro;
        return $this;
    }
}
