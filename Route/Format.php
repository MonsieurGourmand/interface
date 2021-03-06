<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use AppBundle\Entity\Filter\FormatFilter;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Format
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Format::class;
        $this->url = "/formats";
    }

    /**
     * @param array|FormatFilter $params
     * @param string $format
     *
     * @return array
     */
    public function getAll($params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     *
     * @return \monsieurgourmand\Bundle\InterfaceBundle\Model\Kit
     */
    public function get(int $id, array $params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Format $kit, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $kit, $this->entity, $format);

    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Format $kit, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $kit->getIdKit(), $kit, $this->entity, $format);
    }
}
