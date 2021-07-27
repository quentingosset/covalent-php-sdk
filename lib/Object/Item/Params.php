<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Nft\Traits\DecodedBoolean;
use Covalent\Object\Item\Nft\Traits\Indexed;
use Covalent\Object\Item\Nft\Traits\Name;
use Covalent\Object\Item\Nft\Traits\Type;
use Covalent\Object\Item\Nft\Traits\Value;

class Params
{
    use Name,
        Type,
        Indexed,
        DecodedBoolean,
        Value;
}