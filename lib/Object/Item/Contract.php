<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ContractAddress;
use Covalent\Object\Item\Traits\ContractDecimal;
use Covalent\Object\Item\Traits\ContractName;
use Covalent\Object\Item\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Traits\EthereumMainetAddress;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\SupportsErc;

class Contract
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        EthereumMainetAddress;
}