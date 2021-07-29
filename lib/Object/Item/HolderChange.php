<?php


namespace Covalent\Object\Item;



use Covalent\Object\Item\Traits\Diff;
use Covalent\Object\Item\Traits\NextBalance;
use Covalent\Object\Item\Traits\NextBlockHeight;
use Covalent\Object\Item\Traits\PrevBalance;
use Covalent\Object\Item\Traits\PrevBlockHeight;
use Covalent\Object\Item\Traits\TokenHolder;

class HolderChange
{
    use TokenHolder,
        PrevBalance,
        PrevBlockheight,
        NextBalance,
        NextBlockHeight,
        Diff;
}