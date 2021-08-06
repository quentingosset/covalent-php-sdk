<?php


namespace Covalent\Object\Dex;


use Covalent\Object\Item\Traits\LatestBlockedSignedAt;
use Covalent\Object\Item\Traits\LatestBlockHeight;
use Covalent\Object\Item\Traits\SyncedBlockHeight;
use Covalent\Object\Item\Traits\SyncedBlockSignedAt;

class Healt
{
    use SyncedBlockHeight,
        SyncedBlockSignedAt,
        LatestBlockHeight,
        LatestBlockedSignedAt;
}