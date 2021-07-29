<?php


namespace Covalent\Object\Item\Traits\Nft;


use Covalent\Object\Item\Traits\Burned;
use Covalent\Object\Item\Traits\CreatedByAddress;
use Covalent\Object\Item\Traits\OriginalOwner;
use Covalent\Object\Item\Traits\Owner;
use Covalent\Object\Item\Traits\SupportsErc;
use Covalent\Object\Item\Traits\TokenBalance;
use Covalent\Object\Item\Traits\TokenId;
use Covalent\Object\Item\Traits\TokenPriceWei;
use Covalent\Object\Item\Traits\TokenQuoteRateEth;
use Covalent\Object\Item\Traits\TokenUrl;

class Data
{
    use TokenId,
        TokenBalance,
        TokenUrl,
        SupportsErc,
        TokenPriceWei,
        TokenQuoteRateEth,
        OriginalOwner,
        Owner,
        Burned,
        CreatedByAddress;

    /**
     * external_data field
     * @var \Covalent\Object\Item\Traits\Nft\ExternalData
     */
    public ExternalData $external_data;
}