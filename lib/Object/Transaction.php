<?php


namespace Covalent\Object;


use Covalent\Object\Item\Traits\BlockHeight;
use Covalent\Object\Item\Traits\BlockSignedAt;
use Covalent\Object\Item\Traits\FromAddress;
use Covalent\Object\Item\Traits\FromAddressLabel;
use Covalent\Object\Item\Traits\GasOffered;
use Covalent\Object\Item\Traits\GasPrice;
use Covalent\Object\Item\Traits\GasQuote;
use Covalent\Object\Item\Traits\GasQuoteRate;
use Covalent\Object\Item\Traits\GasSpend;
use Covalent\Object\Item\Traits\LogEvents;
use Covalent\Object\Item\Traits\NftTransactionValue;
use Covalent\Object\Item\Traits\Successful;
use Covalent\Object\Item\Traits\ToAddress;
use Covalent\Object\Item\Traits\ToAddressLabel;
use Covalent\Object\Item\Traits\TxHash;
use Covalent\Object\Item\Traits\TxOffset;
use Covalent\Object\Item\Traits\ValueQuote;

class Transaction
{
    use BlockSignedAt,
        BlockHeight,
        TxHash,
        TxOffset,
        Successful,
        FromAddress,
        FromAddressLabel,
        ToAddress,
        ToAddressLabel,
        NftTransactionValue,
        ValueQuote,
        GasOffered,
        GasSpend,
        GasPrice,
        GasQuote,
        GasQuoteRate,
        LogEvents;
}