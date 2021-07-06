<?php


namespace Covalent\Response;


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
     * @var string|null
     */
    public ?string $error_code;

    /**
     * data field
     * @var \Covalent\Object\Data|null
     */
    public $data;
}