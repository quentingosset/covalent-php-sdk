<?php


namespace Covalent\Response\Chain;

use Covalent\Object\Item\Traits\UpdatedAt;
use Covalent\Object\Traits\Pagination;
use Covalent\Response\Traits\Items;

class Data
{
    use
        UpdatedAt,
        Items,
        Pagination;
}