<?php


namespace Covalent\Object\Transaction\Event;


use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\Params;
use Covalent\Object\Item\Traits\Signature;

class Decoded
{
    use Name,
        Signature,
        Params;
}