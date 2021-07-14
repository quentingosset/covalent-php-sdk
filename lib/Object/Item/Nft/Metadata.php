<?php


namespace Covalent\Object\Item\Nft;


use Covalent\Object\Item\Nft\Traits\Balance;
use Covalent\Object\Item\Nft\Traits\Balance24H;
use Covalent\Object\Item\Nft\Traits\ContractAddress;
use Covalent\Object\Item\Nft\Traits\ContractDecimal;
use Covalent\Object\Item\Nft\Traits\ContractName;
use Covalent\Object\Item\Nft\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Nft\Traits\LogoUrl;
use Covalent\Object\Item\Nft\Traits\NftData;
use Covalent\Object\Item\Nft\Traits\Quote;
use Covalent\Object\Item\Nft\Traits\QuoteRate;
use Covalent\Object\Item\Nft\Traits\SupportsErc;
use Covalent\Object\Item\Nft\Traits\Type;

class Metadata
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        Type,
        Balance,
        Balance24H,
        QuoteRate,
        Quote,
        NftData;
}