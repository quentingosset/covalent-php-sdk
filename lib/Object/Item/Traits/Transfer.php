<?php


namespace Covalent\Object\Item\Traits;


class Transfer
{
    use BlockSignedAt,
        TxHash,
        FromAddress,
        FromAddressLabel,
        ToAddress,
        ToAddressLabel,
        ContractDecimal,
        ContractName,
        ContractTickerSymbol,
        ContractAddress,
        LogoUrl,
        TransferType,
        Delta,
        Balance,
        QuoteRate,
        DeltaQuote,
        BalanceQuote;
}