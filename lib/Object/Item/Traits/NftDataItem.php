<?php


namespace Covalent\Object\Item\Traits;


class NftDataItem
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
     * @var NftExternalDataItem
     */
    public NftExternalDataItem $external_data;
}