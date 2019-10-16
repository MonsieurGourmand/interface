<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Kit;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Model\KitTechnicalForm;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class TechnicalForm
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class TechnicalForm
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = KitTechnicalForm::class;
        $this->url = "/kits/" . $kit->getIdKit() . "/technicalforms";
    }

    public function get(int $technicalFormId, $format = MGD::FORMAT_OBJECT): KitTechnicalForm
    {
        return $this->master->get($this->url, $technicalFormId, $this->entity, $format);
    }

    public function post(KitTechnicalForm $technicalForm, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $technicalForm, $this->entity, $format);
    }

    public function patch(KitTechnicalForm $technicalForm, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->patch($this->url, $technicalForm->getId(), $technicalForm, $this->entity, $format);
    }

    public function delete(int $technicalFormId)
    {
        return $this->master->remove($this->url, $technicalFormId);
    }
}
