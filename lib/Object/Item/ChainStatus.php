<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\SyncedBlockedSignedAt;
use Covalent\Object\Item\Traits\SyncedBlockHeight;

class ChainStatus
{
    use Name,
        ChainId,
        LogoUrl,
        SyncedBlockHeight,
        SyncedBlockedSignedAt;
}