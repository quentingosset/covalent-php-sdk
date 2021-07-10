<?php


namespace Covalent\Object\Item;


class Portfolio
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
     * holdings field
     * @var Holding[]
     */
    public array $holdings;

}