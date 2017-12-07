<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Prospect;

use Mgd\Entity\Prospect;

class ProspectDownload
{
    public function __construct(Prospect $prospect)
    {
        $this->master = $prospect->getMaster();
        $this->entity = \Mgd\Entity\ProspectDownload::class;
        $this->url = "/prospects/" . $prospect->getId() . "/downloads";
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\Mgd\Entity\ProspectDownload $download,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$download,$this->entity,$format);
    }

    public function put(\Mgd\Entity\ProspectDownload $download,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$download->getIdDownload(),$download,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\ProspectDownload $download)
    {
        return $this->master->remove($this->url,$download->getIdDownload());
    }
}