<?php

namespace Mgd\Entity;

class Task extends Master
{
    /**
     * @var \Mgd\Route\Action\Task\Flux
     */
    public $fluxes;

    /**
     * @var integer
     *
     */
    private $idTask;

    /**
     * @var string
     *
     */
    private $startDate;

    /**
     * @var string
     *
     */
    private $endDate;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Action
     */
    private $action;

    /**
     * @return Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param Action $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return int
     */
    public function getIdTask()
    {
        return $this->idTask;
    }

    /**
     * @param int $idTask
     */
    public function setIdTask($idTask)
    {
        $this->idTask = $idTask;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
