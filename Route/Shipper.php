<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Shipper
{
    private $master;
    private $entity;
    private $url;

    /**
     * Shipper constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper::class;
        $this->url = '/shippers';
    }

    /**
     * @param array $params
     * @param string $format
     * @return array|false|string|void
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
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
     * @param \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper $shipper
     * @param string $format
     * @return array|false|string|void
     */
    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper $shipper, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $shipper, $this->entity, $format);
    }

    /**
     * @param \monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper $shipper
     * @param string $format
     * @return array|false|string|void
     */
    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper $shipper, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $shipper->getIdShipper(), $shipper, $this->entity, $format);
    }
}
