<?php


namespace Covalent\Object;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\SyncedBlockHeight;
use Covalent\Object\Item\Traits\SyncedBlockSignedAt;

class ChainStatus
{
    use Name,
        ChainId,
        LogoUrl,
        SyncedBlockHeight,
        SyncedBlockSignedAt;
}