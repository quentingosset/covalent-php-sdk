<?php


namespace Covalent\Response;


use Covalent\Object\Data;

class Response
{
    /**
     * error field
     * @var bool|null
     */
    public ?bool $error;

    /**
     * error_message field
     * @var string|null
     */
    public ?string $error_message;

    /**
     * error_code field
     * @var int|null
     */
    public ?int $error_code;

    /**
     * data field
     * @var \Covalent\Object\Data|null
     */
    public $data;
}