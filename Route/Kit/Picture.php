<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Kit;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Model\KitPicture;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class Picture
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class Picture
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = KitPicture::class;
        $this->url = "/kits/" . $kit->getIdKit() . "/pictures";
    }

    public function get(int $pictureId, $format = MGD::FORMAT_OBJECT): KitPicture
    {
        return $this->master->get($this->url, $pictureId, $this->entity, $format);
    }

    public function post(KitPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $picture, $this->entity, $format);
    }

    public function patch(KitPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->patch($this->url, $picture->getId(), $picture, $this->entity, $format);
    }

    public function delete(int $pictureId)
    {
        return $this->master->remove($this->url, $pictureId);
    }
}
