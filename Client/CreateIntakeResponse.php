<?php

namespace Boxberry\Client;

use Boxberry\Client\Exceptions\BadResponseException;


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

    public function __construct(array $data)
    {
        if (isset($data['message'])) {
            $this->message = $data['message'];
        } else {
            throw new BadResponseException;
        }
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}