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
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Bill\BillDetail
     */
    public $billDetails;

    /**
     * @var BillDetail
     */
    private $activeBillDetail;

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

    /**
     * @return BillDetail
     */
    public function getActiveBillDetail()
    {
        return $this->activeBillDetail;
    }

    /**
     * @param BillDetail $activeBillDetail
     * @return Bill
     */
    public function setActiveBillDetail($activeBillDetail)
    {
        $this->activeBillDetail = $activeBillDetail;
        return $this;
    }


}
