<?php


namespace Covalent\Object\Item\Traits\Nft;


use Covalent\Object\Item\Traits\Description;
use Covalent\Object\Item\Traits\ExternalUrl;
use Covalent\Object\Item\Traits\Image;
use Covalent\Object\Item\Traits\Name;
use Covalent\Object\Item\Traits\Owner;

class ExternalData
{
    use Name,
        Description,
        Image,
        ExternalUrl,
        Owner,
        Attributes;
}