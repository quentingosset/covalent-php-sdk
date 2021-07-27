<?php


namespace Covalent\Object\Item;



use Covalent\Object\Item\Nft\Traits\Diff;
use Covalent\Object\Item\Nft\Traits\NextBalance;
use Covalent\Object\Item\Nft\Traits\NextBlockHeight;
use Covalent\Object\Item\Nft\Traits\PrevBalance;
use Covalent\Object\Item\Nft\Traits\PrevBlockHeight;
use Covalent\Object\Item\Nft\Traits\TokenHolder;

class HolderChange
{
    use TokenHolder,
        PrevBalance,
        PrevBlockheight,
        NextBalance,
        NextBlockHeight,
        Diff;
}