<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\ProductInterface;

class Product extends Master implements ProductInterface
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $batches;

    /**
     * @var integer
     */
    private $pieces;

    /**
     * @var string
     */
    private $companyReference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $commercialName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $commercialDescription;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var integer
     */
    private $baseWeight;

    /**
     * @var integer
     */
    private $netWeight;

    /**
     * @var integer
     */
    private $baseNetWeight;

    /**
     * @var integer
     */
    private $quantityPurchase;

    /**
     * @var Product
     */
    private $purchaseProduct;

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var User
     */
    private $creator;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var boolean
     */
    private $dlcDisable;

    /**
     * @var boolean
     */
    private $archived;

    /**
     * @var DateTime
     */
    private $stoppedDate;

    /**
     * @var boolean
     */
    private $favorite;

    /**
     * @var integer
     */
    private $alert;

    /**
     * @var float
     */
    private $tax;

    /**
     * @var integer
     */
    private $baseAlert;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var float
     */
    private $productWeight;

    /**
     * @var float
     */
    private $negotiate;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var int
     */
    private $bookedQuantity;

    /**
     * @var int
     */
    private $pickedQuantity;

    /**
     * @var int
     */
    private $preparedQuantity;

    /**
     * @var int
     */
    private $availableQuantity;

    /**
     * @var int
     */
    private $quantityExpired;

    /**
     * @var boolean
     */
    private $inAlert;

    /**
     * @var float
     */
    private $unitPrice;

    /**
     * @var Price
     */
    private $activePrice;

    /**
     * @var Product
     */
    private $salesProducts;

    /**
     * @var string
     */
    private $ingredients;

    /**
     * @var integer
     */
    private $thawingDryTime;

    /**
     * @var integer
     */
    private $rate;

    /**
     * @var integer
     */
    private $thawingFreshTime;

    /**
     * @var integer
     */
    private $retentionTime;

    /**
     * @var Implementation[]
     */
    private $implementations;

    /**
     * @var string
     */
    private $implementationDetails;

    /**
     * @var Allergen[]
     */
    private $allergens;

    /**
     * @var Diet[]
     */
    private $diets;

    /**
     * @var Trace[]
     */
    private $traces;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\Price
     */
    public $prices;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\Channel
     */
    public $channels;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\Stock
     */
    public $stocks;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\PurchaseProduct
     */
    public $purchaseProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\EventProduct
     */
    public $eventProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\Document
     */
    public $documents;

    /**
     * @var integer
     */
    private $stockAlert;

    /**
     * @var Packaging
     */
    private $packaging;

    /**
     * @var boolean
     */
    private $cabane;

    /**
     * @var boolean
     */
    private $individual;

    /**
     * @var boolean
     */
    private $repackage;


    /**
     * @var Purpose[]
     */
    private $purposes;

    /**
     * @var boolean
     */
    private $deletable;

    private $pieceCost;

    private $pieceNegotiate;

    private $pieceNetWeight;

    /**
     * @var DateTime
     */
    private $shortestDlc;

    /**
     * @var boolean
     *
     */
    private $allergensStatus;

    /**
     * @var boolean
     *
     */
    private $tracesStatus;

    /**
     * @var boolean
     *
     */
    private $dietsStatus;

    /**
     * @var ProductTechnicalForm[]
     */
    private $productTechnicalForms;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\TechnicalForm
     */
    public $productTechnicalFormsRoute;

    /**
     * @var ProductPicture[]
     */
    private $productPictures;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Product\Picture
     */
    public $productPicturesRoute;

    /**
     * @var string
     */
    private $zone;

    /**
     * @var boolean
     */
    private $ecoFriendly;

    /**
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     * @return Product
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatches()
    {
        return $this->batches;
    }

    /**
     * @param int $batches
     * @return Product
     */
    public function setBatches($batches)
    {
        $this->batches = $batches;
        return $this;
    }

    /**
     * @return int
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     * @return Product
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyReference()
    {
        return $this->companyReference;
    }

    /**
     * @param string $companyReference
     * @return Product
     */
    public function setCompanyReference($companyReference)
    {
        $this->companyReference = $companyReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseWeight()
    {
        return $this->baseWeight;
    }

    /**
     * @param int $baseWeight
     * @return Product
     */
    public function setBaseWeight($baseWeight)
    {
        $this->baseWeight = $baseWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPurchase()
    {
        return $this->quantityPurchase;
    }

    /**
     * @param int $quantityPurchase
     * @return Product
     */
    public function setQuantityPurchase($quantityPurchase)
    {
        $this->quantityPurchase = $quantityPurchase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseProduct()
    {
        return $this->purchaseProduct;
    }

    /**
     * @param mixed $purchaseProduct
     * @return Product
     */
    public function setPurchaseProduct($purchaseProduct)
    {
        $this->purchaseProduct = $purchaseProduct;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param mixed $supplier
     * @return Product
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDlcDisable()
    {
        return $this->dlcDisable;
    }

    /**
     * @param mixed $dlcDisable
     * @return Product
     */
    public function setDlcDisable($dlcDisable)
    {
        $this->dlcDisable = $dlcDisable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param mixed $archived
     * @return Product
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * @return int
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * @param int $alert
     * @return Product
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return Product
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseAlert()
    {
        return $this->baseAlert;
    }

    /**
     * @param int $baseAlert
     * @return Product
     */
    public function setBaseAlert($baseAlert)
    {
        $this->baseAlert = $baseAlert;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * @param float $productWeight
     * @return Product
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getNegotiate()
    {
        return $this->negotiate;
    }

    /**
     * @param float $negotiate
     * @return Product
     */
    public function setNegotiate($negotiate)
    {
        $this->negotiate = $negotiate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInAlert()
    {
        return $this->inAlert;
    }

    /**
     * @param bool $inAlert
     * @return Product
     */
    public function setInAlert($inAlert)
    {
        $this->inAlert = $inAlert;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityExpired()
    {
        return $this->quantityExpired;
    }

    /**
     * @param int $quantityExpired
     * @return Product
     */
    public function setQuantityExpired($quantityExpired)
    {
        $this->quantityExpired = $quantityExpired;
        return $this;
    }

    /**
     * @return Price
     */
    public function getActivePrice()
    {
        return $this->activePrice;
    }

    /**
     * @param Price $activePrice
     * @return Product
     */
    public function setActivePrice($activePrice)
    {
        $this->activePrice = $activePrice;
        return $this;
    }

    /**
     * @return Product
     */
    public function getSalesProducts()
    {
        return $this->salesProducts;
    }


    public function setSalesProducts($salesProducts)
    {
        $this->salesProducts = $salesProducts;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Product
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockAlert()
    {
        return $this->stockAlert;
    }

    /**
     * @param int $stockAlert
     * @return Product
     */
    public function setStockAlert($stockAlert)
    {
        $this->stockAlert = $stockAlert;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFavorite()
    {
        return $this->favorite;
    }

    /**
     * @param bool $favorite
     * @return Product
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return Product
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param string $ingredients
     * @return Product
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCabane()
    {
        return $this->cabane;
    }

    /**
     * @param bool $cabane
     * @return Product
     */
    public function setCabane($cabane)
    {
        $this->cabane = $cabane;
        return $this;
    }

    /**
     * @return int
     */
    public function getThawingDryTime()
    {
        return $this->thawingDryTime;
    }

    /**
     * @param int $thawingDryTime
     * @return Product
     */
    public function setThawingDryTime($thawingDryTime)
    {
        $this->thawingDryTime = $thawingDryTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getThawingFreshTime()
    {
        return $this->thawingFreshTime;
    }

    /**
     * @param int $thawingFreshTime
     * @return Product
     */
    public function setThawingFreshTime($thawingFreshTime)
    {
        $this->thawingFreshTime = $thawingFreshTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetentionTime()
    {
        return $this->retentionTime;
    }

    /**
     * @param int $retentionTime
     * @return Product
     */
    public function setRetentionTime($retentionTime)
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * @return Implementation[]
     */
    public function getImplementations()
    {
        return $this->implementations;
    }

    /**
     * @param int $implementations
     * @return Product
     */
    public function setImplementations($implementations)
    {
        $this->implementations = $implementations;
        return $this;
    }


    /**
     * @return string
     */
    public function getImplementationDetails()
    {
        return $this->implementationDetails;
    }

    /**
     * @param string $implementationDetails
     * @return Product
     */
    public function setImplementationDetails($implementationDetails)
    {
        $this->implementationDetails = $implementationDetails;
        return $this;
    }

    /**
     * @return Allergen[]
     */
    public function getAllergens()
    {
        return $this->allergens;
    }

    /**
     * @param Allergen $allergens
     * @return Product
     */
    public function setAllergens($allergens)
    {
        $this->allergens = $allergens;
        return $this;
    }

    /**
     * @return Diet[]
     */
    public function getDiets()
    {
        return $this->diets;
    }

    /**
     * @param Diet $diets
     * @return Product
     */
    public function setDiets($diets)
    {
        $this->diets = $diets;
        return $this;
    }

    /**
     * @return Trace[]
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * @param Trace $traces
     */
    public function setTraces($traces)
    {
        $this->traces = $traces;
    }

    /**
     * @return int
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param int $netWeight
     * @return Product
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseNetWeight()
    {
        return $this->baseNetWeight;
    }

    /**
     * @param int $baseNetWeight
     * @return Product
     */
    public function setBaseNetWeight($baseNetWeight)
    {
        $this->baseNetWeight = $baseNetWeight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeletable()
    {
        return $this->deletable;
    }

    /**
     * @param bool $deletable
     * @return Product
     */
    public function setDeletable($deletable)
    {
        $this->deletable = $deletable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIndividual()
    {
        return $this->individual;
    }

    /**
     * @param bool $individual
     * @return Product
     */
    public function setIndividual($individual)
    {
        $this->individual = $individual;
        return $this;
    }

    /**
     * @return Purpose[]
     */
    public function getPurposes()
    {
        return $this->purposes;
    }

    /**
     * @param Purpose[] $purposes
     * @return Product
     */
    public function setPurposes($purposes)
    {
        $this->purposes = $purposes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPieceCost()
    {
        return $this->pieceCost;
    }

    /**
     * @param mixed $pieceCost
     * @return Product
     */
    public function setPieceCost($pieceCost)
    {
        $this->pieceCost = $pieceCost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPieceNegotiate()
    {
        return $this->pieceNegotiate;
    }

    /**
     * @param mixed $pieceNegotiate
     * @return Product
     */
    public function setPieceNegotiate($pieceNegotiate)
    {
        $this->pieceNegotiate = $pieceNegotiate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPieceNetWeight()
    {
        return $this->pieceNetWeight;
    }

    /**
     * @param mixed $pieceNetWeight
     * @return Product
     */
    public function setPieceNetWeight($pieceNetWeight)
    {
        $this->pieceNetWeight = $pieceNetWeight;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getShortestDlc()
    {
        return $this->shortestDlc;
    }

    /**
     * @return bool
     */
    public function isAllergensStatus()
    {
        return $this->allergensStatus;
    }

    /**
     * @param bool $allergensStatus
     * @return Product
     */
    public function setAllergensStatus($allergensStatus)
    {
        $this->allergensStatus = $allergensStatus;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTracesStatus()
    {
        return $this->tracesStatus;
    }

    /**
     * @param bool $tracesStatus
     * @return Product
     */
    public function setTracesStatus($tracesStatus)
    {
        $this->tracesStatus = $tracesStatus;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDietsStatus()
    {
        return $this->dietsStatus;
    }

    /**
     * @param bool $dietsStatus
     * @return Product
     */
    public function setDietsStatus($dietsStatus)
    {
        $this->dietsStatus = $dietsStatus;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStoppedDate()
    {
        return $this->stoppedDate;
    }

    /**
     * @param DateTime $stoppedDate
     * @return Product
     */
    public function setStoppedDate($stoppedDate)
    {
        $this->stoppedDate = $stoppedDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRepackage()
    {
        return $this->repackage;
    }

    /**
     * @param bool $repackage
     * @return Product
     */
    public function setRepackage($repackage)
    {
        $this->repackage = $repackage;
        return $this;
    }

    /**
     * @return Packaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * @param Packaging $packaging
     * @return Product
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * @return User
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param User $creator
     * @return Product
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     * @return Product
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get technical forms
     *
     * @return ProductTechnicalForm[]
     */
    public function getProductTechnicalForms(): array
    {
        return $this->productTechnicalForms;
    }

    /**
     * @param ProductTechnicalForm[] $productTechnicalForms
     *
     * @return Product
     */
    public function setProductTechnicalForms(array $productTechnicalForms): Product
    {
        $this->productTechnicalForms = $productTechnicalForms;

        return $this;
    }

    /**
     * Get pictures
     *
     * @return ProductPicture[]
     */
    public function getProductPictures(): array
    {
        return $this->productPictures;
    }

    /**
     * @param ProductPicture[] $productPictures
     *
     * @return Product
     */
    public function setProductPictures(array $productPictures): Product
    {
        $this->productPictures = $productPictures;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommercialName(): ?string
    {
        return $this->commercialName;
    }

    /**
     * @param string|null $commercialName
     * @return Product
     */
    public function setCommercialName(?string $commercialName): Product
    {
        $this->commercialName = $commercialName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommercialDescription(): ?string
    {
        return $this->commercialDescription;
    }

    /**
     * @param string|null $commercialDescription
     * @return Product
     */
    public function setCommercialDescription(?string $commercialDescription): Product
    {
        $this->commercialDescription = $commercialDescription;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZone(): ?string
    {
        return $this->zone;
    }

    /**
     * @param string $zone
     * @return Product
     */
    public function setZone(string $zone): Product
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEcoFriendly(): ?bool
    {
        return $this->ecoFriendly;
    }

    /**
     * @param bool $ecoFriendly
     * @return Product
     */
    public function setEcoFriendly(bool $ecoFriendly): Product
    {
        $this->ecoFriendly = $ecoFriendly;

        return $this;
    }

    /**
     * @return int
     */
    public function getBookedQuantity(): ?int
    {
        return $this->bookedQuantity;
    }

    /**
     * @param int $bookedQuantity
     * @return Product
     */
    public function setBookedQuantity(int $bookedQuantity): Product
    {
        $this->bookedQuantity = $bookedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickedQuantity(): ?int
    {
        return $this->pickedQuantity;
    }

    /**
     * @param int $pickedQuantity
     * @return Product
     */
    public function setPickedQuantity(int $pickedQuantity): Product
    {
        $this->pickedQuantity = $pickedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreparedQuantity(): ?int
    {
        return $this->preparedQuantity;
    }

    /**
     * @param int $preparedQuantity
     * @return Product
     */
    public function setPreparedQuantity(int $preparedQuantity): Product
    {
        $this->preparedQuantity = $preparedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity(): ?int
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     * @return Product
     */
    public function setAvailableQuantity(int $availableQuantity): Product
    {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiredQuantity(): ?int
    {
        return $this->expiredQuantity;
    }

    /**
     * @param int $expiredQuantity
     * @return Product
     */
    public function setExpiredQuantity(int $expiredQuantity): Product
    {
        $this->expiredQuantity = $expiredQuantity;
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prices = new ArrayCollection();
        $this->salesProducts = new ArrayCollection();
        $this->archived = false;
        $this->favorite = false;
        $this->cabane = false;
        $this->productTechnicalForms = [];
        $this->productPictures = [];
    }
}
