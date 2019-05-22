<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Document
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
    private $fileName;

    /**
     * @var string
     */
    private $url;

    /**
     * @var UploadedFile
     */
    private $documentFile;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return Document
     */
    public function setFileName($fileName): Document
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Document
     */
    public function setUrl(string $url): Document
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return UploadedFile
     */
    public function getDocumentFile()
    {
        return $this->documentFile;
    }

    /**
     * @param UploadedFile $documentFile
     *
     * @return Document
     */
    public function setDocumentFile(UploadedFile $documentFile): Document
    {
        $this->documentFile = $documentFile;

        return $this;
    }

    /**
     * @return DateTime
     *
     * @throws Exception
     */
    public function getCreatedAt(): DateTime
    {
        return  new DateTime($this->createdAt);
    }

    /**
     * @param DateTime $createdAt
     *
     * @return Document
     */
    public function setCreatedAt(DateTime $createdAt): Document
    {
        $this->createdAt = $createdAt->format('Y-m-d H:i:s');

        return $this;
    }

    /**
     * Document constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt =  (new DateTime())->format('Y-m-d H:i:s');
    }
}
