<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\DexName;
use Covalent\Object\Item\Traits\Dt;
use Covalent\Object\Item\Traits\LiquidityQuote;
use Covalent\Object\Item\Traits\QuoteCurrency;

class LiquidityChart
{
    use DexName,
        ChainId,
        Dt,
        QuoteCurrency,
        LiquidityQuote;
}