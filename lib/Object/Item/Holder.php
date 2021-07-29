<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\Address;
use Covalent\Object\Item\Traits\Balance;
use Covalent\Object\Item\Traits\BlockHeight;
use Covalent\Object\Item\Traits\ContractAddress;
use Covalent\Object\Item\Traits\ContractDecimal;
use Covalent\Object\Item\Traits\ContractName;
use Covalent\Object\Item\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\SupportsErc;
use Covalent\Object\Item\Traits\TotalSupply;

class Holder
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        Address,
        Balance,
        TotalSupply,
        BlockHeight;
}