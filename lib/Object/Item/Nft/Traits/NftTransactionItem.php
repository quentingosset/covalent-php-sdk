<?php


namespace Covalent\Object\Item\Nft\Traits;


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