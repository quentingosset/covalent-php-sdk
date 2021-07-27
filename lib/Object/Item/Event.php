<?php


namespace Covalent\Object\Item;



use Covalent\Object\Item\Nft\Traits\BlockHeight;
use Covalent\Object\Item\Nft\Traits\BlockSignedAt;
use Covalent\Object\Item\Nft\Traits\LogOffset;
use Covalent\Object\Item\Nft\Traits\RawLogData;
use Covalent\Object\Item\Nft\Traits\RawLogTopics;
use Covalent\Object\Item\Nft\Traits\RawLogTopicsBytes;
use Covalent\Object\Item\Nft\Traits\SenderAddress;
use Covalent\Object\Item\Nft\Traits\SenderAddressLabel;
use Covalent\Object\Item\Nft\Traits\SenderContractDecimal;
use Covalent\Object\Item\Nft\Traits\SenderContractTickerSymbol;
use Covalent\Object\Item\Nft\Traits\SenderLogoUrl;
use Covalent\Object\Item\Nft\Traits\SenderName;
use Covalent\Object\Item\Nft\Traits\TxHash;
use Covalent\Object\Item\Nft\Traits\TxOffset;

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