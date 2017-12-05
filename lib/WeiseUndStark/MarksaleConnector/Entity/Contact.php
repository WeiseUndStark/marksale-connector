<?php

namespace WeiseUndStark\MarksaleConnector\Entity;

/**
 * Class Contact
 * @package WeiseUndStark\MarksaleConnector\Entity
 * @since 1.0
 */
final class Contact
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * Contact constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact
    {
        $this->firstName = $firstName;

        return $this;
    }
}