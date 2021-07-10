<?php


namespace Covalent\Object\Item;


class Balance
{
    /**
     * contract_decimals field
     * @var int
     */
    public int $contract_decimals;

    /**
     * contract_name field
     * @var string
     */
    public string $contract_name;

    /**
     * contract_ticker_symbol field
     * @var string
     */
    public string $contract_ticker_symbol;

    /**
     * contract_address field
     * @var string
     */
    public string $contract_address;

    /**
     * supports_erc field
     * @var string[]|null
     */
    public ?array $supports_erc;

    /**
     * logo_url field
     * @var string
     */
    public string $logo_url;

    /**
     * type field
     * @var string
     */
    public string $type;

    /**
     * balance field
     * @var int|null
     */
    public ?int $balance;

    /**
     * balance_24h field
     * @var int|null
     */
    public ?int $balance_24h;

    /**
     * quote_rate field
     * @var float|null
     */
    public ?float $quote_rate;

    /**
     * quote field
     * @var float|null
     */
    public ?float $quote;

    /**
     * nft_data field
     * @var string|null
     * TODO UPDATE TO A NFT_DATA OBJECT WHEN PARAMS IS UP
     */
    public ?string $nft_data;
}