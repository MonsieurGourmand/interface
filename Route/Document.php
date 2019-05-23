<?php


namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Document as DocumentModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Document
 */
class Document
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = DocumentModel::class;
        $this->url = '/documents';
    }

    public function post(UploadedFile $action, $format = MGD::FORMAT_OBJECT): DocumentModel
    {
        return $this->master->post($this->url, $action, $this->entity, $format, true);
    }
}
