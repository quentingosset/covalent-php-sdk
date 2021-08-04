<?php


namespace Covalent\Object;


use Covalent\Object\Item\Traits\ContractAddress;
use Covalent\Object\Item\Traits\ContractDecimal;
use Covalent\Object\Item\Traits\ContractName;
use Covalent\Object\Item\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Traits\Holdings;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\SupportsErc;

class Portfolio
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        Holdings;
}