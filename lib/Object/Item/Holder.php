<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Nft\Traits\Address;
use Covalent\Object\Item\Nft\Traits\BlockHeight;
use Covalent\Object\Item\Nft\Traits\ContractAddress;
use Covalent\Object\Item\Nft\Traits\ContractDecimal;
use Covalent\Object\Item\Nft\Traits\ContractName;
use Covalent\Object\Item\Nft\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Nft\Traits\Balance;
use Covalent\Object\Item\Nft\Traits\LogoUrl;
use Covalent\Object\Item\Nft\Traits\SupportsErc;
use Covalent\Object\Item\Nft\Traits\TotalSupply;

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