<?php


namespace Covalent\Response\Dex\Health;

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