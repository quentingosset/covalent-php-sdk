<?php


namespace Covalent\Response\Traits;


trait Error
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
}