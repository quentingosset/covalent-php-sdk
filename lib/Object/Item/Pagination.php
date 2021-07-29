<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\HasMore;
use Covalent\Object\Item\Traits\PageNumber;
use Covalent\Object\Item\Traits\PageSize;
use Covalent\Object\Item\Traits\TotalCount;

class Pagination
{
    use HasMore,
        PageNumber,
        PageSize,
        TotalCount;
}