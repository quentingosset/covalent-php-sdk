<?php


namespace Covalent\Object\Item\Traits;


use Covalent\Object\Transaction\Event\Decoded\Param;

trait Params
{
    /**
     * params field
     * @var Param[]|null
     */
    public ?array $params;
}