<?php


namespace Covalent\Object\Item\Nft;

use Covalent\Object\Item\Traits\ContractAddress;
use Covalent\Object\Item\Traits\ContractDecimal;
use Covalent\Object\Item\Traits\ContractName;
use Covalent\Object\Item\Traits\ContractTickerSymbol;
use Covalent\Object\Item\Traits\LogoUrl;
use Covalent\Object\Item\Traits\Nft\Transactions;
use Covalent\Object\Item\Traits\SupportsErc;
use Covalent\Object\Item\Traits\Type;

class Transaction
{
    use ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        SupportsErc,
        LogoUrl,
        Type,
        Transactions;
}