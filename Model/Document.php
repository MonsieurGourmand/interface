<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use Exception;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Document
 *
 * @Vich\Uploadable()
 */
class Document extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $documentFileName;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="document", fileNameProperty="documentFileName")
     */
    private $documentFile;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var Product
     */
    private $technicalFormProduct;

    /**
     * @var Product
     */
    private $pictureProduct;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDocumentFileName()
    {
        return $this->documentFileName;
    }

    /**
     * @param string $documentFileName
     *
     * @return Document
     */
    public function setDocumentFileName($documentFileName)
    {
        $this->documentFileName = $documentFileName;

        return $this;
    }

    /**
     * @return File
     */
    public function getDocumentFile()
    {
        return $this->documentFile;
    }

    /**
     * @param File $documentFile
     *
     * @return Document
     */
    public function setDocumentFile($documentFile)
    {
        $this->documentFile = $documentFile;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return Document
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Product
     */
    public function getTechnicalFormProduct()
    {
        return $this->technicalFormProduct;
    }

    /**
     * @param Product $technicalFormProduct
     *
     * @return Document
     */
    public function setTechnicalFormProduct(Product $technicalFormProduct)
    {
        $this->technicalFormProduct = $technicalFormProduct;

        return $this;
    }

    /**
     * @return Product
     */
    public function getPictureProduct()
    {
        return $this->pictureProduct;
    }

    /**
     * @param Product $pictureProduct
     *
     * @return Document
     */
    public function setPictureProduct(Product $pictureProduct)
    {
        $this->pictureProduct = $pictureProduct;

        return $this;
    }

    /**
     * Document constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }
}
