<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\DexName;
use Covalent\Object\Item\Traits\Dt;
use Covalent\Object\Item\Traits\QuoteCurrency;
use Covalent\Object\Item\Traits\SwapCount24H;
use Covalent\Object\Item\Traits\VolumeQuote;

class VolumeChart
{
    use
        DexName,
        ChainId,
        Dt,
        QuoteCurrency,
        VolumeQuote,
        SwapCount24H;
}