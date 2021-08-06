<?php


namespace Covalent\Object\Transaction\Event\Decoded;


use Covalent\Object\Item\Traits\DecodedBoolean;
use Covalent\Object\Item\Traits\Indexed;
use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\Type;
use Covalent\Object\Item\Traits\Value;

class Param
{
    use Name,
        Type,
        Indexed,
        DecodedBoolean,
        Value;
}