<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\BillDetailInterface;

class BillDetail extends Master implements BillDetailInterface
{
    /**
     * @var integer
     */
    private $idBillDetail;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $amountVat;

    /**
     * @var string
     */
    private $wording;

    /**
     * @var string
     */
    private $supplier;

    /**
     * @var integer
     */
    private $category;

    /**
     * @var \DateTime
     *
     */
    private $created;

    /**
     * @var Bill
     */
    private $bill;


    /**
     * @var boolean
     */
    private $active;


    /**
     * @return int
     */
    public function getIdBillDetail()
    {
        return $this->idBillDetail;
    }

    /**
     * @param int $idBillDetail
     * @return BillDetail
     */
    public function setIdBillDetail($idBillDetail)
    {
        $this->idBillDetail = $idBillDetail;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return BillDetail
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return BillDetail
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return BillDetail
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return Bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * @param Bill $bill
     * @return BillDetail
     */
    public function setBill($bill)
    {
        $this->bill = $bill;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return BillDetail
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * @param string $wording
     * @return BillDetail
     */
    public function setWording($wording)
    {
        $this->wording = $wording;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountVat()
    {
        return $this->amountVat;
    }

    /**
     * @param float $amountVat
     * @return BillDetail
     */
    public function setAmountVat($amountVat)
    {
        $this->amountVat = $amountVat;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param string $supplier
     * @return BillDetail
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }
}
