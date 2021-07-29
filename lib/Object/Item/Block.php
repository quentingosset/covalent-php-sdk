<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\Height;
use Covalent\Object\Item\Traits\SignedAt;

class Block
{
    use SignedAt,
        Height;
}