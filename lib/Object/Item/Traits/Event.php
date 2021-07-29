<?php


namespace Covalent\Object\Item\Traits;


use Covalent\Object\Item\Decoded;

class Event
{
    use BlockSignedAt,
        BlockHeight,
        TxOffset,
        LogOffset,
        TxHash,
        RawLogTopicsBytes,
        RawLogTopics,
        SenderContractDecimal,
        SenderName,
        SenderContractTickerSymbol,
        SenderAddress,
        SenderAddressLabel,
        SenderLogoUrl,
        RawLogData;

    /**
     * decoded field
     * @var \Covalent\Object\Item\Decoded|null
     */
    public ?Decoded $decoded;
}