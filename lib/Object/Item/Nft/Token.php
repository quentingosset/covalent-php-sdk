<?php


namespace Covalent\Object\Item\Nft;


use Covalent\Object\Item\Nft\Traits\ContractAddress;
use Covalent\Object\Item\Nft\Traits\ContractDecimal;
use Covalent\Object\Item\Nft\Traits\ContractName;
use Covalent\Object\Item\Nft\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Nft\Traits\LogoUrl;
use Covalent\Object\Item\Nft\Traits\SupportsErc;
use Covalent\Object\Item\Nft\Traits\TokenId;

class Token
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        TokenId;

}