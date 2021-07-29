<?php


namespace Covalent\Object\Item;


// TODO PARSING TRANSFERS
use Covalent\Object\Item\Traits\BlockHeight;
use Covalent\Object\Item\Traits\BlockSignedAt;
use Covalent\Object\Item\Traits\FromAddress;
use Covalent\Object\Item\Traits\FromAddressLabel;
use Covalent\Object\Item\Traits\GasOffered;
use Covalent\Object\Item\Traits\GasPrice;
use Covalent\Object\Item\Traits\GasQuote;
use Covalent\Object\Item\Traits\GasQuoteRate;
use Covalent\Object\Item\Traits\GasSpend;
use Covalent\Object\Item\Traits\Successful;
use Covalent\Object\Item\Traits\ToAddress;
use Covalent\Object\Item\Traits\ToAddressLabel;
use Covalent\Object\Item\Traits\TxHash;
use Covalent\Object\Item\Traits\TxOffset;
use Covalent\Object\Item\Traits\Value;
use Covalent\Object\Item\Traits\ValueQuote;

class Transfer
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
        Value,
        ValueQuote,
        GasOffered,
        GasSpend,
        GasPrice,
        GasQuote,
        GasQuoteRate;

    /**
     * transfers field
     * @var array|null
     * TODO NEED PARSE THIS OBJECT
     */
    public ?array $transfers;
}