<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:04 PM
 */

namespace Mgd\Route;


class Prospect
{
    /** @var string */
    protected $url = "/prospects";

    /** @var string */
    protected $email;

    const FIRM_ALL = "ALL";

    /** @var string */
    protected $firm = null;

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Prospect::class;
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array("firm" => $this->firm);
        if(!empty($this->email))
            $params['email'] = $this->email;
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\Mgd\Entity\Prospect $prospect,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$prospect,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Prospect $prospect,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$prospect->getId(),$prospect,$this->entity,$format);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Prospect
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}