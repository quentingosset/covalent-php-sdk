<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\DbSchemaName;
use Covalent\Object\Item\Traits\Label;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\Name;

class Chain
{
    use Name,
        ChainId,
        DbSchemaName,
        Label,
        LogoUrl;
}