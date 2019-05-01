<?php declare(strict_types=1);

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class RepositoryEvent
 * @package App\Event
 */
class RepositoryEvent extends Event
{
    /**
     * Collection of entities or single entity
     * @var
     */
    protected $data;
    /**
     * @var null
     */
    protected $action;

    /**
     * RepositoryEvent constructor.
     * @param object $data
     * @param null $action
     */
    function __construct($data, $action = null)
    {
        $this->data = $data;
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param null $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
}