<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Nft\Traits\Name;
use Covalent\Object\Item\Nft\Traits\Signature;

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