<?php

namespace Boxberry\Client;


class CreateIntakeResponse
{
    /**
     * @var string
     */
    protected $message = null;

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}