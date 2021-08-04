<?php


namespace Covalent\Object\Portfolio;


use Covalent\Object\Item\Traits\QuoteRate;
use Covalent\Object\Item\Traits\Timestamp;
use Covalent\Object\Portfolio\Holding\Traits\Close;
use Covalent\Object\Portfolio\Holding\Traits\High;
use Covalent\Object\Portfolio\Holding\Traits\Low;
use Covalent\Object\Portfolio\Holding\Traits\Open;

class Holding
{
    use Timestamp,
        QuoteRate,
        Open,
        High,
        Low,
        Close;
}