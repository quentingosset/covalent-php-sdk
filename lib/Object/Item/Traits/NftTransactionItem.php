<?php


namespace Covalent\Object\Item\Traits;


class NftTransactionItem
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