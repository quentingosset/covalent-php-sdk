<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\LatestBlockedSignedAt;
use Covalent\Object\Item\Traits\LatestBlockHeight;
use Covalent\Object\Item\Traits\SyncedBlockedSignedAt;
use Covalent\Object\Item\Traits\SyncedBlockHeight;

class Healt
{
    use SyncedBlockHeight,
        SyncedBlockedSignedAt,
        LatestBlockHeight,
        LatestBlockedSignedAt;
}