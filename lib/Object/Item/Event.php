<?php


namespace Covalent\Object\Item;



use Covalent\Object\Item\Traits\BlockHeight;
use Covalent\Object\Item\Traits\BlockSignedAt;
use Covalent\Object\Item\Traits\LogOffset;
use Covalent\Object\Item\Traits\RawLogData;
use Covalent\Object\Item\Traits\RawLogTopics;
use Covalent\Object\Item\Traits\RawLogTopicsBytes;
use Covalent\Object\Item\Traits\SenderAddress;
use Covalent\Object\Item\Traits\SenderAddressLabel;
use Covalent\Object\Item\Traits\SenderContractDecimal;
use Covalent\Object\Item\Traits\SenderContractTickerSymbol;
use Covalent\Object\Item\Traits\SenderLogoUrl;
use Covalent\Object\Item\Traits\SenderName;
use Covalent\Object\Item\Traits\TxHash;
use Covalent\Object\Item\Traits\TxOffset;

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
     * @var Decoded
     */
    public Decoded $decoded;
}