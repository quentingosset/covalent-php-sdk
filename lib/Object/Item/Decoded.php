<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\Signature;

class Decoded
{
    use Name,
        Signature;

    /**
     * decoded field
     * @var Params[]
     */
    public array $params;
}