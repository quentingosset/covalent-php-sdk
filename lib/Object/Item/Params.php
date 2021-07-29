<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\DecodedBoolean;
use Covalent\Object\Item\Traits\Indexed;
use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\Type;
use Covalent\Object\Item\Traits\Value;

class Params
{
    use Name,
        Type,
        Indexed,
        DecodedBoolean,
        Value;
}