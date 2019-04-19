<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Package;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Package;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Shipping
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Package $package)
    {
        $this->master = $package->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipping::class;
        $this->url = "/packages/" . $package->getIdPackage() . '/shippings';
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param $id
     * @param string $format
     * @return array|false|string|void
     */
    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    /**
     * @param \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipping $shipping
     * @param string $format
     * @return array|false|string|void
     */
    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Shipping $shipping, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $shipping, $this->entity, $format);
    }

    /**
     * @param \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipping $shipping
     * @param string $format
     * @return array|false|string|void
     */
    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Shipping $shipping, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $shipping->getIdShipping(), $shipping, $this->entity, $format);
    }

}
