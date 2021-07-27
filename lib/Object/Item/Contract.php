<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Nft\Traits\ContractAddress;
use Covalent\Object\Item\Nft\Traits\ContractDecimal;
use Covalent\Object\Item\Nft\Traits\ContractName;
use Covalent\Object\Item\Nft\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Nft\Traits\EthereumMainetAddress;
use Covalent\Object\Item\Nft\Traits\LogoUrl;
use Covalent\Object\Item\Nft\Traits\SupportsErc;

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