<?php


namespace Covalent\Response;

use Covalent\Object\Item\Traits\Address;
use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\NextUpdateAt;
use Covalent\Object\Item\Traits\QuoteCurrency;
use Covalent\Object\Item\Traits\UpdatedAt;
use Covalent\Object\Pagination;
use Covalent\Response\Traits\Items;

class Portfolio
{
    use Address,
        UpdatedAt,
        NextUpdateAt,
        QuoteCurrency,
        ChainId,
        Items,
        Pagination;
}