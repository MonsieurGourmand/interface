<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Kit extends Master
{
    /**
     * @var integer
     */
    private $idKit;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $pax;

    /** @var integer */
    private $maxPax;

    /**
     * @var bool
     */
    private $fixedPax;

    /** @var float */
    private $productsExpenses;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\KitProduct
     */
    public $kitProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Format\Option
     */
    public $options;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Format\Event
     */
    public $events;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\AddKit
     */
    public $addKits;

    /**
     * @var KitTechnicalForm[]
     */
    private $technicalForms;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\TechnicalForm
     */
    public $technicalFormsRoute;

    /**
     * @var KitPicture[]
     */
    private $pictures;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\Picture
     */
    public $picturesRoute;

    /**
     * @return int
     */
    public function getIdKit(): ?int
    {
        return $this->idKit;
    }

    /**
     * @param int $idKit
     * @return Kit
     */
    public function setIdKit($idKit): Kit
    {
        $this->idKit = $idKit;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Kit
     */
    public function setTitle($title): Kit
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return Kit
     */
    public function setPax($pax): Kit
    {
        $this->pax = $pax;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPax(): ?int
    {
        return $this->maxPax;
    }

    /**
     * @param int $maxPax
     *
     * @return Kit
     */
    public function setMaxPax(?int $maxPax): Kit
    {
        $this->maxPax = $maxPax;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFixedPax(): ?bool
    {
        return $this->fixedPax;
    }

    /**
     * @param bool $fixedPax
     *
     * @return Kit
     */
    public function setFixedPax(bool $fixedPax): Kit
    {
        $this->fixedPax = $fixedPax;

        return $this;
    }

    /**
     * @return float
     */
    public function getProductsExpenses(): ?float
    {
        return $this->productsExpenses;
    }

    /**
     * @param float $productsExpenses
     *
     * @return Kit
     */
    public function setProductsExpenses(float $productsExpenses): Kit
    {
        $this->productsExpenses = $productsExpenses;

        return $this;
    }

    /**
     * @return KitTechnicalForm[]
     */
    public function getTechnicalForms(): array
    {
        return $this->technicalForms;
    }

    /**
     * @param KitTechnicalForm[] $kitTechnicalForms
     *
     * @return Kit
     */
    public function setTechnicalForms(array $kitTechnicalForms): Kit
    {
        $this->technicalForms = $kitTechnicalForms;

        return $this;
    }

    /**
     * @return KitPicture[]
     */
    public function getPictures(): array
    {
        return $this->pictures;
    }

    /**
     * @param KitPicture[] $kitPictures
     *
     * @return Kit
     */
    public function setPictures(array $kitPictures): Kit
    {
        $this->pictures = $kitPictures;

        return $this;
    }
}
