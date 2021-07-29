<?php


namespace Covalent\Object\Item\Nft;


use Covalent\Object\Item\Traits\Balance;
use Covalent\Object\Item\Traits\Balance24H;
use Covalent\Object\Item\Traits\ContractAddress;
use Covalent\Object\Item\Traits\ContractDecimal;
use Covalent\Object\Item\Traits\ContractName;
use Covalent\Object\Item\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\Nft\Datas;
use Covalent\Object\Item\Traits\Quote;
use Covalent\Object\Item\Traits\QuoteRate;
use Covalent\Object\Item\Traits\SupportsErc;
use Covalent\Object\Item\Traits\Type;

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
        Datas;
}